<?php

namespace App\Controllers;

use App\Models\Soal3 as modelSoal3;

class Soal_3 extends BaseController
{
	public function index()
	{
        $objekModel = new modelSoal3();

        $data = $objekModel->getData();

        echo $data;
	}
}