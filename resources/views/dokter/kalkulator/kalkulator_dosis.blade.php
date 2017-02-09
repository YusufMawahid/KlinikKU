@extends('dokter.dashboard')
@section('content')
  <div class="row">
<div class="col-md-13 col-sm-13 col-xs-12">
    <div class="x_panel">
      <form class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-4">
            <div class="input-group">
              <input class="weight_lb form-control wtA" name="weight_lb" type="text"> <span class="input-group-addon">lbs</span>
            </div>
          </div>
          </div>
          <div class="col-sm-4">
            <div class="input-group">
              <input class="weight_kg form-control wtB" name="weight_kg" type="text"> <span class="input-group-addon">kgs</span>
            </div>
          </div>
          <button class="btn lbkg" type="button" style="display:none;"></button>
          <button class="btn kglb" type="button" style="display:none;"></button>
          <div class="wt_error" style="display:none;color:red;">Invalid - Please Enter a number</div>
          <div class="btn-group">
            <button class="resetme btn  btn-default btn-sm" type="button"><i class="fa fa-refresh fa-lg"></i> Reset</button>
            <button id="printMe4" onclick="window.print();" data-rel="drug" class="btn  btn-default btn-sm" type="button"><i class="fa fa-print fa-lg"></i> Print</button>
          </div>
      </form>
     
 <div class="row">
    <div class="col-md-12">
      <table data-toggle-column="first" id="dosechart" class="table table-condensed footable bordered table-striped">
        <caption><b>Anesthetic Drugs</b></caption>
        <thead>
          <tr class="printThis">
            <th data-breakpoints="sm">Drug</th>
            <th data-breakpoints="xs sm">Concentration</th>
            <th data-breakpoints="xs sm">Dosage</th>
            <th class="success">Dose</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Atropine</td>
            <td>0.54 mg/ml</td>
            <td>0.02 mg/kg</td>
            <td> <span id="atroDose3" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Glycopyrrolate</td>
            <td>0.2 mg/ml</td>
            <td>0.01 mg/kg</td>
            <td> <span id="glycoDose3" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Acepromazine</td>
            <td>10 mg/ml</td>
            <td><div class="col-sm-3">
                <input id="ace" class="drug" name="ace" type="text" data-id="#aceDose" data-conc="10" value="0.125">
              </div>mg/kg</td>
            <td> <span id="aceDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Ketamine</td>
            <td>100 mg/ml</td>
            <td><div class="col-sm-3">
                <input id="keto" class="drug" name="keto" type="text" data-id="#ketDose" data-conc="100" value="5">
              </div>mg/kg</td>
            <td> <span id="ketDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Diazepam</td>
            <td>5 mg/ml</td>
            <td><div class="col-sm-3">
                <input id="diazo" class="drug" name="diazo" type="text" data-id="#valDose" data-conc="5" value="0.25">
              </div>mg/kg</td>
            <td> <span id="valDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Butorphanol</td>
            <td>10 mg/ml</td>
            <td><div class="col-sm-3">
                <input id="buto" class="drug" name="buto" type="text" data-id="#butDose" data-conc="10" value="0.2">
              </div>mg/kg</td>
            <td> <span id="butDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Morphine</td>
            <td>15 mg/ml</td>
            <td>
              <div class="col-sm-3">
                <input id="morpho" class="drug" name="morpho" type="text" data-id="#morphoDose" data-conc="15" value="0.2">
              </div>mg/kg</td>
            <td> <span id="morphoDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Hydromorphone</td>
            <td>2 mg/ml</td>
            <td>
              <div class="col-sm-3">
                <input id="hydro" class="drug" name="hydro" type="text" data-id="#hydroDose" data-conc="2" value="0.05">
              </div>mg/kg</td>
            <td> <span id="hydroDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Buprenorphine</td>
            <td>
              <select id="concF1" class="span1 selectpicker show-tick data-width=" 35px "">
                <option>0.6</option>
                <option>0.3</option>
              </select>mg/ml</td>
            <td><div class="col-sm-3">
                <input id="bupo" class="drug" name="bupo" type="text" data-id="#buprDoseF1" data-conc="5" value="0.02">
              </div>mg/kg</td>
            <td> <span id="buprDoseF1" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Propofol</td>
            <td>10 mg/ml</td>
            <td>
              <div class="col-sm-3">
                <input id="propo" class="drug" name="propo" type="text" data-id="#propoDose" data-conc="10" value="3">
              </div>mg/kg</td>
            <td> <span id="propoDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Dexdomitor</td>
            <td>
              <select id="concDex" class="span1 selectpicker show-tick data-width=" 35px "">
                <option>0.5</option>
                <option>0.1</option>
              </select>mg/ml</td>
            <td>
              <div class="col-sm-3">
                <input id="dexdo" class="" name="dexdo" type="text" data-id="#dexDose" data-conc="0.5" value="15">
              </div>mg/kg</td>
            <td> <span id="dexDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Antisedan</td>
            <td>5 mg/ml</td>
            <td>----</td>
            <td> <span id="antiDose" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Carprofen</td>
            <td>50 mg/ml</td>
            <td><div class="col-sm-3">
                <input id="carpo" class="drug" name="carpo" type="text" data-id="#carprofen" data-conc="50" value="2.2">
              </div>mg/kg</td>
            <td> <span id="carprofen" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
          <tr>
            <td>Meloxicam</td>
            <td>5 mg/ml</td>
            <td><div class="col-sm-3">
                <input id="meloxi" class="drug" name="meloxi" type="text" data-id="#metacam" data-conc="5" value="0.2">
              </div>mg/kg</td>
            <td> <span id="metacam" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
           <tr>
            <td> <input class="form-control" id="thedrug" type="text" placeholder="Drug Name"></td>
            <td> <div class="col-sm-6"> <input class="form-control" id="themg" name="themg" type="text" placeholder="Drug Conc"></div> mg/ml</td>
            <td><div class="col-sm-6">
                <input class="form-control" id="thedose" name="thedose" type="text" placeholder="Drug Dose">
              </div>mg/kg</td>
            <td> <span id="theml" class="label label-success number" data-original-title="" title=""></span>
            </td>
          </tr>
        </tbody>
      </table>


      <table class="table table-striped table-condensed">
        <thead>
          <tr>

            <th>IV Fluid Rate</th>

          </tr>
        </thead>
        <tbody>
          <tr>


            <td>1x Maintenance <span id="main1Dose3" class="label label-info number"></span></td>

            <td>1.5x Maint <span id="main15Dose3" class="label label-info number"></span></td>

            <td>2x Maintenance <span id="main2Dose3" class="label label-info number"></span></td>
          </tr>

        </tbody>
      </table>
   </div>
    </div>
    
    
    
    
    
   <h3>Feline Dose Calculator</h3> 
    <div class="row">
      <div class="col-md-12">
      
             

      
      <button id="test" class="btn btn-success" type="button"  data-placement="top" style="display:none;">Calculate</button>
      <div class="wt_error"style="display:none;color:red;">Invalid - Please Enter a number</div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6" >
        <b>Dexdomitor/Ketamine/Butorphenol Dosing</b>  
        <table class="table table-condensed footable bordered table-striped" >
          <thead>
            <tr>
              <th></th>
              <th></th>
             <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr data-original-title="Dose/kg of body weight">
              <td><div class="col-sm-3">Dexdomitor</div></td>
              <td><div class="col-sm-3"><select id="concDexF" class="span1 selectpicker show-tick" >
                <option>0.5</option>
                <option>0.1</option>
                </select>mg/ml</div>
              </td>
           <td><div class="col-sm-3">
                <input id="dexdoF" class="" name="dexdoF" type="text" data-id="#dexDoseF" data-conc="0.5" value="15">
              </div>mg/kg
              </td>
            <td> <div class="col-sm-3"><span id="dexDoseF" class="label label-success number" data-original-title="" title=""></span></div>
            </td>
              
              
          
              
            </tr>
            <tr data-toggle="true" data-placement="top" title="" data-original-title="Volume in ml to give of each drug">
              <td><div class="col-sm-3">Ketamine</div></td>
              <td><div class="col-sm-3">100 mg/ml</div></td>
            <td><div class="col-sm-3">
                <input id="ketoF" class="drug" name="ketoF" type="text" data-id="#ketDoseF" data-conc="100" value="5">
              </div>mg/kg</td>
            <td> <div class="col-sm-3"><span id="ketDoseF" class="label label-success number" data-original-title="" title=""></span></div>
            </td>
              
           
            </tr>
            <tr data-toggle="true" data-placement="top" title="" data-original-title="Volume in ml to give of each drug">
              <td><div class="col-sm-3">Butorphanol</div></td>
            <td><div class="col-sm-3">10 mg/ml</td>
            <td><div class="col-sm-3">
                <input id="butoF" class="drug" name="butoF" type="text" data-id="#butDoseF" data-conc="10" value="0.2">
              </div>mg/kg</td>
            <td> <div class="col-sm-3"><span id="butDoseF" class="label label-success number" data-original-title="" title=""></span>
            </td>
              
             
            </tr>
            <tr class="success">
           
              <td> <div class="col-sm-3">Total Volume </div>
            </td>
              <td></td>
               <td></td>
            <td><div class="col-sm-3"><span data-toggle="true" data-placement="bottom" title="" data-original-title="Total ml of Dexdomitor, Ketamine and Butorphanol to give" id="magicdose" class="label label-info number"></span></div> </td>
            </tr>
            <tr>
           <td>Antisedan</td>
            <td>5 mg/ml</td>
            <td>----</td>
            <td> <div class="col-sm-3"><span id="antiDoseF" class="label label-success number" data-original-title="" title=""></span></div>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6">
        <b>Buprenorphine Dosing</b>
        <table class="table table-condensed">
          <thead>
            <tr class="warning">
              
              <th></th>
  <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
             <td><div class="col-sm-3">Buprenorphine</div></td>
            <td>
              <div class="col-sm-3"><select id="concF2" class="span1 selectpicker show-tick data-width=" 35px "">
                <option>0.6</option>
                <option>0.3</option>
              </select>mg/ml</div></td>
            <td><div class="col-sm-3">
                <input id="bupoF2" class="drug" name="bupoF2" type="text" data-id="#buprDoseF2" data-conc="5" value="0.02">
             </div> mg/kg<td>
            <td> <div class="col-sm-3"><span id="buprDoseF2" class="label label-success number" data-original-title="" title=""></span></div>
            </td>
            </tr>
            <tr>
              <td> <div class="col-sm-3">Buprenorphine SR</div></td>
                 <td><div class="col-sm-3"><select id="concBSR" class="span1 selectpicker show-tick">
     <option value="3">3</option>
      <option value="10">10</option>
                   </select> mg/cc</div></td>
              <td><div class="col-sm-3">0.12 mg/kg 
                </div>SQ Only</td>
               <td></td>
               <td>
                 <div class="col-sm-3"><span id="buprDoseSR" class="label label-success number" data-original-title="" title=""></span></div>
                </td>
            </tr>
          </tbody>
        </table>
      </div>
      </div> 
  </div>
  </div>
    </div>
</div>

@endsection