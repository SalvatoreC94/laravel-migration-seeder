<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    // Funzione index per recuperare i treni dalla data odierna e passarli alla view
    public function index()
    {
        // Recupera tutti i treni in partenza dalla data odierna in avanti
        $trains = Train::whereDate('orario_di_partenza', '>=', now()->toDateString())->get();

        // Passa i dati dei treni alla view 'home'
        return view('home', compact('trains'));
    }
}
