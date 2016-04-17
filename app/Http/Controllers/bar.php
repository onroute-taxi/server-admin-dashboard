<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Khill\Lavacharts\Lavacharts;

class ChartsController extends Controller
{
    

Lava::new Lavacharts; 

$votes  = Lava::DataTable();

$votes->addStringColumn('SeriesPopularity')
      ->addNumberColumn('Votes')
      ->addRow(['HIMYM',  rand(1000,5000)])
      ->addRow(['HTGAWM',  rand(1000,5000)])
      ->addRow(['FRIENDS',  rand(1000,5000)])
      ->addRow(['ARROW', rand(1000,5000)])
      ->addRow(['GoT',   rand(1000,5000)]);

Lava::BarChart('Votes', $votes);
}
