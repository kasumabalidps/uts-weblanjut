<div class="bg-gradient-to-b from-gray-950 to-gray-900 text-white relative overflow-auto">
    <div class="container mx-auto px-4 py-52 relative z-10">
        <div class="text-center space-y-8">
            <div class="space-y-4">
                <h1 class="text-7xl font-bold mb-4 tracking-tight bg-gradient-to-r from-white via-gray-200 to-gray-400 text-transparent bg-clip-text">
                    Loket Konser Terbaik
                </h1>
                <p class="text-2xl font-light text-gray-400">
                    Pesan tiket konser terbaik di Indonesia
                </p>
            </div>
            <div class="flex justify-center">
                <a href="<?=BASEURL; ?>/pengisian" class="group relative inline-flex items-center px-8 py-4 bg-white/5 backdrop-blur-sm border border-white/10 rounded-xl hover:bg-white/10 transition-all duration-300">
                    <span class="relative text-lg font-medium">
                        Pesan Tiket
                    </span>
                    <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div id="slideshowContainer" class="slideshow-container border-b border-white/5">
        <!-- Fotonya ambil dari js -->
    </div>
</div>

<section id="konser" class="bg-gradient-to-b from-gray-950 via-gray-900 to-gray-800">
    <div class="py-24">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-bold bg-gradient-to-r from-white to-gray-400 bg-clip-text text-transparent mb-4">Jadwal Konser</h2>
                <p class="text-gray-400 text-xl font-light">Temukan pengalaman musik yang tak terlupakan</p>
            </div>
            
            <div class="relative">
                <div id="concertSchedule" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Jadwal konser dari js-->
                </div>
            </div>

            <div class="mt-16 text-center">
                <div class="inline-flex items-center justify-center space-x-2 px-6 py-3 bg-white/5 backdrop-blur-sm rounded-lg border border-white/10">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <p class="text-gray-400">Jadwal konser diperbarui secara berkala</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="concertModal" class="fixed inset-0 bg-black/80 invisible flex items-center justify-center z-50 p-4 backdrop-blur-sm">
    <div class="bg-gray-900 rounded-xl shadow-2xl max-w-lg w-full mx-4 transform transition-all duration-300" id="autoModal">
        <div class="relative p-8">
            <button id="closeModal" class="absolute top-6 right-6 text-gray-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    const slides = [
        { gambar: '<?=BASEURL; ?>/img/konser/1.jpg', alt: 'Konser 1' },
        { gambar: '<?=BASEURL; ?>/img/konser/2.jpg', alt: 'Konser 2' },
        { gambar: '<?=BASEURL; ?>/img/konser/3.jpg', alt: 'Konser 3' },
        { gambar: '<?=BASEURL; ?>/img/konser/4.jpg', alt: 'Konser 4' },
        { gambar: '<?=BASEURL; ?>/img/konser/5.jpg', alt: 'Konser 5' },
        { gambar: '<?=BASEURL; ?>/img/konser/6.jpg', alt: 'Konser 6' }
    ];

    function createSlideshow() {
        const container = document.getElementById('slideshowContainer');
        slides.forEach((slide) => {
            const slideDiv = document.createElement('div');
            slideDiv.className = 'mySlides fade';
            slideDiv.innerHTML = `
                <div class="relative">
                    <img src="${slide.gambar}" alt="${slide.alt}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/50 backdrop-blur-[2px]"></div>
                </div>
            `;
            container.appendChild(slideDiv);
        });
    }

    let slideIndex = 0;
    function showSlides() {
        const slides = document.getElementsByClassName("mySlides");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex - 1].style.display = "block";  
        setTimeout(showSlides, 3000);
    }

    document.getElementById('closeModal').addEventListener('click', closeModal);

    function createConcertSchedule() {
        const concertData = [
            { 
                nama: 'Rock Revolution 2024',
                tanggal: '15 Maret 2024',
                lokasi: 'Stadion Utama',
                harga: '500.000',
                deskripsi: 'Rasakan sensasi musik rock legendaris dengan penampilan spektakuler!'
            },
            { 
                nama: 'K-Pop Wonderland', 
                tanggal: '20 Maret 2024',
                lokasi: 'Convention Center',
                harga: '350.000',
                deskripsi: 'Saksikan aksi memukau dari idol K-Pop favoritmu dalam satu panggung!'
            },
            { 
                nama: 'Smooth Jazz Night',
                tanggal: '25 Maret 2024',
                lokasi: 'Taman Kota',
                harga: '400.000',
                deskripsi: 'Nikmati alunan jazz mellow di bawah gemerlap bintang malam ini!'
            },
            { 
                nama: 'Metal Mayhem Fest',
                tanggal: '15 Maret 2024',
                lokasi: 'Stadion Utama',
                harga: '500.000',
                deskripsi: 'Bergabunglah dalam festival metal terbesar dengan lineup mengagumkan!'
            },
            { 
                nama: 'EDM Paradise', 
                tanggal: '20 Maret 2024',
                lokasi: 'Convention Center',
                harga: '350.000',
                deskripsi: 'Rasakan euforia musik elektronik dengan DJ internasional terbaik!'
            },
            { 
                nama: 'Classic Symphony',
                tanggal: '25 Maret 2024',
                lokasi: 'Taman Kota',
                harga: '400.000',
                deskripsi: 'Hayati orkestra klasik memukau dalam suasana malam yang magis!'
            }
        ];

        const scheduleContainer = document.getElementById('concertSchedule');

        concertData.forEach((concert) => {
            const concertItem = document.createElement('div');
            concertItem.className = 'bg-gray-800/50 backdrop-blur-xl rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-[1.02]';
            concertItem.innerHTML = `
                <div class="space-y-6">
                    <h3 class="text-2xl font-bold bg-gradient-to-r from-gray-100 to-gray-300 bg-clip-text text-transparent">${concert.nama}</h3>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center text-gray-400 bg-gray-900/50 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            <p class="font-medium">${concert.tanggal}</p>
                        </div>
                        <div class="flex items-center text-gray-400 bg-gray-900/50 px-4 py-2 rounded-lg">
                            <svg class="w-5 h-5 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <p class="font-medium">${concert.lokasi}</p>
                        </div>
                    </div>
                    <p class="text-gray-400 text-sm">${concert.deskripsi}</p>
                    <div class="flex items-center justify-between text-gray-300 border-t border-gray-700 pt-4">
                        <span class="text-lg font-bold">Rp ${concert.harga}</span>
                        <button onclick="window.location.href='<?= BASEURL; ?>/loket'" class="bg-gray-800 hover:bg-gray-700 text-gray-100 px-6 py-2 rounded-lg transition-all duration-300 hover:shadow-lg hover:shadow-gray-900/30 font-medium flex items-center">
                            Pesan Sekarang
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </div>
                </div>
            `;
            concertItem.querySelector('button').addEventListener('click', () => showConcertModal(concert));
            scheduleContainer.appendChild(concertItem);
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        createSlideshow();
        showSlides();
        createConcertSchedule();
    });
</script>