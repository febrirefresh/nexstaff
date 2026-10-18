@extends('layouts.app')

@section('content')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Tambah Karyawan
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
                            <h4 class="card-title">Form Tambah Karyawan</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('employees.store') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="mb-3">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="text" class="form-control" id="nik" name="nik" required>
                                </div>
                                <div class="mb-3">
                                    <label for="full_name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">No. Telepon</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
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
                                    <label for="position_id" class="form-label">Jabatan</label>
                                    <select class="form-control" id="position_id" name="position_id" required>
                                        <option value="">Pilih Jabatan</option>
                                        @foreach ($positions as $position)
                                            <option value="{{ $position->id }}">{{ $position->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="manager_id" class="form-label">Atasan</label>
                                    <select class="form-control" id="manager_id" name="manager_id">
                                        <option value="">Pilih Atasan</option>
                                        @foreach ($managers as $manager)
                                            <option value="{{ $manager->id }}">{{ $manager->full_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="employment_status" class="form-label">Status Karyawan</label>
                                    <select class="form-control" id="employment_status" name="employment_status" required>
                                        <option value="">Pilih Status Karyawan</option>
                                        <option value="Kontrak">Kontrak</option>
                                        <option value="Tetap">Tetap</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="join_date" class="form-label">Tanggal Bergabung</label>
                                    <input type="date" class="form-control" id="join_date" name="join_date" required>
                                </div>
                                <div class="mb-3">
                                    <label for="probation_end_date" class="form-label">Tanggal Selesai Kontrak</label>
                                    <input type="date" class="form-control" id="probation_end_date"
                                        name="probation_end_date">
                                </div>
                                <div class="mb-3">
                                    <label for="npwp" class="form-label">NPWP</label>
                                    <input type="text" class="form-control" id="npwp" name="npwp">
                                </div>
                                <div class="mb-3">
                                    <label for="bpjs_kesehatan_no" class="form-label">BPJS Kesehatan</label>
                                    <input type="text" class="form-control" id="bpjs_kesehatan_no"
                                        name="bpjs_kesehatan_no">
                                </div>
                                <div class="mb-3">
                                    <label for="bpjs_tk_no" class="form-label">BPJS Ketenagakerjaan</label>
                                    <input type="text" class="form-control" id="bpjs_tk_no" name="bpjs_tk_no">
                                </div>
                                <div class="mb-3">
                                    <label for="bank_name" class="form-label">Nama Bank</label>
                                    <input type="text" class="form-control" id="bank_name" name="bank_name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="bank_account_number" class="form-label">Rekening Bank</label>
                                    <input type="text" class="form-control" id="bank_account_number"
                                        name="bank_account_number" required>
                                </div>
                                <div class="mb-3">
                                    <label for="bank_account_holder" class="form-label">Nama Pemilik Rekening</label>
                                    <input type="text" class="form-control" id="bank_account_holder"
                                        name="bank_account_holder" required>
                                </div>
                                <div class="mb-3">
                                    <label for="leave_balance" class="form-label">Cuti</label>
                                    <input type="number" class="form-control" id="leave_balance" name="leave_balance"
                                        rows="3" required>
                                </div>
                                <div class="mb-3">
                                    <label for="is_active" class="form-label">Status</label>
                                    <select class="form-control" id="is_active" name="is_active" required>
                                        <option value="1">Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('employees.index') }}" class="btn btn-secondary">Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
