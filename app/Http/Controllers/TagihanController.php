<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Layanan;

class MapController extends Controller
{
	public function index()
	{   
        $layanan = Layanan::all();
        $data['layanan'] = $layanan;

		return view('map.map',$data);
	}
}