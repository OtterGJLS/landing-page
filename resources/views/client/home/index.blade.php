<x-client.layout>
    <header id="hero">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center text-lg-start">
                <section class="col-lg-7">
                    <h1 class="header-1 fw-bold">Service Laptop Cepat,</h1>
                    <h1 class="header-1 fw-bold mb-4">Jujur, dan Bergaransi</h1>
                    <p class="body-1-hero mb-4 lead">Kami siap menyelamatkan perangkat Anda, dari laptop biasa hingga gaming.</p>
                    <a href="#kontak" class="btn btn-primary me-2 mb-2">Konsultasi Gratis</a>
                    <a href="https://api.whatsapp.com/send/?phone=6287823330830&text&type=phone_number&app_absent=0" target="_blank" class="btn btn-secondary mb-2">
                        <i class="fab fa-whatsapp me-2"></i>Hubungi via WhatsApp
                    </a>
                </section>
                <section class="col-lg-5 d-none d-lg-block">
                    <img src="{{ Vite::asset('resources\images\HeroImage.png') }}" class="img-fluid hero-img" alt="Teknisi sedang bekerja">
                </section>
            </div>
        </div>
    </header>

    <section id="keunggulan">
        <div class="container">
            <div class="row text-center gy-4">
                <div class="col-md-3 col-6 keunggulan-item">
                    <div class="keunggulan-ic-container"><i class="fas fa-check-circle"></i></div>
                    <h3 class="body-1 color-white fw-semibold">Garansi Service</h3>
                </div>
                <div class="col-md-3 col-6 keunggulan-item">
                    <div class="keunggulan-ic-container"><i class="fas fa-users-cog"></i></div>
                    <h3 class="body-1 color-white fw-semibold">Teknisi Ahli</h3>
                </div>
                <div class="col-md-3 col-6 keunggulan-item">
                    <div class="keunggulan-ic-container"><i class="fas fa-microchip"></i></div>
                    <h3 class="body-1 color-white fw-semibold">Sparepart Original</h3>
                </div>
                <div class="col-md-3 col-6 keunggulan-item">
                    <div class="keunggulan-ic-container"><i class="fas fa-search"></i></div>
                    <h3 class="body-1 color-white fw-semibold">Gratis Cek</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="layanan">
        <div class="container">
            <h2 class="header-2 color-primary fw-semibold mb-5 text-center">Layanan Kami</h2>
            <div class="row gx-4 gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title header-4 fw-medium mb-3"><i class="fas fa-laptop"></i>Service Hardware</h3>
                            <p class="body-1 color-grey">Ganti LCD, keyboard, baterai, upgrade RAM/SSD, perbaikan motherboard, dan lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title header-4 fw-medium mb-3"><i class="fas fa-cogs"></i>Service Software</h3>
                            <p class="body-1 color-grey">Install ulang Windows/Mac, recovery data, pembersihan virus, dan optimasi sistem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title header-4 fw-medium mb-3"><i class="fas fa-wind"></i>Maintenance</h3>
                            <p class="body-1 color-grey">Pembersihan debu pada kipas dan komponen internal untuk mencegah overheat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h3 class="card-title header-4 fw-medium mb-3"><i class="fas fa-print"></i>Perangkat Lain</h3>
                            <p class="body-1 color-grey">Kami juga melayani perbaikan PC All-in-One, rakit PC, dan service printer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="alur">
        <div class="container">
            <h2 class="header-2 color-primary fw-semibold mb-5 text-center">Proses Service Kami</h2>
            <div class="row gy-4">
                <div class="col alur-step"><div class="alur-step-number">1</div><p class="body-1 fw-medium">Konsultasi</p></div>
                <div class="col alur-step"><div class="alur-step-number">2</div><p class="body-1 fw-medium">Kirim/Antar Unit</p></div>
                <div class="col alur-step"><div class="alur-step-number">3</div><p class="body-1 fw-medium">Diagnosa</p></div>
                <div class="col alur-step"><div class="alur-step-number">4</div><p class="body-1 fw-medium">Perbaikan</p></div>
                <div class="col alur-step"><div class="alur-step-number">5</div><p class="body-1 fw-medium">Selesai!</p></div>
            </div>
        </div>
    </section>

    <section id="promo">
        <div class="container text-center">
            <h2 class="header-2 fw-semibold mb-5">Promo & Penawaran Spesial</h2>
            <div class="row justify-content-center gx-4 gy-4">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="header-3 fw-medium">Diskon Maintenance</h3>
                            <p class="body-1">Dapatkan diskon 20% untuk layanan cleaning internal laptop Anda. Jaga laptop tetap dingin!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="header-3 fw-medium">Paket Korporat</h3>
                            <p class="body-1">Voucher khusus untuk perusahaan dengan kontrak maintenance. Jaga aset IT perusahaan Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="testimoni">
        <div class="container">
            <h2 class="header-2 color-primary fw-semibold mb-5 text-center">Apa Kata Pelanggan Kami?</h2>
            <div class="glide-testimoni">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        <li class="glide__slide">
                            <div class="card shadow-sm h-100">
                                <div class="card-body"><p class="body-1 color-grey">"Pelayanannya cepat banget, laptop saya yang mati total bisa hidup lagi. Teknisi jujur dan harganya masuk akal. Recommended!"</p></div>
                                <div class="card-footer">
                                    <div class="text-warning mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <h4 class="header-4 color-primary fw-medium mb-0">Andi B.</h4>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="card shadow-sm h-100">
                                <div class="card-body"><p class="body-1 color-grey">"Upgrade SSD di sini prosesnya sat set. Dikasih penjelasan detail soal produknya. Laptop jadi ngebut sekarang. Mantap!"</p></div>
                                <div class="card-footer">
                                    <div class="text-warning mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <h4 class="header-4 color-primary fw-medium mb-0">Siti A.</h4>
                                </div>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <div class="card shadow-sm h-100">
                                <div class="card-body"><p class="body-1 color-grey">"Laptop kena air dan panik banget. Untungnya nemu tempat ini. Data-data penting berhasil diselamatkan semua. Terima kasih banyak!"</p></div>
                                <div class="card-footer">
                                    <div class="text-warning mb-2"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                    <h4 class="header-4 color-primary fw-medium mb-0">Eko P.</h4>
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
                    <img src="{{ Vite::asset('resources/images/laptop-service/tim-teknisi.jpg') }}" class="img-fluid tim-img" alt="Tim Teknisi">
                </div>
                <div class="col-lg-6">
                    <h2 class="header-2 color-primary fw-semibold mb-3">Tentang Kami</h2>
                    <p class="body-1 color-grey">Berdiri sejak 2015, kami adalah tim teknisi berpengalaman yang berdedikasi untuk memberikan solusi terbaik bagi setiap masalah perangkat IT Anda. Kami percaya pada layanan yang jujur, transparan, dan berkualitas untuk membangun kepercayaan pelanggan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak">
        <div class="container">
            <h2 class="header-2 color-primary fw-semibold mb-5 text-center">Hubungi Kami</h2>
            <div class="row gy-5 align-items-center">
                <div class="col-lg-6">
                    <h3 class="header-3 color-primary fw-semibold mb-4">Informasi Kontak</h3>
                    <div class="d-flex mb-3">
                        <i class="fab fa-whatsapp fa-2x color-accent me-3"></i>
                        <div>
                            <h4 class="header-4 color-primary fw-medium mb-1">WhatsApp</h4>
                            <a href="https://wa.me/6281234567890" target="_blank" class="body-1 text-decoration-none color-grey">+62 812-3456-7890</a>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <i class="fas fa-envelope fa-2x color-accent me-3"></i>
                        <div>
                            <h4 class="header-4 color-primary fw-medium mb-1">Email</h4>
                            <p class="body-1 color-grey mb-0">support@servicelaptop.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="fas fa-map-marker-alt fa-2x color-accent me-3"></i>
                        <div>
                            <h4 class="header-4 color-primary fw-medium mb-1">Lokasi</h4>
                            <p class="body-1 color-grey mb-0">
                                Jalan traktor 123 dekat cicukang belakang kantor PU ujung berung, Kec. Arcamanik, Kota Bandung, Jawa Barat 42094
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8093.253222490186!2d107.67920589074849!3d-6.915002802991967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68dda5a21cc6bb%3A0xb7248e14780c4720!2sCV%20Lingkar%20Rasio%20Teknologi!5e0!3m2!1sid!2sid!4v1755229414217!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section id="cta-penutup">
        <div class="container text-center">
            <h2 class="header-2 mb-3">Jangan tunggu kerusakan makin parah!</h2>
            <p class="body-1 lead mb-4">Segera hubungi kami sekarang untuk mendapatkan penanganan terbaik.</p>
            <a href="#kontak" class="btn btn-primary btn-lg">Pesan Layanan Sekarang</a>
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