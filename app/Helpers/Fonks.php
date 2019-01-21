<?php
/**
 * Created by PhpStorm.
 * User: Savas
 * Date: 15.01.2019
 * Time: 15:55
 */

namespace App\Helpers;


class Fonks
{
    public static function add($veri, $model, $return='bos'){

        unset($veri['_token']);

        $ekle=$model::create($veri->all());
        if($return!='bos'){
            return redirect($return);
        }
        else {

            if($ekle) {
                return $ekle->id;
            } else {
                return 0;
            }  }


    }
    public static function addToken($veri, $model, $return='bos'){

        $ekle=$model::create($veri->all());
        if($return!='bos'){
            return redirect($return);
        }
        else {

            if($ekle) {
                return $ekle->id;
            } else {
                return 0;
            }  }


    }

    public static function  update($veri, $model, $id, $return='bos'){



        unset($veri['_token']);

        $guncelle=$model::find($id)->update($veri->all());

        if($return!='bos'){
            return redirect($return);
        }
        else {

            if($guncelle){
                return $id;
            }

            else {

                return 0;
            }
        }

    }


    public static function delete($id, $model,$return){

        $sil=$model::find($id)->delete();
        return redirect($return);

    }
}