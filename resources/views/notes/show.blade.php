@extends('layouts.app')

@section('content')
  
  <div class="details">
    <h5><a href="/notes"><-</a></h5>
    <h1>{{ $note['topic'] }}</h1>
    <h4>{{ session('mssg1') }}</h4>
    <p>{!! $note['description'] !!}</p>
    <form action="/notes/{{$note['id']}}" method="POST">
      @csrf
      @method('DELETE')
      <button class="btn">Delete</button>
    </form>
    <a href="/notes/share/{{ $note['id'] }}"><img src="/img/sharing.png" class="shareBtn"></a>
    <a href="/notes/edit/{{ $note['id'] }}"><img src="/img/edit.png" class="shareBtn1"></a>
  </div>

@endsection
