@extends('layout')

@section('content')
    <h2>Boomtown Organization Data</h2>
    <ul>
        @foreach((array)$org_data as $title => $value)
            <li style="text-align: left;"><strong>{{$title}}:</strong> {{$value}}</li>
        @endforeach
    </ul>
@endsection