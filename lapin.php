<?php
require_once 'header.php';
?>
<div class="textbox">
    <div class="text-box copybox">
        <div class="judul">Laporan 2 Jam INbound</div>

        <?php
        $input = $_GET['dari'];
        $input2 = $_GET['ke'];
        $input3 = $_GET['jam'];
        $date2 = strtotime($input);
        $date1 = strtotime($input2);
        $date3 = strtotime($input3);
        ?>

        <textarea id="copybox" style="min-width:98%; height:680px; padding: 6px;">
*<?= $sapa; ?>*

*SPX Bandung DC >< (SPM)*
*Mohon ijin melaporkan pada Hari <?= format_hari_tanggal($date) ?> Sekira pkl <?= date('H:i', $date3) ?> Wib*

===========================
*Report Cek To dan Surat Jalan INBOUND*
- Security melaksanakan Pengecekan Jumlah Task Order Dan Parcel Inbound Sudah Sesuai Surat Jalan.
===========================

*Report Barang Masuk / INBOUND*
<?php
include('data2.php');
$no = 1;
$rangeStart = strtotime($_GET['dari']);
$rangeEnd = strtotime($_GET['ke']);
if (isset($rangeStart) && isset($rangeEnd)) {
    $filtered_events = array_filter($newArray, function ($var) use ($rangeStart, $rangeEnd) {
        $evtime = strtotime($var['time']);
        return $evtime <= $rangeEnd && $evtime >= $rangeStart;
    });
    // } else {
    //     $filtered_events = array_filter($newArray);
};
foreach ($filtered_events as $row) { ?>

*<?= $no++; ?>. Asal Paket : <?php echo ucwords($row["asal"]); ?>*
   - Trip ke : *<?php echo ($row["trip"]); ?>*
   - No Surat Jalan : *<?php echo ($row["nolt"]); ?>*
   - Asal Linehoul : *<?php echo ($row["vendor"]); ?>*
   - Jenis Armada : *<?php echo ($row["jenis"]); ?>*
   - Nama Driver : *<?php echo ($row["driver"]); ?>*
   - No. Hp Driver : *<?php echo ($row["nohp"]); ?>*
   - Plat Number : *<?php echo ($row["nopol"]); ?>*
   - Seal ID/No Segel : *<?php echo ($row["seal"]); ?>*
   - Qty Of Parcel : *<?php echo ($row["parcel"]); ?>*
   - Qty Of to : *<?php echo ($row["noto"]); ?>*
   - Barhal : *<?php echo ($row["barhal"]); ?>*
   - Tiba di DC : *<?php echo ($row["jam"]); ?>*
   - Mulai Bongkar : *<?php echo ($row["mulai bongkar"]); ?>*
   - Selesai Bongkar : *<?php echo ($row["selesai bongkar"]); ?>*
<?php } ?>

===========================
===========================
*Dokumenasi Terlampir*
1. Foto Truk Double...
2. Foto Surat Jalan..
3. Foto Cek Kabin..
===========================    

*Situasi aman dan kondusif*
   *Demikian dilaporkan*

    *<?= $sapa; ?>*</textarea><br />
        <button id="tombolcpy">Salin Template</button>
    </div>
</div>
<script src="script.js"></script>
<script>
    /* javascript */

    let copybox = document.getElementById("copybox");

    let tombolcpy = document.getElementById("tombolcpy");



    tombolcpy.onclick = function() {

        copybox.select();

        document.execCommand("copy");

        tombolcpy.innerText = "Tersalin !!!"

    }
</script>

<?php

require_once 'footer.php';

?>