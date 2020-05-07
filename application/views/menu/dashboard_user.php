<div class="container-fluid">
    <div class="nav-menu">
            <ul style="display: flex; flex-direction: row; justify-content: space-between;">
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Koronavirus" style="color:red;"><i class="fas fa-exclamation-circle"></i>  Corona</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Diabetes_melitus">Diabetes Melitus</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Tekanan_darah_rendah">Hipotensi</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Strok">Stroke</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Radang_paru-paru">Pneumonia</a>
                </li>   
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Kolesterol">Kolestrol</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Tekanan_darah_tinggi">Hipertensi</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Anemia">Anemia</a>
                </li>
                <li class="nav-item" style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/Kanker">Kanker</a>
                </li>
                <li class="nav-item"style="list-style-type:none; cursor:pointer;">
                    <a class="nav-link" href="https://id.wikipedia.org/wiki/AIDS">AIDS</a>
                </li>
            </ul>
        </div>
    </div>

    <hr>

    <?= $this->session->flashdata('flash'); ?>

<div class="container-fluid" style="background-color:white;">
    <div class="row h-100">
        <div class="col-lg-8">
            <h2 style="margin-left:70px;">Do You Need Treatment ? Come Join Us!...</h2>
                <div class="row justify-content-center p-3" style="box-shadow: 0px 3px 20px rgba(0,0,0,0.5); border-radius:12px; width:80%; text-align:center; margin-left:50px; margin-top:40px;">
                    <div class="col-lg">
                        <a href="<?= base_url('caridokter');?>" style="font-family: 'Manrope', sans-serif;
                                    font-family: 'Roboto Condensed', sans-serif;
                                    font-family: 'Indie Flower', cursive; text-decoration:none;">
                        <img src="<?= base_url();?>assets/doctor.png" alt="doctor">
                        <h4>Cari Dokter</h4>
                        <p style="font-family: 'Manrope', sans-serif;
                                font-family: 'Roboto Condensed', sans-serif;
                                font-family: 'Indie Flower', cursive;
                                font-family: 'Ubuntu Condensed', sans-serif;">Cari Dokter yang ada.</p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="<?= base_url('beli');?>" style="font-family: 'Manrope', sans-serif;
                                            font-family: 'Roboto Condensed', sans-serif;
                                            font-family: 'Indie Flower', cursive; text-decoration:none;">
                        <img src="<?= base_url();?>assets/pill.png" alt="doctor">
                        <h4>Beli Obat</h4>
                        <p style="font-family: 'Manrope', sans-serif;
                                font-family: 'Roboto Condensed', sans-serif;
                                font-family: 'Indie Flower', cursive;
                                font-family: 'Ubuntu Condensed', sans-serif;">Beli Obat dan Vitamin Sekarang. </p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="<?= base_url('konsul');?>" style="font-family: 'Manrope', sans-serif;
                                            font-family: 'Roboto Condensed', sans-serif;
                                            font-family: 'Indie Flower', cursive; text-decoration:none;">
                        <img src="<?= base_url();?>assets/question.png" alt="doctor">
                        <h4>Konsultasi Sekarang</h4>
                        <p style="font-family: 'Manrope', sans-serif;
                                font-family: 'Roboto Condensed', sans-serif;
                                font-family: 'Indie Flower', cursive;
                                font-family: 'Ubuntu Condensed', sans-serif;">Konsultasi dengan dokter dimana saja dan kapan saja.</p>
                        </a>
                    </div>
                    <div class="col-lg">
                        <a href="<?= base_url('dashboard/data_kamar');?>" style="font-family: 'Manrope', sans-serif;
                                            font-family: 'Roboto Condensed', sans-serif;
                                            font-family: 'Indie Flower', cursive; text-decoration:none;">
                        <img src="<?= base_url();?>assets/ward.png" alt="doctor">
                        <h4>Data Kamar</h4>
                        <p style="font-family: 'Manrope', sans-serif;
                                font-family: 'Roboto Condensed', sans-serif;
                                font-family: 'Indie Flower', cursive;
                                font-family: 'Ubuntu Condensed', sans-serif;">Cek kamar yang masih tersedia</p>
                        </a>
                    </div>
                </div>

        <div class="row">
            <div class="col-lg-8" style="margin-top:50px; border-radius: 12px;">
                <div class="media p-3" style="margin-left:50px; background-color:lightblue; width:975px;">
                    <img class="mr-3" src="<?= base_url();?>assets/virus.png" alt="Generic placeholder image">
                        <div class="media-body">
                        <h5 class="mt-0">Langkah Aman Selama Corona !</h5>
                        <p>Tetap Ikuti Imbauan Pemerintah dan Selalu Sayangi keluarga anda</p>
                        </div>
                <div>
            </div>
        </div>


    <div class="row">
        <div class="col-lg" style="margin-left:100px; margin-top:50px;">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?= base_url();?>assets/sick.jpg" style="" alt="Los Angeles" width="1000" height="500">
            <div class="carousel-caption">
            <h3>Selalu Gunakan Masker</h3>
            <p>penggunaan masker akan melindungi diri kita sendiri</p>
        </div>   
    </div>
    <div class="carousel-item">
        <img src="<?= base_url();?>assets/vidcal.jpg"  style="" alt="Chicago" width="1000" height="500">
        <div class="carousel-caption">
            <h3>Tetap Produktivitas di Rumah</h3>
            <p>karena kerja tidak mesti di kantor</p>
            </div>   
        </div>
    <div class="carousel-item">
        <img src="<?= base_url();?>assets/adult_action.jpg" style="" alt="New York" width="1000" height="500">
        <div class="carousel-caption">
            <h3>Lindungi Anak-Anak dan Para Manula</h3>
            <p>mereka adalah orang-orang yang rentan terkena covid-19</p>
        </div>   
    </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        </a>
        </div>
        </div>

    </div>
    
    

