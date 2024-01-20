<?php

require_once 'header.php';

/* require 'link.php'; */

?>

<div>



</div>



<div class="textbox">

    <div class="text-box copybox">

        <div class="judul">Template Laporan 2 Jam Outbound</div>

        <textarea id="copybox" readonly>

*<?= $sapa; ?>*



*SPX BANDUNG DC >< (SPM)*

*Mohon ijin melaporkan pada Hari <?= format_hari_tanggal($date) ?> Sekira pkl <?= $sapa1; ?> Wib*

===========================

*Report Cek To dan Surat Jalan OUTBOUND*

- Security melaksanakan Pengecekan Jumlah Task Order Dan Parcel Outbound Sudah Sesuai Surat Jalan.

===========================

    

*Report Barang Keluar / OUTBOUND*

    

===========================

===========================

    

*Dokumenasi Terlampir*

1. Foto Truk Double...

2. Foto Surat Jalan..

3. Foto Cek Kabin..

===========================    



*Situasi aman dan kondusif*

   *Demikian dilaporkan*



    *<?= $sapa; ?>*

        </textarea><br />

        <button id="tombolcpy">Salin Template</button>

    </div>

</div>



<?php

require_once 'footer.php';



?>