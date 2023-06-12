<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;


class TrainController extends Controller
{
    public function getTrains(){

        $trains = Train::All();

        return view('pages.trains', compact('trains'));
    }
}
