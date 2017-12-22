<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="free-educational-responsive-web-template-webEdu">
        <meta name="author" content="webThemez.com">
        <title>Lihat Data</title>
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
                        <li><a href="<?php echo base_url(); ?>">Halaman Utama</a></li>
                        <li class="active"><a href="<?php echo base_url("lihat_data"); ?>">Lihat Data</a></li>
                        <li><a href="<?php echo base_url("about_us"); ?>">About Us</a></li>
                        <li><a href="<?php echo base_url("logout"); ?>">Log Out</a></li>

                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-10">
                    <div class="grey-box-icon">
                        <h4>Pilih PO Bus & Masukkan Data excel <span style="color: red;">(*Harus urut)</span></h4>
                        <select class="form-control" id="po">
                            <option value="1">PO Guntur</option>
                            <option value="2">PO Sejati Indah</option>
                        </select>
                    </div><!--grey box -->
                </div>
                <div class="col-sm-2">
                    <div class="grey-box-icon">
                        <h4>&nbsp;</h4>
                        <button class="btn btn-danger" onclick="LihatData();">Lihat Data</button>
                    </div>
                </div>
            </div>

        </div>


        <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
        <script src='<?php echo base_url(); ?>assets/js/jquery.min.js'></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script> 
        <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
        <script>
                            $('.loading-overlay').hide();
                            function LihatData() {
                                var po = jQuery('#po option:selected').text();
                                $.ajax({
                                    type: 'GET',
                                    url: "<?php echo base_url("proses/lihat_data"); ?>",
                                    dataType: 'JSON',
                                    data: {po: po},
                                    beforeSend: function (xhr) {

                                    },
                                    success: function (response, textStatus, jqXHR) {

                                    },
                                    complete: function (jqXHR, textStatus) {

                                    }
                                });
                            }
        </script>

    </body>
</html>
