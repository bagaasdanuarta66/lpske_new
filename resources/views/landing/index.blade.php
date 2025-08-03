@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section position-relative overflow-hidden" id="home" style="background: linear-gradient(120deg, #e0eafc 0%, #cfdef3 100%); min-height: 80vh;">
        <div class="container py-5">
            <div class="row align-items-center justify-content-between flex-column-reverse flex-lg-row">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-3 fw-bold mb-4 animate__animated animate__fadeInDown" style="letter-spacing: -1px;">
                        Selamat Datang di <span class="text-primary">LPSKE</span>
                    </h1>
                    <p class="lead mb-4 animate__animated animate__fadeInUp" style="max-width: 500px;">
                        Laboratorium Perancangan Sistem Kerja dan Ergonomi (LPSKE) merupakan salah satu laboratorium unggulan di Jurusan Teknik Industri Universitas Sebelas Maret.
                    </p>
                    <div class="d-flex flex-wrap gap-3 animate__animated animate__fadeInUp">
                        <a href="#about" class="btn btn-gradient btn-lg shadow px-4 py-2" style="background: linear-gradient(90deg, #007bff 0%, #00c6ff 100%); color: #fff; border: none;">
                            <i class="fas fa-info-circle me-2"></i> Tentang Kami
                        </a>
                        <a href="#contact" class="btn btn-outline-primary btn-lg shadow px-4 py-2">
                            <i class="fas fa-envelope me-2"></i> Hubungi Kami
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 mb-5 mb-lg-0 text-center animate__animated animate__zoomIn">
                    <div class="hero-img-wrapper position-relative">
                        <img src="{{ asset('images/title_lpske.png') }}" alt="LPSKE Hero Image" class="img-fluid rounded-4 shadow-lg" style="max-height: 350px; object-fit: contain;">
                        <div class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-primary shadow" style="font-size: 1rem; padding: 0.75em 1.5em;">
                            <i class="fas fa-flask me-2"></i> LPSKE
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg class="position-absolute bottom-0 start-0 w-100" height="80" viewBox="0 0 1440 80" fill="none" xmlns="http://www.w3.org/2000/svg" style="z-index:1;">
            <path fill="#fff" fill-opacity="1" d="M0,64L48,58.7C96,53,192,43,288,53.3C384,64,480,96,576,101.3C672,107,768,85,864,74.7C960,64,1056,64,1152,58.7C1248,53,1344,43,1392,37.3L1440,32L1440,160L1392,160C1344,160,1248,160,1152,160C1056,160,960,160,864,160C768,160,672,160,576,160C480,160,384,160,288,160C192,160,96,160,48,160L0,160Z"></path>
        </svg>
    </section>

    <!-- About Section -->
    <section class="py-5" id="about" style="background: #f8fafc;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="section-title mb-4 fw-bold text-primary" style="font-size:2.2rem;">
                        <i class="fas fa-users-cog me-2"></i> Tentang LPSKE
                    </h2>
                    <p class="mb-3 fs-5 text-dark">
                        Laboratorium Perancangan Sistem Kerja dan Ergonomi (LPSKE) merupakan salah satu dari enam laboratorium yang dimiliki oleh Teknik Industri Universitas Sebelas Maret. Laboratorium ini berfokus pada bidang keminatan rekayasa ergonomi, perancangan sistem kerja, serta manajemen lingkungan dalam keilmuan Teknik Industri.
                    </p>
                    <p class="fs-5 text-dark">
                        Kami berkomitmen untuk memberikan pendidikan, penelitian, dan pengabdian masyarakat yang berkualitas di bidang sistem kerja dan ergonomi untuk mendukung pengembangan sumber daya manusia yang unggul dan berdaya saing.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-lg rounded-4">
                        <div class="card-body p-4">
                            <h5 class="card-title fw-bold mb-3 text-primary"><i class="fas fa-book-open me-2"></i> Mata Kuliah</h5>
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-muted mb-2">Wajib:</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Pengetahuan Lingkungan</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Ergonomi</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Psikologi Industri</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Pengantar Rekayasa Industri</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> Analisis & Perancangan Sistem Kerja</li>
                                        <li><i class="fas fa-check-circle text-success me-2"></i> K3 (Keselamatan & Kesehatan Kerja)</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <h6 class="text-muted mb-2">Pilihan:</h6>
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="fas fa-star text-warning me-2"></i> Ergonomi Fisik</li>
                                        <li><i class="fas fa-star text-warning me-2"></i> Ergonomi Kognitif</li>
                                        <li><i class="fas fa-star text-warning me-2"></i> Ergonomi Lingkungan</li>
                                        <li><i class="fas fa-star text-warning me-2"></i> Ergonomi untuk Anak-anak</li>
                                        <li><i class="fas fa-star text-warning me-2"></i> Ergonomi untuk Berkebutuhan Khusus</li>
                                        <li><i class="fas fa-star text-warning me-2"></i> Perbaikan Metode Kerja</li>
                                        <li><i class="fas fa-star text-warning me-2"></i> Karakuri</li>
                                        <li><i class="fas fa-star text-warning me-2"></i> Aplikasi Ergonomi Industri</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logbook Section -->
    @if(isset($recentLogbooks) && $recentLogbooks->count() > 0)
    <section class="py-5" style="background: linear-gradient(120deg, #f8fafc 60%, #e0eafc 100%);">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title fw-bold text-primary"><i class="fas fa-clipboard-list me-2"></i> Aktivitas Terkini</h2>
                <p class="text-muted">Catatan kegiatan terbaru dari asisten laboratorium</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="timeline">
                        @foreach($recentLogbooks as $logbook)
                        <div class="timeline-item mb-5">
                            <div class="card border-0 shadow-lg rounded-4">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <h3 class="h5 mb-0 text-primary fw-bold">
                                            <i class="fas fa-tasks me-2"></i>{{ $logbook->activity }}
                                        </h3>
                                        <div>
                                            @if($logbook->date && $logbook->date->isToday())
                                            <span class="badge bg-gradient-primary" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">Hari Ini</span>
                                            @elseif($logbook->date && $logbook->date->isYesterday())
                                            <span class="badge bg-secondary">Kemarin</span>
                                            @endif
                                        </div>
                                    </div>
                                    @if($logbook->date)
                                    <p class="text-muted mb-2">
                                        <i class="far fa-calendar-alt me-1"></i>
                                        {{ $logbook->date->format('l, d F Y') }}
                                        @if($logbook->asisten)
                                        <span class="ms-3">
                                            <i class="fas fa-user-tie me-1"></i>
                                            {{ $logbook->asisten->name }}
                                        </span>
                                        @endif
                                    </p>
                                    @endif
                                    @if(!empty($logbook->description))
                                    <div class="logbook-content mt-3 fs-6" style="color:#222;">
                                        {!! nl2br(e($logbook->description)) !!}
                                    </div>
                                    @endif
                                    <div class="mt-3 text-muted small">
                                        <i class="far fa-clock me-1"></i>
                                        {{ $logbook->created_at->diffForHumans() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <section class="py-5" style="background: linear-gradient(120deg, #f8fafc 60%, #e0eafc 100%);">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title text-center fw-bold text-primary"><i class="fas fa-clipboard-list me-2"></i> Logbooks</h2>
                <p class="text-muted mb-4">Belum ada catatan kegiatan terbaru</p>
            </div>
        </div>
    </section>
    @endif

    <!-- Facilities Section -->
    <section class="py-5" id="facilities" style="background: #f8fafc;">
        <div class="container">
            <h2 class="section-title text-center fw-bold text-primary mb-5"><i class="fas fa-building me-2"></i> Fasilitas & SOP</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 rounded-4 hover-shadow transition-all">
                        <div class="position-relative">
                            <img src="{{ asset('images/lab-1.jpg') }}" class="card-img-top rounded-top-4" alt="Lab 1" style="height:220px;object-fit:cover;">
                            <span class="badge bg-gradient-primary position-absolute top-0 end-0 m-3" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">Ergonomi</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Laboratorium Ergonomi</h5>
                            <p class="card-text">Dilengkapi dengan peralatan pengukuran antropometri dan analisis postur kerja.</p>
                            <button type="button" class="btn btn-gradient w-100 mt-2" data-bs-toggle="modal" data-bs-target="#sopModal1" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">
                                <i class="fas fa-file-alt me-2"></i> Lihat SOP
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 rounded-4 hover-shadow transition-all">
                        <div class="position-relative">
                            <img src="{{ asset('images/lab-2.jpg') }}" class="card-img-top rounded-top-4" alt="Lab 2" style="height:220px;object-fit:cover;">
                            <span class="badge bg-gradient-primary position-absolute top-0 end-0 m-3" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">Sistem Kerja</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Laboratorium Perancangan Sistem Kerja</h5>
                            <p class="card-text">Fasilitas untuk praktikum dan penelitian di bidang perancangan sistem kerja.</p>
                            <button type="button" class="btn btn-gradient w-100 mt-2" data-bs-toggle="modal" data-bs-target="#sopModal2" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">
                                <i class="fas fa-file-alt me-2"></i> Lihat SOP
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 rounded-4 hover-shadow transition-all">
                        <div class="position-relative">
                            <img src="{{ asset('images/lab-3.jpg') }}" class="card-img-top rounded-top-4" alt="Lab 3" style="height:220px;object-fit:cover;">
                            <span class="badge bg-gradient-primary position-absolute top-0 end-0 m-3" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">Diskusi</span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Ruang Diskusi</h5>
                            <p class="card-text">Tempat diskusi dan presentasi untuk mahasiswa dan peneliti.</p>
                            <button type="button" class="btn btn-gradient w-100 mt-2" data-bs-toggle="modal" data-bs-target="#sopModal3" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">
                                <i class="fas fa-file-alt me-2"></i> Lihat SOP
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Include SOP Modals -->
    @include('landing.sop_modals')

    <!-- Asisten Laboratorium Section -->
    <section class="py-5" id="asisten" style="background: linear-gradient(120deg, #e0eafc 0%, #f8fafc 100%);">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title mb-0 fw-bold text-primary"><i class="fas fa-user-friends me-2"></i> Asisten Laboratorium</h2>
                <a href="{{ route('asisten-laboratorium') }}" class="btn btn-gradient px-4" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">
                    <i class="fas fa-users me-2"></i> Lihat Semua
                </a>
            </div>
            <div class="row g-4">
                @forelse($asisten as $asistenItem)
                <div class="col-md-4">
                    <div class="card h-100 text-center border-0 shadow-lg rounded-4 hover-shadow transition-all">
                        <div class="position-relative" style="height: 220px; overflow: hidden;">
                            @if($asistenItem->photo)
                                <img src="{{ asset('storage/' . $asistenItem->photo) }}" class="card-img-top w-100 h-100 rounded-top-4" alt="{{ $asistenItem->name }}" style="object-fit: cover;">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light w-100 h-100 rounded-top-4" style="height:220px;">
                                    <i class="fas fa-user fa-5x text-muted"></i>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-primary">{{ $asistenItem->name }}</h5>
                            @if($asistenItem->nim)
                                <p class="card-text text-muted mb-1"><i class="fas fa-id-card me-1"></i> NIM: {{ $asistenItem->nim }}</p>
                            @endif
                            @if($asistenItem->angkatan)
                                <p class="card-text mb-1"><i class="fas fa-calendar-alt me-1"></i> Angkatan: {{ $asistenItem->angkatan }}</p>
                            @endif
                            @if($asistenItem->study_program)
                                <p class="card-text"><i class="fas fa-graduation-cap me-1"></i> {{ $asistenItem->study_program }}</p>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center">
                    <div class="alert alert-info">Data asisten belum tersedia</div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Alumni Story Section -->
    <section class="py-5" id="alumni" style="background: #f8fafc;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-center fw-bold text-primary"><i class="fas fa-user-graduate me-2"></i> Kisah Inspiratif Alumni</h2>
                <p class="lead text-muted">Temukan pengalaman dan kesuksesan para alumni kami</p>
            </div>
            <div class="row g-4">
                @php
                    $featuredAlumni = \App\Models\AlumniStory::where('is_active', true)
                        ->orderBy('angkatan', 'desc')
                        ->take(3)
                        ->get();
                @endphp
                @forelse($featuredAlumni as $alumni)
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border-0 shadow-lg rounded-4 hover-shadow transition-all">
                        <div class="position-relative" style="height: 260px; overflow: hidden;">
                            @if($alumni->foto)
                                <img src="{{ asset('storage/' . $alumni->foto) }}" 
                                     class="card-img-top w-100 h-100 rounded-top-4" 
                                     alt="{{ $alumni->nama }}" 
                                     style="object-fit: cover; transition: transform 0.3s ease;"
                                     onmouseover="this.style.transform='scale(1.05)'"
                                     onmouseout="this.style.transform='scale(1)'">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light w-100 h-100 rounded-top-4" style="height:260px;">
                                    <i class="fas fa-user-graduate fa-5x text-muted"></i>
                                </div>
                            @endif
                            <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(transparent, rgba(0,0,0,0.7));">
                                <h5 class="text-white mb-0">{{ $alumni->nama }}</h5>
                                <span class="text-white-50">Angkatan {{ $alumni->angkatan }}</span>
                            </div>
                        </div>
                        <div class="card-body">
                            @if($alumni->pekerjaan || $alumni->perusahaan)
                                <p class="text-primary mb-2">
                                    <i class="fas fa-briefcase me-2"></i>
                                    @if($alumni->pekerjaan && $alumni->perusahaan)
                                        {{ $alumni->pekerjaan }} di {{ $alumni->perusahaan }}
                                    @elseif($alumni->pekerjaan)
                                        {{ $alumni->pekerjaan }}
                                    @else
                                        {{ $alumni->perusahaan }}
                                    @endif
                                </p>
                            @endif
                            @if($alumni->testimoni)
                                <div class="testimonial-text mb-3 text-dark" style="min-height: 70px;">
                                    <i class="fas fa-quote-left text-muted me-2"></i>
                                    {{ \Illuminate\Support\Str::limit($alumni->testimoni, 180) }}
                                </div>
                            @endif
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <button type="button" class="btn btn-gradient btn-sm px-3" data-bs-toggle="modal" data-bs-target="#alumniModal{{ $alumni->id }}" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                        <!-- Alumni Modal -->
                        <div class="modal fade" id="alumniModal{{ $alumni->id }}" tabindex="-1" aria-labelledby="alumniModalLabel{{ $alumni->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content rounded-4">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title fw-bold text-primary">Kisah {{ $alumni->nama }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4 text-center">
                                                @if($alumni->foto)
                                                    <img src="{{ asset('storage/' . $alumni->foto) }}" class="img-fluid rounded-circle mb-3 shadow" alt="{{ $alumni->nama }}" style="width: 180px; height: 180px; object-fit: cover;">
                                                @else
                                                    <div class="d-flex align-items-center justify-content-center bg-light rounded-circle mb-3" style="width: 180px; height: 180px; margin: 0 auto;">
                                                        <i class="fas fa-user-graduate fa-4x text-muted"></i>
                                                    </div>
                                                @endif
                                                <h4 class="mb-1">{{ $alumni->nama }}</h4>
                                                <p class="text-muted mb-2">Angkatan {{ $alumni->angkatan }}</p>
                                                @if($alumni->pekerjaan || $alumni->perusahaan)
                                                    <p class="text-primary">
                                                        <i class="fas fa-briefcase me-2"></i>
                                                        @if($alumni->pekerjaan && $alumni->perusahaan)
                                                            {{ $alumni->pekerjaan }} di {{ $alumni->perusahaan }}
                                                        @elseif($alumni->pekerjaan)
                                                            {{ $alumni->pekerjaan }}
                                                        @else
                                                            {{ $alumni->perusahaan }}
                                                        @endif
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="col-md-8">
                                                <h5 class="mb-3 fw-bold text-primary">Kisah Inspiratif</h5>
                                                <div class="testimonial-text fs-5 text-dark">
                                                    {!! nl2br(e($alumni->testimoni)) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <div class="display-1 text-muted mb-3">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h3>Belum Ada Cerita Alumni</h3>
                        <p class="lead">Cerita inspiratif dari alumni akan segera hadir</p>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="text-center mt-5">
                <a href="{{ route('public.alumni.index') }}" class="btn btn-gradient px-4 py-2" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">
                    <i class="fas fa-book-reader me-2"></i> Lihat Semua Cerita Alumni
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Content Section -->
    <section class="py-5" id="prestasi-kegiatan" style="background: linear-gradient(120deg, #e0eafc 0%, #f8fafc 100%);">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title mb-0 fw-bold text-primary"><i class="fas fa-trophy me-2"></i> Prestasi & Kegiatan</h2>
                <a href="{{ route('prestasi-kegiatan.index') }}" class="btn btn-gradient px-4" style="background: linear-gradient(90deg,#007bff,#00c6ff);color:#fff;">
                    <i class="fas fa-list me-2"></i> Lihat Semua
                </a>
            </div>
            <div class="row g-4">
                @forelse($featuredItems as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-lg border-0 rounded-4 hover-shadow transition-all">
                        @if($item->is_video)
                            <div class="ratio ratio-16x9 rounded-top-4 overflow-hidden">
                                <iframe 
                                    src="{{ $item->video_url }}" 
                                    title="{{ $item->judul }}" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen
                                    style="border-radius: 1rem 1rem 0 0;">
                                </iframe>
                            </div>
                        @else
                            <img src="{{ $item->gambar_url }}" class="card-img-top rounded-top-4" alt="{{ $item->judul }}" style="height: 200px; object-fit: cover;">
                        @endif
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="badge {{ $item->jenis === 'prestasi' ? 'bg-success' : 'bg-info' }} text-uppercase px-3 py-2" style="font-size:0.9em;">
                                    <i class="fas {{ $item->jenis === 'prestasi' ? 'fa-trophy' : 'fa-bolt' }} me-1"></i>
                                    {{ ucfirst($item->jenis) }}
                                </span>
                                @if($item->is_featured)
                                    <span class="badge bg-warning text-dark px-3 py-2">
                                        <i class="fas fa-star me-1"></i> Tampil di Beranda
                                    </span>
                                @endif
                            </div>
                            <h5 class="card-title fw-bold text-primary">{{ $item->judul }}</h5>
                            @if($item->deskripsi)
                                <p class="card-text text-dark">{{ Str::limit($item->deskripsi, 100) }}</p>
                            @endif
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <small class="text-muted"><i class="far fa-calendar-alt me-1"></i>{{ $item->tanggal->format('d M Y') }}</small>
                                <a href="{{ route('prestasi-kegiatan.show', $item) }}" class="btn btn-sm btn-outline-primary px-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">Belum ada konten yang ditampilkan</div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Alumni Modal (Gallery) -->
    @for($i = 1; $i <= 4; $i++)
    <div class="modal fade" id="alumni{{ $i }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-4">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold text-primary">Alumni {{ $i }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('images/gallery-' . $i . '.jpg') }}" class="img-fluid rounded-4 shadow" alt="Gallery {{ $i }}">
                </div>
            </div>
        </div>
    </div>
    @endfor

    {{-- Custom CSS for UI/UX upgrade --}}
    <style>
        .btn-gradient {
            background: linear-gradient(90deg,#007bff,#00c6ff);
            color: #fff;
            border: none;
            transition: background 0.3s, color 0.3s, box-shadow 0.3s;
        }
        .btn-gradient:hover, .btn-gradient:focus {
            background: linear-gradient(90deg,#0056b3,#00aaff);
            color: #fff;
            box-shadow: 0 4px 16px rgba(0,123,255,0.15);
        }
        .hover-shadow:hover, .hover-shadow:focus {
            box-shadow: 0 8px 32px rgba(0,123,255,0.15) !important;
            transform: translateY(-4px) scale(1.02);
        }
        .transition-all {
            transition: all 0.3s cubic-bezier(.4,2,.3,1);
        }
        .rounded-4 {
            border-radius: 1.25rem !important;
        }
        .bg-gradient-primary {
            background: linear-gradient(90deg,#007bff,#00c6ff) !important;
            color: #fff !important;
        }
        .timeline {
            position: relative;
        }
        .timeline-item {
            position: relative;
            padding-left: 30px;
        }
        .timeline-item:before {
            content: '';
            position: absolute;
            left: 10px;
            top: 0;
            width: 10px;
            height: 10px;
            background: #007bff;
            border-radius: 50%;
            z-index: 2;
        }
        .timeline-item:not(:last-child):after {
            content: '';
            position: absolute;
            left: 14px;
            top: 10px;
            width: 2px;
            height: calc(100% - 10px);
            background: #e0eafc;
            z-index: 1;
        }
        @media (max-width: 991.98px) {
            .hero-section .display-3 {
                font-size: 2.2rem;
            }
        }
    </style>
    {{-- Animate.css CDN for subtle animations --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
