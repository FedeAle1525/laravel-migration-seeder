<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Metodo che ritorna la Vista "Welcome" e passa i dati recuperati dal Database
    public function homepage()
    {
        $trains = Train::all();
        // dd($trains);

        $data = [
            'trains' => $trains
        ];

        return view('welcome', $data);
    }
}
