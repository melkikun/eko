<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="free-educational-responsive-web-template-webEdu">
        <meta name="author" content="webThemez.com">
        <title>About Us</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" media="screen"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    </head>
    <body>
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo base_url(); ?>assets/images/logo.jpeg" alt="Techro HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right mainNav">
                        <li><a href="<?php echo base_url(); ?>">Halaman Utama</a></li>
                        <li class="active"><a href="<?php echo base_url('about_us'); ?>">About Us</a></li>
                        <li><a href="<?php echo base_url("logout"); ?>">Log Out</a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <!-- container -->
        <section class="container-fluid">
            <div class="row">
                <!-- main content -->
                <section class="col-sm-12 maincontent" style="font-size: 18px;">
                    <h3>Tentang Program Single Exponential Smoothing</h3>
                    <p>
                        <img src="assets/images/about.jpg" alt="" class="img-rounded pull-right" width="300">
                        Metode single exponential merupakan metode yang digunakan untuk meramalkan hasil menggunakan rumus<br>
                        Ft+1= α xt + (1-α) ft-1<br>
                        Keterangan :<br>
                        Ft+1 = ramalan untuk periode ke t+1<br>
                        Xt = nilai riil periode ke t<br>
                        Α = bobot yang menunjukkan konstanta penghalus (0 < α <1)<br>
                        Ft-1 = ramalan untuk periode ke t-1.<br>
                        Peramalan ini digunakan untuk meramalkan pendapatan po bus guntur dan po sejati indah untuk periode 2013 sampai dengan 2014. Data yang digunakan adalah data pendapatan perhari. Dari data perhari disederhanakan dengan menjadi data perbulan.

                    </p>
                    <h3>Langkah-langkah dan penjelasan pada program ini adalah sebagai berikut : </h3>
                    <ol>
                        <li>Program memberikan input berup 5 file dalam bentuk excel yang nantinya 
                            akan diolah di controller menggunakan library php excel.
                        </li>
                        <li>Data yang diberikan adalah perhari yang nanti akan disederhanakan 
                            menjadi perbulan(januari 2013, sampai desember 2016)
                        </li>
                        <li>Dari data tersebut akan dicari nilai peramalan ft+1 menggunakan rumus 
                            seperti diatas. Sehingga akan ketemu nilai peramalan pada bulan selanjutnya.
                        </li>
                        <li>Peramalan dimulai dengan alpha 0.1 sampai dengan alpha 0.9. Dari alpha 0.1 
                            sampai dengan alpha 0.9 akan dicari nilai error dan nilai kuadrat error. 
                            Sehingga nilai kuadrat error yang terkecill akan dipakai untuk peramalan bulan selanjutnya.
                        </li>
                    </ol>
                    <h3>Langkah-langkah dan pengoperasian program adalah sebagai berikut : </h3>
                    <ol>
                        <li>
                            User diminta untuk mempersiapkan excel pada tahun 2013 sampai dengan tahun 2017 oktober. Excel yang sudah di persiapkan 
                            harus terdiri dari beberapa sheet mulai bulan januari sampai dengan desember
                        </li>
                        <li>
                            Setelah itu klik  tombol browse untuk mencari file dimana excel tersebut berada. user harus mengisi semua excel mulai
                            tahun 2013 sampai dengan tahun 2017
                        </li>
                        <li>
                            setelah semua file sudah terisi user klik tombol proses data untuk menampilkan data per tahun dan hasil dari perhitungan 
                            single exponensial smooting, 
                        </li>
                        <li>
                            akan muncul nilai error, kuadrat error dan summary kuadrat error per alpha(0,1 sampai dengan 0,9). nilai summary kuadrat
                            error per alpha itulah yang nantinya akan digunakan untuk menentukan alpha yang mana digunakan untk peramalan (dengan mencari 
                            nilai error kuadrat masing2 alpha yang memiliki nilai terkecil (0,1)).
                        </li>
                        <li>
                            akan muncul kesimpulan dari metode Single exponensial smooting dan nilai MSE yang digunakan. 
                        </li>
                        <li>
                            untuk melihat grafik data aktual, data peramalan, data aktual 2017 dan hasil peramalan 2017 user bisa klik tulisan yang berwarna
                            biru, dan akan muncul pop up yang menampilkan grafik dan kesimpulan.
                        </li>
                    </ol>

                </section>
                <!-- /main -->

            </div>
        </section>
        <!-- /container -->
        <script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
    </body>
</html>
