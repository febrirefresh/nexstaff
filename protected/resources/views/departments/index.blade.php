@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Departements
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
                            <h4 class="card-title">List Departements</h4>
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
                                        onclick="window.location.href='{{ route('departments.create') }}'">Tambah
                                        Departemen</button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-selectable card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Departemen</th>
                                        <th>Nama Kepala Departemen</th>
                                        <th>Jumlah Karyawan</th>
                                        <th class="w-1"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($departments->isEmpty())
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada data departemen.</td>
                                        </tr>
                                    @endif
                                    @foreach ($departments as $index => $department)
                                        <tr>
                                            <td>{{ $departments->firstItem() + $index }}</td>
                                            <td>{{ $department->name }}</td>
                                            <td>{{ $department->headEmployee ? $department->headEmployee->name : 'N/A' }}
                                            </td>
                                            <td>{{ $employees->where('department_id', $department->id)->count() ?: '0' }}
                                            </td>
                                            <td>
                                                <a href="{{ route('departments.edit', $department->id) }}"
                                                    class="btn btn-sm btn-primary">Edit</a>
                                                <form action="{{ route('departments.destroy', $department->id) }}"
                                                    method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus departemen ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-muted">Showing <span>{{ $departments->firstItem() }}</span> to
                                <span>{{ $departments->lastItem() }}</span> of <span>{{ $departments->total() }}</span>
                                entries
                            </p>
                            <ul class="pagination m-0 ms-auto">
                                {{ $departments->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Cari Departemen</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('departments.index') }}" method="GET">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="text" name="search" class="form-control"
                                        placeholder="Cari Departemen..." value="{{ request('search') }}">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
