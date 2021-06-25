<?php 

class Mahasiswa_model extends CI_Model
{
	function getAll() //Membuat fungsi yang akan digunakan mengakses database
	{
		$this->db->select('*');
		$this->db->from('tm_user'); 
		$this->db->join('tm_grup','tm_user.grup = tm_grup.id_grup');
		/*
		Baris 7-9 merupakan query 
		*/ 
		$query = $this->db->get();
		//fungsi eksekusi query sama seperti myqli_query
		return $query;
		//mengembalikan nilai ke variabel query
	}

	function input_data($data, $table)
	//Membuat fungsi input_data dengan nilai dari variabel data dan table
	{
		$this->db->insert($table, $data);
		/*Ketika fungsi di panggil maka akan menambahkan data pada database didalam variabel table dan data ,serta tidak boleh terbalik antara table dengan data sebab bisa terjadi error*/
	}
}

 ?>