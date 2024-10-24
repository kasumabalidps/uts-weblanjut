<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Event Cosplay</title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/home.css">
    <script src="<?= BASEURL; ?>/js/home.js"></script>
</head>
<body>
    <div class="bg-gray-900 text-white relative overflow-hidden">
        <div class="container mx-auto px-4 py-48 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">Event Cosplay Terbesar</h1>
                <p class="text-xl mb-8">Bergabunglah dalam petualangan cosplay yang tak terlupakan!</p>
                <a href="<?= BASEURL; ?>/pengisian" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-full text-lg">
                    Daftar Sekarang
                </a>
            </div>
        </div>
        <div id="slideshowContainer" class="slideshow-container">
            <!-- Fotonya ambil dari js -->
        </div>
    </div>

    <!-- <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Mengapa Bergabung dengan Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Kompetisi Seru</h3>
                    <p>Unjuk kebolehan kostum dan akting Anda dalam kompetisi cosplay bergengsi.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Bertemu Sesama Penggemar</h3>
                    <p>Jalin pertemanan dengan sesama penggemar cosplay dari berbagai daerah.</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <h3 class="text-xl font-semibold mb-4">Hadiah Menarik</h3>
                    <p>Menangkan hadiah fantastis untuk kostum dan penampilan terbaik.</p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="bg-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Galeri Cosplay Terdahulu</h2>
            <div id="cosplayGallery" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Galerinya ambil dari js-->
            </div>
        </div>
    </div>

    <!-- <div class="bg-gray-800 text-white py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-8">Jadwal Acara</h2>
            <div class="max-w-2xl mx-auto">
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Hari 1: Pembukaan dan Penjurian Awal</h3>
                    <p>Acara pembukaan meriah dan sesi penjurian awal untuk semua peserta.</p>
                </div>
                <div class="mb-6">
                    <h3 class="text-xl font-semibold mb-2">Hari 2: Kompetisi Utama</h3>
                    <p>Puncak acara dengan penampilan terbaik dari para finalis.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-2">Hari 3: Pengumuman Pemenang</h3>
                    <p>Pengumuman pemenang dan acara penutupan yang spektakuler.</p>
                </div>
            </div>
        </div>
    </div> -->

<script>
    // Daftar slide
    const slides = [
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo1.jpg', alt: 'Cosplay 1' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo2.jpg', alt: 'Cosplay 2' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo3.jpg', alt: 'Cosplay 3' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo4.jpg', alt: 'Cosplay 4' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo5.jpg', alt: 'Cosplay 5' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo6.jpg', alt: 'Cosplay 6' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo7.jpg', alt: 'Cosplay 7' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo8.jpg', alt: 'Cosplay 8' }
    ];

    function createSlideshow() {
        const container = document.getElementById('slideshowContainer');
        slides.forEach((slide, index) => {
            const slideDiv = document.createElement('div');
            slideDiv.className = 'mySlides fade';
            slideDiv.innerHTML = `
                <div class="relative">
                    <img src="${slide.gambar}" alt="${slide.alt}" style="width:100%; height:100%; object-fit:cover;">
                    <div class="absolute inset-0 bg-black opacity-65"></div>
                </div>
            `;
            container.appendChild(slideDiv);
        });
    }

    // Animasi Slideshow
    let slideIndex = 0;
    function showSlides() {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex - 1].style.display = "block";  
        setTimeout(showSlides, 3000);
    }

    // Galeri Cosplay
    function createCosplayGallery() {
    const galleryData = [
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo1.jpg', judul: 'Gawr Gura Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo2.jpg', judul: 'Mikasa Ackerman Attack on Titan Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo3.jpg', judul: 'Luffy One Piece Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo4.jpg', judul: 'Yor Forger Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo5.jpg', judul: 'Kokomi Genshin Impact Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo6.jpg', judul: 'Kanna Kamui Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo7.jpg', judul: 'Klee Genshin Impact Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo8.jpg', judul: 'Denji Chainsaw Man Cosplay' }
    ];

        const galleryContainer = document.getElementById('cosplayGallery');

        galleryData.forEach((item, index) => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'relative overflow-hidden rounded-lg shadow-md';
            galleryItem.innerHTML = `
                <img src="${item.gambar}" alt="Cosplay ${index + 1}" class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-center font-bold">${item.judul}</p>
            </div>
        `;
            galleryContainer.appendChild(galleryItem);
        });
}

    // Panggil fungsi createSlideshow kalok domnya dah di load
    document.addEventListener('DOMContentLoaded', () => {
        createSlideshow();
        showSlides(); // Mulai slideshow
    });

    // Panggil fungsi createCosplayGallery kalok domnya dah di load
    document.addEventListener('DOMContentLoaded', createCosplayGallery);
</script>
</body>
</html>