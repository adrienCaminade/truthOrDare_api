<?php

namespace App\Http\Controllers;

use App\Models\Dare_classic;
use Illuminate\Http\Request;

class Dare_classicController extends Controller
{
            /* ------------ API PART ------------ */

    // Accéder à la liste de toutes les actions classiques

    public function index(){

        $dare_classic = Dare_classic::all();

        return response()->json($dare_classic);
    }
}
