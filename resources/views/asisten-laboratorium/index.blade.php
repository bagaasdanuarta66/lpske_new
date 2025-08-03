@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container">
        <h1 class="section-title">Tim Laboratorium</h1>
        
        <!-- Navigation Tabs -->
        <ul class="nav nav-tabs mb-4" id="labTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $activeMenu === 'kepala' ? 'active' : '' }}" 
                        id="kepala-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#kepala" 
                        type="button" 
                        role="tab" 
                        aria-controls="kepala" 
                        aria-selected="{{ $activeMenu === 'kepala' ? 'true' : 'false' }}">
                    Kepala Laboratorium
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ $activeMenu === 'dosen' ? 'active' : '' }}" 
                        id="dosen-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#dosen" 
                        type="button" 
                        role="tab" 
                        aria-controls="dosen" 
                        aria-selected="{{ $activeMenu === 'dosen' ? 'true' : 'false' }}">
                    Dosen Laboratorium
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link {{ str_starts_with($activeMenu, 'asisten') ? 'active' : '' }}" 
                        id="asisten-tab" 
                        data-bs-toggle="tab" 
                        data-bs-target="#asisten" 
                        type="button" 
                        role="tab" 
                        aria-controls="asisten" 
                        aria-selected="{{ str_starts_with($activeMenu, 'asisten') ? 'true' : 'false' }}">
                    Asisten Laboratorium
                </button>
            </li>
        </ul>
        
        <!-- Tab Content -->
        <div class="tab-content" id="labTabsContent">
            <!-- Kepala Laboratorium Tab -->
            <div class="tab-pane fade {{ $activeMenu === 'kepala' ? 'show active' : '' }}" 
                 id="kepala" 
                 role="tabpanel" 
                 aria-labelledby="kepala-tab">
                @if(isset($kepala) && $kepala)
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="card shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="{{ $kepala->photo ? asset('storage/' . $kepala->photo) : asset('images/avatar-placeholder.png') }}" 
                                         class="img-fluid rounded-start" 
                                         alt="{{ $kepala->name }}" 
                                         style="height: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h3 class="card-title">{{ $kepala->name }}</h3>
                                        <p class="text-muted">{{ $kepala->position ?? 'Kepala Laboratorium' }}</p>
                                        <hr>
                                        <dl class="row">
                                            @if($kepala->nip)
                                            <dt class="col-sm-4">NIP</dt>
                                            <dd class="col-sm-8">{{ $kepala->nip }}</dd>
                                            @endif
                                            
                                            @if($kepala->expertise)
                                            <dt class="col-sm-4">Bidang Keahlian</dt>
                                            <dd class="col-sm-8">{{ $kepala->expertise }}</dd>
                                            @endif
                                            
                                            @if($kepala->email)
                                            <dt class="col-sm-4">Email</dt>
                                            <dd class="col-sm-8">
                                                <a href="mailto:{{ $kepala->email }}">{{ $kepala->email }}</a>
                                            </dd>
                                            @endif
                                            
                                            @if($kepala->phone)
                                            <dt class="col-sm-4">Telepon</dt>
                                            <dd class="col-sm-8">
                                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $kepala->phone) }}" target="_blank">
                                                    {{ $kepala->phone }}
                                                </a>
                                            </dd>
                                            @endif
                                        </dl>
                                        
                                        @if($kepala->bio)
                                        <div class="mt-3">
                                            <h6>Tentang:</h6>
                                            <div>{!! $kepala->bio !!}</div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="alert alert-info">Data kepala laboratorium belum tersedia.</div>
                @endif
            </div>
            
            <!-- Dosen Laboratorium Tab -->
            <div class="tab-pane fade {{ $activeMenu === 'dosen' ? 'show active' : '' }}" 
                 id="dosen" 
                 role="tabpanel" 
                 aria-labelledby="dosen-tab">
                @if(isset($dosen) && $dosen->count() > 0)
                <div class="row g-4">
                    @foreach($dosen as $d)
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $d->photo ? asset('storage/' . $d->photo) : asset('images/avatar-placeholder.png') }}" 
                                         class="img-fluid rounded-start" 
                                         alt="{{ $d->name }}" 
                                         style="height: 100%; object-fit: cover;">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $d->name }}</h5>
                                        <p class="text-muted">{{ $d->position ?? 'Dosen Laboratorium' }}</p>
                                        <hr>
                                        <dl class="row">
                                            @if($d->nip)
                                            <dt class="col-sm-4">NIP</dt>
                                            <dd class="col-sm-8">{{ $d->nip }}</dd>
                                            @endif
                                            
                                            @if($d->expertise)
                                            <dt class="col-sm-4">Bidang Keahlian</dt>
                                            <dd class="col-sm-8">{{ $d->expertise }}</dd>
                                            @endif
                                            
                                            @if($d->email)
                                            <dt class="col-sm-4">Email</dt>
                                            <dd class="col-sm-8">
                                                <a href="mailto:{{ $d->email }}">{{ $d->email }}</a>
                                            </dd>
                                            @endif
                                            
                                            @if($d->phone)
                                            <dt class="col-sm-4">Telepon</dt>
                                            <dd class="col-sm-8">
                                                <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $d->phone) }}" target="_blank">
                                                    {{ $d->phone }}
                                                </a>
                                            </dd>
                                            @endif
                                        </dl>
                                        
                                        @if($d->bio)
                                        <div class="mt-3">
                                            <h6>Tentang:</h6>
                                            <div>{!! $d->bio !!}</div>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="alert alert-info">Data dosen laboratorium belum tersedia.</div>
                @endif
            </div>
            
            <!-- Asisten Laboratorium Tab -->
            <div class="tab-pane fade {{ str_starts_with($activeMenu, 'asisten') ? 'show active' : '' }}" 
                 id="asisten" 
                 role="tabpanel" 
                 aria-labelledby="asisten-tab">
                <!-- Angkatan Filter -->
                @if(isset($angkatanList) && $angkatanList->count() > 0)
                <div class="mb-4">
                    <div class="btn-group" role="group" aria-label="Filter Angkatan">
                        <a href="{{ route('asisten-laboratorium') }}" 
                           class="btn {{ is_null($angkatan) ? 'btn-primary' : 'btn-outline-primary' }}">
                            Semua
                        </a>
                        @foreach($angkatanList as $tahun)
                        <a href="{{ route('asisten.angkatan', ['angkatan' => $tahun]) }}" 
                           class="btn {{ isset($angkatan) && $angkatan == $tahun ? 'btn-primary' : 'btn-outline-primary' }}">
                            Angkatan {{ $tahun }}
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <!-- Asisten List -->
                @if(isset($asisten) && $asisten->count() > 0)
                <div class="row g-4">
                    @foreach($asisten as $a)
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <div class="text-center mt-4">
                                <img src="{{ $a->photo ? asset('storage/' . $a->photo) : asset('images/avatar-placeholder.png') }}" 
                                     class="rounded-circle" 
                                     width="150" 
                                     height="150" 
                                     alt="{{ $a->name }}"
                                     style="object-fit: cover;">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $a->name }}</h5>
                                @if($a->nim)
                                <p class="text-muted">NIM: {{ $a->nim }}</p>
                                @endif
                                <p class="card-text">
                                    @if($a->study_program)
                                    <span class="badge bg-primary">{{ $a->study_program }}</span>
                                    @endif
                                    @if($a->angkatan)
                                    <span class="badge bg-secondary">Angkatan {{ $a->angkatan }}</span>
                                    @endif
                                </p>
                                <div class="mt-3">
                                    @if($a->email)
                                    <a href="mailto:{{ $a->email }}" class="btn btn-sm btn-outline-primary me-2" title="Email">
                                        <i class="bi bi-envelope"></i>
                                    </a>
                                    @endif
                                    @if($a->phone)
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $a->phone) }}" 
                                       class="btn btn-sm btn-outline-success" 
                                       target="_blank"
                                       title="WhatsApp">
                                        <i class="bi bi-whatsapp"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="alert alert-info">Tidak ada data asisten yang tersedia.</div>
                @endif
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
    // Activate tab based on URL hash
    document.addEventListener('DOMContentLoaded', function() {
        const hash = window.location.hash;
        if (hash) {
            const tabTrigger = document.querySelector(`[data-bs-target="${hash}"]`);
            if (tabTrigger) {
                const tab = new bootstrap.Tab(tabTrigger);
                tab.show();
            }
        }
    });
</script>
@endpush
@endsection
