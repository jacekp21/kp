<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tes;

class TesController extends Controller
{
    public function index()
    {
    	$tests = Tes::get();

		return $tests;
    	
    }
}
