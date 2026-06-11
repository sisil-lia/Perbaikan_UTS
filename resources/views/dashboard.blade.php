@extends('layout')

@section('content')

<div class="row g-4">

    <div class="col-md-4">
        <div class="card p-4 border-0 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted">Total Tugas</h6>
                    <h1 class="fw-bold text-primary">{{ $total }}</h1>
                </div>
                <div style="font-size:50px;">
                    📋
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 border-0 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted">Tugas Selesai</h6>
                    <h1 class="fw-bold text-success">{{ $completed }}</h1>
                </div>
                <div style="font-size:50px;">
                    ✅
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4 border-0 shadow-sm">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="text-muted">Belum Selesai</h6>
                    <h1 class="fw-bold text-warning">{{ $pending }}</h1>
                </div>
                <div style="font-size:50px;">
                    ⏳
                </div>
            </div>
        </div>
    </div>

</div>

<div class="card mt-4 p-4 border-0 shadow-sm">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold mb-0">
            📅 Laporan Tugas Ke Depan
        </h4>

        <a href="/tasks" class="btn btn-primary">
            Kelola Tugas
        </a>
    </div>

    <table class="table table-hover align-middle">

        <thead class="table-light">
            <tr>
                <th>Tanggal</th>
                <th>Jumlah Tugas</th>
            </tr>
        </thead>

        <tbody>

        @forelse($upcoming as $item)

            <tr>
                <td>
                    {{ \Carbon\Carbon::parse($item->due_date)->format('d M Y') }}
                </td>

                <td>
                    <span class="badge bg-primary">
                        {{ $item->total }} Tugas
                    </span>
                </td>
            </tr>

        @empty

            <tr>
                <td colspan="2" class="text-center text-muted">
                    Belum ada tugas yang akan datang
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection