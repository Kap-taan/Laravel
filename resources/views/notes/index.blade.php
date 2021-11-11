@extends('layouts.app')

@section('content')

  <h1 class="notes_heading">Your Notes</h1>
    <form class="search" action="/notes" method="GET">
      @csrf
      <input type="text" name="search" placeholder="Search" >
    </form>
    <p style="color: var(--textColor); text-align: center">{{ session('mssg') }}</p>
  <div class="notes">
    
    @foreach ($notes as $note)
      <a href="/notes/{{ $note['id'] }}"><div class="note">
        <h2 style="color: #fff;">{{ $note['topic'] }}</h2>
        <p style="color: #fff;">{{ $note['created_at'] }}</p>
      </div></a>
    @endforeach
  </div>

  <a href="/notes/create" class="addBtn">+</a>

@endsection