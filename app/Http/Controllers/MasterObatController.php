<?php

namespace App\Http\Controllers;

use App\Models\MasterObat;
use Illuminate\Http\Request;

class MasterObatController extends Controller
{
    public function view()
    {
        $data['state'] = 'Master Obat';
        $data['obat'] = MasterObat::paginate(2);
        return view('masterobat.masterobat', $data);
    }
    
}
