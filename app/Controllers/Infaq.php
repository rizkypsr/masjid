<?php

namespace App\Controllers;

class Infaq extends BaseController
{
	public function index()
	{
		$data['hadist'] = "\"Perumpamaan orang-orang yang mendermakan harta bendanya di jalan Allah, seperti orang yang menanam sebutir biji yang menumbuhkan tujuh untai dan tiap-tiap untai terdapat seratus biji dan Allah melipat gandakan kepada orang yang dikehendaki, dan Allah Maha Luas anugrahnya lagi Maha Mengetahui\" (QS. Al-Baqoroh [2]:261)";
		$data['title'] = "Infaq";

		echo view('templates/header');
		echo view('bayar', $data);
		echo view('templates/footer');
	}
}