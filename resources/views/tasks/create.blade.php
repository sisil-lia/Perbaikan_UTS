@extends('layout')

@section('content')

<div class="card p-4">

    <h2>Tambah Tugas</h2>

    <form action="/tasks" method="POST">

        @csrf

        <div class="mb-3">
            <label class="form-label">Judul Tugas</label>

            <input type="text"
                   name="title"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>

            <textarea name="description"
                      class="form-control"
                      rows="4"></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Deadline</label>

            <input type="date"
                   name="due_date"
                   class="form-control"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan Tugas
        </button>

        <a href="/tasks" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection