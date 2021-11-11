@extends('layouts.app')

@section('content')

  <section class="getintouch">
      <h3 style="color: var(--headingColor);text-align: center">{{ $note['topic'] }}</h3>
      <form action="/notes/share/{{$note['id']}}" method="POST">
        @csrf
        <input type="hidden" name="topic" value="{{ $note['topic'] }}" >
        <input type="hidden" name="descriptio" value="{{ $note['description'] }}" >
        <input type="hidden" name="status" value="{{ $note['status'] }}" >
        <input type="email" name="email" required>
        <input type="submit" name="submit" value="Share">
      </form>
    </section>

@endsection