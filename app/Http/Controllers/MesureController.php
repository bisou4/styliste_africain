<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Mesure;
use Illuminate\Http\Request;

class MesureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mesure.liste_mesure', [
            'mesures' => Mesure::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mesure.formulaire', [
            'clients' => Client::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Mesure::create([
            'clients_id' => $request->clients_id,
            'tour_poitrine' => $request->tour_poitrine,
            'tour_manche' => $request->tour_manche,
            'tour_cuisse' => $request->tour_cuisse,
            'tour_genoux' => $request->tour_genoux,
            'tour_bras' => $request->tour_bras,
            'tour_poignet' => $request->tour_poignet,
            'tour_bassin' => $request->tour_bassin,
            'tour_mollet' => $request->tour_mollet,
            'tour_cheville' => $request->tour_cheville,
            'hauteur_poitrine' => $request->hauteur_poitrine,
            'hauteur_pointe_sein' => $request->hauteur_pointe_sein,
            'hauteur_taille_sol' => $request->hauteur_taille_sol,
            'longueur_epaule' => $request->longueur_epaule,
            'longueur_milieu_dos' => $request->longueur_milieu_dos,
            'longueur_entrejambe_sol' => $request->longueur_entrejambe_sol,
            'carrure_devant' => $request->carrure_devant,
        ]);
        return redirect()->route('gestion_mesure.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('mesure.show', [
            'finds' => Mesure::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('mesure.edit', [
            'finds' => Mesure::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mesure = Mesure::find($id);
        $mesure->update($request->all());

        return redirect()->route('gestion_mesure.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesure = Mesure::find($id);
        $mesure->delete();

        return redirect()->route('gestion_mesure.index');
    }
}
