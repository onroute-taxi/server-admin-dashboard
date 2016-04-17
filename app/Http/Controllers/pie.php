<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Khill\Lavacharts\Lavacharts;

class pie extends Controller
{
    //

$lava = new Lavacharts; // See note below for Laravel

$reasons = Lava::DataTable();

$reasons->addStringColumn('Reasons')
        ->addNumberColumn('Percent')
        ->addRow(['Check Reviews', 5])
        ->addRow(['Watch Trailers', 2])
        ->addRow(['See Series', 4])
        ->addRow(['Music', 89]);

Lava::PieChart('BackSeat', $reasons, [
    'title'  => 'Reasons I use BackSeat',
    'is3D'   => true,
    'slices' => [
        ['offset' => 0.2],
        ['offset' => 0.25],
        ['offset' => 0.3]
    ]
]);
}
