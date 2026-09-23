@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <div class="row row-deck row-cards">
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status-bottom bg-primary"></div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">REKRUTMEN</div>
                        </div>
                        <div class="h1 mb-3">5 PELAMAR</div>
                        <div class="d-flex mb-2">
                            <div>Dari <span class="text-blue">3 Lowongan Kerja</span> Aktif</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">BUKA REKRUTMEN</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status-bottom bg-success"></div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">TINGKAT KEHADIRAN</div>
                        </div>
                        <div class="h1 mb-3">90%</div>
                        <div class="d-flex mb-2">
                            <div>Bulan: September 2026</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-success">BUKA ABSENSI DAN CUTI</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status-bottom bg-warning"></div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">IZIN/SAKIT/CUTI</div>
                        </div>
                        <div class="h1 mb-3">3 ORANG</div>
                        <div class="d-flex mb-2">
                            <div>Tanggal: 12 September 2026</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-warning">BUKA ABSENSI DAN CUTI</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card">
                    <div class="card-status-bottom bg-info"></div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="subheader">PENGGAJIAN</div>
                        </div>
                        <div class="h1 mb-3">RP. 120.000.000</div>
                        <div class="d-flex mb-2">
                            <div>Periode: September 2026</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-info">HITUNG DAN CETAK SLIP</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Persetujuan Cuti Menunggu Tindakan</h3>
                            </div>
                            <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col text-truncate">
                                            <a href="#" class="text-reset d-block">Fulan bin Fulan</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">Cuti Tahunan . 2 Hari
                                                (21 Sept 2026 - 22 Sept 2026)</div>
                                            <div class="d-block text-secondary text-truncate mt-n1">Keperluan: Acara
                                                Keluarga</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-success">Setujui</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col text-truncate">
                                            <a href="#" class="text-reset d-block">Fulan binti Fulan</a>
                                            <div class="d-block text-secondary text-truncate mt-n1">Cuti Tahunan . 1 Hari
                                                (21 Sept 2026)</div>
                                            <div class="d-block text-secondary text-truncate mt-n1">Keperluan: Acara
                                                Keluarga</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" class="btn btn-success">Setujui</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row row-cards">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Agenda Wawancara & Seleksi Kandidat</h3>
                            </div>
                            <div class="list-group list-group-flush list-group-hoverable">
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col text-truncate">
                                            <a href="#" class="text-reset d-block">Aditya Nugroho <span
                                                    class="badge bg-blue-lt">Wawancara User</span></a>
                                            <div class="d-block text-secondary text-truncate mt-n1">Junior Programmer</div>
                                        </div>
                                        <div class="col-auto">
                                            <span href="#" class="text-reset d-block">2026-09-22 13:00</span>
                                            <span href="#" class="text-primary">Skor Asesmen: 85%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item">
                                    <div class="row align-items-center">
                                        <div class="col text-truncate">
                                            <a href="#" class="text-reset d-block">Larasati Putri Dewi <span
                                                    class="badge bg-blue-lt">Psikotes</span></a>
                                            <div class="d-block text-secondary text-truncate mt-n1">HR Officer</div>
                                        </div>
                                        <div class="col-auto">
                                            <span href="#" class="text-reset d-block">2026-09-22 13:30</span>
                                            <span href="#" class="text-primary">Skor Asesmen: 89%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
