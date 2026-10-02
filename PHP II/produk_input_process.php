<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Memproses Produk - ProductHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-100 min-h-screen flex flex-col justify-center items-center py-10 px-4">

<div class="max-w-2xl w-full bg-white rounded-2xl shadow-xl overflow-hidden border border-slate-200">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Deklarasi Variabel & Membaca Data dari Form via POST
    $nama_produk = isset($_POST['nama_produk']) ? trim($_POST['nama_produk']) : '';
    $harga       = isset($_POST['harga']) ? trim($_POST['harga']) : '';
    $kategori    = isset($_POST['kategori']) ? trim($_POST['kategori']) : '';
    $stok        = isset($_POST['stok']) ? trim($_POST['stok']) : '';
    $deskripsi   = isset($_POST['deskripsi']) ? trim($_POST['deskripsi']) : '';
    $gambar      = isset($_FILES['gambar']) ? $_FILES['gambar'] : null;

    // 2. Validasi Sederhana: Memastikan tidak ada bidang yang kosong
    if (empty($nama_produk) || empty($harga) || empty($kategori) || empty($stok) || empty($deskripsi) || empty($gambar['name']) || $gambar['error'] !== UPLOAD_ERR_OK) {
        
        ?>
        <div class="bg-rose-600 px-8 py-6 text-white">
            <h2 class="text-2xl font-bold">Validasi Gagal!</h2>
            <p class="text-rose-100 text-sm mt-1">Harap pastikan semua bidang formulir telah diisi dengan benar.</p>
        </div>
        <div class="p-8 text-center space-y-6">
            <div class="w-16 h-16 bg-rose-100 text-rose-600 rounded-full flex items-center justify-center mx-auto text-2xl font-bold">
                ✕
            </div>
            <p class="text-slate-600">Terjadi kesalahan. Salah satu field input atau file gambar belum terisi.</p>
            <div class="flex justify-center gap-3">
                <a href="produk_input_form.php" class="inline-block bg-slate-800 hover:bg-slate-900 text-white font-semibold py-2.5 px-6 rounded-lg transition">
                    &larr; Kembali ke Form
                </a>
            </div>
        </div>
        <?php

    } else {
        
        // Operator & Fungsi untuk format harga menjadi Rupiah
        $harga_formatted = "Rp " . number_format((float)$harga, 0, ',', '.');
        
        // Mengubah gambar temporary menjadi base64 URI untuk ditampilkan tanpa disimpan ke folder/database
        $image_data = file_get_contents($gambar['tmp_name']);
        $base64_image = 'data:' . $gambar['type'] . ';base64,' . base64_encode($image_data);
        ?>
        
        <div class="bg-emerald-600 px-8 py-6 text-white">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-2xl font-bold">Data Produk Berhasil Diproses</h2>
                    <p class="text-emerald-100 text-sm mt-1">Data dikirim via POST tanpa disimpan ke database.</p>
                </div>
                <span class="bg-emerald-700 text-emerald-100 text-xs px-3 py-1 rounded-full font-mono">STATUS: OK</span>
            </div>
        </div>

        <div class="p-8 space-y-6">
            <div class="flex flex-col md:flex-row gap-6 items-start">
                <!-- Preview Gambar -->
                <div class="w-full md:w-1/3">
                    <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Gambar Produk</label>
                    <div class="rounded-lg overflow-hidden border border-slate-200 shadow-sm bg-slate-50">
                        <img src="<?php echo $base64_image; ?>" alt="<?php echo htmlspecialchars($nama_produk); ?>" class="w-full h-48 object-cover">
                    </div>
                </div>

                <!-- Detail Informasi Produk -->
                <div class="w-full md:w-2/3 space-y-4">
                    <div>
                        <span class="inline-block bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-1 rounded-md mb-1">
                            <?php echo htmlspecialchars($kategori); ?>
                        </span>
                        <h3 class="text-xl font-bold text-slate-800"><?php echo htmlspecialchars($nama_produk); ?></h3>
                    </div>

                    <div class="grid grid-cols-2 gap-4 bg-slate-50 p-3 rounded-lg border border-slate-100">
                        <div>
                            <p class="text-xs text-slate-500 font-medium">Harga</p>
                            <p class="text-lg font-bold text-emerald-600"><?php echo $harga_formatted; ?></p>
                        </div>
                        <div>
                            <p class="text-xs text-slate-500 font-medium">Stok Tersedia</p>
                            <p class="text-lg font-bold text-slate-700"><?php echo htmlspecialchars($stok); ?> unit</p>
                        </div>
                    </div>

                    <div>
                        <p class="text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">Deskripsi Produk</p>
                        <p class="text-slate-600 text-sm leading-relaxed bg-slate-50 p-3 rounded-lg border border-slate-100">
                            <?php echo nl2br(htmlspecialchars($deskripsi)); ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-100 flex justify-between items-center text-sm">
                <a href="produk_input_form.php" class="inline-flex items-center text-indigo-600 hover:text-indigo-800 font-semibold transition">
                    &larr; Tambah Produk Lainnya
                </a>
                <div class="space-x-3 text-xs text-slate-500">
                    <a href="index.html" class="hover:underline">Home (HTML)</a>
                    <span>•</span>
                    <a href="index.php" class="hover:underline">Dashboard (PHP)</a>
                </div>
            </div>
        </div>

        <?php
    }

} else {
    ?>
    <div class="p-8 text-center space-y-4">
        <p class="text-rose-500 font-semibold">Akses ditolak. Silakan isi form terlebih dahulu.</p>
        <a href="produk_input_form.php" class="inline-block bg-indigo-600 text-white px-5 py-2 rounded-lg text-sm font-medium">Ke Form Input Produk</a>
    </div>
    <?php
}
?>

</div>

</body>
</html>