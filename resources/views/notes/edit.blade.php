<!-- Edit the Notes -->

@extends('layouts.app')

@section('content')


<section class="getintouch">
    <h2>Edit</h2>
    <form action="/notes/edit/{{$note['id']}}" method="POST">
      @csrf
      <label for="topic">Topic</label>
      <input type="text" name="topic" value="{{$note['topic']}}">
      <label>Status</label>
      <select name="status" value="{{$note['status']}}">
        <option value="private">Private</option>
        <option value="public">Public</option>
      </select>
      <label>Description</label>
      <textarea rows="7" cols="100" id="description" name="description">{{$note['description']}}</textarea>
      <input type="submit" value="Save">
    </form>
  </section>

@endsection