@extends('layouts.app')

@section('content')
  
  <div class="details">
    <h5><a href="/notes/find"><-</a></h5>
    <h1>{{ $note['topic'] }}</h1>
    <h3>By {{ $user[0]->name }}</h3>
    <h4>{{ $note['created_at']}}</h4>
    <p>{!! $note['description'] !!}</p>
  </div>

@endsection
