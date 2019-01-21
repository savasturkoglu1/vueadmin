<?php
/**
 * Created by PhpStorm.
 * User: Savas
 * Date: 25.12.2018
 * Time: 15:22
 */
namespace App\Helpers;

class Form
{
             public static function Input($label, $name, $id, $plc,$value='',$type='text',$attr=''){


                 return '<div class="form-group row">
                                        <label class="col-md-3 label-control" for="'.$id.'">'.$label.'</label>
                                        <div class="col-md-9">
                                            <input type="'.$type.'" '.$attr.' name="'.$name.'" id="'.$id.'" class="form-control" placeholder="'.$plc.'" value="'.$value.'">
                                        </div>
                                    </div>';
             }


            public static function InputA($label, $name, $id, $plc, $feed = array()){
                        if(!array_key_exists('value', $feed)) { $value = ''; } else {$value = $feed['value'];}
                        if(!array_key_exists('type', $feed)){ $type = 'text'; } else  {$type = $feed['type'];}
                         if(!array_key_exists('attr', $feed)){ $attr = ''; } else  {$attr = $feed['attr'];}

                return '<div class="form-group row">
                                                <label class="col-md-3 label-control" for="'.$id.'">'.$label.'</label>
                                                <div class="col-md-9">
                                                    <input type="'.$type.'" '.$attr.' name="'.$name.'" id="'.$id.'" class="form-control" placeholder="'.$plc.'" value="'.$value.'">
                                                </div>
                                            </div>';
            }



    public static function Text($label, $name, $id, $plc,$value='',$type='text',$attr='', $row=3){


                    return                       '<div class="form-group row">
                                                    <label class="col-md-3 label-control" for="'.$id.'">'.$label.'</label>
                                                    <div class="col-md-9">
                                                        
                                                        <textarea class="form-control"  rows="'.$row.'"  '.$attr.' name="'.$name.'" id="'.$id.'" 
                                                        class="form-control" placeholder="'.$plc.'">'.$value.'</textarea>
                                                    </div>
                                                </div>';
                }


             public static function Select($label, $name, $id, $plc, $secenek=[],$attr=''){

                 $opts='';

                 for($ii=0; $ii<count($secenek); $ii++) {

                     $op='<option>'.$secenek[$ii].'</option>';

                     $opts .= $op;

                 }

                 return         '<div class="form-group row">
                                        <label class="col-md-3  '.$attr.' label-control" for="hide_search">'.$label.'</label>
                                        <div class="col-md-9">
                                            <select class="hide-search form-control" id="'.$id.'" name="'.$name.'">
                                             <option disabled selected>'.$plc.'</option>
                                                 '.$opts.'
                                            </select>
                                        </div>
                                    </div>';
             }




             public static function Radio($label, $name, $id, $plc,$value='',$type='text',$attr=''){

                 return '<div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4">'.$label.'</label>
                                    <div class="col-md-9">
                                        <div class="row">

                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="ta_durum" class="md_check" checked id="input-radio-11">
                                                    <label for="input-radio-11">Aktif</label>
                                                </fieldset>

                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="ta_durum"  class="md_check"  id="input-radio-11">
                                                    <label for="input-radio-11">Pasif</label>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>
                                </div>';
             }


             public static function Delete($link, $formId){


                 return '
                        <form action="'.$link.'" method="POST" id="'.$formId.'">
                            '.csrf_field().'
                           '.method_field('DELETE').'
                        </form>';
             }


             public static function Status($status){
                 if(array_key_exists('name', $status)) { $name = $status['name']; } else {$name = '';}
                 if(array_key_exists('checked', $status)) {
                     if($status['checked'] == 'Aktif') {
                         $aChech = 'checked';
                         $pCheck = '';
                     } else {
                         $aChech = '';
                         $pCheck = 'checked';
                     }
                 } else {
                     $aChech = 'checked';
                     $pCheck = '';
                 }

                 return '<div class="form-group row">
                                    <label class="col-md-3 label-control" for="eventRegInput4" >Durum</label>
                                    <div class="col-md-9">
                                        <div class="row">

                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="'.$name.'" class="md_check"  '.$aChech.' id="input-radio-11" value="Aktif">
                                                    <label for="input-radio-11">Aktif</label>
                                                </fieldset>

                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <fieldset>
                                                    <input type="radio" name="'.$name.'" '.$pCheck.' class="md_check"  id="" value="Pasif">
                                                    <label for="input-radio-11">Pasif</label>
                                                </fieldset>

                                            </div>
                                        </div>
                                    </div>
                                </div>';
             }


        public static function generateForm($action, $id , $staus=[], $edit='', $feeds= Array(), $file=''){

                 if(count($staus)>0){
                     $durumFeed= self::Status($staus);
                 } else {
                     $durumFeed = '';
                 }

                 if($file !=''){
                     $enc = 'multipart/form-data';
                 } else {
                     $enc ='';
                 }

                 if($edit !==''){
                      $method = method_field('PATCH');
                 } else {
                     $method = ''; }

                 $rows ='';
                 foreach ($feeds as $feed) {
                     $rows .= self::getFields($feed);
                 }


               return '<form class="form form-horizontal form-bordered" enctype="'.$enc.'" method="POST" action="'.$action.'" id="'.$id.'">
                            '.csrf_field().'
                             '.$method.'
                            <div class="form-actions center">
                             '.$durumFeed.'
                                '.$rows.'
                                <button type="submit" class="btn btn-success">
                                    <i class="la la-check-square-o"></i> Ekle
                                </button>
                            </div>
                        </form>';
        }


        static function getFields($feed){

            if(!array_key_exists('value', $feed)) { $value = ''; } else {$value = $feed['value'];}
            if(!array_key_exists('type', $feed)){ $type = 'text'; } else  {$type = $feed['type'];}
            if(!array_key_exists('attr', $feed)){ $attr = ''; } else  {$attr = $feed['attr'];}
            if(array_key_exists('id', $feed)) { $id=$feed['id']; } else { $id =''; }
            if(array_key_exists('plc', $feed)) { $plc = $feed['plc']; } else { $plc= ''; }
            if(array_key_exists('name', $feed)) { $name = $feed['name']; } else { $name= ''; }
            if(array_key_exists('label', $feed)) { $label = $feed['label']; } else { $label= ''; }
            if(array_key_exists('secenek', $feed)) { $secenek= $feed['secenek']; } else { $secenek= []; }
            if(array_key_exists('row', $feed)) { $row= $feed['row']; } else { $row= 3; }

            if(array_key_exists('inputType', $feed)) { $inputType= $feed['inputType']; } else { $inputType ='input'; }

                switch ($inputType){
                    case 'input': return self::Input($label, $name, $id, $plc,$value,$type,$attr); break;
                    case 'select': return self::Select($label, $name, $id, $plc, $secenek,$attr); break;
                    case 'text': return self::Text($label, $name, $id, $plc,$value,$type,$attr, $row); break;
                    default: return self::Input($label, $name, $id, $plc,$value,$type,$attr); break;
                }

        }



}