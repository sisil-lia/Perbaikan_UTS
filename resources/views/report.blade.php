@extends('layout')

@section('content')

<div class="card p-4">

<h2>Laporan Tugas Selesai</h2>

<form method="GET">

<div class="row">

<div class="col-md-4">

<label>Tanggal Awal</label>

<input type="date"
       name="start"
       class="form-control">

</div>

<div class="col-md-4">

<label>Tanggal Akhir</label>

<input type="date"
       name="end"
       class="form-control">

</div>

<div class="col-md-4">

<label>&nbsp;</label>

<button class="btn btn-primary form-control">
    Filter
</button>

</div>

</div>

</form>

<hr>

<table class="table table-striped">

<tr>

<th>Judul</th>
<th>Deadline</th>
<th>Tanggal Selesai</th>

</tr>

@foreach($tasks as $task)

<tr>

<td>{{ $task->title }}</td>

<td>{{ $task->due_date }}</td>

<td>{{ $task->completed_at }}</td>

</tr>

@endforeach

</table>

</div>

@endsection