<?php
// Menyiapkan data statistik simulasi dan info server dinamis
$waktu_akses = date("d F Y, H:i:s");
$php_version = phpversion();
$total_fitur = 6; // Nama, Harga, Deskripsi, Kategori, Stok, Gambar
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Produk - Dashboard (PHP)</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 text-slate-800 min-h-screen flex flex-col">

    <header class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-emerald-600 rounded-xl flex items-center justify-center text-white font-bold text-xl shadow-md shadow-emerald-200">
                        PHP
                    </div>
                    <div>
                        <span class="font-extrabold text-lg text-slate-900 tracking-tight">ProductHub</span>
                        <span class="text-xs bg-emerald-100 text-emerald-800 font-semibold px-2 py-0.5 rounded ml-2">Dynamic PHP</span>
                    </div>
                </div>
                <nav class="flex items-center space-x-1 sm:space-x-4">
                    <a href="index.html" class="px-3 py-2 rounded-lg text-sm font-medium text-slate-600 hover:text-indigo-600 hover:bg-slate-50 transition">Home (HTML)</a>
                    <a href="index.php" class="px-3 py-2 rounded-lg text-sm font-semibold text-emerald-600 bg-emerald-50">Dashboard (PHP)</a>
                    <a href="form_produk.php" class="px-3 py-2 rounded-lg text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 transition shadow-sm">Input Produk Baru &rarr;</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow py-10 px-4 sm:px-6 lg:px-8 max-w-6xl mx-auto w-full space-y-8">
        
        <!-- Top PHP Status Card -->
        <div class="bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 rounded-3xl p-8 text-white shadow-xl relative overflow-hidden">
            <div class="relative z-10">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div>
                        <span class="text-xs uppercase tracking-wider text-emerald-400 font-mono bg-emerald-950/80 border border-emerald-800 px-3 py-1 rounded-full">Server Active</span>
                        <h1 class="text-3xl font-extrabold mt-3">Portal Manajemen Produk PHP</h1>
                        <p class="text-slate-300 text-sm mt-1">Sistem siap memproses pengiriman data formulir menggunakan method POST.</p>
                    </div>
                    <a href="form_produk.php" class="bg-emerald-500 hover:bg-emerald-600 text-slate-950 font-bold px-6 py-3 rounded-xl transition shadow-lg shadow-emerald-900/50 flex items-center gap-2">
                        + Tambah Produk
                    </a>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-8 pt-6 border-t border-slate-800/80 text-sm">
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50">
                        <p class="text-slate-400 text-xs">Waktu Server (PHP date)</p>
                        <p class="font-mono font-semibold text-emerald-400 mt-1"><?php echo $waktu_akses; ?></p>
                    </div>
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50">
                        <p class="text-slate-400 text-xs">Versi PHP Server</p>
                        <p class="font-mono font-semibold text-indigo-400 mt-1">PHP v<?php echo $php_version; ?></p>
                    </div>
                    <div class="bg-slate-800/50 p-4 rounded-xl border border-slate-700/50">
                        <p class="text-slate-400 text-xs">Field Validasi Form</p>
                        <p class="font-mono font-semibold text-amber-400 mt-1"><?php echo $total_fitur; ?> Bidang Diperiksa</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Card 1: Ke Form Produk -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-indigo-100 text-indigo-600 rounded-xl flex items-center justify-center font-bold text-xl mb-4">
                        📝
                    </div>
                    <h2 class="text-xl font-bold text-slate-900 mb-2">Form Input Produk</h2>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">
                        Isi form lengkap dengan Nama, Harga, Kategori, Stok, Deskripsi, serta Upload File Gambar untuk diuji validasinya.
                    </p>
                </div>
                <a href="form_produk.php" class="inline-flex items-center text-indigo-600 font-semibold hover:text-indigo-800 text-sm">
                    Buka Halaman Form Input &rarr;
                </a>
            </div>

            <!-- Card 2: Ke Proses Produk Langsung (Peringatan Akses) -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200 shadow-sm hover:shadow-md transition flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-xl flex items-center justify-center font-bold text-xl mb-4">
                        ⚡
                    </div>
                    <h2 class="text-xl font-bold text-slate-900 mb-2">Pemproses Data PHP</h2>
                    <p class="text-slate-600 text-sm leading-relaxed mb-6">
                        File `proses_produk.php` bertugas menerima kiriman via POST, memeriksa validasi `empty()`, dan merender output kartu produk.
                    </p>
                </div>
                <a href="proses_produk.php" class="inline-flex items-center text-slate-500 font-medium hover:text-slate-800 text-sm">
                    Uji Akses Langsung (Akan Ditolak) &rarr;
                </a>
            </div>
        </div>

    </main>

    <footer class="bg-white border-t border-slate-200 py-6 text-center text-xs text-slate-500 mt-auto">
        <p>&copy; 2026 ProductHub - Berjalan di PHP Version <?php echo $php_version; ?></p>
    </footer>

</body>
</html>