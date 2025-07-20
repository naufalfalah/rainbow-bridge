<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesan Layanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        select {
            white-space: normal; /* Mengizinkan teks untuk membungkus */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Pesan Layanan</h1>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form action="?url=order/create" method="POST" class="p-4 border rounded shadow-sm bg-light">
            <!-- wahtsapp number -->
            <div class="mb-3">
                <label for="whatsapp_number" class="form-label">Nomor WhatsApp *</label>
                <input type="text" id="whatsapp_number" name="whatsapp_number" class="form-control" placeholder="Masukkan nomor WhatsApp Anda" required>
            </div>

            <div class="mb-3">
                <label for="service_id" class="form-label">Tipe Layanan *</label>
                <select id="service_id" name="service_id" class="form-control" required>
                    <option value="">-- Pilih tipe layanan --</option>
                    <?php foreach ($services as $service): ?>
                        <option value="<?= $service['id']; ?>"><?= htmlspecialchars($service['name']); ?> - <?= htmlspecialchars($service['description']); ?> - <?= htmlspecialchars($service['price']); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="pet_funeral_service" class="form-label">Layanan Jenazah Pengurusan Hewan (Optional)</label>
                <select id="pet_funeral_service" name="pet_funeral_service" class="form-control">
                    <option value="">-- Pilih opsi --</option>
                    <option value="small">Pengurusan Jenazah Hewan Small - Layanan Pengurusan Jenazah Hewan seperti dibersihkan, disisir, dan dibedaki (opsional). Termasuk kain kafan dan perlengkapan pembersih. Max. berat 10kg. - IDR 500.000,-</option>
                    <option value="small_plus">Pengurusan Jenazah Hewan Small Plus - Layanan Pengurusan Jenazah Hewan seperti dimandikan, disisir, dan dibedaki (opsional). Termasuk kain kafan dan perlengkapan pembersih. Max. berat 10kg. - IDR 750.000,-</option>
                    <option value="medium">Pengurusan Jenazah Hewan Standar Medium - Layanan Pengurusan Jenazah Hewan seperti dibersihkan, disisir, dan dibedaki (opsional). Termasuk kain kafan dan perlengkapan pembersih. Max. berat 30kg. - IDR 750.000,-</option>
                    <option value="medium_plus">Pengurusan Jenazah Hewan Standar Medium Plus - Layanan Pengurusan Jenazah Hewan seperti dimandikan, disisir, dan dibedaki (opsional). Termasuk kain kafan dan perlengkapan pembersih. Max. berat 30kg. - IDR 1.000.000,-</option>
                    <option value="big">Pengurusan Jenazah Hewan Standar Big - Layanan Pengurusan Jenazah Hewan seperti dibersihkan, disisir, dan dibedaki (opsional). Termasuk kain kafan dan perlengkapan pembersih. Max. berat 70kg. - IDR 1.000.000,-</option>
                    <option value="big_plus">Pengurusan Jenazah Hewan Standar Big Plus - Layanan Pengurusan Jenazah Hewan seperti dimandikan, disisir, dan dibedaki (opsional). Termasuk kain kafan dan perlengkapan pembersih. Max. berat 70kg. - IDR 1.250.000,-</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="pickup_area" class="form-label">Area Penjemputan Jenazah *</label>
                <select id="pickup_area" name="pickup_area" class="form-control" required>
                    <option value="">-- Pilih opsi --</option>
                    <option value="jakarta">Area DKI Jakarta - Layanan penjemputan jenazah hewan area DKI Jakarta - IDR 0,-</option>
                    <option value="bodetabek">Area BoDeTaBek - Layanan penjemputan jenazah hewan area BoDeTaBek (Bogor Kota, Depok, Tangerang Kota/Selatan, dan Bekasi) - IDR 750.000,-</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="return_area" class="form-label">Area Pengantaran Kembali Abu Jenazah *</label>
                <select id="return_area" name="return_area" class="form-control" required>
                    <option value="">-- Pilih opsi --</option>
                    <option value="flowers">Tidak sesuai - IDR 0,-</option>
                    <option value="jakarta">Area DKI Jakarta - Layanan pengantaran kembali abu jenazah hewan area DKI Jakarta - IDR 250.000,-</option>
                    <option value="bodetabek">Area BoDeTaBek - Layanan pengantaran kembali abu jenazah hewan area BoDeTaBek (Bogor Kota, Depok, Tangerang Kota/Selatan, dan Bekasi) - IDR 750.000,-</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="grief_attributes" class="form-label">Atribut Kedukaan Hewan *</label>
                <select id="grief_attributes" name="grief_attributes" class="form-control" required>
                    <option value="">-- Pilih opsi --</option>
                    <option value="standard">Atribut Pemakaman Hewan Standar - Paket bunga tabur dan Dokumentasi (jika diperlukan) - IDR 250.000,-</option>
                    <option value="premium">Atribut Pemakaman Hewan Premium - Paket bunga tabur dan Dokumentasi (jika diperlukan) - IDR 2.750.000,-</option>
                    <option value="none">Tanpa Atribut Kedukaan - IDR 0,--</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="ashes_scattering" class="form-label">Pelarungan Abu Jenazah Hewan (Optional)</label>
                <select id="ashes_scattering" name="ashes_scattering" class="form-control">
                    <option value="">-- Pilih opsi --</option>
                    <option value="mutiara">Pelarungan Abu Jenazah Hewan di Mutiara - Pelarungan Abu Jenazah Hewan di Mutiara. Termasuk tiket masuk kawasan untuk 1 mobil dan sewa perahu. (max. 3 orang) - IDR 1.000.000,-</option>
                    <option value="ancol">Pelarungan Abu Jenazah Hewan di Ancol - Pelarungan Abu Jenazah Hewan di Ancol. Termasuk tiket masuk kawasan untuk 1 mobil dan sewa perahu. (max. 3 orang) - IDR 1.250.000,-</option>
                    <option value="pik">Pelarungan Abu Jenazah Hewan di PIK - Pelarungan Abu Jenazah Hewan di PIK. Termasuk tiket masuk kawasan untuk 1 mobil dan sewa perahu. (max. 3 orang) - IDR 1.500.000,-</option>
                    <option value="none">Tanpa pelarungan - IDR 0,-</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="addons" class="form-label">Addons (Optional)</label>
                <select id="addons" name="addons" class="form-control">
                    <option value="">-- Pilih opsi --</option>
                    <option value="standard">Peti Jenazah Hewan Standar - IDR 500.000,-</option>
                    <option value="paw_small">Guci Paw Kecil - IDR 350.000,-</option>
                    <option value="paw_large">Guci Paw Besar - IDR 750.000,-</option>
                    <option value="memorial_kits">Memorial kits - IDR 2.500.000,-</option>
                    <option value="none">Tidak ada - IDR 0,-</option>
                </select>
            </div>

            <div class="alert alert-info mt-4" role="alert">
                Setelah pesanan dibuat, admin kami akan menghubungi Anda melalui WhatsApp untuk konfirmasi lebih lanjut.
            </div>

            <button type="submit" class="btn btn-primary w-100">Order</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>