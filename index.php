<?php 

$artikel = array(
    (object) array (
        "gambar" => "img1.jpeg",
        "judul" => "Viral Guru SMA di Sulut Lecehkan Siswi di Kelas, Ada 6 Korban Lain ",
        "text" => "Dinas Pendidikan (Disdik) Provinsi Sulawesi Utara (Sulut) memeriksa sejumlah saksi terkait kasus dugaan pelecehan seksual guru sekolah menengah atas negeri (SMAN) di Kabupaten Minahasa Selatan (Minsel), Sulut. Guru tersebut diduga telah melakukan pelecehan seksual terhadap 6 siswi lainnya."
    ),
    (object) array (
        "gambar" => "img2.jpeg",
        "judul" => "5 Atlet DKI di PON Papua Sembuh dari COVID-19",
        "text" => "Sebanyak 5 atlet kontingen DKI Jakarta di PON XX Papua dinyatakan negatif COVID-19. Adapun atlet terakhir yang baru sembuh segera dipulangkan ke Ibu Kota."
    ),
    (object) array (
        "gambar" => "img3.jpeg",
        "judul" => "Kilas Balik Prank Rp 2 T Keluarga Akidi Tio hingga Kapolda Sumsel Diganti",
        "text" => "Polri mengganti Kapolda Sumatera Selatan (Sumsel) dari Irjen Eko Indra Heri kepada Irjen Toni Harmanto. Pergantian terjadi setelah heboh janji donasi Rp 2 triliun dari keluarga Akidi Tio"
    ),
    (object) array (
        "gambar" => "img4.jpeg",
        "judul" => "Bos Samsung Diadili Atas Kasus Penggunaan Obat",
        "text" => "Pemimpin de facto grup raksasa Samsung, Lee Jae-yong diadili pada Selasa (12/10) ini atas tuduhan penggunaan anestesi propofol secara ilegal, kasus hukum terbaru yang menjerat multi-miliarder Korea Selatan itu."
    ),
    (object) array (
        "gambar" => "img5.jpeg",
        "judul" => "Kim Jong-Un Tuduh AS Ancam Perdamaian, Bolsonaro Bosan Ditanya Soal Corona",
        "text" => "Pemimpin Korea Utara (Korut), Kim Jong-Un, menegaskan pengembangan persenjataan diperlukan untuk menghadapi kebijakan bermusuhan dari Amerika Serikat (AS) dan pengerahan militer di Korea Selatan (Korsel). Hal itu disampaikan Kim Jong-Un saat berpidato sambil diapit rudal-rudal terbesar Korut."
    ),
    (object) array (
        "gambar" => "img6.jpeg",
        "judul" => "Rusia Ubah Status Alexei Navalny Jadi Teroris!",
        "text" => "Pengkritik Kremlin, Alexei Navalny, yang dipenjara mengungkapkan bahwa otoritas penjara Rusia kini menetapkan dirinya sebagai seorang ekstremis dan teroris. Navalny juga menyebut dirinya tidak lagi dianggap berisiko melarikan diri."
    ),
);

$carousel = array(
    (object) array(
        "gambar" => "img1.jpeg"
    ),
    (object) array(
        "gambar" => "img3.jpeg"
    ),
    (object) array(
        "gambar" => "img5.jpeg"
    )
)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">

                <img src="jong_logo.png" alt="Logo" />

            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Artikel</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdwon" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Login</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <?php $i=0; foreach ($carousel as $image): ?>
                <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
		            <div class='carousel-item <?php echo $set_; ?>'>
		                <img src="<?php echo $image->gambar; ?>" alt=".." class="d-block w-100" height="600">
		            </div>
  	            <?php $i++; endforeach ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div id="blog" class="py-5">
        <div class="container">
            <h3>Daftar Berita Terbaru Indonesia dan Dunia</h3>
            <div class="row">
                <?php foreach ($artikel as $data) { ?>
                 <div class="col col-6">
                     <div class="card mb-3">
                         <img src="<?=$data->gambar?>" class="card-img-top" alt="">
                         <div class="card-body">
                             <h5 class="card-title"><?=$data->judul?></h5>
                             <p class="card-text"><?=$data->text?></p>
                         </div>
                     </div>
                 </div>
                 <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>