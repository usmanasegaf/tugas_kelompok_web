<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .account-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        }

        .btn-custom {
            min-width: 150px;
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-3">Akun Saya</h2>
        <div class="account-section p-4">
            <h4>Informasi Akun</h4>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nama Pelanggan:</strong> John Doe</p>
                    <p><strong>Nomor Pelanggan:</strong> PLG-2025001</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Email:</strong> john.doe@email.com</p>
                    <p><strong>Paket Aktif:</strong> Premium Plan</p>
                </div>
            </div>
            <div class="d-flex gap-2 mt-3">
                <button class="btn btn-primary btn-custom">Ubah Data Akun</button>
                <button class="btn btn-warning btn-custom">Ubah Paket Berlangganan</button>
                <button class="btn btn-danger btn-custom" data-bs-toggle="modal"
                    data-bs-target="#confirmDeleteModal">Hapus Akun</button>
            </div>
        </div>
    </div>
</body>

</html>