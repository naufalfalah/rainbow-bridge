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
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
            <h1 class="text-center">Pesan Layanan</h1>
        </div>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <form action="?url=order/create" method="POST" class="p-4 border rounded shadow-sm bg-light">
            <!-- owner name -->
            <div class="mb-3">
                <label for="owner_name" class="form-label">Nama Pemilik *</label>
                <input type="text" id="owner_name" name="owner_name" class="form-control" placeholder="Masukkan nama pemilik hewan" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Alamat *</label>
                <textarea id="address" name="address" class="form-control" rows="3" placeholder="Masukkan alamat lengkap Anda" required></textarea>
            </div>

            <div class="mb-3">
                <label for="animal_type" class="form-label">Jenis Hewan *</label>
                <select id="animal_type" name="animal_type" class="form-control" required>
                    <option value="">-- Pilih jenis hewan --</option>
                    <option value="cat">Kucing</option>
                    <option value="dog">Anjing</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="pet_name" class="form-label">Nama Hewan *</label>
                <input type="text" id="pet_name" name="pet_name" class="form-control" placeholder="Masukkan nama hewan Anda" required>
            </div>

            <!-- religion -->
            <div class="mb-3">
                <label for="religion" class="form-label">Agama *</label>
                <select id="religion" name="religion" class="form-control" required>
                    <option value="">-- Pilih agama --</option>
                    <option value="islam">Islam</option>
                    <option value="christian">Kristen</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="other">Lainnya</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Tanggal Lahir Hewan (Optional)</label>
                <input type="date" id="birth_date" name="birth_date" class="form-control">
            </div>

            <div class="mb-3">
                <label for="weight" class="form-label">Berat Hewan (kg) *</label>
                <input type="number" id="weight" name="weight" class="form-control" placeholder="Masukkan berat hewan dalam kg" required>
            </div>

            <div class="mb-3">
                <label for="death_date" class="form-label">Tanggal Kematian Hewan *</label>
                <input type="date" id="death_date" name="death_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="death_reason" class="form-label">Penyebab Kematian Hewan *</label>
                <textarea id="death_reason" name="death_reason" class="form-control" rows="3" placeholder="Masukkan penyebab kematian hewan Anda" required></textarea>
            </div>

            <div class="mb-3">
                <label for="float_take" class="form-label">Larung atau Ambil Jenazah? *</label>
                <select id="float_take" name="float_take" class="form-control" required>
                    <option value="">-- Pilih opsi --</option>
                    <option value="float">Larung</option>
                    <option value="take">Ambil</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="ash_pot" class="form-label">Guci Abu Jenazah (Optional)</label>
                <select id="ash_pot" name="ash_pot" class="form-control">
                    <option value="">-- Pilih opsi --</option>
                    <option value="yes">Ya</option>
                    <option value="no">Tidak</option>
                </select>
            </div>

            <div class="alert alert-info mt-4" role="alert">
                Setelah pesanan dibuat, admin kami akan menghubungi Anda melalui WhatsApp untuk konfirmasi lebih lanjut.
            </div>
            
            <div class="alert alert-info mt-4 text-center">
                Total Biaya: Rp<span id="total-cost">0,-</span>
            </div>

            <button type="submit" class="btn btn-primary w-100">Order</button>
        </form>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('animal_type').addEventListener('change', updatePrice);
        document.getElementById('weight').addEventListener('input', updatePrice);
        function updatePrice() {
            const animalType = document.getElementById('animal_type').value;
            const weight = parseFloat(document.getElementById('weight').value) || 0;
            let basePrice = 0;

            if (animalType === 'cat') {
                basePrice = 270000; // Base price for cat
                if (weight > 3) {
                    basePrice += (weight - 3) * 25000; // Additional cost for weight over 3kg
                }
            } else if (animalType === 'dog') {
                basePrice = 370000; // Base price for dog
                if (weight > 5) {
                    basePrice += (weight - 5) * 25000; // Additional cost for weight over 5kg
                }
            }

            document.getElementById('total-cost').innerText = `${basePrice.toLocaleString()},-`;
        }
    </script>
</body>
</html>