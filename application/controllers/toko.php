<?php
defined('BASEPATH') or exit('No direct script access allowed');

class toko extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('lib_tugas');
	}
	function index()
	{
		$Dita = $this->matahati->totalPayment("anak", '2');

		$Adit = $this->matahati->totalPayment("pria", '1');

		$Toni = $this->matahati->totalPayment("pria", '1', true);

		$Intan = $this->matahati->totalPayment("wanita", '2');

		$Kantong = 2000;

		$Intan += $Kantong;

		echo "Dita => total Rp.$Dita (Pakaian Anak) <br>";
		echo "Adit => total Rp.$Adit (Pakaian Pria Dewasa) <br>";
		echo "Toni => total Rp.$Toni (Pakaian Pria Dewasa) <br>";
		echo "Intan => total Rp.$Intan (Pakaian Wanita Dewasa) <br>";
	}
}