</div>
</div>
</div>

<div class="col-lg" style="margin-left:-150px;">

    <div class="row">
        <h5 style="color:rgb(253, 0, 96);">Artikel Populer</h5>
    </div>

    <hr style="width:20%; margin-left:-15px;">
    
    <div class="row" style="margin-top:30px;">
    
    <div class="media">
        <img src="<?= base_url();?>assets/puasaramadhan1441h.jpg" class="mr-3" style="width:128px; height:128px;" alt="...">
            <div class="media-body">
            <a href="https://www.sehatq.com/artikel/tips-puasa-sehat-antilemas-bulan-Ramadan">
            <h5 class="mt-0">Hindari Lemas, ikuti tips puasa sehat berikut ini</h5>
            Saat berpuasa, terjadinya perubahan pola makan serta berkurangnya aktivitas fisik merupakan hal yang wajar terjadi. 
            Karena itu, Anda perlu melakukan beberapa penyesuaian, agar kesehatan tubuh tetap terjaga selama bulan Ramadan.
            </a>
        </div>
    </div>
    </div>

    <hr>

    <div class="row ">
    
    <div class="media">
        <img src="<?= base_url();?>assets/makanan-asam-urat-doktersehat.jpg" style="width:128px; height:128px;" class="mr-3" alt="...">
            <div class="media-body">
            <a href="https://www.sehatq.com/artikel/makanan-penurun-asam-urat-yang-bisa-dikonsumsi-tiap-hari">
            <h5 class="mt-0">4 Makanan Penurun Asam Urat yang Bisa Dikonsumsi Tiap Hari</h5>
            Penyakit asam urat adalah salah satu bentuk dari artritis yang terjadi akibat terlalu tingginya kadar 
            asam urat dalam darah. Akibatnya, terbentuklah kristal-kristal yang menumpuk di sekitar persendian yang memicu nyeri.
            </a>
        </div>
    </div>
    </div>

    <hr>

    <div class="row ">
    
    <div class="media">
        <img src="<?= base_url();?>assets/obat-aids-131209c.jpg" style="width:128px; height:128px;" class="mr-3" alt="...">
            <div class="media-body">
            <a href="https://www.sehatq.com/artikel/apakah-obat-hiv-bisa-sembuhkan-virus-corona">
            <h5 class="mt-0">Apakah Obat HIV Bisa Sembuhkan Virus Corona?</h5>
            Para peneliti di dunia sedang berusaha sekeras tenaga untuk mencari obat penawar virus corona alias Covid-19, yang kini telah merenggut belasan 
            ribu nyawa di seluruh dunia. Salah satunya obat HIV, yang dianggap bisa menyembuhkan atau meredakan gejala yang dialami para pasien virus corona.
            </a>
        </div>
    </div>
    </div>

    <hr>

    <div class="row ">
    
    <div class="media">
        <img src="<?= base_url();?>assets/5e53cde894df3.jpg" style="width:128px; height:128px;" class="mr-3" alt="...">
            <div class="media-body">
            <a href="https://www.sehatq.com/artikel/air-bawang-putih-sembuhkan-corona-mitos-atau-fakta">
            <h5 class="mt-0">Air Bawang Putih Sembuhkan Corona, Mitos atau Fakta?</h5>
            Di tengah hangatnya pembahasan virus corona (Covid-19), banyak kabar burung mengenai solusi 
            pengobatan rumahan yang dianggap ampuh mengobati virus corona. Salah satunya air bawang putih yang diklaim mampu sembuhkan virus corona.
            </a>
        </div>
    </div>
    </div>

    <hr>

    <div class="row ">
    
    <div class="media">
        <img src="<?= base_url();?>assets/amankah-minuman-isotonik-dikonsumsi-saat-puasa-T7q64eE4Cd.jpg" style="width:128px; height:128px;" class="mr-3" alt="...">
            <div class="media-body">
            <a href="https://www.sehatq.com/artikel/bahaya-minuman-isotonik-dibalik-kemampuannya-menambah-energi">
            <h5 class="mt-0">Bahaya Minuman Isotonik Dibalik Kemampuannya Menambah Energi</h5>
            Idealnya, orang dewasa mendapat asupan air sebanyak 2-3 liter setiap harinya bergantung pada faktor seperti usia, aktivitas,
            dan jenis kelamin. Selain air putih, terkadang orang memilih minuman isotonik untuk mengatasi dahaga setelah beraktivitas cukup berat. 
            Padahal, tidak semua orang memerlukan minuman isotonik.
            </a>
        </div>
    </div>
    </div>

    <hr>

    <div class="row ">
    
    <div class="media">
        <img src="<?= base_url();?>assets/HidupSehat--1280x720.png" style="width:128px; height:128px;" class="mr-3" alt="...">
            <div class="media-body">
            <a href="https://www.sehatq.com/artikel/cara-cegah-infeksi-virus-agar-terhindar-dari-penyakit">
            <h5 class="mt-0">Cara Cegah Infeksi Virus Agar Terhindar dari Penyakit</h5>
            Membekali diri dengan cara cegah infeksi virus, dapat “membentengi” tubuh Anda dari berbagai macam penyakit. 
            Apalagi di tengah masa kritis virus corona Covid-19 yang sedang melanda dunia ini. 
            Tentunya, mengetahui cara cegah infeksi virus menjadi sangat penting dan harus diprioritaskan!
            </a>
        </div>
    </div>
    </div>

    

</div>