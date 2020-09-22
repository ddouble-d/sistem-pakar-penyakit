<?php

/**
 * PERHITUNGAN DEMPSTER SHAFER
 */
function DS_get_best($hasil){
    $num = 0;
    $max = array();
    foreach($hasil as $val){
        if($val['value'] > $num){
            $num = $val['value'];
            $max = $val;
        }
    }
    return $max;
}

function DS_hitung($unik, $data){
    $arr = array();
    $kosong = DS_total_nilai('', $data);
    foreach($unik as $key => $val){
        if($key!=''){
            $arr_x = DS_total_nilai($key, $data);
            $arr[] = array(
                'arr' => $val,
                'name' => $key,
                'value' =>  array_sum($arr_x) / (1 - array_sum($kosong)),
                'desc' => '( ' . implode(' + ', array_round($arr_x)) . ' ) / ( 1 - [ ' . implode(' + ', array_round($kosong)) . ' ] )',
            );
        }
    }
    //print_r($kosong);
    return $arr;
}

function DS_total_nilai($name, $data){
    $arr = array();
    foreach($data as $val){
        if($val['name']==$name){
            $arr[]=$val['value'];
        }
    }
    return $arr;
}

function array_round($arr){
    $arr_round = array();
    foreach($arr as $key => $val){
        $arr_round[$key] = round($val, 3);
    }
    return $arr_round;
}

?>
