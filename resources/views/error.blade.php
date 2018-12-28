@extends('layout')

@section('content')
    <div class="alert alert-danger">
        <p>{{$status}}</p>
        <p>Please try request again.</p>
    </div>
    <img style="display: block;margin-left: auto;margin-right: auto;width: 60%; "src="/images/confusion.png" alt="Confused Math Lady Meme">

@endsection
