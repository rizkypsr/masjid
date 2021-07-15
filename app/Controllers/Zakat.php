<?php

namespace App\Controllers;

class Zakat extends BaseController
{
	public function index()
	{
		$data['hadist'] = "\"Ambillah zakat dari sebagian harta mereka, dengan zakat itu kamu membersihkan dan mensucikan mereka dan mendoalah untuk mereka. Dan Allah Maha mendengar lagi maha mengetahui\" (QS. at-Taubah - 9)";
		$data['title'] = "Zakat";

		echo view('templates/header');
		echo view('bayar', $data);
		echo view('templates/footer');
	}
}