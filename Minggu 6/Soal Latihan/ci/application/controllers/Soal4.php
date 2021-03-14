<?php

namespace App\Controllers;

use App\Models\Soal4 as modelSoal4;

class Soal4 extends BaseController
{
        public function index()
        {
                $objekModel = new modelSoal4();

                $data1 = array(
                        "var1" => $objekModel->getData1(),
                        "var2" => $objekModel->getData2(),
                );

                return view('soal4', $data1); //file view
        }
}