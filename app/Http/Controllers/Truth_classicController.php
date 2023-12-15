<?php

namespace App\Http\Controllers;

use App\Models\Truth_classic;
use Illuminate\Http\Request;

class Truth_classicController extends Controller
{
                    /* ------------ API PART ------------ */

    // Accéder à la liste de toutes les vérités classiques


            /**
     * @OA\Get(
     *      path="/api/truthClassic",
     *      @OA\Response(
     *          response="200",
     *          description= "Les Vérités du mode Classique")
     *      )
     * )
     */
    public function index(){

        $truth_classic = Truth_classic::all();

        return response()->json($truth_classic);
    }
}
