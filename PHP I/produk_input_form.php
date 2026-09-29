<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Produk Baru</title>
    
    <!-- Bootstrap 5 CSS & Bootstrap Icons -->
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
        .form-label {
            font-weight: 600;
            font-size: 0.875rem;
            color: #334155;
        }
        .required-asterisk {
            color: #ef4444;
        }
    </style>
</head>
<body class="py-4 py-md-5">

    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold text-primary"><i class="bi bi-box-seam me-2"></i>Form Input Produk</h2>
            <p class="text-muted">Langkah 1: Isi data produk di bawah ini. Data akan dikirim ke <code>proses_produk.php</code>.</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <?php if (!empty($error_msg)): ?>
                    <div class="alert alert-danger alert-dismissible fade show rounded-3 mb-4" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        <strong>Akses Ditolak / Error!</strong> <?php echo htmlspecialchars($error_msg); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="card card-custom bg-white p-4 p-md-5">
                    <h5 class="fw-bold mb-4 border-bottom pb-3">
                        <i class="bi bi-pencil-square me-2 text-primary"></i>Formulir Data Produk
                    </h5>

                    <!-- FORM MENGARAHKAN LANGSUNG KE PROSES_PRODUK.PHP -->
                    <form action="produk_input_process.php" method="POST">
                        
                        <!-- Input Nama Produk -->
                        <div class="mb-3">
                            <label for="nama_produk" class="form-label">Nama Produk <span class="required-asterisk">*</span></label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Contoh: Headphone Wireless Pro" required>
                        </div>

                        <div class="row">
                            <!-- Input Kategori -->
                            <div class="col-md-6 mb-3">
                                <label for="kategori_produk" class="form-label">Kategori Produk <span class="required-asterisk">*</span></label>
                                <select class="form-select" id="kategori_produk" name="kategori_produk" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Elektronik">Elektronik</option>
                                    <option value="Gadget">Gadget</option>
                                    <option value="Fashion">Fashion</option>
                                    <option value="Rumah Tangga">Rumah Tangga</option>
                                    <option value="Olahraga">Olahraga</option>
                                </select>
                            </div>

                            <!-- Input Harga Produk -->
                            <div class="col-md-6 mb-3">
                                <label for="harga_produk" class="form-label">Harga Produk (Rp) <span class="required-asterisk">*</span></label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light">Rp</span>
                                    <input type="number" class="form-control" id="harga_produk" name="harga_produk" placeholder="150000" min="1" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Input Stok Produk -->
                            <div class="col-md-6 mb-3">
                                <label for="stok_produk" class="form-label">Jumlah Stok <span class="required-asterisk">*</span></label>
                                <input type="number" class="form-control" id="stok_produk" name="stok_produk" placeholder="10" min="0" required>
                            </div>

                            <!-- Input URL Gambar Produk -->
                            <div class="col-md-6 mb-3">
                                <label for="gambar_produk" class="form-label">URL Gambar Produk <span class="required-asterisk">*</span></label>
                                <input type="url" class="form-control" id="gambar_produk" name="gambar_produk" placeholder="https://images.unsplash.com/..." required>
                            </div>
                        </div>

                        <!-- Input Deskripsi Produk -->
                        <div class="mb-4">
                            <label for="deskripsi_produk" class="form-label">Deskripsi Ringkas <span class="required-asterisk">*</span></label>
                            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3" placeholder="Jelaskan spesifikasi atau keunggulan produk ini..." required></textarea>
                        </div>

                        <!-- Tombol Action -->
                        <div class="d-flex gap-2 pt-2 border-top">
                            <button type="submit" class="btn btn-primary px-4 fw-semibold rounded-3">
                                <i class="bi bi-send-check me-1"></i>Kirim & Proses Data
                            </button>
                            <button type="reset" class="btn btn-outline-secondary px-3 rounded-3">
                                <i class="bi bi-arrow-counterclockwise me-1"></i>Reset
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>