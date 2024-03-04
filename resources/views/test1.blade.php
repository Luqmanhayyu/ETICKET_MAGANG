<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Pembagian Halaman HTML</title>
    <style>
        /* CSS untuk mengatur tata letak */
        .container {
            display: grid;
            grid-template-rows: 1fr 1fr;
            /* Membagi halaman menjadi dua baris */
            gap: 20px;
            /* Jarak antara elemen */
        }

        .top-row,
        .bottom-row {
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Baris Atas -->
        <div class="top-row">

        </div>
        <!-- Baris Bawah -->
        <div class="bottom-row">
            <h2>Baris Bawah</h2>
            <p>Ini adalah bagian dari halaman yang dibagi menjadi dua baris. Ini adalah baris bawah.</p>
        </div>
    </div>
</body>

</html>