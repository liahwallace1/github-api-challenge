@extends('layout')

@section('content')
<h2>{{$request}} IDs</h2>

    @if($request == 'Repository' && count($data) == $org_repos)
        <h4>Response includes: {{count($data)}} of {{$org_repos}} Public Repositories.</h4>
    @elseif($request == 'Repository' && count($data) != $org_repos)
        <h4>Are we missing something? Boomtown has {{$org_repos}} Public Repositories, but the response includes {{count($data)}}.</h4>
    @endif

<ul>
    @foreach($data as $item)
    <li style="text-align: left;">{{$item->id}}</li>
    @endforeach
</ul>
@endsection