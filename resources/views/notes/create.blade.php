@extends('layouts.app')

@section('content')

<section class="getintouch">
    <h2>Create</h2>
    <form action="/notes" method="POST">
      @csrf
      <label for="topic">Topic</label>
      <input type="text" name="topic" required>
      <label>Status</label>
      <select name="status">
        <option value="private">Private</option>
        <option value="public">Public</option>
      </select>
      <label>Description</label>
      <textarea  rows="7" cols="100" name="description" required></textarea>
      <input type="submit" value="Save">
    </form>
  </section>

@endsection