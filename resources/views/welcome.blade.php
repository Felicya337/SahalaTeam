<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aksara Batak - Platform Budaya Digital</title>

    <!-- SahalaTeam Assets -->
    @vite(['resources/css/SahalaTeam.css', 'resources/js/SahalaTeam.js'])

    <!-- Font Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body x-data="{
    darkMode: localStorage.getItem('darkMode') === 'true',
    mobileMenuOpen: false,
    init() {
        if (this.darkMode) document.documentElement.classList.add('dark');
    },
    toggleDark() {
        this.darkMode = !this.darkMode;
        document.documentElement.classList.toggle('dark');
        localStorage.setItem('darkMode', this.darkMode);
    }
}" x-init="init()" class="bg-white dark:bg-gray-950 transition-colors duration-300">

    <!-- Top Navigation Bar -->
    <nav
        class="fixed top-0 left-0 right-0 z-50 bg-white/95 dark:bg-gray-900/95 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 shadow-sm">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="#home" class="flex items-center gap-3 group">
                    <div
                        class="w-12 h-12 bg-gradient-to-br from-batak-red to-red-600 rounded-xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                        <span class="text-white font-bold text-xl">AB</span>
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white">Aksara Batak</h1>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Digital Culture Platform</p>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center gap-1">
                    <a href="#home"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-home text-sm"></i>
                        <span>Sejarah</span>
                    </a>
                    <a href="#education"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-book-open text-sm"></i>
                        <span>Pengenalan</span>
                    </a>
                    <a href="#gallery"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-calendar-alt text-sm"></i>
                        <span>Hari & Angka</span>
                    </a>
                    <a href="#map"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-book text-sm"></i>
                        <span>Panduan</span>
                    </a>
                    <a href="#dictionary"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-pencil-alt text-sm"></i>
                        <span>Latihan</span>
                    </a>
                    <a href="#gamification"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-file-alt text-sm"></i>
                        <span>Naskah</span>
                    </a>
                    <a href="#destination"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-sm"></i>
                        <span>Destinasi</span>
                    </a>
                    <a href="#culinary"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-utensils text-sm"></i>
                        <span>Kuliner</span>
                    </a>
                    <a href="#quiz"
                        class="nav-item px-4 py-2 text-gray-700 dark:text-gray-300 font-medium flex items-center gap-2">
                        <i class="fas fa-question-circle text-sm"></i>
                        <span>Kuis</span>
                    </a>
                </div>

                <!-- Right Actions -->
                <div class="flex items-center gap-3">
                    <!-- Dark Mode Toggle -->
                    <button @click="toggleDark()"
                        class="w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center hover:bg-gray-200 dark:hover:bg-gray-700 transition-all">
                        <i :class="darkMode ? 'fas fa-sun text-yellow-500' : 'fas fa-moon text-gray-600'"
                            class="text-lg"></i>
                    </button>

                    <!-- Mobile Menu Button -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen"
                        class="lg:hidden w-10 h-10 rounded-full bg-gray-100 dark:bg-gray-800 flex items-center justify-center">
                        <i :class="mobileMenuOpen ? 'fas fa-times' : 'fas fa-bars'"
                            class="text-gray-700 dark:text-gray-300"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            class="lg:hidden border-t border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900">
            <div class="container mx-auto px-6 py-4 space-y-2">
                <a href="#home"
                    class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg">
                    <i class="fas fa-home mr-3"></i>Sejarah
                </a>
                <a href="#education"
                    class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg">
                    <i class="fas fa-book-open mr-3"></i>Pengenalan
                </a>
                <a href="#gallery"
                    class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg">
                    <i class="fas fa-calendar-alt mr-3"></i>Hari & Angka
                </a>
                <a href="#map"
                    class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg">
                    <i class="fas fa-book mr-3"></i>Panduan
                </a>
                <a href="#dictionary"
                    class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg">
                    <i class="fas fa-pencil-alt mr-3"></i>Latihan
                </a>
                <a href="#gamification"
                    class="block px-4 py-3 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg">
                    <i class="fas fa-gamepad mr-3"></i>Kuis
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden mt-20">
        <!-- Background Video -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="D:\SahalaTeam\storage\aset\musik_dohot_video\HEADER.mp4" type="video/mp4">
        </video>

        <!-- Overlay -->
        <div class="absolute inset-0 hero-gradient"></div>

        <!-- Content -->
        <div class="relative z-10 text-center px-6 max-w-5xl mx-auto">
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 leading-tight">
                SELAMAT DATANG DI WEBSITE<br>
                <span class="text-gradient">AKSARA BATAK</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-3xl mx-auto">
                Platform digital untuk mempelajari, melestarikan, dan merayakan kekayaan aksara dan budaya Batak
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#education"
                    class="group px-10 py-5 bg-batak-red hover:bg-red-700 text-white rounded-xl font-bold text-lg shadow-2xl transition-all duration-300 flex items-center justify-center gap-3">
                    <span>Mulai Belajar</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="#gallery"
                    class="px-10 py-5 bg-white/10 backdrop-blur-sm border-2 border-white/30 hover:bg-white/20 text-white rounded-xl font-bold text-lg transition-all duration-300">
                    Jelajahi Budaya
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-white text-3xl opacity-50"></i>
        </div>

        <!-- Play Button -->
        <button
            class="absolute bottom-10 right-10 w-16 h-16 bg-batak-red rounded-full flex items-center justify-center shadow-2xl hover:scale-110 transition-transform">
            <i class="fas fa-play text-white text-xl ml-1"></i>
        </button>
    </section>

    <!-- Edukasi Dasar -->
    <section id="education" class="py-24 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-batak-red/10 text-batak-red rounded-full font-semibold text-sm mb-4">
                    Modul Pembelajaran
                </span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Edukasi Budaya Batak
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Pelajari filosofi, tradisi, dan nilai-nilai luhur budaya Batak melalui modul interaktif
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- Cards (4x) -->
                <div
                    class="card-hover bg-white dark:bg-gray-800 rounded-2xl p-8 border border-gray-200 dark:border-gray-700 group cursor-pointer">
                    <div
                        class="w-16 h-16 bg-gradient-to-br from-red-500 to-red-600 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">Dalihan Na Tolu</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Filosofi tiga tungku kehidupan masyarakat Batak
                    </p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold text-batak-red">12 Modul</span>
                        <i
                            class="fas fa-arrow-right text-batak-red group-hover:translate-x-2 transition-transform"></i>
                    </div>
                </div>
                <!-- (3 cards lainnya sama, di-omit untuk singkat) -->
            </div>

            <!-- Featured Course -->
            <div class="bg-gradient-to-r from-batak-red to-red-700 rounded-3xl overflow-hidden shadow-2xl">
                <div class="grid md:grid-cols-2 gap-8 items-center p-8 md:p-12">
                    <div class="text-white">
                        <span
                            class="inline-block px-4 py-2 bg-white/20 backdrop-blur-sm rounded-full text-sm font-semibold mb-4">
                            Learning Path Terpopuler
                        </span>
                        <h3 class="text-3xl md:text-4xl font-black mb-4">Mengenal Dalihan Na Tolu</h3>
                        <p class="text-white/90 mb-6 text-lg">Program pembelajaran lengkap tentang filosofi tiga tungku
                        </p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-2xl"></i> <span
                                    class="text-lg">12 Video HD</span></li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-2xl"></i> <span
                                    class="text-lg">Kuis Interaktif</span></li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-2xl"></i> <span
                                    class="text-lg">Sertifikat Digital</span></li>
                        </ul>
                        <button
                            class="px-10 py-4 bg-white text-batak-red rounded-xl font-bold text-lg hover:scale-105 transition-transform shadow-xl">
                            Mulai Belajar Sekarang
                        </button>
                    </div>
                    <div class="relative">
                        <img src="https://placehold.co/600x500/FFFFFF/D9042B?text=Dalihan+Na+Tolu" alt="Course"
                            class="rounded-2xl shadow-2xl">
                        <div class="absolute -bottom-6 -left-6 bg-white dark:bg-gray-800 rounded-2xl p-6 shadow-2xl">
                            <div class="text-batak-red font-black text-4xl">4.9★</div>
                            <div class="text-gray-600 dark:text-gray-400 font-semibold">2,345 Reviews</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Artefak -->
    <section id="gallery" class="py-24 bg-white dark:bg-gray-950">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-2 bg-batak-red/10 text-batak-red rounded-full font-semibold text-sm mb-4">
                    Koleksi Digital
                </span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 dark:text-white mb-6">
                    Galeri & Eksplorasi Artefak
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto">
                    Jelajahi koleksi digital warisan budaya Batak yang telah didigitalisasi
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button class="px-6 py-3 bg-batak-red text-white rounded-xl font-semibold shadow-lg">Semua</button>
                <button
                    class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-xl font-semibold hover:bg-gray-200 dark:hover:bg-gray-700">Ulos</button>
                <button
                    class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-xl font-semibold hover:bg-gray-200 dark:hover:bg-gray-700">Senjata</button>
                <button
                    class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-xl font-semibold hover:bg-gray-200 dark:hover:bg-gray-700">Arsitektur</button>
                <button
                    class="px-6 py-3 bg-gray-100 dark:bg-gray-800 text-gray-700 dark:text-gray-300 rounded-xl font-semibold hover:bg-gray-200 dark:hover:bg-gray-700">Musik</button>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- 3 Gallery Items -->
                <div class="group relative overflow-hidden rounded-2xl card-hover cursor-pointer">
                    <img src="https://placehold.co/600x800/D9042B/FFFFFF?text=Ulos+Ragidup" alt="Ulos"
                        class="w-full h-96 object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 text-white transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <span
                                class="inline-block px-3 py-1 bg-batak-red rounded-full text-xs font-semibold mb-3">Tekstil</span>
                            <h3 class="text-2xl font-bold mb-2">Ulos Ragidup</h3>
                            <p class="text-sm text-gray-200 mb-4">Kain kehidupan yang melambangkan kasih sayang</p>
                            <button
                                class="px-6 py-2 bg-white text-gray-900 rounded-lg font-semibold text-sm hover:scale-105 transition-transform">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                </div>
                <!-- (2 items lainnya sama) -->
            </div>

            <div class="text-center mt-12">
                <button
                    class="px-10 py-4 border-2 border-batak-red text-batak-red rounded-xl font-bold hover:bg-batak-red hover:text-white transition-all">
                    Jelajahi Lebih Banyak
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2025 Aksara Batak. Dibuat dengan <i class="fas fa-heart text-batak-red"></i> oleh SahalaTeam</p>
        </div>
    </footer>
</body>

</html>
