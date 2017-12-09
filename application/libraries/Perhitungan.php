<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perhitungan
 *
 * @author IT01
 */
class Perhitungan {
    //put your code here
    var $ci;
    public function __construct() {
       $ci = &get_instance();
    }
    
    public function perhitunganAlpha($data, $alpha){
        $hasil = array();
        $hasil[0] = $data[0];
        $hasil[1] = $data[0];
        for ($i = 2; $i < count($data); $i++) {
            $peramalan = $alpha * $data[$i - 1] + (1-$alpha) * $hasil[$i - 1];
            array_push($hasil, $peramalan);
        }
        $total_data = count($data);
        $peramalanBulanSelanjutnya = $alpha * $data[$total_data - 1] + (1-$alpha) * $hasil[$total_data - 1];
        array_push($hasil, $peramalanBulanSelanjutnya);
        return $hasil;
    }
    
    public function nilaiError($dataAwal, $peramalanAlpha){
        $hasil = array();
        for($i = 0; $i < count($dataAwal); $i++){
            array_push($hasil, $peramalanAlpha[$i]-$dataAwal[$i]);
        }
        return $hasil;
    }
    
    public function nilaiErrorKuadrat($data){
        $hasil = array();
        for($i = 0; $i < count($data); $i++){
            array_push($hasil, pow($data[$i], 2));
        }
        return $hasil;
    }
    
    public function permalanTahunDepan($data, $alpa){
        $hasil = array();
        $hasil[0] = $data[0];
        $hasil[1] = $data[0];
        for ($i = 2; $i < count($data); $i++) {
            $peramalan = $alpha * $data[$i - 1] + (1-$alpha) * $hasil[$i - 1];
            array_push($hasil, $peramalan);
        }
        return $hasil; 
    }
}
