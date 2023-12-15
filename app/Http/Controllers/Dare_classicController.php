<?php

namespace App\Http\Controllers;

use App\Models\Dare_classic;
use Illuminate\Http\Request;
use OpenApi\Annotations as OA;

class Dare_classicController extends Controller
{

        /**
     * Affichage de la liste des actions classiques
     *
     * @return \Illuminate\Http\Response
     */
    public function list_dare_classic()
    {

        $dare_classic = Dare_classic::all();

        return view('dare_classic.index', compact('dare_classic'));
    }


    /* ------------ API PART ------------ */

    // Accéder à la liste de toutes les actions classiques

        /**
     * @OA\Get(
     *      path="/api/dareClassic",
     *      @OA\Response(
     *          response="200",
     *          description= "Les Actions du mode Classique")
     *      )
     * )
     */
    public function index(){

        $dare_classic = Dare_classic::all();

        return response()->json($dare_classic);
    }
}
