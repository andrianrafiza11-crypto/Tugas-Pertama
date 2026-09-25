         // Array 50 Data Produk Lengkap (Nama, Gambar, Harga, Deskripsi, Kategori, Rating)
        const products = [
            // Elektronik (10 Items)
            { id: 1, name: "Laptop Ultra Slim Pro 14", category: "Elektronik", price: 12499000, rating: 4.8, image: "https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=500", description: "Laptop bertenaga Intel i7 generasi terbaru, RAM 16GB, SSD 512GB, dan layar IPS Full HD." },
            { id: 2, name: "Smart TV 4K Ultra HD 50 Inch", category: "Elektronik", price: 5899000, rating: 4.7, image: "https://images.unsplash.com/photo-1593784991095-a205069470b6?w=500", description: "Layar TV pintar dengan dukungan HDR10+, Google TV built-in, dan kualitas audio Dolby Digital." },
            { id: 3, name: "Monitor Gaming Curved 144Hz 27 Inch", category: "Elektronik", price: 3250000, rating: 4.9, image: "https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=500", description: "Response time 1ms, reso lusih Full HD, panel VA lengkung untuk pengalaman bermain game imersif." },
            { id: 4, name: "Kamera Mirrorless 24MP 4K", category: "Elektronik", price: 8999000, rating: 4.8, image: "https://images.unsplash.com/photo-1516035069371-29a1b244cc32?w=500", description: "Sensor APS-C dengan Autofokus cepat, rekaman video 4K 30fps, dan konektivitas WiFi." },
            { id: 5, name: "Console Game Next-Gen 1TB", category: "Elektronik", price: 7499000, rating: 4.9, image: "https://images.unsplash.com/photo-1606813907291-d86efa9b94db?w=500", description: "Konsol game dengan grafis ray-tracing hingga 120 FPS dan SSD NVMe super cepat." },
            { id: 6, name: "Speaker Bluetooth Waterproof Portable", category: "Elektronik", price: 6500000, rating: 4.6, image: "https://images.unsplash.com/photo-1545454675-3531b543be5d?w=500", description: "Suara bass tebal, sertifikasi tahan air IPX7, dan daya tahan baterai hingga 20 jam." },
            { id: 7, name: "Proyektor Mini Portable HD", category: "Elektronik", price: 1850000, rating: 4.4, image: "https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=500", description: "Bioskop pribadi di rumah dengan proyeksi hingga 120 inci dan koneksi wireless screen mirroring." },
            { id: 8, name: "Keyboard Mekanikal RGB Wireless", category: "Elektronik", price: 890000, rating: 4.7, image: "https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=500", description: "Switch Hotswap kustom, koneksi Bluetooth/2.4G, dan pencahayaan RGB yang fleksibel." },
            { id: 9, name: "Mouse Gaming Ergonomis 16000 DPI", category: "Elektronik", price: 450000, rating: 4.5, image: "https://images.unsplash.com/photo-1615663245857-ac93bb7c39e7?w=500", description: "Sensor optik presisi tinggi, tombol makro yang bisa diprogram, dan bobot ultralight." },
            { id: 10, name: "Router WiFi 6 Mesh High Speed", category: "Elektronik", price: 1200000, rating: 4.8, image: "https://images.unsplash.com/photo-1544197150-b99a580bb7a8?w=500", description: "Kecepatan hingga 3000 Mbps dengan cakupan sinyal luas bebas dead-zone." },

            // Gadget (10 Items)
            { id: 11, name: "Smartphone Flagship Pro 5G", category: "Gadget", price: 14999000, rating: 4.9, image: "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=500", description: "Layar AMOLED 120Hz, Chipset Snapdragon kencang, dan sistem quad-camera 108MP." },
            { id: 12, name: "Tablet Digital Drawing 11 Inch", category: "Gadget", price: 6200000, rating: 4.8, image: "https://images.unsplash.com/photo-1561154464-82e9adf32764?w=500", description: "Dilengkapi stylus pen peka tekanan, cocok untuk desainer grafis dan seniman digital." },
            { id: 13, name: "Smartwatch Sport GPS & Heart Rate", category: "Gadget", price: 2100000, rating: 4.6, image: "https://images.unsplash.com/photo-1579586337278-3befd40fd17a?w=500", description: "Pelacak kesehatan lengkap, tahan air 50m, dan daya baterai bertahan hingga 14 hari." },
            { id: 14, name: "Earphone TWS Active Noise Cancelling", category: "Gadget", price: 1350000, rating: 4.7, image: "https://images.unsplash.com/photo-1590658268037-6bf12165a8df?w=500", description: "Fitur peredam kebisingan luar biasa, audio resolusi tinggi, dan mikrofon jernih." },
            { id: 15, name: "Powerbank Quick Charge 20000mAh", category: "Gadget", price: 380000, rating: 4.8, image: "https://images.unsplash.com/photo-1609592424109-dd9892f1b177?w=500", description: "Pengisian daya super cepat Power Delivery 22.5W dengan indikator LED persentase baterai." },
            { id: 16, name: "Headset Gaming Surround 7.1", category: "Gadget", price: 720000, rating: 4.6, image: "https://images.unsplash.com/photo-1546435770-a3e426bf472b?w=500", description: "Bantalan telinga empuk dengan mikrofon berperedam bising dan efek audio posisi presisi." },
            { id: 17, name: "Wireless Charger Pad 15W", category: "Gadget", price: 210000, rating: 4.5, image: "https://images.unsplash.com/photo-1622445268121-8e12f88a9713?w=500", description: "Isi daya smartphone tanpa kabel dengan proteksi terhadap suhu panas berlebih." },
            { id: 18, name: "Gimbal Stabilizer Smartphone 3-Axis", category: "Gadget", price: 1150000, rating: 4.7, image: "https://images.unsplash.com/photo-1589492477829-5e65395b66cc?w=500", description: "Hasil perekaman video stabil tanpa guncangan dengan pelacakan objek otomatis." },
            { id: 19, name: "Stylus Pen Universal Touchscreen", category: "Gadget", price: 290000, rating: 4.3, image: "https://images.unsplash.com/photo-1585336261026-8f5786372969?w=500", description: "Presisi tinggi tanpa lag, kompatibel dengan iOS dan Android untuk mencatat atau menggambar." },
            { id: 20, name: "Action Cam 4K Waterproof 60fps", category: "Gadget", price: 2450000, rating: 4.6, image: "https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=500", description: "Kamera aksi ekstrem untuk merekam petualangan outdoor dengan lensa ultra-wide." },

            // Fashion (10 Items)
            { id: 21, name: "Jaket Denim Vintage Classic", category: "Fashion", price: 350000, rating: 4.7, image: "https://images.unsplash.com/photo-1576995853123-5a10305d93c0?w=500", description: "Bahan katun denim tebal berkualitas tinggi dengan potongan kasual yang elegan." },
            { id: 22, name: "Sepatu Sneakers Running Casual", category: "Fashion", price: 580000, rating: 4.8, image: "https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500", description: "Alas sepatu empuk anti-selip, sangat nyaman digunakan untuk olahraga maupun hangout." },
            { id: 23, name: "Kaos Polo Cotton Pique Premium", category: "Fashion", price: 180000, rating: 4.5, image: "https://images.unsplash.com/photo-1586363104862-3a5e2ab60d99?w=500", description: "Bahan adem tidak panas, potongan slim fit rapi cocok untuk suasana semi-formal." },
            { id: 24, name: "Kemeja Flanel Kotak-Kotak Modern", category: "Fashion", price: 220000, rating: 4.6, image: "https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?w=500", description: "Kemeja kasual bahan wool flanel lembut yang nyaman dikenakan seharian." },
            { id: 25, name: "Celana Chino Slimfit Stretch", category: "Fashion", price: 260000, rating: 4.7, image: "https://images.unsplash.com/photo-1473966968600-fa801b869a1a?w=500", description: "Celana pria berbahan katun stretch lentur yang memudahkan pergerakan aktif Anda." },
            { id: 26, name: "Tas Ransel BackPack Canvas Water Resistant", category: "Fashion", price: 310000, rating: 4.8, image: "https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=500", description: "Kapasitas muat laptop 15.6 inci dengan bahan kanvas tebal anti-air." },
            { id: 27, name: "Jam Tangan Pria Chronograph Leather Strap", category: "Fashion", price: 850000, rating: 4.9, image: "https://images.unsplash.com/photo-1524805444758-089113d48a6d?w=500", description: "Tampilan maskulin dengan tali kulit asli dan fitur chronograph stopwatch." },
            { id: 28, name: "Topi Baseball Adjustable Canvas", category: "Fashion", price: 85000, rating: 4.4, image: "https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=500", description: "Aksesori pelindung panas matahari gaya santai dengan bordir keren." },
            { id: 29, name: "Kacamata Hitam Sunglasses UV400 Protection", category: "Fashion", price: 145000, rating: 4.6, image: "https://images.unsplash.com/photo-1511499767150-a48a237f0083?w=500", description: "Lensa polaroid pelindung paparan sinar UV berbahaya untuk aktivitas luar ruangan." },
            { id: 30, name: "Sweater Hoodie Oversized Warm Fleece", category: "Fashion", price: 240000, rating: 4.7, image: "https://images.unsplash.com/photo-1556905055-8f358a7a47b2?w=500", description: "Bahan hangat kain fleece halus, gaya streetwear trendi terkini." },

            // Rumah Tangga (10 Items)
            { id: 31, name: "Air Fryer Low Watt 4 Liter", category: "Rumah Tangga", price: 780000, rating: 4.8, image: "https://images.unsplash.com/photo-1585515320310-259814833e62?w=500", description: "Menggoreng tanpa minyak lebih sehat dengan sirkulasi udara panas 360 derajat." },
            { id: 32, name: "Mesin Kopi Espresso Auto Maker", category: "Rumah Tangga", price: 1850000, rating: 4.9, image: "https://images.unsplash.com/photo-1517668808822-9e428824603b?w=500", description: "Nikmati kopi standar kafe di rumah dengan tekanan pompa 15 bar dan milk frother." },
            { id: 33, name: "Robot Vacuum Cleaner Smart Mapping", category: "Rumah Tangga", price: 2499000, rating: 4.7, image: "https://images.unsplash.com/photo-1558317374-067fb5f30001?w=500", description: "Pembersih debu otomatis pintar yang bisa dikendalikan melalui aplikasi smartphone." },
            { id: 34, name: "Blender Juicer Portable Rechargable", category: "Rumah Tangga", price: 165000, rating: 4.4, image: "https://images.unsplash.com/photo-1570222094114-d054a817e56b?w=500", description: "Buat jus segar di mana saja dengan blender mini portabel yang menggunakan USB." },
            { id: 35, name: "Air Purifier HEPA Filter Room 30m²", category: "Rumah Tangga", price: 1350000, rating: 4.8, image: "https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=500", description: "Menyaring 99.97% debu, alergen, virus, dan bau tidak sedap di dalam ruangan." },
            { id: 36, name: "Set Alat Masak Anti Lengket Granite", category: "Rumah Tangga", price: 520000, rating: 4.7, image: "https://images.unsplash.com/photo-1584992236310-6edddc08acff?w=500", description: "Satu set wajan & panci granit bebas PFOA anti-lengket dan mudah dibersihkan." },
            { id: 37, name: "Lampu Meja Belajar LED Dimmer Smart", category: "Rumah Tangga", price: 195000, rating: 4.6, image: "https://images.unsplash.com/photo-1534353473418-4cfa6c56fd38?w=500", description: "Lampu pelindung mata dengan pengaturan tingkat kecerahan dan temperatur warna." },
            { id: 38, name: "Humidifier Aromatherapy Diffuser Ultrasonic", category: "Rumah Tangga", price: 140000, rating: 4.5, image: "https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?w=500", description: "Melembabkan udara ruangan sambil memberikan aroma terapi menenangkan." },
            { id: 39, name: "Teko Listrik Stainless Steel 1.8L", category: "Rumah Tangga", price: 125000, rating: 4.6, image: "https://images.unsplash.com/photo-1594212699903-ec8a3eca50f6?w=500", description: "Mendidihkan air dengan cepat, aman dengan fitur otomatis mati saat air matang." },
            { id: 40, name: "Timbangan Badan Digital Presisi High Precision", category: "Rumah Tangga", price: 110000, rating: 4.5, image: "https://images.unsplash.com/photo-1518611012118-696072aa579a?w=500", description: "Layar LCD bening dengan kaca tempered glass tebal yang kuat dan presisi." },

            // Olahraga & Outdoor (5 Items)
            { id: 41, name: "Matras Yoga Anti-Slip NBR 10mm", category: "Olahraga", price: 135000, rating: 4.7, image: "https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?w=500", description: "Matras empuk dan tidak licin, sangat cocok untuk yoga, pilates, atau workout di rumah." },
            { id: 42, name: "Dumbbell Set Adjust 20KG Rubber", category: "Olahraga", price: 480000, rating: 4.8, image: "https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?w=500", description: "Set beban bongkar pasang fleksibel untuk latihan otot tangan dan tubuh." },
            { id: 43, name: "Tenda Camping Kapasitas 4 Orang Waterproof", category: "Olahraga", price: 650000, rating: 4.6, image: "https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?w=500", description: "Mudah didirikan, tahan hujan dan angin, dilengkapi kelambu anti-nyamuk." },
            { id: 44, name: "Sepeda Lipat Alloy 20 Inch 8 Speed", category: "Olahraga", price: 2850000, rating: 4.8, image: "https://images.unsplash.com/photo-1485965120184-e220f721d03e?w=500", description: "Rangka aluminium ringan, mudah dilipat untuk mobilitas perkotaan." },
            { id: 45, name: "Botol Minum Olahraga Vacuum Tumbler 1 Liter", category: "Olahraga", price: 120000, rating: 4.7, image: "https://images.unsplash.com/photo-1602143407151-7111542de6e8?w=500", description: "Menjaga suhu air dingin atau panas hingga 12 jam dengan material bebas BPA." },

            // Buku & Tulis (5 Items)
            { id: 46, name: "Buku Novel Best Seller Atomic Habits", category: "Buku", price: 108000, rating: 4.9, image: "https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=500", description: "Buku panduan pengembangan diri populer mengenai perubahan kecil yang menghasilkan hasil luar biasa." },
            { id: 47, name: "Jurnal Notebook Dotted Hardcover A5", category: "Buku", price: 65000, rating: 4.6, image: "https://images.unsplash.com/photo-1531346878377-a5be20888e57?w=500", description: "Kertas tebal GSM tinggi yang cocok untuk bullet journaling dan mencatat tugas harian." },
            { id: 48, name: "Set Brush Pen Calligraphy 12 Warna", category: "Buku", price: 85000, rating: 4.7, image: "https://images.unsplash.com/photo-1513542789411-b6a5d4f31634?w=500", description: "Pena kuas artistik fleksibel untuk seni kaligrafi, menggambar, dan melukis." },
            { id: 49, name: "Buku Pemrograman Master JavaScript & React", category: "Buku", price: 145000, rating: 4.8, image: "https://images.unsplash.com/photo-1532012197267-da84d127e765?w=500", description: "Panduan praktis lengkap membangun aplikasi web modern bagi pemula hingga profesional." },
            { id: 50, name: "Tas Organizer Alat Tulis Pouch Aesthetic", category: "Buku", price: 45000, rating: 4.5, image: "https://images.unsplash.com/photo-1583485088034-697b5bc54ccd?w=500", description: "Kotak pensil kain minimalis dengan kapasitas penyimpanan besar dan sekat rapi." }
        ];

        // App State Management
        let cart = [];
        let activeCategory = "Semua";
        let searchQuery = "";
        let currentSort = "default";

        // DOM Elements
        const productGrid = document.getElementById("productGrid");
        const categoryContainer = document.getElementById("categoryContainer");
        const searchInput = document.getElementById("searchInput");
        const sortSelect = document.getElementById("sortSelect");
        const productCount = document.getElementById("productCount");
        const totalProductCount = document.getElementById("totalProductCount");
        const emptyState = document.getElementById("emptyState");
        const cartBadge = document.getElementById("cartBadge");
        const cartItemsList = document.getElementById("cartItemsList");
        const cartTotalPrice = document.getElementById("cartTotalPrice");

        // Format Currency Helper
        function formatRupiah(number) {
            return new Intl.NumberFormat("id-ID", {
                style: "currency",
                currency: "IDR",
                maximumFractionDigits: 0
            }).format(number);
        }

        // Render Category Filter Buttons
        function renderCategories() {
            // Get unique categories
            const categories = ["Semua", ...new Set(products.map(p => p.category))];
            
            categoryContainer.innerHTML = categories.map(cat => `
                <button class="btn btn-outline-secondary category-btn ${cat === activeCategory ? 'active' : ''}" 
                        onclick="filterByCategory('${cat}')">
                    ${cat}
                </button>
            `).join('');
        }

        // Filter Category Handler
        function filterByCategory(category) {
            activeCategory = category;
            renderCategories();
            renderProducts();
        }

        // Reset Filter Handler
        function resetFilters() {
            activeCategory = "Semua";
            searchQuery = "";
            currentSort = "default";
            searchInput.value = "";
            sortSelect.value = "default";
            renderCategories();
            renderProducts();
        }

        // Main Loop Function to Render Products to UI
        function renderProducts() {
            // 1. Filter by Category
            let filtered = products.filter(p => {
                return activeCategory === "Semua" || p.category === activeCategory;
            });

            // 2. Filter by Search Input
            if (searchQuery.trim() !== "") {
                const query = searchQuery.toLowerCase();
                filtered = filtered.filter(p => 
                    p.name.toLowerCase().includes(query) || 
                    p.description.toLowerCase().includes(query)
                );
            }

            // 3. Sorting Logic
            if (currentSort === "price-low") {
                filtered.sort((a, b) => a.price - b.price);
            } else if (currentSort === "price-high") {
                filtered.sort((a, b) => b.price - a.price);
            } else if (currentSort === "name-asc") {
                filtered.sort((a, b) => a.name.localeCompare(b.name));
            } else if (currentSort === "name-desc") {
                filtered.sort((a, b) => b.name.localeCompare(a.name));
            } else if (currentSort === "rating") {
                filtered.sort((a, b) => b.rating - a.rating);
            }

            // Update Count Displays
            productCount.innerText = filtered.length;
            totalProductCount.innerText = products.length;

            // Handle Empty State
            if (filtered.length === 0) {
                productGrid.innerHTML = "";
                emptyState.classList.remove("d-none");
                return;
            } else {
                emptyState.classList.add("d-none");
            }

            // LOOP THROUGH ARRAY AND GENERATE HTML CARDS
            productGrid.innerHTML = filtered.map(product => `
                <div class="col">
                    <div class="product-card">
                        <div class="product-img-wrapper">
                            <img src="${product.image}" alt="${product.name}" onerror="this.src='https://placehold.co/500x375/e2e8f0/1e293b?text=Produk+TokoKita'">
                            <span class="category-badge">${product.category}</span>
                        </div>
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <span class="rating-star"><i class="bi bi-star-fill me-1"></i>${product.rating}</span>
                                <small class="text-muted">Stok Ready</small>
                            </div>
                            <h6 class="fw-bold mb-2 text-truncate" title="${product.name}">${product.name}</h6>
                            <p class="text-muted small text-truncate-2 mb-3" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; height: 38px;">
                                ${product.description}
                            </p>
                            <div class="mt-auto">
                                <div class="price-tag mb-3">${formatRupiah(product.price)}</div>
                                <div class="d-flex gap-2">
                                    <button class="btn btn-outline-secondary btn-sm flex-grow-1 rounded-2" onclick="openDetailModal(${product.id})">
                                        Detail
                                    </button>
                                    <button class="btn btn-primary btn-sm flex-grow-1 rounded-2 d-flex align-items-center justify-content-center gap-1" onclick="addToCart(${product.id})">
                                        <i class="bi bi-cart-plus"></i> Beli
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Open Product Detail Modal
        function openDetailModal(productId) {
            const product = products.find(p => p.id === productId);
            if (!product) return;

            document.getElementById("modalTitle").innerText = product.name;
            document.getElementById("modalCategory").innerText = product.category;
            document.getElementById("modalPrice").innerText = formatRupiah(product.price);
            document.getElementById("modalDescription").innerText = product.description;
            document.getElementById("modalRating").innerHTML = `<i class="bi bi-star-fill text-warning me-1"></i>${product.rating} / 5.0`;
            document.getElementById("modalImg").src = product.image;

            const modalAddCartBtn = document.getElementById("modalAddCartBtn");
            modalAddCartBtn.onclick = function() {
                addToCart(product.id);
                const modalEl = document.getElementById("productModal");
                const modal = bootstrap.Modal.getInstance(modalEl);
                if (modal) modal.hide();
            };

            const detailModal = new bootstrap.Modal(document.getElementById("productModal"));
            detailModal.show();
        }

        // Add Product to Cart
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            if (!product) return;

            const existingIndex = cart.findIndex(item => item.id === productId);
            if (existingIndex > -1) {
                cart[existingIndex].qty += 1;
            } else {
                cart.push({ ...product, qty: 1 });
            }

            updateCartUI();
            
            // Optional Feedback Notification
            showToast(`"${product.name}" telah ditambahkan ke keranjang.`);
        }

        // Update Cart Quantity
        function updateQuantity(productId, change) {
            const index = cart.findIndex(item => item.id === productId);
            if (index > -1) {
                cart[index].qty += change;
                if (cart[index].qty <= 0) {
                    cart.splice(index, 1);
                }
            }
            updateCartUI();
        }

        // Remove item from Cart
        function removeFromCart(productId) {
            cart = cart.filter(item => item.id !== productId);
            updateCartUI();
        }

        // Render Cart items & update Badge / Total
        function updateCartUI() {
            // Calculate Total Items & Total Price
            const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
            const totalCost = cart.reduce((sum, item) => sum + (item.price * item.qty), 0);

            cartBadge.innerText = totalItems;
            cartTotalPrice.innerText = formatRupiah(totalCost);

            if (cart.length === 0) {
                cartItemsList.innerHTML = `
                    <div class="text-center py-5 text-muted">
                        <i class="bi bi-cart-x display-3 mb-2"></i>
                        <p class="mb-0">Keranjang belanja Anda masih kosong.</p>
                    </div>
                `;
                return;
            }

            cartItemsList.innerHTML = cart.map(item => `
                <div class="d-flex align-items-center gap-3 border-bottom py-3">
                    <img src="${item.image}" alt="${item.name}" class="cart-item-img">
                    <div class="flex-grow-1 overflow-hidden">
                        <h6 class="mb-1 text-truncate font-semibold small">${item.name}</h6>
                        <div class="text-primary fw-bold small">${formatRupiah(item.price)}</div>
                        <div class="d-flex align-items-center gap-2 mt-2">
                            <button class="btn btn-sm btn-outline-secondary py-0 px-2 rounded-1" onclick="updateQuantity(${item.id}, -1)">-</button>
                            <span class="small font-semibold px-1">${item.qty}</span>
                            <button class="btn btn-sm btn-outline-secondary py-0 px-2 rounded-1" onclick="updateQuantity(${item.id}, 1)">+</button>
                        </div>
                    </div>
                    <button class="btn btn-link text-danger p-0" onclick="removeFromCart(${item.id})">
                        <i class="bi bi-trash fs-5"></i>
                    </button>
                </div>
            `).join('');
        }

        // Simple Toast / Message Box alert replacement
        function showToast(message) {
            const toastContainer = document.createElement("div");
            toastContainer.className = "position-fixed bottom-0 end-0 p-3";
            toastContainer.style.zIndex = "1100";
            toastContainer.innerHTML = `
                <div class="toast align-items-center text-white bg-dark border-0 show" role="alert">
                    <div class="d-flex">
                        <div class="toast-body d-flex align-items-center gap-2">
                            <i class="bi bi-check-circle-fill text-success fs-5"></i>
                            <span>${message}</span>
                        </div>
                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                    </div>
                </div>
            `;
            document.body.appendChild(toastContainer);
            setTimeout(() => toastContainer.remove(), 2500);
        }

        // Checkout Action
        function checkout() {
            if (cart.length === 0) {
                showToast("Keranjang Anda kosong!");
                return;
            }
            showToast("Terima kasih! Pesanan Anda sedang diproses.");
            cart = [];
            updateCartUI();
            const cartOffcanvasEl = document.getElementById('cartOffcanvas');
            const offcanvas = bootstrap.Offcanvas.getInstance(cartOffcanvasEl);
            if (offcanvas) offcanvas.hide();
        }

        // Event Listeners for Live Search & Sort
        searchInput.addEventListener("input", (e) => {
            searchQuery = e.target.value;
            renderProducts();
        });

        sortSelect.addEventListener("change", (e) => {
            currentSort = e.target.value;
            renderProducts();
        });

        // Initialize App on Window Load
        window.onload = function() {
            renderCategories();
            renderProducts();
            updateCartUI();
        };