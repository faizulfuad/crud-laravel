<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaans = PertanyaanModel::get_all();
        return view('pertanyaan.index', compact('pertanyaans'));
    }

    public function create(){
        return view('pertanyaan.form');
    }
}
