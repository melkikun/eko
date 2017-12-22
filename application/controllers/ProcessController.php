<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class ProcessController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        //inisialisasi helper form dan url
        $this->load->helper(array('form', 'url'));
        //ambil library excel
        $this->load->library('excel');
        //ambil library peramalan
        $this->load->library('perhitungan');
//        ambil model datamodel
        $this->load->model("DataModel");
        ;
    }

    public function index() {
        $this->load->view('upload_form', array('error' => ' '));
    }

    public function getData() {
        //proses data 1
        $total1 = array();
        $file1 = $_FILES['data1']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file1);
        $excelObj = $excelReader->load($file1);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah1 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah1 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah1 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah1 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah1 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah1 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($total1, $jumlah1);
        }

        //proses data 2
        $total2 = array();
        $file2 = $_FILES['data2']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file2);
        $excelObj = $excelReader->load($file2);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah2 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah2 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah2 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah2 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah2 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah2 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($total2, $jumlah2);
        }

        //proses data 3
        $total3 = array();
        $file3 = $_FILES['data3']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file3);
        $excelObj = $excelReader->load($file3);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah3 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah3 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah3 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah3 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah3 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah3 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($total3, $jumlah3);
        }

        //proses data 4
        $total4 = array();
        $file4 = $_FILES['data4']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file4);
        $excelObj = $excelReader->load($file4);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah4 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah4 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah4 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah4 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah4 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah4 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($total4, $jumlah4);
        }

        //proses data 5
        $total5 = array();
        $file5 = $_FILES['data5']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file5);
        $excelObj = $excelReader->load($file5);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah5 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah5 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah5 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah5 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah5 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah5 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($total5, $jumlah5);
        }

        $data = array_merge($total1, $total2, $total3, $total4, $total5);
        $alpha01 = $this->perhitungan->perhitunganAlpha($data, 0.1);
        $alpha02 = $this->perhitungan->perhitunganAlpha($data, 0.2);
        $alpha03 = $this->perhitungan->perhitunganAlpha($data, 0.3);
        $alpha04 = $this->perhitungan->perhitunganAlpha($data, 0.4);
        $alpha05 = $this->perhitungan->perhitunganAlpha($data, 0.5);
        $alpha06 = $this->perhitungan->perhitunganAlpha($data, 0.6);
        $alpha07 = $this->perhitungan->perhitunganAlpha($data, 0.7);
        $alpha08 = $this->perhitungan->perhitunganAlpha($data, 0.8);
        $alpha09 = $this->perhitungan->perhitunganAlpha($data, 0.9);

        $error01 = $this->perhitungan->nilaiError($data, $alpha01);
        $error02 = $this->perhitungan->nilaiError($data, $alpha02);
        $error03 = $this->perhitungan->nilaiError($data, $alpha03);
        $error04 = $this->perhitungan->nilaiError($data, $alpha04);
        $error05 = $this->perhitungan->nilaiError($data, $alpha05);
        $error06 = $this->perhitungan->nilaiError($data, $alpha06);
        $error07 = $this->perhitungan->nilaiError($data, $alpha07);
        $error08 = $this->perhitungan->nilaiError($data, $alpha08);
        $error09 = $this->perhitungan->nilaiError($data, $alpha09);

        $errorKuadrat01 = $this->perhitungan->nilaiErrorKuadrat($error01);
        $errorKuadrat02 = $this->perhitungan->nilaiErrorKuadrat($error02);
        $errorKuadrat03 = $this->perhitungan->nilaiErrorKuadrat($error03);
        $errorKuadrat04 = $this->perhitungan->nilaiErrorKuadrat($error04);
        $errorKuadrat05 = $this->perhitungan->nilaiErrorKuadrat($error05);
        $errorKuadrat06 = $this->perhitungan->nilaiErrorKuadrat($error06);
        $errorKuadrat07 = $this->perhitungan->nilaiErrorKuadrat($error07);
        $errorKuadrat08 = $this->perhitungan->nilaiErrorKuadrat($error08);
        $errorKuadrat09 = $this->perhitungan->nilaiErrorKuadrat($error09);

        $summaryError01 = array_sum($errorKuadrat01);
        $summaryError02 = array_sum($errorKuadrat02);
        $summaryError03 = array_sum($errorKuadrat03);
        $summaryError04 = array_sum($errorKuadrat04);
        $summaryError05 = array_sum($errorKuadrat05);
        $summaryError06 = array_sum($errorKuadrat06);
        $summaryError07 = array_sum($errorKuadrat07);
        $summaryError08 = array_sum($errorKuadrat08);
        $summaryError09 = array_sum($errorKuadrat09);


        $alpha = array(
            "alpha01" => $alpha01,
            "alpha02" => $alpha02,
            "alpha03" => $alpha03,
            "alpha04" => $alpha04,
            "alpha05" => $alpha05,
            "alpha06" => $alpha06,
            "alpha07" => $alpha07,
            "alpha08" => $alpha08,
            "alpha09" => $alpha09
        );

        $error = array(
            "error01" => $error01,
            "error02" => $error02,
            "error03" => $error03,
            "error04" => $error04,
            "error05" => $error05,
            "error06" => $error06,
            "error07" => $error07,
            "error08" => $error08,
            "error09" => $error09
        );

        $errorKuadrat = array(
            "ek01" => $errorKuadrat01,
            "ek02" => $errorKuadrat02,
            "ek03" => $errorKuadrat03,
            "ek04" => $errorKuadrat04,
            "ek05" => $errorKuadrat05,
            "ek06" => $errorKuadrat06,
            "ek07" => $errorKuadrat07,
            "ek08" => $errorKuadrat08,
            "ek09" => $errorKuadrat09,
        );

        $summaryError = array(
            "se01" => $summaryError01,
            "se02" => $summaryError02,
            "se03" => $summaryError03,
            "se04" => $summaryError04,
            "se05" => $summaryError05,
            "se06" => $summaryError06,
            "se07" => $summaryError07,
            "se08" => $summaryError08,
            "se09" => $summaryError09
        );

        $mse = array(
            "mse01" => $summaryError['se01'] / 58,
            "mse02" => $summaryError['se02'] / 58,
            "mse03" => $summaryError['se03'] / 58,
            "mse04" => $summaryError['se04'] / 58,
            "mse05" => $summaryError['se05'] / 58,
            "mse06" => $summaryError['se06'] / 58,
            "mse07" => $summaryError['se07'] / 58,
            "mse08" => $summaryError['se08'] / 58,
            "mse09" => $summaryError['se09'] / 58
        );
//        echo count($alpha['alpha01'])."---".count($data);
//        exit();

        $response = array(
            "data1" => $total1,
            "data2" => $total2,
            "data3" => $total3,
            "data4" => $total4,
            "data5" => $total5,
            "data" => $data,
            "alpha" => $alpha,
            "error" => $error,
            "ek" => $errorKuadrat,
            "se" => $summaryError,
            "mse" => $mse
        );
        $hasil = $this->load->view('eko/hasil_perhitungan', $response, TRUE);
        echo $hasil;
    }

    public function simpanData() {
        $po = $this->input->post("po");
        $total1 = array();
        $bulan1 = array();
        $tahun1 = 2013;
        $file1 = $_FILES['data1']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file1);
        $excelObj = $excelReader->load($file1);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah1 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah1 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah1 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah1 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah1 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah1 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($bulan1, $excelObj->getSheet($i)->getTitle());
            array_push($total1, $jumlah1);
        }

        //proses data 2
        $total2 = array();
        $bulan2 = array();
        $tahun2 = 2014;
        $file2 = $_FILES['data2']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file2);
        $excelObj = $excelReader->load($file2);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah2 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah2 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah2 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah2 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah2 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah2 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($bulan2, $excelObj->getSheet($i)->getTitle());
            array_push($total2, $jumlah2);
        }

        //proses data 3
        $total3 = array();
        $bulan3 = array();
        $tahun3 = 2015;
        $file3 = $_FILES['data3']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file3);
        $excelObj = $excelReader->load($file3);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah3 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah3 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah3 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah3 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah3 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah3 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($bulan3, $excelObj->getSheet($i)->getTitle());
            array_push($total3, $jumlah3);
        }

        //proses data 4
        $total4 = array();
        $bulan4 = array();
        $tahun4 = 2016;
        $file4 = $_FILES['data4']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file4);
        $excelObj = $excelReader->load($file4);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah4 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah4 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah4 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah4 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah4 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah4 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($bulan4, $excelObj->getSheet($i)->getTitle());
            array_push($total4, $jumlah4);
        }

        //proses data 5
        $total5 = array();
        $bulan5 = array();
        $tahun5 = 2016;
        $file5 = $_FILES['data5']['tmp_name'];
        $excelReader = PHPExcel_IOFactory::createReaderForFile($file5);
        $excelObj = $excelReader->load($file5);
        for ($i = 0; $i < $excelObj->getSheetCount(); $i++) {
            $jumlah5 = 0;
            $worksheet = $excelObj->getSheet($i);
            $lastRow = $worksheet->getHighestRow();
            for ($row = 1; $row <= $lastRow; $row++) {
                $jumlah5 += doubleval($worksheet->getCell('G' . $row)->getValue());
                $jumlah5 += doubleval($worksheet->getCell('N' . $row)->getValue());
                $jumlah5 += doubleval($worksheet->getCell('U' . $row)->getValue());
                $jumlah5 += doubleval($worksheet->getCell('AB' . $row)->getValue());
                $jumlah5 += doubleval($worksheet->getCell('AI' . $row)->getValue());
            }
            array_push($bulan5, $excelObj->getSheet($i)->getTitle());
            array_push($total5, $jumlah5);
        }

        $data = array(
            "po" => $po,
            "tahun1" => $tahun1,
            "tahun2" => $tahun2,
            "tahun3" => $tahun3,
            "tahun4" => $tahun4,
            "tahun5" => $tahun5,
            "bulan1" => $bulan1,
            "bulan2" => $bulan2,
            "bulan3" => $bulan3,
            "bulan4" => $bulan4,
            "bulan5" => $bulan5,
            "data1" => $total1,
            "data2" => $total2,
            "data3" => $total3,
            "data4" => $total4,
            "data5" => $total5
        );

        echo json_encode($this->DataModel->simpanEko($data));
    }

    public function lihatData() {
        $po = $this->input->get("po");
        $response = $this->DataModel->AmbilEko($po);
        $kirim = array(
            "po" => $po,
            "hasil" => $response
        );
        $hasil = $this->load->view("eko/lihat_data_detail", $kirim, TRUE);
        echo $hasil;
    }
    
    public function deleteData(){
        $po = $this->input->post("po");
        $delete = $this->DataModel->deletePo($po);
        echo json_encode($delete);
    }

}
