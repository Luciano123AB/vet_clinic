<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $pets = Pet::all();

        if (isset($pets)) {
            return view('pet.index', compact('pets'));   
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $clients = Client::all();

        if (isset($clients)) {
            return view('pet.new', compact('clients'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $thePet = new Pet();

        $thePet->name = $request->input('name');

        if (!$request->file('photo')) {
            $thePet->photo_path = '';
        } else {
            $thePet->photo_path = $request->file('photo')->store('photos');
        }

        $thePet->specie = $request->input('specie');
        $thePet->breed = $request->input('breed');
        $thePet->color = $request->input('color');
        $thePet->height = $request->input('height');
        $thePet->weight = $request->input('weight');
        $thePet->gender = $request->input('gender');
        $thePet->birth_date = date('Y-m-d', strtotime($request->input('birth_date')));
        $thePet->father = $request->input('father');
        $thePet->mother = $request->input('mother');
        $thePet->observations = $request->input('observations');
        $thePet->save();

        return redirect('/pet');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $thePet = Pet::find($id);

        if (isset($thePet)) {
            return view('pet.edit', compact('thePet'));
        }

        return redirect('/pet');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $thePet = Pet::find($id);

        if (isset($thePet)) { //Selecionou sem foto.
            $thePet->name = $request->input('name');

            $no_photo = $request->input('no_photo');

            if (isset($no_photo)) {
                $thePet->photo_path = '';
            } else { //Com foto.
                if ($request->file('photo')) {
                    $thePet->photo_path = $request->file('photo')->store('photos');
                }            
            }

            $thePet->specie = $request->input('specie');
            $thePet->breed = $request->input('breed');
            $thePet->color = $request->input('color');
            $thePet->height = $request->input('height');
            $thePet->weight = $request->input('weight');
            $thePet->gender = $request->input('gender');
            $thePet->birth_date = date('Y-m-d', strtotime($request->input('birth_date')));
            $thePet->father = $request->input('father');
            $thePet->mother = $request->input('mother');
            $thePet->observations = $request->input('observations');
            $thePet->save();

            return redirect('/pet');
        }

        return redirect('/pet');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $thePet = Pet::find($id);

        if (isset($thePet)) {
            $thePet->delete();
        }

        return redirect('/pet');
    }
}
