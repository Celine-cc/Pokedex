<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function index(){

        $pokemon = json_decode(file_get_contents('../database/pokedex.json'));
        return view("pokemons.show")-> with(['pokemon'=>$pokemon]);
            
       

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pokemons.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(([
            'name'=>'required|string|max:60',
            'element'=>'required|string|max:60',
            'type'=>'required|string|max:60',
            'des'=>'required|string|max:60',
            'weight'=>'required|integer|min:0',
            'height'=>'required|integer|min:0',
        ]));


        $name = $request->input('name');
        $element = $request->input('element');
        $type = $request->input('type');
        $des = $request->input('des');
        $weight = $request->input('weight');
        $height = $request->input('height');
       

        return view('pokemons.create')->with(['name'=> $name, 'element'=> $element, 'type'=> $type, 'des'=> $des, 'weight'=>$weight, 'height'=>$height ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pokemon = json_decode(file_get_contents('../database/pokedex.json'));
        return view("pokemons.show")-> with(['pokemon'=>$pokemon]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
 
       
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
