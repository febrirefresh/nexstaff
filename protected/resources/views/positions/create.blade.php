@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Tambah Jabatan
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
                            <h4 class="card-title">Form Tambah Jabatan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('positions.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="title" class="form-label">Nama Jabatan</label>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="department_id" class="form-label">Departemen</label>
                                    <select class="form-control" id="department_id" name="department_id" required>
                                        <option value="">Pilih Departemen</option>
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="grade_level" class="form-label">Grade Level</label>
                                    <input type="text" class="form-control" id="grade_level" name="grade_level" required>
                                </div>
                                <div class="mb-3">
                                    <label for="min_salary" class="form-label">Gaji Minimal</label>
                                    <input type="number" class="form-control" id="min_salary" name="min_salary" required>
                                </div>
                                <div class="mb-3">
                                    <label for="max_salary" class="form-label">Gaji Maksimal</label>
                                    <input type="number" class="form-control" id="max_salary" name="max_salary" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('positions.index') }}" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
