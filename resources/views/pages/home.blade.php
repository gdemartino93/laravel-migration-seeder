@extends('layouts.main-layouts')

@section('contents')
    @foreach ($travels as $travel)
    <ul>
        <li>{{$travel["Nome"]}} - {{ $travel["Prezzo"]}} &euro;</li>
    </ul>
    @endforeach
@endsection
