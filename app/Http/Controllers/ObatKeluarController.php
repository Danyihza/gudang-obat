<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatKeluarController extends Controller
{
    public function view()
    {
        $data['state'] = 'Obat Keluar';
        return view('obatkeluar.obatkeluar', $data);
    }
}
