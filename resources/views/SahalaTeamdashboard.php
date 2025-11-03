<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aksara Batak - Platform Budaya Digital | SahalaTeam</title>

    <!-- Meta Tags -->
    <meta name="description" content="Platform digital untuk mempelajari, melestarikan, dan merayakan kekayaan aksara dan budaya Batak" />
    <meta name="keywords" content="Aksara Batak, Budaya Batak, Dalihan Na Tolu, Ulos, Batak Toba" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'batak': {
                            'red': '#D9042B',
                            'black': '#0A0A0A',
                            'white': '#FFFFFF',
                            'gray': '#1A1A1A',
                        },
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                },
            },
        }
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="SahalaTeam.css" />
</head>

<body class="bg-white dark:bg-batak-black text-gray-900 dark:text-white antialiased">

    <!-- Navigation -->
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="flex items-center justify-between h-20 lg:h-24">

                <!-- Logo -->
                <a href="#home" class="flex items-center gap-3 group z-50">
                    <div class="relative">
                        <div class="absolute inset-0 bg-batak-red blur-xl opacity-50 group-hover:opacity-75 transition-opacity"></div>
                        <div class="relative w-12 h-12 lg:w-14 lg:h-14 bg-gradient-to-br from-batak-red to-red-600 rounded-2xl flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-300">
                            <span class="text-white font-black text-xl lg:text-2xl">AB</span>
                        </div>
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="text-xl lg:text-2xl font-black tracking-tight">Aksara Batak</h1>
                        <p class="text-xs text-gray-500 dark:text-gray-400 font-medium">by SahalaTeam</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden xl:flex items-center gap-1">
                    <a href="#home" class="nav-link" data-section="home">
                        <i class="fas fa-landmark"></i>
                        <span>Sejarah</span>
                    </a>
                    <a href="#education" class="nav-link" data-section="education">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Pengenalan</span>
                    </a>
                    <a href="#calendar" class="nav-link" data-section="calendar">
                        <i class="fas fa-calendar-days"></i>
                        <span>Hari & Angka</span>
                    </a>
                    <a href="#guide" class="nav-link" data-section="guide">
                        <i class="fas fa-book-open"></i>
                        <span>Panduan</span>
                    </a>
                    <a href="#practice" class="nav-link" data-section="practice">
                        <i class="fas fa-pen-fancy"></i>
                        <span>Latihan</span>
                    </a>
                    <a href="#manuscript" class="nav-link" data-section="manuscript">
                        <i class="fas fa-scroll"></i>
                        <span>Naskah</span>
                    </a>
                    <a href="#destination" class="nav-link" data-section="destination">
                        <i class="fas fa-mountain-sun"></i>
                        <span>Destinasi</span>
                    </a>
                    <a href="#culinary" class="nav-link" data-section="culinary">
                        <i class="fas fa-bowl-food"></i>
                        <span>Kuliner</span>
                    </a>
                    <a href="#quiz" class="nav-link" data-section="quiz">
                        <i class="fas fa-trophy"></i>
                        <span>Kuis</span>
                    </a>
                </div>

                <!-- Actions -->
                <div class="flex items-center gap-3">
                    <button id="theme-toggle" class="action-btn">
                        <i class="fas fa-moon dark-icon"></i>
                        <i class="fas fa-sun light-icon"></i>
                    </button>

                    <button id="search-toggle" class="action-btn hidden lg:flex">
                        <i class="fas fa-search"></i>
                    </button>

                    <button id="menu-toggle" class="action-btn xl:hidden">
                        <i class="fas fa-bars menu-open"></i>
                        <i class="fas fa-xmark menu-close"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu">
            <div class="container mx-auto px-4 py-6">
                <div class="grid grid-cols-2 gap-3">
                    <a href="#home" class="mobile-menu-item">
                        <i class="fas fa-landmark"></i>
                        <span>Sejarah</span>
                    </a>
                    <a href="#education" class="mobile-menu-item">
                        <i class="fas fa-graduation-cap"></i>
                        <span>Pengenalan</span>
                    </a>
                    <a href="#calendar" class="mobile-menu-item">
                        <i class="fas fa-calendar-days"></i>
                        <span>Hari & Angka</span>
                    </a>
                    <a href="#guide" class="mobile-menu-item">
                        <i class="fas fa-book-open"></i>
                        <span>Panduan</span>
                    </a>
                    <a href="#practice" class="mobile-menu-item">
                        <i class="fas fa-pen-fancy"></i>
                        <span>Latihan</span>
                    </a>
                    <a href="#manuscript" class="mobile-menu-item">
                        <i class="fas fa-scroll"></i>
                        <span>Naskah</span>
                    </a>
                    <a href="#destination" class="mobile-menu-item">
                        <i class="fas fa-mountain-sun"></i>
                        <span>Destinasi</span>
                    </a>
                    <a href="#culinary" class="mobile-menu-item">
                        <i class="fas fa-bowl-food"></i>
                        <span>Kuliner</span>
                    </a>
                    <a href="#quiz" class="mobile-menu-item">
                        <i class="fas fa-trophy"></i>
                        <span>Kuis</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Search Overlay -->
        <div id="search-overlay" class="search-overlay">
            <div class="search-container">
                <button id="search-close" class="search-close">
                    <i class="fas fa-xmark"></i>
                </button>
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Cari budaya, aksara, kuliner..." />
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-overlay"></div>

        <!-- Particle Background -->
        <div class="hero-particles"></div>

        <!-- Video Background -->
        <video autoplay loop muted playsinline class="hero-video">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-set-of-plateaus-seen-from-the-heights-in-a-desert-32613-large.mp4" type="video/mp4">
        </video>

        <div class="hero-content">
            <div class="hero-badge" data-aos="fade-down">
                <i class="fas fa-sparkles"></i>
                <span>Platform Budaya Digital Terdepan</span>
            </div>

            <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
                SELAMAT DATANG DI
                <span class="hero-title-gradient">AKSARA BATAK</span>
            </h1>

            <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
                Jelajahi, pelajari, dan lestarikan kekayaan warisan budaya Batak melalui platform digital yang modern dan interaktif
            </p>

            <div class="hero-stats" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-item">
                    <div class="stat-value">150+</div>
                    <div class="stat-label">Materi Pembelajaran</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-value">50K+</div>
                    <div class="stat-label">Pengguna Aktif</div>
                </div>
                <div class="stat-divider"></div>
                <div class="stat-item">
                    <div class="stat-value">98%</div>
                    <div class="stat-label">Tingkat Kepuasan</div>
                </div>
            </div>

            <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
                <a href="#education" class="btn-primary">
                    <span>Mulai Belajar</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
                <a href="#gallery" class="btn-secondary">
                    <i class="fas fa-play"></i>
                    <span>Tonton Video</span>
                </a>
            </div>
        </div>

        <div class="hero-scroll" data-aos="fade" data-aos-delay="500">
            <div class="scroll-indicator">
                <span>Scroll</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="section bg-gray-50 dark:bg-batak-gray">
        <div class="container mx-auto px-4 lg:px-8">

            <!-- Section Header -->
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">
                    <i class="fas fa-graduation-cap"></i>
                    Modul Pembelajaran
                </span>
                <h2 class="section-title">Edukasi Budaya Batak</h2>
                <p class="section-subtitle">
                    Pelajari filosofi, tradisi, dan nilai luhur budaya Batak melalui modul pembelajaran yang terstruktur dan interaktif
                </p>
            </div>

            <!-- Course Cards -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">

                <div class="course-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="course-icon bg-gradient-to-br from-red-500 to-batak-red">
                        <i class="fas fa-fire-flame-curved"></i>
                    </div>
                    <div class="course-content">
                        <h3 class="course-title">Dalihan Na Tolu</h3>
                        <p class="course-desc">Filosofi tiga tungku kehidupan masyarakat Batak yang harmonis</p>
                        <div class="course-meta">
                            <span class="course-modules"><i class="fas fa-book"></i> 12 Modul</span>
                            <span class="course-duration"><i class="fas fa-clock"></i> 8 Jam</span>
                        </div>
                    </div>
                    <div class="course-action">
                        <button class="course-btn">
                            <span>Mulai Belajar</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="course-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="course-icon bg-gradient-to-br from-blue-500 to-blue-600">
                        <i class="fas fa-language"></i>
                    </div>
                    <div class="course-content">
                        <h3 class="course-title">Aksara Batak</h3>
                        <p class="course-desc">Sistem tulisan tradisional suku Batak yang kaya makna</p>
                        <div class="course-meta">
                            <span class="course-modules"><i class="fas fa-book"></i> 8 Modul</span>
                            <span class="course-duration"><i class="fas fa-clock"></i> 6 Jam</span>
                        </div>
                    </div>
                    <div class="course-action">
                        <button class="course-btn">
                            <span>Mulai Belajar</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="course-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="course-icon bg-gradient-to-br from-amber-500 to-orange-600">
                        <i class="fas fa-house-chimney"></i>
                    </div>
                    <div class="course-content">
                        <h3 class="course-title">Rumah Bolon</h3>
                        <p class="course-desc">Arsitektur tradisional Batak dengan filosofi mendalam</p>
                        <div class="course-meta">
                            <span class="course-modules"><i class="fas fa-book"></i> 6 Modul</span>
                            <span class="course-duration"><i class="fas fa-clock"></i> 5 Jam</span>
                        </div>
                    </div>
                    <div class="course-action">
                        <button class="course-btn">
                            <span>Mulai Belajar</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="course-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="course-icon bg-gradient-to-br from-purple-500 to-pink-600">
                        <i class="fas fa-music"></i>
                    </div>
                    <div class="course-content">
                        <h3 class="course-title">Gondang Batak</h3>
                        <p class="course-desc">Musik sakral yang menyertai upacara adat Batak</p>
                        <div class="course-meta">
                            <span class="course-modules"><i class="fas fa-book"></i> 10 Modul</span>
                            <span class="course-duration"><i class="fas fa-clock"></i> 7 Jam</span>
                        </div>
                    </div>
                    <div class="course-action">
                        <button class="course-btn">
                            <span>Mulai Belajar</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

            </div>

            <!-- Featured Course -->
            <div class="featured-course" data-aos="fade-up" data-aos-delay="500">
                <div class="featured-course-content">
                    <div class="featured-badge">
                        <i class="fas fa-star"></i>
                        <span>Learning Path Terpopuler</span>
                    </div>
                    <h3 class="featured-title">Menguasai Dalihan Na Tolu</h3>
                    <p class="featured-desc">Program pembelajaran komprehensif tentang filosofi tiga tungku yang menjadi pondasi kehidupan masyarakat Batak</p>

                    <div class="featured-features">
                        <div class="feature-item">
                            <i class="fas fa-video"></i>
                            <span>12 Video HD</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-puzzle-piece"></i>
                            <span>Kuis Interaktif</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-certificate"></i>
                            <span>Sertifikat Digital</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-infinity"></i>
                            <span>Akses Selamanya</span>
                        </div>
                    </div>

                    <button class="btn-featured">
                        <span>Mulai Belajar Sekarang</span>
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <div class="featured-course-visual">
                    <div class="featured-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=800&h=600&fit=crop" alt="Dalihan Na Tolu" class="featured-image" />
                        <div class="featured-rating">
                            <div class="rating-stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="rating-score">4.9</div>
                            <div class="rating-count">2,345 reviews</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section bg-white dark:bg-batak-black">
        <div class="container mx-auto px-4 lg:px-8">

            <!-- Section Header -->
            <div class="section-header" data-aos="fade-up">
                <span class="section-badge">
                    <i class="fas fa-images"></i>
                    Koleksi Digital
                </span>
                <h2 class="section-title">Galeri Artefak Budaya</h2>
                <p class="section-subtitle">
                    Jelajahi koleksi digital warisan budaya Batak yang telah didigitalisasi dengan teknologi tinggi
                </p>
            </div>

            <!-- Filter Tabs -->
            <div class="filter-tabs" data-aos="fade-up" data-aos-delay="100">
                <button class="filter-tab active" data-filter="all">
                    <i class="fas fa-border-all"></i>
                    <span>Semua</span>
                </button>
                <button class="filter-tab" data-filter="textile">
                    <i class="fas fa-shirt"></i>
                    <span>Ulos</span>
                </button>
                <button class="filter-tab" data-filter="weapon">
                    <i class="fas fa-sword"></i>
                    <span>Senjata</span>
                </button>
                <button class="filter-tab" data-filter="architecture">
                    <i class="fas fa-building"></i>
                    <span>Arsitektur</span>
                </button>
                <button class="filter-tab" data-filter="music">
                    <i class="fas fa-drum"></i>
                    <span>Musik</span>
                </button>
            </div>

            <!-- Gallery Grid -->
            <div class="gallery-grid">

                <div class="gallery-item" data-category="textile" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?w=600&h=800&fit=crop" alt="Ulos Ragidup" class="gallery-image" />
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <span class="gallery-category">Tekstil</span>
                                <h3 class="gallery-title">Ulos Ragidup</h3>
                                <p class="gallery-desc">Kain kehidupan yang melambangkan kasih sayang dan kehangatan</p>
                                <button class="gallery-btn">
                                    <i class="fas fa-eye"></i>
                                    <span>Lihat Detail</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-category="weapon" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1595433707802-6b2626ef1c91?w=600&h=800&fit=crop" alt="Piso Gaja Dompak" class="gallery-image" />
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <span class="gallery-category">Senjata</span>
                                <h3 class="gallery-title">Piso Gaja Dompak</h3>
                                <p class="gallery-desc">Keris sakral dengan ukiran filosofis yang indah</p>
                                <button class="gallery-btn">
                                    <i class="fas fa-eye"></i>
                                    <span>Lihat Detail</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-category="architecture" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1555854877-bab0e564b8d5?w=600&h=800&fit=crop" alt="Rumah Bolon" class="gallery-image" />
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <span class="gallery-category">Arsitektur</span>
                                <h3 class="gallery-title">Rumah Bolon</h3>
                                <p class="gallery-desc">Rumah adat dengan atap lengkung khas Batak Toba</p>
                                <button class="gallery-btn">
                                    <i class="fas fa-eye"></i>
                                    <span>Lihat Detail</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-category="music" data-aos="fade-up" data-aos-delay="400">
                    <div class="gallery-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1511192336575-5a79af67a629?w=600&h=800&fit=crop" alt="Gondang Sabangunan" class="gallery-image" />
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <span class="gallery-category">Musik</span>
                                <h3 class="gallery-title">Gondang Sabangunan</h3>
                                <p class="gallery-desc">Seperangkat alat musik sakral upacara adat</p>
                                <button class="gallery-btn">
                                    <i class="fas fa-eye"></i>
                                    <span>Lihat Detail</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-category="textile" data-aos="fade-up" data-aos-delay="500">
                    <div class="gallery-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1558769132-cb1aea1f0e77?w=600&h=800&fit=crop" alt="Ulos Sibolang" class="gallery-image" />
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <span class="gallery-category">Tekstil</span>
                                <h3 class="gallery-title">Ulos Sibolang</h3>
                                <p class="gallery-desc">Kain dengan motif geometris yang memukau</p>
                                <button class="gallery-btn">
                                    <i class="fas fa-eye"></i>
                                    <span>Lihat Detail</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="gallery-item" data-category="architecture" data-aos="fade-up" data-aos-delay="600">
                    <div class="gallery-image-wrapper">
                        <img src="https://images.unsplash.com/photo-1545558014-8692077e9b5c?w=600&h=800&fit=crop" alt="Sopo Godang" class="gallery-image" />
                        <div class="gallery-overlay">
                            <div class="gallery-content">
                                <span class="gallery-category">Arsitektur</span>
                                <h3 class="gallery-title">Sopo Godang</h3>
                                <p class="gallery-desc">Lumbung padi tradisional dengan filosofi mendalam</p>
                                <button class="gallery-btn">
                                    <i class="fas fa-eye"></i>
                                    <span>Lihat Detail</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Load More -->
            <div class="text-center mt-12" data-aos="fade-up">
                <button class="btn-outline">
                    <span>Jelajahi Lebih Banyak</span>
                    <i class="fas fa-arrow-down"></i>
                </button>
            </div>

        </div>
    </section>

    <!-- Stats Section -->
    <section class="section bg-gradient-to-br from-batak-red to-red-700 text-white">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">

                <div class="stats-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stats-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stats-number" data-count="50000">0</div>
                    <div class="stats-label">Pengguna Aktif</div>
                </div>

                <div class="stats-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stats-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stats-number" data-count="150">0</div>
                    <div class="stats-label">Materi Pembelajaran</div>
                </div>

                <div class="stats-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stats-icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <div class="stats-number" data-count="500">0</div>
                    <div class="stats-label">Koleksi Artefak</div>
                </div>

                <div class="stats-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="stats-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stats-number" data-count="98">0</div>
                    <div class="stats-label">Tingkat Kepuasan</div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-gray-50 dark:bg-batak-gray">
        <div class="container mx-auto px-4 lg:px-8">
            <div class="cta-container" data-aos="fade-up">
                <div class="cta-content">
                    <h2 class="cta-title">Siap Memulai Perjalanan Budaya Anda?</h2>
                    <p class="cta-desc">Bergabunglah dengan ribuan pengguna lain yang telah merasakan pengalaman belajar budaya Batak yang berbeda</p>
                    <div class="cta-buttons">
                        <button class="btn-primary">
                            <span>Daftar Sekarang</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        <button class="btn-outline-white">
                            <i class="fas fa-play"></i>
                            <span>Tonton Demo</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container mx-auto px-4 lg:px-8">

            <!-- Footer Top -->
            <div class="footer-top">
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Brand -->
                    <div class="footer-brand" data-aos="fade-up">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-batak-red to-red-600 rounded-xl flex items-center justify-center">
                                <span class="text-white font-black text-xl">AB</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">Aksara Batak</h3>
                                <p class="text-sm text-gray-400">by SahalaTeam</p>
                            </div>
                        </div>
                        <p class="text-gray-400 mb-4">Platform digital terdepan untuk melestarikan dan merayakan kekayaan budaya Batak.</p>
                        <div class="flex gap-3">
                            <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="footer-links" data-aos="fade-up" data-aos-delay="100">
                        <h4 class="footer-title">Menu Utama</h4>
                        <ul>
                            <li><a href="#home"><i class="fas fa-chevron-right"></i> Sejarah</a></li>
                            <li><a href="#education"><i class="fas fa-chevron-right"></i> Pengenalan</a></li>
                            <li><a href="#calendar"><i class="fas fa-chevron-right"></i> Hari & Angka</a></li>
                            <li><a href="#guide"><i class="fas fa-chevron-right"></i> Panduan</a></li>
                            <li><a href="#practice"><i class="fas fa-chevron-right"></i> Latihan</a></li>
                        </ul>
                    </div>

                    <!-- Resources -->
                    <div class="footer-links" data-aos="fade-up" data-aos-delay="200">
                        <h4 class="footer-title">Sumber Daya</h4>
                        <ul>
                            <li><a href="#manuscript"><i class="fas fa-chevron-right"></i> Naskah</a></li>
                            <li><a href="#destination"><i class="fas fa-chevron-right"></i> Destinasi</a></li>
                            <li><a href="#culinary"><i class="fas fa-chevron-right"></i> Kuliner</a></li>
                            <li><a href="#quiz"><i class="fas fa-chevron-right"></i> Kuis</a></li>
                            <li><a href="#"><i class="fas fa-chevron-right"></i> Blog</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="footer-contact" data-aos="fade-up" data-aos-delay="300">
                        <h4 class="footer-title">Hubungi Kami</h4>
                        <ul>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <span>info@aksarabatak.id</span>
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <span>+62 812-3456-7890</span>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Parmonangan, Sumatera Utara</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p>&copy; 2025 <span class="font-bold text-batak-red">Aksara Batak</span>. All rights reserved. Made with <i class="fas fa-heart text-batak-red"></i> by <span class="font-bold">SahalaTeam</span></p>
                <div class="footer-bottom-links">
                    <a href="#">Privacy Policy</a>
                    <span>•</span>
                    <a href="#">Terms of Service</a>
                    <span>•</span>
                    <a href="#">Sitemap</a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Scroll to Top -->
    <button id="scroll-top" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="SahalaTeam.js"></script>
</body>

</html>
