<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <style>
    @import url('https://fonts.cdnfonts.com/css/pokemon-solid');
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    

    <title>App.layout</title>
</head>


<body>
    <header>
      <div class="title">
        
        <img src="https://www.pngall.com/wp-content/uploads/4/Pokemon-Pokeball-PNG.png" alt="">
        <a href="{{route('pokemon.index')}}"><h1>POKEDEX</h1></a>
        <img src="https://www.pngall.com/wp-content/uploads/4/Pokemon-Pokeball-PNG.png" alt="">
        
      </div>
            
        <div class="creat">            
            <img class="pika"src="https://www.pokepedia.fr/images/4/4f/Artwork_D%C3%A9tective_Pikachu.png" alt="">
            <a href="{{route('pokemon.create')}}">Créer Nouveau Pokemon</a>
        </div>
    </header>


    <div class="content">
     @yield('content') 
    </div>


    <footer>
        © Copyright Céline Conraud 2023 /en collaboration avec Léa & Théo/.
     </footer>
    
</body>
</html>