<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Annonce;

class AnnonceController extends Controller
{
    public function annonces()
    {
        return response()->json(Annonce::get(), 201);
    }
    public function annonce($id)
    {
        return response()->json(Annonce::find($id), 200);
    }
    public function create(Request $request)
    {
        $annonce = Annonce::create($request->all());
        return response()->json($annonce, 201);
    }
    public function update(Request $request,Annonce $annonce){
        $annonce->update($request->all());
        return response()->json($annonce,200);
    }
    public function delete(Request $request,Annonce $annonce){
        $annonce->delete();
        return response()->json($annonce,204);
    }
}
