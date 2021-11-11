@extends('layouts.app')

@section('content')

  <h1 class="notes_heading">All Notes</h1>
    <form class="search" action="/notes/find" method="GET">
      @csrf
      <input type="text" name="search" placeholder="Search" >
    </form>
  <div class="notes">
    @foreach ($notes as $note)
      <a href="/notes/find/{{ $note['id'] }}?user={{ $note['user_id'] }}"><div class="note">
        <h2 style="color: #fff;">{{ $note['topic'] }}</h2>
        <p style="color: #fff;">{{ $note['created_at'] }}</p>
      </div></a>
    @endforeach
  </div>

  <a href="/notes/create" class="addBtn">+</a>

@endsection