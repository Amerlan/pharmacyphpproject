@extends('layouts.app')
@section('content')
<div class="mt-100">
<form action={{ route('add_book')}} method="post">
  @csrf
    <div class="mb-3">
        <label for="owner">Title</label>
        <input name = 'title' type="text" class="form-control" id="owner">
    </div>
    <div class="mb-3">
      <label for="owner">Author</label>
      <input name = 'author' type="text" class="form-control" id="owner">
    </div>
    <div class="mb-3">
      <label for="owner">URL</label>
      <input name = 'url' type="text" class="form-control" id="owner">
    </div>
    <div class="mb-3">
      <label for="owner">Digital version of book</label>
      <input name = 'source' type="text" class="form-control" id="owner">
    </div>
    <div class="mb-3">
      <label for="owner">Price</label>
      <input name = 'price' type="text" class="form-control" id="owner">
    </div>
    <button type="submit">Add</button>
</form>
</div>
@endsection
