@extends('layouts.main-layouts')

@section('contents')
    @foreach ($travels as $travel)
    <ul>
        <li>{{$travel["Nome"]}}</li>
    </ul>
    @endforeach
@endsection
