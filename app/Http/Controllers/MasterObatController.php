<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterObatController extends Controller
{
    public function view()
    {
        $data['state'] = 'Master Obat';
        return view('masterobat.masterobat', $data);
    }
    
}
