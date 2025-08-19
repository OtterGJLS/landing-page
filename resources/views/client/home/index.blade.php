<x-client.layout>
    <header id="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center text-lg-start">
                <section class="col-lg-7">
                    <h1 class="header-1 color-navy fw-bold mb-4">Service Laptop Cepat,<br>Jujur, dan Bergaransi</h1>
                    <img src="{{ asset('images\HeroImage.png') }}" class="img-fluid d-none hero-img" alt="Teknisi sedang bekerja">
                    <p class="body-1 color-accent mb-4 lead">Kami siap menyelamatkan perangkat Anda, dari laptop biasa hingga gaming.</p>
                    <a href="#kontak" class="btn btn-primary me-2 mb-2">Konsultasi Gratis</a>
                    <a href="https://api.whatsapp.com/send/?phone=6287823330830&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-secondary mb-2">
                        <i class="fab fa-whatsapp me-2"></i>Chat via WhatsApp
                    </a>
                </section>
                <section class="col-lg-5 d-none d-lg-block">
                    <img src="{{ asset('images\HeroImage.png') }}" class="img-fluid mb-32 mx-auto d-block hero-img" alt="Teknisi sedang bekerja">
                </section>
            </div>
        </div>
    </header>

    <section id="keunggulan">
        <div class="container">
            <h2 class="header-2 color-neutral fw-bold mb-5 text-center">Kenapa Memilih Kami?</h2>
            <div class="row text-center gy-4">
                <div class="col-md-3 col-6 keunggulan-item">
                    <img src="{{ asset('images\garansi.png') }}" class="img-fluid mb-4" alt="garansi">
                    <h3 class="body-1 color-neutral lead mb-2">Garansi Service</h3>
                    <p class="body-2 color-neutral lead" >Garansi hingga 30 hari setelah service.</p>
                </div>
                <div class="col-md-3 col-6 keunggulan-item">
                    <img src="{{ asset('images\teknisi.png') }}" class="img-fluid mb-4" alt="teknisi">
                    <h3 class="body-1 color-neutral lead mb-2">Teknisi Berpengalaman</h3>
                    <p class="body-2 color-neutral lead" >Dikerjakan oleh teknisi profesional.</p>
                </div>
                <div class="col-md-3 col-6 keunggulan-item">
                    <img src="{{ asset('images\gear.png') }}" class="img-fluid mb-4" alt="sparepart">
                    <h3 class="body-1 color-neutral lead mb-2">Sparepart Original</h3>
                    <p class="body-2 color-neutral lead" >Hanya menggunakan komponen original.</p>
                </div>
                <div class="col-md-3 col-6 keunggulan-item">
                    <img src="{{ asset('images\konsul.png') }}" class="img-fluid mb-4" alt="konsultasi">
                    <h3 class="body-1 color-neutral lead mb-2">Gratis Cek & Konsultasi</h3>
                    <p class="body-2 color-neutral lead" >Konsultasi bebas biaya, langsung WA.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan">
        <div class="container">
            <h2 class="header-2 color-navy fw-bold mb-2 text-center">Semua Kebutuhan Service dalam Satu Tempat</h2>
            <p class="body-1 color-navy fw-normal mb-5 text-center">Solusi lengkap untuk semua masalah perangkat elektronik Anda</p>
            <div class="row gx-4 gy-4 justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images\hardware.png') }}" class="img-fluid mx-auto d-block mb-5" alt="sparepart">
                            <h3 class="card-title header-4 color-accent fw-semibold mb-3 text-center">Service Hardware</h3>
                            <p class="body-1-card color-navy text-center">Ganti LCD, keyboard, upgrade RAM/SSD, dll.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images\software.png') }}" class="img-fluid mx-auto d-block mb-5" alt="software">
                            <h3 class="card-title header-4 color-accent fw-semibold mb-3 text-center">Service Software</h3>
                            <p class="body-1-card color-navy text-center">Install ulang, recovery data, pasang antivirus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images\clean.png') }}" class="img-fluid mx-auto d-block mb-5" alt="maintenance">
                            <h3 class="card-title header-4 color-accent fw-semibold mb-3 text-center">Maintenance & Cleaning</h3>
                            <p class="body-1-card color-navy text-center">Bersihkan laptop dari debu, thermal paste, dll.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <img src="{{ asset('images\printer.png') }}" class="img-fluid mx-auto d-block mb-5" alt="perangkat lain">
                            <h3 class="card-title header-4 color-accent fw-semibold mb-3 text-center">Service Printer & PC</h3>
                            <p class="body-1-card color-navy text-center">Untuk printer rumah/kantor, juga PC rakitan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- style="background-image: url('{{ asset('images/BG.svg') }}'); background-size: cover; background-position: center;" -->
    <section id="alur">
        <div class="container">
            <h2 class="header-2 color-neutral fw-bold mb-2 text-center">Alur Service Step by Step</h2>
            <p class="body-1 color-neutral fw-normal text-center mb-5" >Proses service laptop yang mudah dan terpercaya dari awal sampai akhir</p>
            <div class="row justify-content-center text-center">
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card border-2 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="header-4 color-navy fw-semibold mb-3">Step 1</h3>
                            <div class="justify-content-center d-flex mb-2">
                                <img src="{{ asset('images\chat-dots.png') }}" class="img-fluid mb-2" alt="konsultasi">
                            </div>
                            <hr class="w-25 mx-auto my-2 mb-4">
                            <h4 class="header-4 color-accent fw-semibold mb-3">Konsultasi Gratis</h4>
                            <p class="body-1-card color-navy">Hubungi via WhatsApp atau isi form di website untuk konsultasi awal</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card border-2 shadow-sm ">
                        <div class="card-body p-4">
                            <h3 class="header-4 color-navy fw-semibold mb-3">Step 2</h3>
                            <div class="justify-content-center d-flex mb-2">
                                <img src="{{ asset('images\box2.png') }}" class="img-fluid mb-2" alt="konsultasi">
                            </div>
                            <hr class="w-25 mx-auto my-2 mb-4">
                            <h4 class="header-4 color-accent fw-semibold mb-3">Kirim / Titip Laptop</h4>
                            <p class="body-1-card color-navy">Antar langsung ke workshop atau gunakan layanan jemput (jika tersedia)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card border-2 shadow-sm">
                        <div class="card-body p-4">
                            <h3 class="header-4 color-navy fw-semibold mb-3">Step 3</h3>
                            <div class="justify-content-center d-flex mb-2">
                                <img src="{{ asset('images\search.png') }}" class="img-fluid mb-2" alt="konsultasi">
                            </div>
                            <hr class="w-25 mx-auto my-2 mb-4">
                            <h4 class="header-4 color-accent fw-semibold mb-3">Diagnosa Kerusakan</h4>
                            <p class="body-1-card color-navy">Teknisi melakukan pengecekan dan memberikan estimasi biaya</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card border-2 shadow-sm ">
                        <div class="card-body p-4">
                            <h3 class="header-4 color-navy fw-semibold mb-3">Step 4</h3>
                            <div class="justify-content-center d-flex mb-2">
                                <img src="{{ asset('images\Union.png') }}" class="img-fluid mb-2" alt="konsultasi">
                            </div>
                            <hr class="w-25 mx-auto my-2 mb-4">
                            <h4 class="header-4 color-accent fw-semibold mb-3">Perbaikan Teknisi Ahli</h4>
                            <p class="body-1-card color-navy">Menggunakan sparepart original dengan proses yang transparan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-4">
                    <div class="card border-2 shadow-sm ">
                        <div class="card-body p-4">
                            <h3 class="header-4 color-navy fw-semibold mb-3">Step 5</h3>
                            <div class="justify-content-center d-flex mb-2">
                                <img src="{{ asset('images\check-circle.png') }}" class="img-fluid mb-2" alt="konsultasi">
                            </div>
                            <hr class="w-25 mx-auto my-2 mb-4">
                            <h4 class="header-4 color-accent fw-semibold mb-3">Laptop Siap Diambil</h4>
                            <p class="body-1-card color-navy">Laptop kembali dengan garansi, kondisi bersih & berfungsi normal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proses">
        <div class="container">
            <div class="row gx-4 gy-4 justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h4 class="card-title header-4 color-accent fw-semibold mb-4 text-center">Lihat Proses Pengerjaan Teknisi Kami</h4>
                            <div class="embed-responsive embed-responsive-16by9 justify-content-center d-flex mb-2">
                                <iframe class="embed-responsive-item mb-3" src="https://www.youtube.com/embed/OBBMF_9oD5g?si=G8AqVrmW8rOFdgIJ" allowfullscreen></iframe>
                            </div>
                            <p class="body-1-card color-navy text-center mb-0">Video menunjukkan proses service laptop secara profesional dan transparan</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="card h-100 shadow">
                        <div class="card-body">
                            <h4 class="card-title header-4 color-accent fw-semibold mb-4 text-center">Lihat Proses Pengerjaan Teknisi Kami</h4>
                            <div class="embed-responsive embed-responsive-16by9 justify-content-center d-flex mb-2">
                                <iframe class="embed-responsive-item mb-3" src="https://www.youtube.com/embed/3edtMfPl_kM?si=InXH8nmx5KUx2XbN" allowfullscreen></iframe>
                            </div>
                            <p class="body-1-card color-navy text-center mb-0">Video menunjukkan proses service laptop secara profesional dan transparan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="promo">
        <div class="container">
            <h2 class="header-2 color-navy fw-bold mb-2 text-center">Promo Spesial Bulan Ini</h2>
            <p class="body-1 color-navy fw-normal mb-5 text-center">Penawaran Terbatas Untuk Anda!</p>
            <div class="row gx-4 gy-4 justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('images\diskon1.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="header-2 color-navy fw-bold text-center mb-3">Hemat hingga 20% untuk Maintenance Rutin</h4>
                            <p class="body-1-card color-navy text-center mb-3">Rawat laptop Anda secara berkala dan dapatkan diskon menarik untuk setiap kunjungan ke-2 dan seterusnya.</p>
                            <ul class="body-1-card color-navy mb-5">
                                <li>Pembersihan menyeluruh sistem</li>
                                <li>Update software terbaru</li>
                                <li>Optimasi performa</li>
                                <li>Garansi layanan 30 hari</li>
                            </ul>
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary mb-0">Jadwalkan Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('images\diskon2.png') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="header-2 color-navy fw-bold mb-3 text-center">Voucher Khusus untuk Perusahaan</h4>
                            <p class="body-1-card color-navy mb-3 text-center">Kami menyediakan voucher service dan layanan on-site untuk kebutuhan kantor dan perusahaan Anda.</p>
                            <ul class="body-1-card color-navy mb-5">
                                <li>Layanan on-site gratis</li>
                                <li>Harga khusus untuk bulk service</li>
                                <li>Support teknis 24/7</li>
                                <li>Maintenance kontrak tahunan</li>
                            </ul>
                            <div class="d-grid">
                                <a href="#" class="btn btn-primary mb-0">Hubungi Tim Corporate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni">
        <div class="container">
            <h2 class="header-2 color-neutral fw-bold mb-5 text-center">Apa Kata Pelanggan Kami?</h2>
            <div class="glide-testimoni">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="card shadow-sm h-100">
                                <img class="card-img-top" src="{{ asset('images/testimoni1.png') }}" class="img-fluid mb-3" alt="Testimoni">
                                <!-- <div class="card-body">
                                    <p class="body-1 color-grey">"Pelayanannya cepat banget, laptop saya yang mati total bisa hidup lagi. Teknisi jujur dan harganya masuk akal. Recommended!"</p>
                                </div> -->
                                <div class="card-footer">
                                    <div class="text-warning mb-2">
                                        <i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="header-4 color-navy fw-semibold mb-1">Sari Indrawati</h4>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="card shadow-sm h-100">
                                <img class="card-img-top" src="{{ asset('images/testimoni2.png') }}" class="img-fluid mb-3" alt="Testimoni">
                                <!-- <div class="card-body"><p class="body-1 color-grey">"Upgrade SSD di sini prosesnya sat set. Dikasih penjelasan detail soal produknya. Laptop jadi ngebut sekarang. Mantap!"</p></div> -->
                                <div class="card-footer">
                                    <div class="text-warning mb-2">
                                        <i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="header-4 color-navy fw-semibold mb-1">Rizky Pratama</h4>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="card shadow-sm h-100">
                                <img class="card-img-top" src="{{ asset('images/testimoni3.png') }}" class="img-fluid mb-3" alt="Testimoni">
                                <!-- <div class="card-body"><p class="body-1 color-grey">"Laptop kena air dan panik banget. Untungnya nemu tempat ini. Data-data penting berhasil diselamatkan semua. Terima kasih banyak!"</p></div> -->
                                <div class="card-footer">
                                    <div class="text-warning mb-2">
                                        <i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star me-1"></i><i class="fas fa-star"></i>
                                    </div>
                                    <h4 class="header-4 color-navy fw-semibold mb-1">Athar Hilman</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="tentang-kami">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <img src="{{ asset('images\aboutUS.png') }}" class="img-fluid tim-img" alt="Tim Teknisi">
                </div>
                <div class="col-lg-6">
                    <h2 class="header-2 color-navy fw-bold mb-3">Tentang Kami</h2>
                    <p class="body-1 color-navy">Kami adalah tim teknisi laptop profesional yang berdedikasi untuk memberikan layanan terbaik sejak 2010. Dengan pengalaman bertahun-tahun dan ribuan laptop yang telah kami tangani, kami mengutamakan kejujuran, transparansi, dan kualitas.</p>
                    <p class="body-1 color-navy">Kami percaya bahwa laptop Anda bukan sekadar alat kerja, tapi aset penting yang harus dijaga. Setiap perangkat memiliki cerita dan memori berharga bagi pemiliknya. Itulah mengapa kami memperlakukan setiap perbaikan dengan penuh perhatian dan profesionalisme.</p>
                    <p class="body-1 color-navy">Tim kami terdiri dari teknisi bersertifikat yang terus mengikuti perkembangan teknologi terbaru. Kami menggunakan alat diagnostik mutakhir dan komponen berkualitas tinggi untuk memastikan laptop Anda kembali berfungsi optimal.</p>
                    <ul class="body-1-card color-navy mb-3">
                        <li><b>Kejujuran - </b>Diagnosa masalah yang transparan tanpa biaya tersembunyi.</li>
                        <li><b>Profesionalisme - </b>Teknisi bersertifikasi dengan pelatihan berkala.</li>
                        <li><b>Garansi - </b>Jaminan 90 hari untuk setiap perbaikan.</li>
                        <li><b>Efisiensi - </b>Waktu perbaikan cepat tanpa mengorbankan kualitas.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak">
        <div class="container">
            <h2 class="header-2 color-navy fw-bold mb-1 text-center">Hubungi Kami</h2>
            <p class="body-1 color-navy fw-normal mb-5 text-center">Hubungi kami untuk pemesanan layanan service atau kunjungi workshop kami untuk perbaikan langsung</p>
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6 ">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="header-4 color-navy fw-semibold mb-5">Formulir Pemesanan Service</h3>
                            <form action="#" method="POST">
                                <div class="body-1 color-navy mb-3">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" required placeholder="Masukkan nama Anda">
                                </div>
                                <div class="body-1 color-navy mb-3">
                                    <label for="phone" class="form-label">Nomor WhatsApp</label>
                                    <input type="tel" class="form-control" id="phone" required placeholder="Masukkan nomor WhatsApp Anda">
                                </div>
                                <div class="body-1 color-navy mb-3">
                                    <label for="inputTipe" class="form-label">Tipe Perangkat</label>
                                    <select id="inputTipe" class="form-select" required>
                                        <option selected>Pilih Tipe Perangat</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="body-1 color-navy mb-3">
                                    <label for="message" class="form-label">Jenis Kerusakan / Keluhan</label>
                                    <textarea class="form-control" id="message" rows="4" required placeholder="Silakan jelaskan masalah perangkat Anda"></textarea>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane me-2"></i>Kirim Permintaan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 class="header-4 color-navy fw-semibold mb-4">Informasi Kontak</h3>
                    <div class="d-flex mb-3">
                        <i class="fab fa-whatsapp fa-2x color-accent me-3"></i>
                        <div>
                            <h4 class="header-4 color-navy fw-semibold mb-1">WhatsApp</h4>
                            <a href="https://wa.me/6281234567890" target="_blank" class="body-1-card text-decoration-none color-navy">+62 812-3456-7890</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="far fa-envelope fa-2x color-accent me-3"></i>
                        <div>
                            <h4 class="header-4 color-navy fw-semibold mb-1">Email</h4>
                            <p class="body-1-card color-navy mb-0">support@servicelaptop.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fas fa-map-marker-alt fa-2x color-accent me-3"></i>
                        <div>
                            <h4 class="header-4 color-navy fw-semibold mb-1">Lokasi</h4>
                            <p class="body-1-card color-navy mb-3">
                                Jalan traktor 123 dekat cicukang belakang kantor PU ujung berung, Kec. Arcamanik, Kota Bandung, Jawa Barat 42094
                            </p>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8093.253222490186!2d107.67920589074849!3d-6.915002802991967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dda5a21cc6bb%3A0xb7248e14780c4720!2sCV%20Lingkar%20Rasio%20Teknologi!5e0!3m2!1sid!2sid!4v1755229414217!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-penutup">
        <div class="container text-center">
            <h1 class="header-1 mb-3">Jangan tunggu kerusakan makin parah, segera hubungi kami sekarang!</h1>
            <a href="#kontak" class="btn btn-primary btn-lg ">Pesan Layanan
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>


    @push('css')
        @vite(['resources/css/client/pages/home/styles.css'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
    @endpush

    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                new Glide('.glide-testimoni', {
                    type: 'carousel',
                    startAt: 0,
                    perView: 3,
                    gap: 24,
                    autoplay: 4000,
                    hoverpause: true,
                    breakpoints: {
                        992: { perView: 2 },
                        768: { perView: 1 }
                    }
                }).mount();
            });
        </script>
    @endpush
</x-client.layout>