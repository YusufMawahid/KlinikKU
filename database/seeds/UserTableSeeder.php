<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Yusuf Mawahid',
            'medrec' => '8273',
            'username'=>'master',
            'password' => bcrypt('master123'),
            'roles'  => 'master',
            'alamat' => 'Jln.SMEA 6',
            ]);

        DB::table('users')->insert([
            'nama' => 'Yusuf',
            'medrec' => '9773',
            'username'=>'kasir',
            'password' => bcrypt('kasir123'),
            'roles'  => 'kasir',
            'alamat' => 'Jln Jalan Jalan',
            ]);
        DB::table('users')->insert([
            'medrec' => '1022',
            'nama' => 'Wahid',
            'username'=>'dokter',
            'password' => bcrypt('dokter123'),
            'roles'  => 'dokter',
            'alamat' => 'Jln Jalan Jalan',
            ]);
    }
}
