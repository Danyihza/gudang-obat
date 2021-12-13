<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatMasukController extends Controller
{
    public function view()
    {
        $data['state'] = 'Obat Masuk';
        return view('obatmasuk.obatmasuk', $data);
    }
}
