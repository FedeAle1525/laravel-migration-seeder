<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Metodo che ritorna la Vista "Welcome" e passa i dati recuperati dal Database
    public function homepage()
    {
        // Recupero Data Corrente utilizzando la Dipendeza "Carbon"
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::where('departure_date', '>=', $currentDate)
            ->orderBy('departure_date', 'asc')->get();
        // dd($trains);

        $data = [
            'trains' => $trains
        ];

        return view('welcome', $data);
    }
}
