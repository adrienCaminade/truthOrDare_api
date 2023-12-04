<?php

namespace App\Http\Controllers;

use App\Models\Dare_spicy;
use Illuminate\Http\Request;

class Dare_spicyController extends Controller
{
                /* ------------ API PART ------------ */

    // Accéder à la liste de toutes les actions épicées

    public function index(){

        $dare_spicy = Dare_spicy::all();

        return response()->json($dare_spicy);
    }
}
