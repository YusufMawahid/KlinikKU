<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Persalinan;
use App\Tarif;
use App\Obat;
use App\InputKeluhan;
use App\KalenderKB;
// 
use View;
Use DB;
use Validator;
use PDF;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use App\User;
// 
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    public function master_view()
    {
        if (Auth::user()->roles != "master") {
            return redirect('dokter');
        }
    $obat = count(Obat::get());
    $tarif = count(Tarif::get());
    $master = count(User::where('roles','master')->get());
    $dokter = count(User::where('roles','dokter')->get());
    $kasir = count(User::where('roles','kasir')->get());
    $pasien = count(User::where('roles','pasien')->get());

      return view('master.beranda')->with('obat', $obat)
                                     ->with('tarif', $tarif)
                                     ->with('master', $master)
                                     ->with('kasir', $kasir)
                                     ->with('pasien', $pasien)
                                     ->with('dokter', $dokter);


    }

    public function kasir_view()
    {
        $user = User::where('roles',NULL)->paginate(5);
        if (Auth::user()->roles != "kasir") {
            return redirect('dokter');
        }
        $antrian_pasien = User::where('roles',NULL)->paginate(5);
        $pilih_dokter = User::where('roles','dokter')->get();
        // Antrian Pasien
        $antrian_pasien_kasir = User::where('username',NULL)->where('roles','pasien')->paginate(10);

    return view('kasir.kasir',['user'=>$user,
                                'pilih_dokter'=>$pilih_dokter,
                                'antrian_pasien'=>$antrian_pasien,
                                'antrian_pasien_kasir'=>$antrian_pasien_kasir]);
    }

    

    public function tarif_view()
    {
        return view('master.tarif.data',['tarif' => Tarif::paginate(10)]);
    }
    public function stok_obat()
    {   
        // $obat = array('_');
        // print_r(str_replace("_", "", $obat[0]));
        
        return view('master.obat.stok',['obat' => Obat::paginate(10),
                                        'tarif' => '', 
                                        'master' => '', 
                                        'dokter' => '',
                                        'kasir' => '',
                                        'pasien' => '']);

        
    }

    public function add_obat(Request $r)
    {
        $obat = new \App\Obat;
        $obat->nama_obat_merk = $r->input('nama_obat_merk');
        $obat->nama_obat_generik = $r->input('nama_obat_generik');
        $obat->golongan_obat = $r->input('golongan_obat');
        $obat->tanggal_beli = $r->input('tanggal_beli');
        $obat->tanggal_kadaluarsa = $r->input('tanggal_kadaluarsa');
        $obat->harga_beli = $r->input('harga_beli');
        $obat->harga_jual = $r->input('harga_jual');
        $obat->jumlah = $r->input('jumlah');
        $obat->save();
        return redirect('stok_obat');
        // return redirect('stok_obat');
    }   

    public function edit_obat($id)
    {
        return view('master.obat.edit',['obat' => Obat::find($id)]);
    }   

    public function postedit_obat(Request $r)
    {
        $this->validate($r, [
        'nama_obat_merk' => 'required',
        'nama_obat_generik' => 'required',
        'golongan_obat' => 'required',
        'tanggal_beli' => 'required',
        'tanggal_kadaluarsa' => 'required',
        'harga_beli' => 'required',
        'harga_jual' => 'required',
        'jumlah' => 'required',
        ]);


        $obat = Obat::find($r->id);
        $obat->nama_obat_merk = $r->nama_obat_merk;
        $obat->nama_obat_generik = $r->nama_obat_generik;
        $obat->golongan_obat = $r->golongan_obat;
        $obat->tanggal_beli = $r->tanggal_beli;
        $obat->tanggal_kadaluarsa = $r->tanggal_kadaluarsa;
        $obat->harga_beli = $r->harga_beli;
        $obat->harga_jual = $r->harga_jual;
        $obat->jumlah = $r->jumlah;
        $obat->save();
        return redirect('stok_obat');
    }
    public function tambah_obat($id)
    {
        return view('master.obat.tambah',['tambah'=> Obat::find($id)]);
    }

    public function posttambah_obat($id,Request $r)
    {
        // return str_replace('_', '', $r->input('jumlah'));
        $obat = Obat::find($id);
        // dd($obat->jumlah);
        $obat->jumlah = $obat->jumlah + str_replace('_', '', $r->input('jumlah'));
        $obat->save();
        return redirect('stok_obat');
    }

    public function delete_obat($id)
    {
        Obat::destroy($id); 
        return redirect('stok_obat');
    }

    public function mencari_pasien(Request $r)
    {
        $medrec = User::where('roles','pasien')->paginate(10);
        $user = User::where('nama','like','%'.$r->Input('search').'%')->where('roles', NULL)->paginate(10);
        return view('kasir.kasir',['user'=> $user,
                                    'medrec'=> $medrec]);

    }

    public function tambah_pasien(Request $r)
    {
        $pasien = new User;
        $pasien->medrec = $r->input('medrec');
        $pasien->nama = $r->input('nama');
        $pasien->tgl_lahir = $r->input('tgl_lahir');
        $pasien->jenis_kelamin = $r->input('jenis_kelamin');
        $pasien->alamat = $r->input('alamat');
        $pasien->no_hp = $r->input('no_hp');
        $pasien->pekerjaan = $r->input('pekerjaan');
        $pasien->jenis_pendaftaran = $r->input('jenis_pendaftaran');
        $pasien->dokter = $r->input('dokter');
        $pasien->roles = $r->input('roles');
        $pasien->save();
        return redirect('kasir');
    }

    public function delete_pasien($id)
    {
        User::destroy($id); 
        return redirect('kasir');
    }

    public function add_tarif(Request $r)
    {
        $tarif = new Tarif;
        $tarif->nama_tarif = $r->Input('nama_tarif');
        $tarif->klinik = $r->Input('klinik');
        $tarif->dokter = $r->Input('dokter');
        $tarif->asisten = $r->Input('asisten');
        $tarif->bhp = $r->Input('bhp');
        $tarif->jumlah_total = $r->Input('jumlah_total');
        $tarif->save();
        return redirect('tarif');
    }

    public function delete_tarif($id)
    {
        Tarif::destroy($id);
        return redirect('tarif');
    }

    public function edit_tarif($id)
    {
        return view('master.tarif.edit_tarif',['edit_tarif'=> Tarif::find($id)]);    
    }

    public function post_edit_tarif(Request $r)
    {
        $this->validate($r, [
        'nama_tarif' => 'required',
        'klinik' => 'required',
        'dokter' => 'required',
        'asisten' => 'required',
        'bhp' => 'required',
        'jumlah_total' => 'required',
        ]);


        $tarif = Tarif::find($r->id);
        $tarif->nama_tarif = $r->nama_tarif;
        $tarif->klinik = $r->klinik;
        $tarif->dokter = $r->dokter;
        $tarif->asisten = $r->asisten;
        $tarif->bhp = $r->bhp;
        $tarif->jumlah_total = $r->jumlah_total;
        $tarif->save();
        return redirect('tarif');
    }

    public function buku_register()
    {
        $user = User::where('roles',NULL)->paginate(10);
        $inputkeluhan = InputKeluhan::paginate(10);
        $obat = Obat::where('nama_obat_merk','!=',NULL)->first();
        $tarif = Tarif::where('dokter','!=',NULL)->paginate(10);
        $jumlah_total = Tarif::where('jumlah_total','!=',NULL)->paginate(10);
        return view('master.pasien.buku_register',['buku_register'=>$user,
                                                   'input_keluhan' => $inputkeluhan,
                                                   'obat' => $obat,
                                                   'tarif' => $tarif,
                                                   'jumlah_total' => $jumlah_total]);
    }

    public function mencari_obat(Request $r)
    {
        $obat = Obat::where('nama_obat_merk','like','%'.$r->Input('search').'%')
        ->orWhere('nama_obat_generik','like','%'.$r->Input('search').'%')
        ->orWhere('golongan_obat','like','%'.$r->Input('search').'%')->paginate(10);
        return view('master.obat.stok',['obat'=> $obat]);
    }
    
    public function list_obat()
    {
        $list_obat = Obat::paginate(10);
        return view('kasir.list_obat.list_obat',['list_obat'=> $list_obat]);
    }

    public function list_obat_dokter()
    {
        $list_obat = Obat::paginate(10);
        return view('dokter.list_obat_dokter.list_obat_dokter',['list_obat_dokter'=> $list_obat]);
    }

    public function list_tarif()
    {
        $list_tarif = Tarif::paginate(10);
        return view('kasir.list_tarif.list_tarif',['list_tarif'=> $list_tarif]);
    }

    public function list_tarif_dokter()
    {
        $list_tarif = Tarif::paginate(10);
        return view('dokter.list_tarif_dokter.list_tarif_dokter',['list_tarif'=> $list_tarif]);
    }

    public function pemeriksaan_post(Request $r)
    {
        $pasien = User::where('roles','pasien')
                        ->where('nama','!=', NULL)
                        ->where('id', $r->input('id'))->first();
        $input_keluhan = new InputKeluhan;
        $input_keluhan->S = $pasien->nama;
        $input_keluhan->N = "sudah_periksa";
        $input_keluhan->N = $r->N;
        $input_keluhan->R = $r->R;
        $input_keluhan->keluhan_utama = $r->keluhan_utama;
        $input_keluhan->anamnesis = $r->anamnesis;
        $input_keluhan->pemeriksaan_fisik = $r->pemeriksaan_fisik;
        $input_keluhan->hasil_penunjang = $r->hasil_penunjang;
        $input_keluhan->tindakan = $r->tindakan;
        $input_keluhan->saran = $r->saran;
        $input_keluhan->save();
        $pasien->delete();
        return redirect('dokter');
    }
    
    public function pemeriksaan_get($id)
    {
    $pasien = User::where('roles','pasien')->where('id',$id)->first();
    $pemeriksaan = InputKeluhan::paginate(10);
    $tarif = Tarif::paginate(10);
    $obat = Obat::orderBy('nama_obat_merk','asc')->get();
    return view('dokter.pemeriksaan',['inputkeluhan'=> $pemeriksaan,
                                      'tarif' => $tarif,
                                      'data' => $pasien,
                                      'obat' => $obat]);
    }
    public function user()
    {
        $user = User::where('medrec','!=', NULL)->where('username', '!=', NULL)->paginate(10);
        return view('master.user.user',['user'=>$user]);
    }
    

    public function dashboard($id)
    {
    $pasien = User::where('roles','pasien')->where('id',$id)->get();
    $taksiran_persalinan = User::where('roles','pasien')->where('id',$id)->get();
    return view('dokter.dashboard',['pasien' => $pasien,
                                    'taksiran_persalinan'=> $taksiran_persalinan]);
    }

    public function add_user(Request $r)
    {
        $user  = new User;
        $user->username = $r->username;
        $user->medrec = $r->medrec;
        $user->password = bcrypt($r->password);
        $user->nama = $r->nama;
        $user->alamat = $r->alamat;
        $user->tgl_lahir = $r->tgl_lahir;
        $user->no_hp = $r->no_hp;
        $user->roles = $r->roles;
        $user->save();
        return redirect('user');
    }

    public function delete_user($id)
    {
        
        User::destroy($id); 
        return redirect('user');
    }

    public function edit_user($id)
    {
        return view('master.user.edit_user',['edit_user' => User::find($id)
                                            ,'edit_roles' => User::paginate(10)]);
    }

    public function edit_user_post(Request $r)
    {
        $this->validate($r, [
        'username' => 'required',
        'medrec' => 'required',
        'password' => 'required',
        'nama' => 'required',
        'tgl_lahir' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'roles' => 'required',
        ]);


        $obat = User::find($r->id);
        $obat->username = $r->username;
        $obat->medrec = $r->medrec;
        $obat->password = bcrypt($r->password);
        $obat->nama = $r->nama;
        $obat->tgl_lahir = $r->tgl_lahir;
        $obat->alamat = $r->alamat;
        $obat->no_hp = $r->no_hp;
        $obat->roles = $r->roles;
        $obat->save();
        return redirect('user');
    
    }

    public function daftar_pasien_kasir(Request $r)
    {
        $daftar = User::find($r->input('id'));
        $daftar->roles = 'pasien';
        $daftar->dokter = $r->input('roles');
        $daftar->save();
        return redirect('kasir');
    }

    public function kalkulator_dosis()
    {
        return view('dokter.kalkulator.kalkulator_dosis');
    }

    public function kalender_kb()
    {

        $kalender_kb = User::where('roles','pasien')->where('id','!=',NULL)->paginate(10);
        return view('dokter.kalender_kb.kalender_kb',['kalender_kb'=> $kalender_kb]);
    }

    public function taksiran_persalinan()
    {
    $taksiran_persalinan = User::where('roles','pasien')->where('id', '!=', NULL)->paginate(10);
    $pasien = User::where('roles','pasien')->where('id','!=',NULL)->paginate(10);
    $pemeriksaan = InputKeluhan::paginate(10);
    $tarif = Tarif::paginate(10);
    $obat = Obat::orderBy('nama_obat_merk','asc')->get();
    return view('dokter.taksiran_persalinan.taksiran_persalinan',
            ['inputkeluhan'=> $pemeriksaan,
            'tarif' => $tarif,
            'pasien' => $pasien,
            'obat' => $obat,
            'taksiran_persalinan'=> $taksiran_persalinan]);
    
    }

    public function tambah_taksiran_persalinan(Request $r)
    {
        $persalinan  = new Persalinan;
        $persalinan->tanggal_hpht = $r->tanggal_hpht;
        $persalinan->taksiran_persalinan = $r->taksiran_persalinan;
        $persalinan->save();
        return redirect('selesai_periksa');
    }

    public function tambah_kalender_kb(Request $r)
    {
        $kalender_kb = new KalenderKB;
        $kalender_kb->pilihan_suntik = $r->pilihan_suntik;
        $kalender_kb->tanggal_suntik = $r->tanggal_suntik;
        $kalender_kb->tanggal_kembali = $r->tanggal_kembali;
        $kalender_kb->save();
        return redirect('selesai_periksa');
    }

    public function dokter_view()
    {
        if (Auth::user()->roles != "dokter") {
            return redirect('dokter');
        }
    $pemeriksaan = InputKeluhan::paginate(10);
    $persalinan = Persalinan::paginate(10);
    $kalender_kb = KalenderKB::paginate(10);
    $pasien = User::where('roles','pasien')->where('id','!=',NULL)->paginate(10);
    $sudah_periksa = InputKeluhan::where('N','sudah_periksa')
                    ->where('S','!=',NULL)
                    ->where('id','!=',NULL)->paginate(5);
    return view('dokter.daftar_pasien',['inputkeluhan'=> $pemeriksaan,
                                      'tarif' => Tarif::paginate(10),
                                      'pasien'=> $pasien,
                                      'pemeriksaan'=> $pemeriksaan,
                                      'persalinan' => $persalinan,
                                      'kalender_kb' => $kalender_kb,
                                      'sudah_periksa' => $sudah_periksa]);
    }
    
    public function periksa()
    {
    $antrian_pasien_kasir = User::where('username',NULL)->where('roles','pasien')->paginate(10);
    }

    public function delete_pasien_keluhan($id)
    {
        InputKeluhan::destroy($id); 
        return redirect('dokter');
    }
}