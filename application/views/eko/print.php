<?php
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
$dataBulan = [
    "Januari 2013",
    "Februari 2013",
    "Maret 2013",
    "April 2013",
    "Mei 2013",
    "Juni 2013",
    "Juli 2013",
    "Agustus 2013",
    "September 2013",
    "Oktober 2013",
    "November 2013",
    "Desember 2013",
    "Januari 2014",
    "Februari 2014",
    "Maret 2014",
    "April 2014",
    "Mei 2014",
    "Juni 2014",
    "Juli 2014",
    "Agustus 2014",
    "September 2014",
    "Oktober 2014",
    "November 2014",
    "Desember 2014",
    "Januari 2015",
    "Februari 2015",
    "Maret 2015",
    "April 2015",
    "Mei 2015",
    "Juni 2015",
    "Juli 2015",
    "Agustus 2015",
    "September 2015",
    "Oktober 2015",
    "November 2015",
    "Desember 2015",
    "Januari 2016",
    "Februari 2016",
    "Maret 2016",
    "April 2016",
    "Mei 2016",
    "Juni 2016",
    "Juli 2016",
    "Agustus 2016",
    "September 2016",
    "Oktober 2016",
    "November 2016",
    "Desember 2016",
    "Januari 2017",
    "Februari 2017",
    "Maret 2017",
    "April 2017",
    "Mei 2017",
    "Juni 2017",
    "Juli 2017",
    "Agustus 2017",
    "September 2017",
    "Oktober 2017",
    "November 2017",
];
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" media="screen"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/highcharts.css" type="text/css">
        <style>
            chart{
                width: 100% !important;
                height:1000px;
            }
        </style>
    </head>
    <body onload="window.print(); window.close();">
        <h1 class="text-center">HASIL KESIMPULAN UNTUK <?php echo "$po"; ?></h1>
        <!--KESIMPULAN TEXT-->
        <div>
            <ol>
                <li>
                    Penelitian menghasilkan sebuah aplikasi sistem Peramalan Keuntungan Bus menggunakan
                    Metode Single Exponential Smoothing yang dapat digunakan untuk meramalkan jumlah keuntungan pendapatan bus
                </li> 
                <li>
                    Pada tahap uji sampel dapat diketahui bahwa metode
                    Single Exponential Smoothing perlu melakukan perbandingan dalam menentukan nilai alpha, dengan
                    mencari nilai alpha tersebut secata trial/acak sampai
                    menemukan alpha yang memiliki error yang minimum.
                    Maka hasil peramalan yang memiliki alpha dengan nilai
                    error paling minimumlah yang paling baik.
                </li>
                <li>
                    Pada tahap uji sampel didapat bahwa peramalan pendapatan bus pada 
                    bulan <b><i>November 2017</i></b> sebesar <b><i><?php echo number_format($peramalan[58], 2); ?>.</i></b>
                </li>
                <li>
                    Untuk peramalan bulan Desember 2017 kita menggunakan data aktual bulan November 2017 sebesar <?php echo $awal['48']; ?>
                    sehingga rumus peramalan bulan selanjutnya mengikuti rumus Ft+1 = α Xt + (1-α) Ft-1 dengan perhitungan = <br>
                    Ft+1 = 0.1*<?php echo number_format($awal['48'], 2); ?>+(1-0.1)*<?php echo number_format($peramalan[58], 2); ?>
                    sehingga nilai peramalan bulan Desember 2017 adalah : 
                    <?php echo number_format($peramalan[59], 2); ?>
                </li>
            </ol>
        </div>
        <!--NILAI PEMULUSAN EXPONENTIAL-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="grey-box-icon">
                        <table class="table table-striped table-bordered" id="table-hasil">
                            <thead>
                                <tr>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">No</th>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Bulan</th>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Pendapatan(Rp)</th>
                                    <th class="text-center" colspan="9" style="vertical-align: middle; color: red;">Nilai Pemulusan Eksponensial</th>
                                </tr>
                                <tr>
                                    <th class="text-center">0.1</th>
                                    <th class="text-center">0.2</th>
                                    <th class="text-center">0.3</th>
                                    <th class="text-center">0.4</th>
                                    <th class="text-center">0.5</th>
                                    <th class="text-center">0.6</th>
                                    <th class="text-center">0.7</th>
                                    <th class="text-center">0.8</th>
                                    <th class="text-center">0.9</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $k = 1;
                                for ($i = 0; $i < count($data); $i++) {
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo ($i + 1); ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $dataBulan[$i]; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo number_format($data[$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php
                                            echo number_format($alpha['alpha01'][$i], 2);
                                            ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php echo number_format($alpha['alpha02'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php echo number_format($alpha['alpha03'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php echo number_format($alpha['alpha04'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php echo number_format($alpha['alpha05'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php echo number_format($alpha['alpha06'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php echo number_format($alpha['alpha07'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php echo number_format($alpha['alpha08'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: red;">
                                            <?php echo number_format($alpha['alpha09'][$i], 2); ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!--grey box -->
                </div><!--/span3-->
            </div>
        </div>
        <br/>
        <br/>
        <br/>
        <!--NILAI KESALAHAN-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="grey-box-icon">
                        <table class="table table-striped table-bordered" id="table-hasil">
                            <thead>
                                <tr>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">No</th>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Bulan</th>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Pendapatan(Rp)</th>
                                    <th class="text-center" colspan="9" style="vertical-align: middle; color: red;">Nilai Kesalahan</th>
                                </tr>
                                <tr>
                                    <th class="text-center">0.1</th>
                                    <th class="text-center">0.2</th>
                                    <th class="text-center">0.3</th>
                                    <th class="text-center">0.4</th>
                                    <th class="text-center">0.5</th>
                                    <th class="text-center">0.6</th>
                                    <th class="text-center">0.7</th>
                                    <th class="text-center">0.8</th>
                                    <th class="text-center">0.9</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $k = 1;
                                for ($i = 0; $i < count($data); $i++) {
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo ($i + 1); ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $dataBulan[$i]; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo number_format($data[$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error01'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error02'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error03'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error04'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error05'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error06'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error07'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error08'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($error['error09'][$i], 2); ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div><!--grey box -->
                </div><!--/span3-->
            </div>
        </div>
        <br/>
        <br/>
        <!--NILAI KESALAHAN KUADRAT-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="grey-box-icon">
                        <table class="table table-striped table-bordered" id="table-hasil">
                            <thead>
                                <tr>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">No</th>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Bulan</th>
                                    <th class="text-center" rowspan="2" style="vertical-align: middle;">Pendapatan(Rp)</th>
                                    <th class="text-center" colspan="9" style="vertical-align: middle; color: red;">Nilai Kesalahan Kuadrat</th>
                                </tr>
                                <tr>
                                    <th class="text-center">0.1</th>
                                    <th class="text-center">0.2</th>
                                    <th class="text-center">0.3</th>
                                    <th class="text-center">0.4</th>
                                    <th class="text-center">0.5</th>
                                    <th class="text-center">0.6</th>
                                    <th class="text-center">0.7</th>
                                    <th class="text-center">0.8</th>
                                    <th class="text-center">0.9</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $k = 1;
                                for ($i = 0; $i < count($data); $i++) {
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo ($i + 1); ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo $dataBulan[$i]; ?>
                                        </td>
                                        <td class="text-center">
                                            <?php echo number_format($data[$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek01'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek02'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek03'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek04'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek05'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek06'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek07'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek08'][$i], 2); ?>
                                        </td>
                                        <td class="text-center" style="color: green;">
                                            <?php echo number_format($ek['ek09'][$i], 2); ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                <tr>
                                    <th colspan="3" class="text-right">JUMLAH ERROR KUADRAT</th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se01'], 2); ?></th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se02'], 2); ?></th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se03'], 2); ?></th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se04'], 2); ?></th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se05'], 2); ?></th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se06'], 2); ?></th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se07'], 2); ?></th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se08'], 2); ?></th>
                                    <th class="text-center" style="color: dimgrey"><?php echo number_format($se['se09'], 2); ?></th>
                                </tr>
                                <tr>
                                    <th colspan="3" class="text-right">PERIODE PENGUJIAN</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                    <th class="text-center" style="color: sandybrown;">58</th>
                                </tr>
                                <tr>
                                    <th colspan="3" class="text-right">MSE</th>
                                    <th class="text-center" style="color: #ac2925;"><i><b><?php echo number_format($mse['mse01'], 2); ?></b></i></th>
                                    <th class="text-center" style="color: #ac2925;"><?php echo number_format($mse['mse02'], 2); ?></th>
                                    <th class="text-center" style="color: #ac2925;"><?php echo number_format($mse['mse03'], 2); ?></th>
                                    <th class="text-center" style="color: #ac2925;"><?php echo number_format($mse['mse04'], 2); ?></th>
                                    <th class="text-center" style="color: #ac2925;"><?php echo number_format($mse['mse05'], 2); ?></th>
                                    <th class="text-center" style="color: #ac2925;"><?php echo number_format($mse['mse06'], 2); ?></th>
                                    <th class="text-center" style="color: #ac2925;"><?php echo number_format($mse['mse07'], 2); ?></th>
                                    <th class="text-center" style="color: #ac2925;"><?php echo number_format($mse['mse08'], 2); ?></th>
                                    <th class="text-center" style="color: #ac2925;"><?php echo number_format($mse['mse09'], 2); ?></th>
                                </tr>
                            </tbody>
                        </table>
                    </div><!--grey box -->
                </div><!--/span3-->
            </div>
        </div>
        <!--KESIMPULAN-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="grey-box-icon">
                        <h4>KESIMPULAN</h4>
                        <h4 style="color: black;">
                            Berdasarkan hasil MSE dapat disimpulkan bahwa alpha terkecil untuk peramalan adalah menggunakan alpha 
                            <span style="font-size: 20px; font-family: Times New Roman"><b><i>0.1</i></b> dengan nilai MSE sebesar <?php echo number_format($mse['mse01'], 2); ?>
                        </h4>
                    </div><!--grey box -->
                </div><!--/span12s-->
            </div>
        </div>
        <br/>
        <br/>
        <!--GRAPHIC PERAMALAN-->
        <div class="row col-sm-12">
            <div id="grafik-peramalan"></div>
        </div>
        <!--GRAPHIC AKTUAL-->
        <div class="row col-sm-12">
            <div id="grafik-aktual"></div>
        </div>
        <!--GRAPHIC AKTUAL TAHUN 2017-->
        <div class="col-sm-6">
            <div id="grafik-aktual-2017"></div>
        </div>
        <!--GRAPHIC PERAMALAN TAHUN 2017-->
        <div class="col-sm-6">
            <div id="grafik-peramalan-2017"></div>
        </div>
        <script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
        <script>
            var peramalan01 = <?php echo json_encode($peramalan, JSON_NUMERIC_CHECK); ?>;
            var dataAwal = <?php echo json_encode($awal, JSON_NUMERIC_CHECK); ?>;
            var dataTahun2017Asli = [];
            var dataTahun2017Ramalan = [];
            for (var i = dataAwal.length - 12; i < dataAwal.length; i++) {
                dataTahun2017Asli.push(dataAwal[i]);
            }
            for (var i = peramalan01.length - 12; i < peramalan01.length; i++) {
                dataTahun2017Ramalan.push(peramalan01[i]);
            }
            Highcharts.chart('grafik-peramalan', {
                chart: {
                    type: 'line',
                    height: 650,
                },
                title: {
                    text: 'Grafik Peramalan Single Exponensial Smoothing'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [
                        'Jan 2013',
                        'Feb 2013',
                        'Mar 2013',
                        'Apr 2013',
                        'May 2013',
                        'Jun 2013',
                        'Jul 2013',
                        'Aug 2013',
                        'Sep 2013',
                        'Oct 2013',
                        'Nov 2013',
                        'Dec 2013',
                        'Jan 2014',
                        'Feb 2014',
                        'Mar 2014',
                        'Apr 2014',
                        'May 2014',
                        'Jun 2014',
                        'Jul 2014',
                        'Aug 2014',
                        'Sep 2014',
                        'Oct 2014',
                        'Nov 2014',
                        'Dec 2014',
                        'Jan 2015',
                        'Feb 2015',
                        'Mar 2015',
                        'Apr 2015',
                        'May 2015',
                        'Jun 2015',
                        'Jul 2015',
                        'Aug 2015',
                        'Sep 2015',
                        'Oct 2015',
                        'Nov 2015',
                        'Dec 2015',
                        'Jan 2016',
                        'Feb 2016',
                        'Mar 2016',
                        'Apr 2016',
                        'May 2016',
                        'Jun 2016',
                        'Jul 2016',
                        'Aug 2016',
                        'Sep 2016',
                        'Oct 2016',
                        'Nov 2016',
                        'Dec 2016',
                        'Jan 2017',
                        'Feb 2017',
                        'Mar 2017',
                        'Apr 2017',
                        'May 2017',
                        'Jun 2017',
                        'Jul 2017',
                        'Aug 2017',
                        'Sep 2017',
                        'Oct 2017',
                        'Nov 2017',
                        'Dec 2017'
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Data Pendapatan Bus'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [
                    {
                        name: 'Data Peramalan',
                        data: peramalan01
                    }
                ]
            });
            Highcharts.chart('grafik-aktual', {
                chart: {
                    type: 'line',
                    height: 650,
                },
                title: {
                    text: 'Grafik Aktual Single Exponensial Smoothing'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [
                        'Jan 2013',
                        'Feb 2013',
                        'Mar 2013',
                        'Apr 2013',
                        'May 2013',
                        'Jun 2013',
                        'Jul 2013',
                        'Aug 2013',
                        'Sep 2013',
                        'Oct 2013',
                        'Nov 2013',
                        'Dec 2013',
                        'Jan 2014',
                        'Feb 2014',
                        'Mar 2014',
                        'Apr 2014',
                        'May 2014',
                        'Jun 2014',
                        'Jul 2014',
                        'Aug 2014',
                        'Sep 2014',
                        'Oct 2014',
                        'Nov 2014',
                        'Dec 2014',
                        'Jan 2015',
                        'Feb 2015',
                        'Mar 2015',
                        'Apr 2015',
                        'May 2015',
                        'Jun 2015',
                        'Jul 2015',
                        'Aug 2015',
                        'Sep 2015',
                        'Oct 2015',
                        'Nov 2015',
                        'Dec 2015',
                        'Jan 2016',
                        'Feb 2016',
                        'Mar 2016',
                        'Apr 2016',
                        'May 2016',
                        'Jun 2016',
                        'Jul 2016',
                        'Aug 2016',
                        'Sep 2016',
                        'Oct 2016',
                        'Nov 2016',
                        'Dec 2016',
                        'Jan 2017',
                        'Feb 2017',
                        'Mar 2017',
                        'Apr 2017',
                        'May 2017',
                        'Jun 2017',
                        'Jul 2017',
                        'Aug 2017',
                        'Sep 2017',
                        'Oct 2017'
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Data Pendapatan Bus'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [
                    {
                        name: 'Data Aktual',
                        data: dataAwal
                    }
                ]
            });
            Highcharts.chart('grafik-aktual-2017', {
                chart: {
                    type: 'line',
                    height: 650,
                },
                title: {
                    text: 'Grafik Aktual Single Exponensial Smoothing Tahun 2017'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [
                        'Jan 2017',
                        'Feb 2017',
                        'Mar 2017',
                        'Apr 2017',
                        'May 2017',
                        'Jun 2017',
                        'Jul 2017',
                        'Aug 2017',
                        'Sep 2017',
                        'Oct 2017'
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Data Pendapatan Bus'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [
                    {
                        name: 'Data Aktual 2017',
                        data: dataTahun2017Asli
                    }
                ]
            });
            Highcharts.chart('grafik-peramalan-2017', {
                chart: {
                    type: 'line',
                    height: 650,
                },
                title: {
                    text: 'Grafik Peramalan Single Exponensial Smoothing Tahun 2017'
                },
                subtitle: {
                    text: ''
                },
                xAxis: {
                    categories: [
                        'Jan 2017',
                        'Feb 2017',
                        'Mar 2017',
                        'Apr 2017',
                        'May 2017',
                        'Jun 2017',
                        'Jul 2017',
                        'Aug 2017',
                        'Sep 2017',
                        'Oct 2017',
                        "Nov 2017",
                        "Dec 2017"
                    ]
                },
                yAxis: {
                    title: {
                        text: 'Data Pendapatan Bus'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [
                    {
                        name: 'Data Peramalan 2017',
                        data: dataTahun2017Ramalan
                    }
                ]
            });
        </script>
    </body>
</html>
