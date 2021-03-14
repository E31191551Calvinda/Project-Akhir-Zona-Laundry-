<?php

namespace App\Models;

use CodeIgniter\Model;

class Home extends Model
{
    private $str = "Hello Calvinda Risky Adiputra (E31191551 / GolonganC)";

    public function getData()
    {
        return $this->str;
    }
}