<?php

namespace App\Controllers;

class Wakaf extends BaseController
{
	public function index()
	{
		

		$data['hadist'] = "\"Jika seseorang meninggal dunia, maka terputuslah amalannya kecuali tiga perkara (yaitu): sedekah jariyah, ilmu yang dimanfaatkan serta doa naka yang sholeh\". (HR. Muslim no.163)";
		$data['title'] = "Wakaf";

		echo view('templates/header');
		echo view('bayar', $data);
		echo view('templates/footer');
	}
}