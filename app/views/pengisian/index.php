<div class="bg-gray-900 min-h-screen flex items-center justify-center py-10">
        <div class="bg-gray-800 p-8 rounded-lg shadow-2xl w-full max-w-md">
            <h1 class="text-3xl font-bold mb-6 text-center text-white">Pendaftaran Event Cosplay</h1>
            <form action="<?=BASEURL; ?>/pengisian/daftar" method="POST" class="space-y-4">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-300">Nama Lengkap</label>
                    <input type="text" id="nama" name="nama" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white placeholder-gray-400 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-lg py-2 px-3">
                </div>
                <div>
                    <label for="nomer" class="block text-sm font-medium text-gray-300">Nomor HP</label>
                    <input type="tel" id="nomer" name="nomer" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white placeholder-gray-400 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-lg py-2 px-3">
                </div>
                <div>
                    <label for="karakter" class="block text-sm font-medium text-gray-300">Karakter Cosplay</label>
                    <input type="text" id="karakter" name="karakter" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white placeholder-gray-400 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-lg py-2 px-3">
                </div>
                <div>
                    <label for="anime" class="block text-sm font-medium text-gray-300">Asal Anime/Game</label>
                    <input type="text" id="anime" name="anime" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white placeholder-gray-400 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-lg py-2 px-3">
                </div>
                <div>
                    <label for="kategori" class="block text-sm font-medium text-gray-300">Kategori</label>
                    <select id="kategori" name="kategori" required class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-lg py-2 px-3">
                        <option value="">Pilih Kategori</option>
                        <option value="Pemula">Pemula</option>
                        <option value="Menengah">Menengah</option>
                        <option value="Profesional">Profesional</option>
                    </select>
                </div>
                <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-300">
                        Gambar Cosplay
                        <span class="text-xs text-gray-400 ml-1">(Opsional)</span>
                    </label>
                    <input type="file" id="gambar" name="gambar[]" accept="image/*" multiple class="mt-1 block w-full text-sm text-gray-400
                        file:mr-4 file:py-3 file:px-6
                        file:rounded-md file:border-0
                        file:text-sm file:font-semibold
                        file:bg-indigo-600 file:text-white
                        hover:file:bg-indigo-700
                        file:cursor-pointer
                        bg-gray-700 rounded-md border-gray-600">
                    <p class="mt-1 text-sm text-gray-400">Unggah satu atau beberapa gambar cosplay yang pernah Anda lakukan sebelumnya (jika ada).</p>
                    <div id="preview-container" class="mt-2 flex flex-wrap gap-2"></div>
                </div>
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-300">Deskripsi Kostum</label>
                    <textarea id="deskripsi" name="deskripsi" rows="3" class="mt-1 block w-full rounded-md bg-gray-700 border-gray-600 text-white placeholder-gray-400 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 text-lg py-2 px-3"></textarea>
                </div>
                <div>
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Preview gambar
        const input = document.getElementById('gambar');
        const previewContainer = document.getElementById('preview-container');

        input.addEventListener('change', function(e) {
            previewContainer.innerHTML = '';
            for (let file of this.files) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const preview = document.createElement('div');
                    preview.className = 'relative';
                    preview.innerHTML = `
                        <img src="${e.target.result}" alt="Preview" class="w-20 h-20 object-cover rounded">
                        <button type="button" class="absolute top-0 right-0 bg-red-500 text-white rounded-full w-5 h-5 flex items-center justify-center" onclick="removeImage(this)">X</button>
                    `;
                    previewContainer.appendChild(preview);
                }
                reader.readAsDataURL(file);
            }
        });
        
        // Hapus Gambar
        function removeImage(button) {
            const preview = button.parentElement;
            const index = Array.from(previewContainer.children).indexOf(preview);
            const dt = new DataTransfer();
            const { files } = input;
            for (let i = 0; i < files.length; i++) {
                if (i !== index) dt.items.add(files[i]);
            }
            input.files = dt.files;
            preview.remove();
        }
    </script>
