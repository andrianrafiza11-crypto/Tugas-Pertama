<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk - ProductHub</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 min-h-screen flex flex-col">

    <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <a href="index.html" class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-md shadow-indigo-200">
                        P
                    </a>
                    <span class="font-extrabold text-lg text-slate-900 tracking-tight">Form Produk</span>
                </div>
                <nav class="flex items-center space-x-2 text-sm font-medium text-slate-600">
                    <a href="index.html" class="hover:text-indigo-600 transition">Home (HTML)</a>
                    <span class="text-slate-300">/</span>
                    <a href="index.php" class="hover:text-indigo-600 transition">Dashboard (PHP)</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow py-10 px-4 flex items-center justify-center">
        <div class="max-w-2xl w-full bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-200">
            
            <div class="bg-indigo-600 px-8 py-6 text-white flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-bold">Tambah Produk Baru</h2>
                    <p class="text-indigo-100 text-sm mt-1">Isi formulir di bawah ini untuk menguji pemprosesan PHP.</p>
                </div>
                <span class="text-xs bg-indigo-500/60 border border-indigo-400/50 px-3 py-1 rounded-full font-mono">POST METHOD</span>
            </div>

            <!-- PERBAIKAN: action diarahkan ke produk_input_process.php -->
            <form action="produk_input_process.php" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Field: Nama Produk -->
                    <div>
                        <label for="nama_produk" class="block text-sm font-semibold text-slate-700 mb-2">Nama Produk <span class="text-rose-500">*</span></label>
                        <input type="text" id="nama_produk" name="nama_produk" placeholder="Contoh: Laptop Asus Zenbook"
                               class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none text-slate-800">
                    </div>

                    <!-- Field: Harga Produk -->
                    <div>
                        <label for="harga" class="block text-sm font-semibold text-slate-700 mb-2">Harga (Rp) <span class="text-rose-500">*</span></label>
                        <input type="number" id="harga" name="harga" placeholder="Contoh: 12500000" min="0"
                               class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none text-slate-800">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Field: Kategori -->
                    <div>
                        <label for="kategori" class="block text-sm font-semibold text-slate-700 mb-2">Kategori <span class="text-rose-500">*</span></label>
                        <select id="kategori" name="kategori"
                                class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none text-slate-800 bg-white">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Pakaian">Pakaian</option>
                            <option value="Makanan & Minuman">Makanan & Minuman</option>
                            <option value="Aksesoris">Aksesoris</option>
                            <option value="Kesehatan & Kecantikan">Kesehatan & Kecantikan</option>
                        </select>
                    </div>

                    <!-- Field: Stok -->
                    <div>
                        <label for="stok" class="block text-sm font-semibold text-slate-700 mb-2">Jumlah Stok <span class="text-rose-500">*</span></label>
                        <input type="number" id="stok" name="stok" placeholder="Contoh: 50" min="0"
                               class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none text-slate-800">
                    </div>
                </div>

                <!-- Field: Deskripsi -->
                <div>
                    <label for="deskripsi" class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Produk <span class="text-rose-500">*</span></label>
                    <textarea id="deskripsi" name="deskripsi" rows="4" placeholder="Jelaskan spesifikasi dan detail produk di sini..."
                              class="w-full px-4 py-2.5 rounded-lg border border-slate-300 focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition outline-none text-slate-800"></textarea>
                </div>

                <!-- Field: Gambar Produk -->
                <div>
                    <label for="gambar" class="block text-sm font-semibold text-slate-700 mb-2">Gambar Produk <span class="text-rose-500">*</span></label>
                    <input type="file" id="gambar" name="gambar" accept="image/*"
                           class="w-full text-sm text-slate-500 file:mr-4 file:py-2.5 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition cursor-pointer border border-slate-300 rounded-lg">
                    <p class="text-xs text-slate-500 mt-1">Format gambar: JPG, PNG, GIF, atau WEBP.</p>
                </div>

                <div class="pt-4 flex gap-4">
                    <button type="submit"
                            class="flex-1 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 shadow-md shadow-indigo-200">
                        Proses Data Produk
                    </button>
                    <button type="reset"
                            class="px-6 py-3 bg-slate-200 hover:bg-slate-300 text-slate-700 font-semibold rounded-lg transition duration-200">
                        Reset
                    </button>
                </div>

            </form>
        </div>
    </main>

</body>
</html>