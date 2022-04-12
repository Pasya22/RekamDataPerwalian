<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function AddData($tabel, $data = array())
    {
        $this->db->insert($tabel, $data);
    }

    function UpdateData($tabel, $fieldid, $fieldvalue, $data = array())
    {
        $this->db->where($fieldid, $fieldvalue)->update($tabel, $data);
    }

    function DeleteData($tabel, $fieldid, $fieldvalue)
    {
        $this->db->where($fieldid, $fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query = $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel, $id, $nilai)
    {
        $this->db->where($id, $nilai);
        $query = $this->db->get($tabel);
        return $query;
    }
    function getTahun()
    {
        $query = $this->db->query(" SELECT * FROM t_tracking WHERE tahun_masuk = '2018/2019' GROUP BY npm");
        return $query->result();
    }
    function nilai()
    {
        $query = $this->db->query(" SELECT * FROM nilai WHERE npm = '15180034'  GROUP BY id");
        return $query->result();
    }

    // function tampil_data($vtanggal)
    // {

    //     $this->db->select('tahun_masuk');
    //     $this->db->from('t_tracking');
    //     $this->db->where('year(tahun_masuk)', $vtanggal);
    //     $query = $this->db->get();
    //     return $query;
    // }
    // function search($key,$npm,$nama,$tahun_masuk,$kd_kelas  = false)
    // {
    //     // if ($key = "istri") {
    //     //     $key = 3;
    //     // }
    //     if(!empty($key)) {
    //     $this->db->group_start();
    //     $this->db->like('npm',$key);
    //     $this->db->or_like('nama',$key);
    //     $this->db->or_like('tahun_masuk',$key);
    //     $this->db->or_like('kd_kelas',$key);
    //     $this->db->group_end();
    //      }
    //      if($tahun_masuk){
    //         if ($npm) {
    //             if ($nama) {
    //                 if ($kd_kelas) {
    //                     $array = array('tahun_masuk' => $tahun_masuk, 'npm' => $npm, 'nama' => $nama, 'kd_kelas' => $kd_kelas, 'tahun_masuk' => $tahun_masuk, '(YEAR(CURDATE())-YEAR(tahun_masuk))' => $tahun_masuk);
    //                              $this->db->where($array); 

    //                 }
    //                 else
    //                 {   
    //                 $array = array('tahun_masuk' => $tahun_masuk, 'npm' => $npm, 'nama' => $nama);
    //                 $this->db->where($array);
    //                 } 
    //             }
    //             else{
    //             $array = array('tahun_masuk' => $tahun_masuk, 'npm' => $npm);
    //             $this->db->where($array); 
    //             }


    //         }
    //         elseif ($tahun_masuk) {
    //            $this->db->where('tahun_masuk', $tahun_masuk);
    //         }




    //     }
    //     }


}