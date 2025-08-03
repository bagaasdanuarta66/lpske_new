@extends('layout.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero-section" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <h1 class="display-4 fw-bold mb-4">Selamat Datang di LPSKE</h1>
                    <p class="lead mb-4">Laboratorium Perancangan Sistem Kerja dan Ergonomi (LPSKE) merupakan salah satu laboratorium unggulan di Jurusan Teknik Industri Universitas Sebelas Maret.</p>
                    <a href="#about" class="btn btn-primary btn-lg me-3">Tentang Kami</a>
                    <a href="#contact" class="btn btn-outline-primary btn-lg">Hubungi Kami</a>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('images/title_lpske.png') }}" alt="LPSKE Hero Image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="py-5" id="about">
        <div class="container">
            <h2 class="section-title">Tentang LPSKE</h2>
            <div class="row">
                <div class="col-lg-6">
                    <p>Laboratorium Perancangan Sistem Kerja dan Ergonomi (LPSKE) merupakan salah satu dari enam laboratorium yang dimiliki oleh Teknik Industri Universitas Sebelas Maret. Laboratorium ini berfokus pada bidang keminatan rekayasa ergonomi, perancangan sistem kerja, serta manajemen lingkungan dalam keilmuan Teknik Industri.</p>
                    <p>Kami berkomitmen untuk memberikan pendidikan, penelitian, dan pengabdian masyarakat yang berkualitas di bidang sistem kerja dan ergonomi untuk mendukung pengembangan sumber daya manusia yang unggul dan berdaya saing.</p>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Mata Kuliah</h5>
                            <h6 class="text-muted">Mata Kuliah Wajib:</h6>
                            <ul>
                                <li>Pengetahuan Lingkungan</li>
                                <li>Ergonomi</li>
                                <li>Psikologi Industri</li>
                                <li>Pengantar Rekayasa Industri</li>
                                <li>Analisis dan perancangan sistem kerja</li>
                                <li>Keselamatan & Kesehatan Kerja (K3)</li>
                            </ul>
                            <h6 class="text-muted mt-3">Mata Kuliah Pilihan:</h6>
                            <ul>
                                <li>Ergonomi Fisik</li>
                                <li>Ergonomi Kognitif   </li>
                                <li>Ergonomi Lingkungan</li>
                                <li>Ergonomi untuk Anak-anak</li>
                                <li>Ergonomi untuk orang berkebutuhan khusus</li>
                                <li>Perbaikan Metode Kerja</li>
                                <li>Karakuri</li>
                                <li>Aplikasi Ergonomi Industri</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Logbook Section -->
    @if(isset($recentLogbooks) && $recentLogbooks->count() > 0)
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title">Aktivitas Terkini</h2>
                <p class="text-muted">Catatan kegiatan terbaru dari asisten laboratorium</p>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    @foreach($recentLogbooks as $logbook)
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="h5 mb-0">{{ $logbook->activity }}</h3>
                                <div>
                                    @if($logbook->date && $logbook->date->isToday())
                                    <span class="badge bg-primary">Hari Ini</span>
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
                            <div class="logbook-content mt-3">
                                {!! nl2br(e($logbook->description)) !!}
                            </div>
                            @endif
                            
                            <div class="mt-3 text-muted small">
                                <i class="far fa-clock me-1"></i>
                                {{ $logbook->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>
            </div>
        </div>
    </section>
    @else
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title text-center">Logbooks</h2>
                <p class="text-muted mb-4">Belum ada catatan kegiatan terbaru</p>

            </div>
        </div>
    </section>
    @endif

    <!-- Facilities Section -->
    <section class="py-5 bg-light" id="facilities">
        <div class="container">
            <h2 class="section-title text-center">Fasilitas & SOP</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/lab-1.jpg') }}" class="card-img-top" alt="Lab 1">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Ergonomi</h5>
                            <p class="card-text">Dilengkapi dengan peralatan pengukuran antropometri dan analisis postur kerja.</p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#sopModal1">
                                Lihat SOP
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/lab-2.jpg') }}" class="card-img-top" alt="Lab 2">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Perancangan Sistem Kerja</h5>
                            <p class="card-text">Fasilitas untuk praktikum dan penelitian di bidang perancangan sistem kerja.</p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#sopModal2">
                                Lihat SOP
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/lab-3.jpg') }}" class="card-img-top" alt="Lab 3">
                        <div class="card-body">
                            <h5 class="card-title">Ruang Diskusi</h5>
                            <p class="card-text">Tempat diskusi dan presentasi untuk mahasiswa dan peneliti.</p>
                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#sopModal3">
                                Lihat SOP
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
    <section class="py-5" id="asisten">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title mb-0">Asisten Laboratorium</h2>
                <a href="{{ route('asisten-laboratorium') }}" class="btn btn-outline-primary">Lihat Semua</a>
            </div>
            <div class="row g-4">
                @forelse($asisten as $asistenItem)
                <div class="col-md-4">
                    <div class="card h-100 text-center hover-shadow">
                        <div class="position-relative" style="height: 200px; overflow: hidden;">
                            @if($asistenItem->photo)
                                <img src="{{ asset('storage/' . $asistenItem->photo) }}" class="card-img-top w-100 h-100" alt="{{ $asistenItem->name }}" style="object-fit: cover;">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light w-100 h-100">
                                    <i class="fas fa-user fa-4x text-muted"></i>
                                </div>
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $asistenItem->name }}</h5>
                            @if($asistenItem->nim)
                                <p class="card-text text-muted">NIM: {{ $asistenItem->nim }}</p>
                            @endif
                            @if($asistenItem->angkatan)
                                <p class="card-text">Angkatan: {{ $asistenItem->angkatan }}</p>
                            @endif
                            @if($asistenItem->study_program)
                                <p class="card-text">{{ $asistenItem->study_program }}</p>
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
    <section class="py-5 bg-light" id="alumni">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title text-center">Kisah Inspiratif Alumni</h2>
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
                    <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                        <div class="position-relative" style="height: 250px; overflow: hidden;">
                            @if($alumni->foto)
                                <img src="{{ asset('storage/' . $alumni->foto) }}" 
                                     class="card-img-top w-100 h-100" 
                                     alt="{{ $alumni->nama }}" 
                                     style="object-fit: cover; transition: transform 0.3s ease;"
                                     onmouseover="this.style.transform='scale(1.05)'"
                                     onmouseout="this.style.transform='scale(1)'">
                            @else
                                <div class="d-flex align-items-center justify-content-center bg-light w-100 h-100">
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
                                <div class="testimonial-text mb-3">
                                    <i class="fas fa-quote-left text-muted me-2"></i>
                                    {{ \Illuminate\Support\Str::limit($alumni->testimoni, 180) }}
                                </div>
                            @endif
                        </div>
                        <div class="card-footer bg-transparent border-0 pt-0">
                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#alumniModal{{ $alumni->id }}">
                                Baca Selengkapnya <i class="fas fa-arrow-right ms-1"></i>
                            </button>
                        </div>
                        
                        <!-- Alumni Modal -->
                        <div class="modal fade" id="alumniModal{{ $alumni->id }}" tabindex="-1" aria-labelledby="alumniModalLabel{{ $alumni->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Kisah {{ $alumni->nama }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4 text-center">
                                                @if($alumni->foto)
                                                    <img src="{{ asset('storage/' . $alumni->foto) }}" class="img-fluid rounded-circle mb-3" alt="{{ $alumni->nama }}" style="width: 200px; height: 200px; object-fit: cover;">
                                                @else
                                                    <div class="d-flex align-items-center justify-content-center bg-light rounded-circle mb-3" style="width: 200px; height: 200px; margin: 0 auto;">
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
                                                <h5 class="mb-3">Kisah Inspiratif</h5>
                                                <div class="testimonial-text">
                                                    {!! nl2br(e($alumni->testimoni)) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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
                <a href="{{ route('public.alumni.index') }}" class="btn btn-primary px-4">
                    <i class="fas fa-book-reader me-2"></i> Lihat Semua Cerita Alumni
                </a>
            </div>
        </div>
    </section>

    <!-- Featured Content Section -->
    <section class="py-5 bg-light" id="prestasi-kegiatan">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="section-title mb-0">Prestasi & Kegiatan</h2>
                <a href="{{ route('prestasi-kegiatan.index') }}" class="btn btn-outline-primary">Lihat Semua</a>
            </div>
            <div class="row g-4">
                @forelse($featuredItems as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm hover-shadow">
                        @if($item->is_video)
                            <div class="ratio ratio-16x9">
                                <iframe 
                                    src="{{ $item->video_url }}" 
                                    title="{{ $item->judul }}" 
                                    frameborder="0" 
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                    allowfullscreen>
                                </iframe>
                            </div>
                        @else
                            <img src="{{ $item->gambar_url }}" class="card-img-top" alt="{{ $item->judul }}" style="height: 200px; object-fit: cover;">
                        @endif
                        
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <span class="badge {{ $item->jenis === 'prestasi' ? 'bg-success' : 'bg-info' }}">
                                    {{ ucfirst($item->jenis) }}
                                </span>
                                @if($item->is_featured)
                                    <span class="badge bg-warning text-dark">
                                        <i class="fas fa-star me-1"></i> Tampil di Beranda
                                    </span>
                                @endif
                            </div>
                            
                            <h5 class="card-title">{{ $item->judul }}</h5>
                            
                            @if($item->deskripsi)
                                <p class="card-text">{{ Str::limit($item->deskripsi, 100) }}</p>
                            @endif
                            
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <small class="text-muted">{{ $item->tanggal->format('d M Y') }}</small>
                                <a href="{{ route('prestasi-kegiatan.show', $item) }}" class="btn btn-sm btn-outline-primary">Lihat Detail</a>
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

    <!-- Alumni Modal -->
    @for($i = 1; $i <= 4; $i++)
    <div class="modal fade" id="alumni{{ $i }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Alumni {{ $i }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('images/gallery-' . $i . '.jpg') }}" class="img-fluid" alt="Gallery {{ $i }}">
                </div>
            </div>
        </div>
    </div>
    @endfor
@endsection
