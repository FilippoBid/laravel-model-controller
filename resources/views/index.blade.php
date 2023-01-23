<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>film impossibili</title>
            <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
            @vite('resources/js/app.js')
            
        

        </head>
        <body>
            <div class="container">

                <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($films as $film)   
                <div class="col">
                    <div class="card">
                        <img src="https://picsum.photos/200" class="card-img-top" alt="immagine a caso proprio">
                        <div class="card-body">
                        <h5 class="card-title">titolo: {{$film->title}}</h5>
                        <h3 class="card-title">titolo originale :{{$film->original_title}}</h3>
                        <h3 class="card-title">nazionalità: {{$film->nationality}}</h3>
                        </div>
                    </div>
                </div>
                @endforeach

                    

            </div>

            

        </body>   

</html>  