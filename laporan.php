<?php
require_once 'header.php';
?>
<div class="textbox">
    <div class="text-box copybox">
        <?php
        $input = $_GET['dari'];
        $input2 = $_GET['ke'];
        $input3 = $_GET['jam'];
        $date2 = strtotime($input);
        $date1 = strtotime($input2);
        $date3 = strtotime($input3);

        ?>
        <div class="judul">menampilkan Data Dari hari <?= format_hari_tanggal1(date('d M Y H:i', $date2)); ?> WIB
            <br />
            Sampai
            <br />
            hari <?= format_hari_tanggal1(date('d M Y H:i', $date1)); ?> WIB
            <br />
            <br />
        </div>
        <textarea id="copybox" style="min-width:98%; height:680px; padding: 6px;">
*<?= $sapa; ?>*

*SPX Bandung DC >< (SPM)*
*Mohon ijin melaporkan pada Hari <?= format_hari_tanggal($date) ?> Sekira pkl <?= date('H:i', $date3) ?> Wib*

===========================
*Report Cek To dan Surat Jalan OUTBOUND*
- Security melaksanakan Pengecekan Jumlah Task Order Dan Parcel Outbound Sudah Sesuai Surat Jalan.
===========================

*Report Barang Keluar / OUTBOUND*
<?php
include('data.php');
$no = 1;
$rangeStart = strtotime($_GET['dari']);
$rangeEnd = strtotime($_GET['ke']);
if (isset($rangeStart) && isset($rangeEnd)) {
    $filtered_events = array_filter($newArray, function ($var) use ($rangeStart, $rangeEnd) {
        $evtime = strtotime($var['time']);
        return $evtime <= $rangeEnd && $evtime >= $rangeStart;
    });
} else {
    $newArray = $filtered_events;
};
foreach ($filtered_events as $row) {
    $input4 = $row["nohp"];
    $date4 = strtotime($input4);
?>

*<?= $no++; ?>. Tujuan Paket : <?php echo ucwords($row["tujuan"]); ?>*
    - Trip : *<?php echo ($row["trip"]); ?>*   
    - Yang Menyerahkan Paket :  *<?php echo ($row["operator"]); ?>*  
    - No Surat Jalan : *<?php echo ($row["nolt"]); ?>*  
    - Asal Linehoul : *<?php echo ($row["vendor"]); ?>*  
    - Jenis Armada : *<?php echo ($row["jenis"]); ?>*  
    - Plat Number : *<?php echo  strtoupper($row["nopol"]); ?>*  
    - Nama Driver : *<?php echo ucfirst($row["driver"]);   ?>*  
    - No. Hp Driver : *<?php echo ($row["nohp"]); ?>*  
    - Start dari DC : *<?= $row["jam"] ?> Wib*  
    - Seal ID/No Segel : *<?php echo ($row["seal"]); ?>*  
    - Qty Of Parcel : *<?php echo ($row["parcel"]); ?>*  
    - Qty Of To  : *<?php echo ($row["noto"]); ?>*  
    - Barhal : *<?php echo ($row["barhal"]); ?>*
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