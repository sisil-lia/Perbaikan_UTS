@extends('layout')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h2>Daftar Tugas</h2>

    <div>
        <a href="/tasks/create" class="btn btn-success">
            + Tugas Baru
        </a>

        <a href="/report" class="btn btn-primary">
            Laporan
        </a>
    </div>
</div>

<table class="table table-bordered table-hover bg-white">

    <thead>
        <tr>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Deadline</th>
            <th>Status</th>
            <th width="250">Aksi</th>
        </tr>
    </thead>

    <tbody>

    @forelse($tasks as $task)

    <tr>

        <td>{{ $task->title }}</td>

        <td>{{ $task->description }}</td>

        <td>{{ $task->due_date }}</td>

        <td>
            @if($task->completed)
                <span class="badge bg-success">
                    Selesai
                </span>
            @else
                <span class="badge bg-warning">
                    Belum Selesai
                </span>
            @endif
        </td>

        <td>

            @if(!$task->completed)

            <form action="/tasks/{{ $task->id }}/complete"
                  method="POST"
                  class="d-inline">

                @csrf

                <button class="btn btn-success btn-sm">
                    Selesaikan
                </button>

            </form>

            <a href="/tasks/{{ $task->id }}/edit"
               class="btn btn-warning btn-sm">
               Edit
            </a>

            <form action="/tasks/{{ $task->id }}"
                  method="POST"
                  class="d-inline">

                @csrf
                @method('DELETE')

                <button class="btn btn-danger btn-sm">
                    Hapus
                </button>

            </form>

            @endif

        </td>

    </tr>

    @empty

    <tr>
        <td colspan="5" class="text-center">
            Belum ada tugas
        </td>
    </tr>

    @endforelse

    </tbody>

</table>

@endsection