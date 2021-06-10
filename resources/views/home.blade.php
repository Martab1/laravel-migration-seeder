<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    </head>
    <body>
        <main>
            <h1>Trips laravel database</h1>
            <section>
                @foreach ( $packagesTrip as $singleTrip )
                    <div>Package number {{$singleTrip->id}}</div>
                    <p> {{$singleTrip->description}} </p>
                    <p>{{$singleTrip->state}} , {{$singleTrip->city}}</p>
                    <p>{{ $singleTrip->price }} EUR</p>
                    <p>Guests: {{$singleTrip->guests}}</p>
                    <p>{{$singleTrip->is_avaiable}}</p>
                    <hr>
                @endforeach
            </section>
        </main>
    </body>
</html>
