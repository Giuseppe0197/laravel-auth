@extends('layouts.main-layout')
@section('content')

    @auth
        <h1>Nome dell'utente: {{ Auth::user() -> name }}</h1>
        <a href="{{ route('logout') }}"><button class="logout-button">DISCONNETTITI</button></a>
    @else
        <h1>Registrati o Accedi per vedere il tuo nome</h1>
    @endauth

    <div class="registration">

        <form action="{{route('register')}}" method="post">
    
            @method('post')
            @csrf
    
            <label for="name">Inserisci il Nome:</label>
            <input type="text" name="name" placeholder="Inserisci il nome"> <br>
    
            <label for="email">Inserisci la Email:</label>
            <input type="text" name="email" placeholder="Inserisci la mail"> <br>
    
            <label for="password">Inserisci la Password:</label>
            <input type="password" name="password" placeholder="Inserisci la password"> <br>
    
            <label for="password_confirmation">Conferma la Password:</label>
            <input type="password" name="password_confirmation" placeholder="Conferma la password"><br>

            <input type="submit" value="REGISTRATI">
    
        </form>

    </div>

    <h2>Accedi</h2>

    <div class="access" method="post">

        @method('post')

        @csrf

        <form action="{{route('login')}}">
        
            <label for="email">Inserisci la Email:</label>
            <input type="text" name="email" placeholder="Inserisci la mail"> <br>

            <label for="password">Inserisci la Password:</label>
            <input type="password" name="password" placeholder="Inserisci la password"><br>

            <input type="submit" value="ACCEDI">

        </form>

    </div>

@endsection