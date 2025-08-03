@push('modals')
<!-- SOP Modals -->
<!-- Modal 1: Laboratorium Ergonomi -->
<div class="modal fade" id="sopModal1" tabindex="-1" aria-labelledby="sopModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sopModal1Label">SOP Laboratorium Ergonomi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/lab-1.jpg') }}" alt="Laboratorium Ergonomi" class="img-fluid rounded">
                </div>
                <h6>Deskripsi:</h6>
                <p>Laboratorium ini dilengkapi dengan peralatan pengukuran antropometri dan analisis postur kerja untuk mendukung praktikum dan penelitian di bidang ergonomi.</p>
                
                <h6 class="mt-4">Prosedur Penggunaan:</h6>
                <ol>
                    <li>Daftarkan penggunaan laboratorium minimal 1x24 jam sebelumnya</li>
                    <li>Gunakan alat sesuai dengan petunjuk yang diberikan</li>
                    <li>Jaga kebersihan dan kerapian laboratorium</li>
                    <li>Laporkan kerusakan peralatan kepada petugas</li>
                    <li>Kembalikan peralatan ke tempat semula setelah digunakan</li>
                </ol>
                
                <h6 class="mt-4">Dokumen Terkait:</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-file-pdf me-1"></i> Download SOP Lengkap</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-file-word me-1"></i> Format Peminjaman</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2: Laboratorium Perancangan Sistem Kerja -->
<div class="modal fade" id="sopModal2" tabindex="-1" aria-labelledby="sopModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sopModal2Label">SOP Laboratorium Perancangan Sistem Kerja</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/lab-2.jpg') }}" alt="Laboratorium Perancangan Sistem Kerja" class="img-fluid rounded">
                </div>
                <h6>Deskripsi:</h6>
                <p>Fasilitas untuk praktikum dan penelitian di bidang perancangan sistem kerja, dilengkapi dengan berbagai peralatan pendukung.</p>
                
                <h6 class="mt-4">Prosedur Penggunaan:</h6>
                <ol>
                    <li>Lakukan reservasi ruangan terlebih dahulu</li>
                    <li>Hadir 15 menit sebelum jadwal penggunaan</li>
                    <li>Gunakan peralatan dengan hati-hati dan sesuai prosedur</li>
                    <li>Jaga ketertiban dan kebersihan ruangan</li>
                    <li>Laporkan kerusakan atau kehilangan peralatan</li>
                </ol>
                
                <h6 class="mt-4">Dokumen Terkait:</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-file-pdf me-1"></i> Download SOP Lengkap</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-file-word me-1"></i> Format Peminjaman</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3: Ruang Diskusi -->
<div class="modal fade" id="sopModal3" tabindex="-1" aria-labelledby="sopModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sopModal3Label">SOP Ruang Diskusi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img src="{{ asset('images/lab-3.jpg') }}" alt="Ruang Diskusi" class="img-fluid rounded">
                </div>
                <h6>Deskripsi:</h6>
                <p>Ruang diskusi yang nyaman untuk presentasi, diskusi kelompok, dan kegiatan akademik lainnya.</p>
                
                <h6 class="mt-4">Prosedur Penggunaan:</h6>
                <ol>
                    <li>Daftarkan penggunaan ruangan minimal 1x24 jam sebelumnya</li>
                    <li>Gunakan fasilitas dengan bijak dan bertanggung jawab</li>
                    <li>Jaga kebersihan ruangan</li>
                    <li>Matikan peralatan elektronik setelah digunakan</li>
                    <li>Kembalikan ruangan dalam keadaan rapi</li>
                </ol>
                
                <h6 class="mt-4">Dokumen Terkait:</h6>
                <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-file-pdf me-1"></i> Download SOP Lengkap</a>
                    <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-file-word me-1"></i> Format Peminjaman</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endpush
