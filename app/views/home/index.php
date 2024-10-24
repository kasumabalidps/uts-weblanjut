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
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="relative">
                    <img src="<?= BASEURL; ?>/img/banner1.png" style="width:100%; height:100%; object-fit:cover;">
                    <div class="absolute inset-0 bg-black opacity-65"></div>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="relative">
                    <img src="<?= BASEURL; ?>/img/banner2.png" style="width:100%; height:100%; object-fit:cover;">
                    <div class="absolute inset-0 bg-black opacity-65"></div>
                </div>
            </div>
            <div class="mySlides fade">
                <div class="relative">
                    <img src="<?= BASEURL; ?>/img/banner3.png" style="width:100%; height:100%; object-fit:cover;">
                    <div class="absolute inset-0 bg-black opacity-65"></div>
                </div>
            </div>
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
            <!-- Galeri ambil dari js nya -->
            </div>
        </div>
    </div>

    <div class="bg-gray-800 text-white py-16">
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
    </div>

<script>
    // Animasi Slideshow
    let slideIndex = 0;
    showSlides();

    function showSlides() {
    let i;
    const slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}    
        slides[slideIndex - 1].style.display = "block";  
        setTimeout(showSlides, 5000);
    }

    // Galeri Cosplay
    function createCosplayGallery() {
    const galleryData = [
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo1.jpg', judul: 'Naruto Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo2.jpg', judul: 'One Piece Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo3.jpg', judul: 'Attack on Titan Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo4.jpg', judul: 'My Hero Academia Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo5.jpg', judul: 'Demon Slayer Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo6.jpg', judul: 'Dragon Ball Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo7.jpg', judul: 'Sailor Moon Cosplay' },
        { gambar: '<?= BASEURL; ?>/img/cosplay/photo8.jpg', judul: 'Genshin Impact Cosplay' }
    ];

        const galleryContainer = document.getElementById('cosplayGallery');

        galleryData.forEach((item, index) => {
            const galleryItem = document.createElement('div');
            galleryItem.className = 'relative overflow-hidden rounded-lg shadow-md';
            galleryItem.innerHTML = `
                <img src="${item.gambar}" alt="Cosplay ${index + 1}" class="w-full h-64 object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300">
                <p class="text-white text-center">${item.judul}</p>
            </div>
        `;
            galleryContainer.appendChild(galleryItem);
        });
}

    // Panggil fungsi createCosplayGallery kalok domnya dah di load
    document.addEventListener('DOMContentLoaded', createCosplayGallery);
</script>
</body>
</html>