<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index Kepusan Masayrakat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="jumbotron jumbotron-fluid bg-info text-white">
        <div class="container text-center">
            <h1 class="display-4">SURVEY</h1>
            <p class="lead">
            <h2>
                KEPUASAN MASYARAKAT <br> Terhadap Pelayanan Kelurahan Cipondoh
            </h2>
        </div>
    </div>

    <style type="text/css">
        .box {
            padding: 40px 40px;
            border-radius: 5px;
        }
    </style>

    <?php
    // panggil koneksi database
    include "../koneksi.php";

    // tampilkan data dari tabel
    $tampil = mysqli_query($koneksi, "SELECT * from db_pengunjung");
    $data = mysqli_fetch_array($tampil);

    ?>

    <!-- awal container -->
    <div class="container">
        <div class="alert alert-warning" role="alert">
            perhatian untuk memberikan penilaian/poling/suara silakan klk Icon/Emoji
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="bg-primary box text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Memuaskan</h5>
                            <h2>[ <?= $data['puas'] ?> ]</h2>
                            <h5>suara</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="simpan.php?ket=puas" title="jika anda merasa puas dengan playanan kami, klik icin ini">
                                <img src="img/happy.png" style="width: 100px" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-success box text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Cukup</h5>
                            <h2>[ <?= $data['cukup'] ?> ]</h2>
                            <h5>suara</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="simpan.php?ket=cukup" title="jika anda merasa cukup dengan playanan kami, klik icin ini">
                                <img src="img/smiling.png" style="width: 100px" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-danger box text-white">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Kurang</h5>
                            <h2>[ <?= $data['kurang'] ?> ]</h2>
                            <h5>suara</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="simpan.php?ket=kurang" title="jika anda merasa kurang dengan playanan kami, klik icin ini">
                                <img src="img/emoji.png" style="width: 100px" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- akhir container -->

    <footer class="bg-info text-center text-white mt-3 bt-2 pb-2">
        Create by. Aplikasi Website Kepuasan Masayrakat
    </footer>

</body>

</html>