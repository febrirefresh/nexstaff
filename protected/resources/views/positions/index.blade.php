@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Jabatan
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">List Jabatan</h4>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-secondary">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="10"
                                            size="3" aria-label="Invoices count" disabled />
                                    </div>
                                    entries
                                </div>
                                <div class="ms-auto text-secondary">
                                    <button class="btn btn-primary"
                                        onclick="window.location.href='{{ route('positions.create') }}'">Tambah
                                        Jabatan</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table
                                class="table table-selectable card-table table-vcenter text-nowrap datatable table-striped table-hover table-bordered border-top table-sm align-middle">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Jabatan</th>
                                        <th>Departemen</th>
                                        <th>Jumlah Karyawan</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($positions->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada data jabatan.</td>
                                        </tr>
                                    @endif
                                    @foreach ($positions as $index => $position)
                                        <tr>
                                            <td>{{ $positions->firstItem() + $index }}</td>
                                            <td>{{ $position->title }}</td>
                                            <td>{{ $position->department->name ?? 'N/A' }}</td>
                                            <td>{{ $employees->where('position_id', $position->id)->count() ?: 0 }}</td>
                                            <td>
                                                <div class="btn-list flex-nowrap">
                                                    <a href="{{ route('positions.edit', $position->id) }}"
                                                        class="btn btn-sm btn-primary">Edit</a>
                                                    <form action="{{ route('positions.destroy', $position->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this position?')">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-muted">Showing <span>{{ $positions->firstItem() }}</span> to
                                <span>{{ $positions->lastItem() }}</span> of <span>{{ $positions->total() }}</span> entries
                            </p>
                            <ul class="pagination m-0 ms-auto">
                                {{ $positions->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Cari Jabatan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('positions.index') }}" method="GET">
                                <div class="mb-3">
                                    <label for="search" class="form-label">Nama Jabatan</label>
                                    <input type="text" name="search" id="search" class="form-control"
                                        value="{{ request('search') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
