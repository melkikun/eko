<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class DataModel extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function simpanEko($param) {
        $response = array();
        $po = $param['po'];

        $data1 = $param['data1'];
        $data2 = $param['data2'];
        $data3 = $param['data3'];
        $data4 = $param['data4'];
        $data5 = $param['data5'];

        $bulan1 = $param['bulan1'];
        $bulan2 = $param['bulan2'];
        $bulan3 = $param['bulan3'];
        $bulan4 = $param['bulan4'];
        $bulan5 = $param['bulan5'];

        $tahun1 = $param['tahun1'];
        $tahun2 = $param['tahun2'];
        $tahun3 = $param['tahun3'];
        $tahun4 = $param['tahun4'];
        $tahun5 = $param['tahun5'];

        $this->db->trans_begin();
        //delete nama po lama
        $sql1 = "delete from po where nama = ?";
        $this->db->query($sql1, array("$po"));
        //insert name po yang baru
        $sql1 = "insert into po (nama)  values (?)";
        $this->db->query($sql1, array("$po"));
        $insert_id = $this->db->insert_id();
        //2013
        for ($i = 0; $i < count($data1); $i++) {
            $sql11 = "insert into data_po(id_po, bulan, tahun, rupiah) values(?, ?, ?, ?)";
            $this->db->query($sql11, array("$insert_id", $bulan1[$i], $tahun1, $data1[$i]));
        }
        //2014
        for ($i = 0; $i < count($data2); $i++) {
            $sql11 = "insert into data_po(id_po, bulan, tahun, rupiah) values(?, ?, ?, ?)";
            $this->db->query($sql11, array("$insert_id", $bulan2[$i], $tahun2, $data2[$i]));
        }
        //2015
        for ($i = 0; $i < count($data3); $i++) {
            $sql11 = "insert into data_po(id_po, bulan, tahun, rupiah) values(?, ?, ?, ?)";
            $this->db->query($sql11, array("$insert_id", $bulan3[$i], $tahun3, $data3[$i]));
        }
        //2016
        for ($i = 0; $i < count($data4); $i++) {
            $sql11 = "insert into data_po(id_po, bulan, tahun, rupiah) values(?, ?, ?, ?)";
            $this->db->query($sql11, array("$insert_id", $bulan4[$i], $tahun4, $data4[$i]));
        }
        //2017
        for ($i = 0; $i < count($data5); $i++) {
            $sql11 = "insert into data_po(id_po, bulan, tahun, rupiah) values(?, ?, ?, ?)";
            $this->db->query($sql11, array("$insert_id", $bulan5[$i], $tahun5, $data5[$i]));
        }

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
            array_push($response, 0);
        } else {
            $this->db->trans_commit();
            array_push($response, 1);
        }
        return $response;
    }

    public function AmbilEko($po) {
        $this->db->select('po.*,dpo.*');
        $this->db->from('po po');
        $this->db->join('data_po dpo', 'dpo.id_po = po.id', 'inner');
        $this->db->where("po.nama", "$po");
        $this->db->order_by("dpo.id", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deletePo($po) {
        $this->db->where('nama', $po);
        $delete = $this->db->delete('po');
        return $delete;
    }

}
