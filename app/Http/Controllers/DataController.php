<?php
// DataController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('data.index'); // Buat file data/index.blade.php untuk ini
    }
}


