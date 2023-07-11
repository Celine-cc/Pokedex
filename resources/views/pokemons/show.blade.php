@extends('layout.app')

@section('content')
    @foreach ($pokemon as $p)

        
            <h2>{{$p->name}}</h2>
        <div class="contenu">
            <p>Element: {{$p->type1}} </p>
            <p>Type:  {{$p->type2}}</p>
            <p>Description: {{$p->description}}</p>
            <p>poid: {{$p->weight}}</p>
            <p>Taille: {{$p->height}}</p>
      
            <div class="input">
                <button type="submit" name="modif" value="Modiifer">Modifier</button>
                <button type="submit" name="modif" value="effacer">Effacer</button>
            </div>
         </div>
    @endforeach
@endsection