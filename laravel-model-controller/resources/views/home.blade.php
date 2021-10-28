@extends('layouts.app')

@section('title', "Home")

@section('movies')

    {{-- contenuto --}}

    <ul>

        @foreach ($movies as $movie)
            <li>
                {{ $movie['title'] }}
            </li>
        @endforeach

    </ul>
    
    
@endsection
