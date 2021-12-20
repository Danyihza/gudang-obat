<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function view()
    {
        $data['state'] = 'Laporan';
        return view('laporan.laporan', $data);
    }
}
