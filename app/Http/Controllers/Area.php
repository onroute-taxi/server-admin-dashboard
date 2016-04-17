<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Khill\Lavacharts\Lavacharts;

class Area extends Controller
{
    //

$lava = new Lavacharts; // See note below for Laravel

$popularity = Lava::DataTable();

$popularity->addStringColumn('Suburb')
           ->addNumberColumn('Popularity')
           ->addRow(array('Chembur', 100))
           ->addRow(array('Ulhasnagar', 400))
           ->addRow(array('Bandra', 400))
           ->addRow(array('Andheri', 700))
           ->addRow(array('Thane', 600))
           ->addRow(array('Dahisar', 500));

Lava::GeoChart('Popularity', $popularity);

}
