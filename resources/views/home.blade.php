{{-- Create un nuovo progetto Laravel 7 e tramite phpMyAdmin create un nuovo database.
Importate nel vostro database la tabella movies nello zip allegato e inserite le vostre credenziali per il database nel file .env.
Create un model Movie e un controller che gestirà la rotta /.
All'interno della funzione index() del controller, recuperate tutti i film dal database e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
BONUS
Stilare il layout nei dettagli con Sass.
Ricordate di riavviare il server locale php con php artisan serve dopo aver modificato il file .env se questo è già in esecuzione. --}}
@extends('layouts.main')
@section('content')


<main>
    <div class="container">
        <div class="cards">
            @foreach ($movies as $movie)
                <ul>
                    <li><b>Titolo:</b> {{$movie->title}}</li>
                    <li><b>Titolo originale:</b> {{$movie->original_title}}</li>
                    <li><b>Lingua:</b> {{$movie->nationality}}</li>
                    <li><b>Data:</b> {{$movie->date}}</li>
                    <li><b>Voto:</b> {{$movie->vote}}</li>
                </ul> 
            @endforeach
        </div>
    </div>
</main>

@endsection