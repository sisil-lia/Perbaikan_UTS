@extends('layout')

@section('content')

<div class="card p-4">

<h2>Edit Tugas</h2>

<form action="/tasks/{{ $task->id }}"
      method="POST">

@csrf
@method('PUT')

<div class="mb-3">

<label>Judul</label>

<input type="text"
       name="title"
       class="form-control"
       value="{{ $task->title }}"
       required>

</div>

<div class="mb-3">

<label>Deskripsi</label>

<textarea name="description"
          class="form-control">{{ $task->description }}</textarea>

</div>

<div class="mb-3">

<label>Deadline</label>

<input type="date"
       name="due_date"
       class="form-control"
       value="{{ $task->due_date }}"
       required>

</div>

<button class="btn btn-warning">
    Update
</button>

</form>

</div>

@endsection