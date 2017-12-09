<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="free-educational-responsive-web-template-webEdu">
        <meta name="author" content="webThemez.com">
        <title>Dashboard</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" media="screen"> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTables.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/highcharts.css" type="text/css">
        <style>
            #myDiv {
                position: relative;
                background-color: #C0DBF0;
                width: 400px;
                padding: 20px;
            }

            .loading-overlay {
                display: non    e;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: #fff;
                opacity: 0.6;
                z-index:100000
            }

            .spin-loader {
                height: 100px;
                background: url("<?php echo base_url('assets/images/2hzsro.gif'); ?>") no-repeat center center transparent;
                position: relative;
                top: 25%;
            }
        </style>
    </head>
    <body>
        <div class="loading-overlay">
            <div class="spin-loader"></div>
        </div>
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
                        <li class="active"><a href="<?php echo base_url(); ?>">Halaman Utama</a></li>
                        <li><a href="<?php echo base_url("about_us"); ?>">About Us</a></li>
                        <li><a href="<?php echo base_url("logout"); ?>">Log Out</a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="grey-box-icon">
                        <h4>Pilih PO Bus & Masukkan Data excel <span style="color: red;">(*Harus urut)</span></h4>
                        <select class="form-control" id="po">
                            <option value="1">PO Guntur</option>
                            <option value="2">PO Sejati Indah</option>
                        </select>
                    </div><!--grey box -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="grey-box-icon">
                        <h4>Tahun 2013</h4>
                        <input type="file" class="form-control" id="data1" name="data1">
                    </div><!--grey box -->
                </div><!--/span3-->
                <div class="col-md-4">
                    <div class="grey-box-icon">
                        <h4>Tahun 2014</h4>
                        <input type="file" class="form-control" id="data2">
                    </div><!--grey box -->
                </div><!--/span3-->
                <div class="col-md-4">
                    <div class="grey-box-icon">
                        <h4>Tahun 2015</h4>
                        <input type="file" class="form-control" id="data3">
                    </div><!--grey box -->
                </div><!--/span3-->
                <div class="col-md-6">
                    <div class="grey-box-icon">
                        <h4>Tahun 2016</h4>
                        <input type="file" class="form-control" id="data4">
                    </div><!--grey box -->
                </div><!--/span3-->
                <div class="col-md-6">
                    <div class="grey-box-icon">
                        <h4>Tahun 2017</h4>
                        <input type="file" class="form-control" id="data5">
                    </div><!--grey box -->
                </div><!--/span3-->
                <div>&nbsp;</div>
                <div class="col-sm-6">
                    <button class="btn btn-warning col-sm-12" type="button" onclick="prosesData();">Proses Data</button>
                </div>
                <div class="col-sm-6">
                    <button class="btn btn-warning col-sm-12" type="button" onclick="simpanData();" style="background-color: red;">Simpan Data</button>
                </div>
            </div>
        </div>
        <hr/>
        <hr/>
        <div id="hasil"></div>


        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
        <script>
                        $('.loading-overlay').hide();
                        var bulan = ["januari", "februari", 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', "oktober", 'november', 'desember'];
                        function prosesData() {
                            var po = jQuery('#po').val();
                            var data1 = jQuery("#data1")[0].files[0];
                            var data2 = jQuery("#data2")[0].files[0];
                            var data3 = jQuery("#data3")[0].files[0];
                            var data4 = jQuery("#data4")[0].files[0];
                            var data5 = jQuery("#data5")[0].files[0];
                            var formData = new FormData();
                            formData.append("po", po);
                            formData.append("data1", data1);
                            formData.append("data2", data2);
                            formData.append("data3", data3);
                            formData.append("data4", data4);
                            formData.append("data5", data5);
                            if (data1 == null) {
                                alert("data 2013 harus diisi");
                            } else if (data2 == null) {
                                alert("data 2014 harus diisi")
                            } else if (data3 == null) {
                                alert("data 2015 harus diisi")
                            } else if (data4 == null) {
                                alert("data 2016 harus diisi")
                            } else if (data5 == null) {
                                alert("data 2017 harus diisi")
                            } else {
                                jQuery.ajax({
                                    url: "<?php echo base_url(); ?>proses/input",
                                    type: 'POST',
                                    data: formData,
                                    async: false,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    beforeSend: function (xhr) {
                                        $('#hasil').empty();
                                        $('.loading-overlay').show();
                                    },
                                    success: function (response, textStatus, jqXHR) {
                                        $('#hasil').html(response);
                                    },
                                    complete: function (jqXHR, textStatus) {
                                        $('.loading-overlay').hide();
                                    }
                                });
                            }
                        }

                        function simpanData() {
                            var po = jQuery('#po option:selected').text();
                            var data1 = jQuery("#data1")[0].files[0];
                            var data2 = jQuery("#data2")[0].files[0];
                            var data3 = jQuery("#data3")[0].files[0];
                            var data4 = jQuery("#data4")[0].files[0];
                            var data5 = jQuery("#data5")[0].files[0];
                            var formData = new FormData();
                            formData.append("po", po);
                            formData.append("data1", data1);
                            formData.append("data2", data2);
                            formData.append("data3", data3);
                            formData.append("data4", data4);
                            formData.append("data5", data5);
                            if (data1 == null) {
                                alert("data 2013 harus diisi");
                            } else if (data2 == null) {
                                alert("data 2014 harus diisi")
                            } else if (data3 == null) {
                                alert("data 2015 harus diisi")
                            } else if (data4 == null) {
                                alert("data 2016 harus diisi")
                            } else if (data5 == null) {
                                alert("data 2017 harus diisi")
                            } else {
                                jQuery.ajax({
                                    url: "<?php echo base_url("proses/simpan"); ?>",
                                    type: 'POST',
                                    data: formData,
                                    async: false,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    beforeSend: function (xhr) {
                                        $('.loading-overlay').show();
                                    },
                                    success: function (response, textStatus, jqXHR) {
                                        if (response.indexOf(false) == -1) {
                                            alert("berhasil simpan");
                                        } else {
                                            alert("gagal simpan");
                                        }
                                    },
                                    complete: function (jqXHR, textStatus) {
                                        $('.loading-overlay').hide();
                                    }
                                });
                            }
                        }
        </script>

    </body>
</html>
