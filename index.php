<?php
    require "koneksi.php";

    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner d-flex align-items-center">
        <div class="container text-center text-white mt-5">
            <h1>Menu Bakso Juragan</h1>
            <h3>Cari Disini!</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama Menu"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword"
                            autocomplete="off">
                        <button type="submit" class="btn warna3 text-white">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- highlighted kategori -->
    <!-- <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>menu</h3>
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-bakso d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a href="produk.php?kategori=MENU BAKSO">Menu Bakso</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-mie d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a href="produk.php?kategori=Menu Mie">Menu Mie</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-cemilan d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a href="produk.php?kategori=Menu Cemilan">Menu Cemilan</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- tentang kami -->
    <!-- <div class="container-fluid warna3 py-5">
        <div class="container text-center">
            <h3>Tentang Kami</h3>
            <p class="fs-5 mt-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti voluptatum reiciendis culpa
                consectetur repellendus amet? Itaque, saepe reprehenderit beatae totam, rerum fugiat adipisci inventore
                amet consequuntur at laboriosam assumenda et excepturi ipsam, fuga tempore officia rem voluptas nostrum
                aspernatur! Officia porro veritatis praesentium nesciunt pariatur placeat nemo ea minima delectus ex,
                atque suscipit non sequi odio velit aperiam quas veniam enim obcaecati ad doloremque. Explicabo facilis
                soluta quam beatae modi expedita veritatis, doloribus voluptate. Et consequuntur hic officiis deleniti
                quam?
            </p>
        </div>
    </div> -->

    <!-- produk -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Semua Menu Makanan</h3>
            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                            <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                            <p class="card-text text-harga"><?php echo $data['harga']; ?></p>
                            <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>"
                                class="btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a class="btn btn-outline-warning mt-3" href="produk.php">Lihat Lengkap</a>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>

</html>