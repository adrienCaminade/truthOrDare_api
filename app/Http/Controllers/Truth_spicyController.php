<?php

namespace App\Http\Controllers;

use App\Models\Truth_spicy;
use Illuminate\Http\Request;

class Truth_spicyController extends Controller
{
                  /* ------------ API PART ------------ */

    // Accéder à la liste de toutes les vérités épicées

                    /**
     * @OA\Get(
     *      path="/api/truthSpicy",
     *      @OA\Response(
     *          response="200",
     *          description= "Les Vérités du mode Epicé")
     *      )
     * )
     */
    public function index(){

        $truth_spicy = Truth_spicy::all();

        return response()->json($truth_spicy);
    }
}
