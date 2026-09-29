<?php

// Memastikan file ini diakses melalui metode POST (bukan dibuka langsung via browser)
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    // Jika diakses secara langsung tanpa form, alihkan kembali ke form_produk.php
    header("Location: form_produk.php?error=Silakan+isi+formulir+terlebih+dahulu.");
    exit();
}

// 1. Mengambil dan membersihkan input dari spasi berlebih
$nama_produk      = isset($_POST['nama_produk']) ? trim($_POST['nama_produk']) : '';
$harga_produk     = isset($_POST['harga_produk']) ? trim($_POST['harga_produk']) : '';
$deskripsi_produk = isset($_POST['deskripsi_produk']) ? trim($_POST['deskripsi_produk']) : '';
$kategori_produk  = isset($_POST['kategori_produk']) ? trim($_POST['kategori_produk']) : '';
$stok_produk       = isset($_POST['stok_produk']) ? trim($_POST['stok_produk']) : '';
$gambar_produk    = isset($_POST['gambar_produk']) ? trim($_POST['gambar_produk']) : '';

// Array untuk menyimpan error validasi
$errors = array();

// 2. Validasi Server-Side
if (empty($nama_produk) || strlen($nama_produk) < 3) {
    $errors[] = "Nama produk minimal harus terdiri dari 3 karakter.";
}

if (empty($harga_produk) || !is_numeric($harga_produk) || $harga_produk <= 0) {
    $errors[] = "Harga produk harus berupa angka positif lebih dari 0.";
}

if (empty($deskripsi_produk)) {
    $errors[] = "Deskripsi produk tidak boleh kosong.";
}

if (empty($kategori_produk)) {
    $errors[] = "Kategori produk wajib dipilih.";
}

if ($stok_produk === "" || !is_numeric($stok_produk) || $stok_produk < 0) {
    $errors[] = "Stok produk tidak boleh bernilai negatif.";
}

if (empty($gambar_produk) || !filter_var($gambar_produk, FILTER_VALIDATE_URL)) {
    $errors[] = "Format URL gambar produk tidak valid.";
}

$is_valid = empty($errors);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemrosesan Data Produk</title>
    
    <!-- Bootstrap 5 CSS & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }
        .card-custom {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
        }
        .preview-img {
            max-height: 280px;
            object-fit: cover;
            border-radius: 12px;
            width: 100%;
        }
    </style>
</head>
<body class="py-4 py-md-5">

    <div class="container">
        
        <div class="text-center mb-4">
            <h2 class="fw-bold text-primary"><i class="bi bi-cpu me-2"></i>Hasil Pemrosesan PHP</h2>
            <p class="text-muted">Langkah 2: Data telah diterima dan diproses di file <code>proses_produk.php</code>.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-7">

                <?php if (!$is_valid): ?>
                    
                    <!-- DITAMPILKAN JIKA VALIDASI GAGAL -->
                    <div class="card card-custom bg-white p-4">
                        <div class="alert alert-danger d-flex align-items-center mb-4" role="alert">
                            <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                            <div>
                                <h6 class="fw-bold mb-0">Gagal Memproses Data!</h6>
                                <small>Terdapat kesalahan pada data yang Anda kirimkan.</small>
                            </div>
                        </div>

                        <h6 class="fw-bold text-danger mb-2">Rincian Error:</h6>
                        <ul class="text-danger mb-4">
                            <?php foreach ($errors as $err): ?>
                                <li><?php echo htmlspecialchars($err); ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <a href="javascript:history.back()" class="btn btn-secondary rounded-3">
                            <i class="bi bi-arrow-left me-1"></i>Kembali & Perbaiki Form
                        </a>
                    </div>

                <?php else: ?>

                    <!-- DITAMPILKAN JIKA VALIDASI BERHASIL -->
                    <div class="card card-custom bg-white p-4 p-md-5">
                        
                        <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
                            <i class="bi bi-check-circle-fill fs-4 me-3 text-success"></i>
                            <div>
                                <h6 class="fw-bold mb-0">Pemrosesan Berhasil!</h6>
                                <small>Data POST valid dan berhasil diolah oleh script PHP.</small>
                            </div>
                        </div>

                        <div class="border rounded-4 p-4 bg-light mb-4">
                            <!-- Gambar Produk -->
                            <img src="<?php echo htmlspecialchars($gambar_produk); ?>" 
                                 alt="<?php echo htmlspecialchars($nama_produk); ?>" 
                                 class="preview-img mb-3 border bg-white"
                                 onerror="this.src='https://placehold.co/600x400/e2e8f0/1e293b?text=Gambar+Tidak+Ditemukan'">

                            <!-- Badges Kategori & Stok -->
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-primary rounded-pill px-3 py-2">
                                    <?php echo htmlspecialchars($kategori_produk); ?>
                                </span>
                                
                                <?php if ($stok_produk > 5): ?>
                                    <span class="badge bg-success py-2 px-3"><i class="bi bi-check-lg me-1"></i>Stok Tersedia (<?php echo (int)$stok_produk; ?>)</span>
                                <?php elseif ($stok_produk > 0): ?>
                                    <span class="badge bg-warning text-dark py-2 px-3"><i class="bi bi-exclamation-triangle me-1"></i>Stok Menipis (<?php echo (int)$stok_produk; ?>)</span>
                                <?php else: ?>
                                    <span class="badge bg-danger py-2 px-3"><i class="bi bi-x-lg me-1"></i>Stok Habis</span>
                                <?php endif; ?>
                            </div>

                            <!-- Detail Nama & Harga -->
                            <h3 class="fw-bold text-dark mt-3 mb-1"><?php echo htmlspecialchars($nama_produk); ?></h3>
                            <h2 class="text-primary fw-bold mb-3">
                                Rp <?php echo number_format((float)$harga_produk, 0, ',', '.'); ?>
                            </h2>

                            <!-- Deskripsi -->
                            <p class="text-secondary small mb-4 leading-relaxed">
                                <?php echo nl2br(htmlspecialchars($deskripsi_produk)); ?>
                            </p>

                            <hr class="text-muted">

                            <!-- Rincian Nilai Variabel PHP -->
                            <div class="small">
                                <div class="fw-bold mb-2 text-dark"><i class="bi bi-code-slash me-1"></i>Status Variabel Terproses (PHP Backend):</div>
                                <div class="bg-white p-3 rounded-3 border">
                                    <ul class="list-unstyled mb-0 font-monospace text-muted small">
                                        <li><code>$nama_produk</code> = "<strong><?php echo htmlspecialchars($nama_produk); ?></strong>"</li>
                                        <li><code>$harga_produk</code> = <strong><?php echo (float)$harga_produk; ?></strong></li>
                                        <li><code>$kategori_produk</code> = "<strong><?php echo htmlspecialchars($kategori_produk); ?></strong>"</li>
                                        <li><code>$stok_produk</code> = <strong><?php echo (int)$stok_produk; ?></strong></li>
                                        <li><code>$gambar_produk</code> = "<strong><?php echo htmlspecialchars($gambar_produk); ?></strong>"</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation Back Button -->
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="form_produk.php" class="btn btn-outline-primary rounded-3 px-4">
                                <i class="bi bi-plus-circle me-1"></i>Tambah Produk Lain
                            </a>
                            <span class="text-muted small"><i class="bi bi-clock me-1"></i>Diproses pada: <?php echo date("d-m-Y H:i:s"); ?></span>
                        </div>

                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>