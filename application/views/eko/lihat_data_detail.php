<h4>TAMPILAN DATA AWAL UNTUK  <?php echo strtoupper($po); ?></h4>

<?php
if (count($hasil) == 0) {
    echo "<h4>OPPPSS... DATA KOSONG.. ^^</h4>";
    exit();
}
$data1 = array();
$bulan1 = array();
$tahun1 = array();
for ($i = 0; $i < 12; $i++) {
    array_push($data1, $hasil[$i]['rupiah']);
    array_push($bulan1, $hasil[$i]['bulan']);
    array_push($tahun1, $hasil[$i]['tahun']);
}
$data2 = array();
$bulan2 = array();
$tahun2 = array();
for ($i = 12; $i < 24; $i++) {
    array_push($data2, $hasil[$i]['rupiah']);
    array_push($bulan2, $hasil[$i]['bulan']);
    array_push($tahun2, $hasil[$i]['tahun']);
}
$data3 = array();
$bulan3 = array();
$tahun3 = array();
for ($i = 24; $i < 36; $i++) {
    array_push($data3, $hasil[$i]['rupiah']);
    array_push($bulan3, $hasil[$i]['bulan']);
    array_push($tahun3, $hasil[$i]['tahun']);
}
$data4 = array();
$bulan4 = array();
$tahun4 = array();
for ($i = 36; $i < 48; $i++) {
    array_push($data4, $hasil[$i]['rupiah']);
    array_push($bulan4, $hasil[$i]['bulan']);
    array_push($tahun4, $hasil[$i]['tahun']);
}
$data5 = array();
$bulan5 = array();
$tahun5 = array();
for ($i = 48; $i < count($hasil); $i++) {
    array_push($data5, $hasil[$i]['rupiah']);
    array_push($bulan5, $hasil[$i]['bulan']);
    array_push($tahun5, $hasil[$i]['tahun']);
}
//echo $hasil[0]['bulan'];
//exit();
?>
<div class="row">
    <div class="col-md-4">
        <div class="grey-box-icon">
            <h4>Tahun 2013</h4>
            <table class="table table-striped table-bordered" id="table-2013">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Bulan</th>
                        <th class="text-center">Pendapatan(Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($data1); $i++) {
                        ?>
                        <tr>
                            <td class="text-center">
                                <?php echo ($i + 1); ?>
                            </td>
                            <td class="text-center">
                                <?php echo $bulan1[$i] . " " . $tahun1[$i]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo number_format($data1[$i], 2); ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div><!--grey box -->
    </div><!--/span3-->
    <div class="col-md-4">
        <div class="grey-box-icon">
            <h4>Tahun 2014</h4>
            <table class="table table-striped table-bordered" id="table-2014">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Bulan</th>
                        <th class="text-center">Pendapatan(Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($data2); $i++) {
                        ?>
                        <tr>
                            <td class="text-center">
                                <?php echo ($i + 1); ?>
                            </td>
                            <td class="text-center">
                                <?php echo $bulan2[$i] . " " . $tahun2[$i]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo number_format($data2[$i], 2); ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div><!--grey box -->
    </div><!--/span3-->
    <div class="col-md-4">
        <div class="grey-box-icon">
            <h4>Tahun 2015</h4>
            <table class="table table-striped table-bordered" id="table-2015">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Bulan</th>
                        <th class="text-center">Pendapatan(Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($data3); $i++) {
                        ?>
                        <tr>
                            <td class="text-center">
                                <?php echo ($i + 1); ?>
                            </td>
                            <td class="text-center">
                                <?php echo $bulan3[$i] . " " . $tahun3[$i]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo number_format($data3[$i], 2); ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div><!--grey box -->
    </div><!--/span3-->
    <div class="col-md-6">
        <div class="grey-box-icon">
            <h4>Tahun 2016</h4>
            <table class="table table-striped table-bordered" id="table-2016">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Bulan</th>
                        <th class="text-center">Pendapatan(Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($data4); $i++) {
                        ?>
                        <tr>
                            <td class="text-center">
                                <?php echo ($i + 1); ?>
                            </td>
                            <td class="text-center">
                                <?php echo $bulan4[$i] . " " . $tahun4[$i]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo number_format($data4[$i], 2); ?>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div><!--grey box -->
    </div><!--/span3-->
    <div class="col-md-6">
        <div class="grey-box-icon">
            <h4>Tahun 2017</h4>
            <table class="table table-striped table-bordered" id="table-2016">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Bulan</th>
                        <th class="text-center">Pendapatan(Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($data5); $i++) {
                        ?>
                        <tr>
                            <td class="text-center">
                                <?php echo ($i + 1); ?>
                            </td>
                            <td class="text-center">
                                <?php echo $bulan5[$i] . " " . $tahun5[$i]; ?>
                            </td>
                            <td class="text-center">
                                <?php echo number_format($data5[$i], 2); ?>
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
<div class="row">
    <div class="col-sm-12">
        <button class="btn btn-danger col-sm-12" onclick="HapusData();">HAPUS DATA DARI DATABASE</button>
    </div>
</div>

<script>
    function HapusData() {
        var po = "<?php echo $po; ?>";
        var cf = confirm("Apa Anda Yakin Menghapus seluruh data dari <?php echo "$po"; ?>");
        if (cf == true) {
            $.ajax({
                type: 'POST',
                url: "<?php echo base_url("proses/delete"); ?>",
                dataType: 'JSON',
                data: {po: po},
                beforeSend: function (xhr) {

                },
                success: function (response, textStatus, jqXHR) {
                    if (response == true) {
                        alert("berhasil delete")
                        window.location.reload();
                    } else {
                        alert("gagal delete");
                    }
                },
                complete: function (jqXHR, textStatus) {
                }
            });
        }
    }
</script>