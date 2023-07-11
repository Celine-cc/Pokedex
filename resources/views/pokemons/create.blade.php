@extends('layout.app')

@section('content')
    

<form action=" {{route('pokemon.store')}}" method ="post" >
    @csrf
    <input type="text" name="name" placeholder="Nom">
    <input type="text" name="element" placeholder="Element">
    <input type="text" name="type" placeholder="Type">
    <input type="text" name="des" placeholder="Description">
    <input type="number" name="weight" placeholder="Poids">
    <input type="number" name="height" placeholder="Taille">

    <button type="submit" name="modif" value="effacer">Créer</button>
</form>

@endsection