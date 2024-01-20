<?php
require_once 'header.php';
?>

<body>
    <div class="container mt-4">
        <h2 class="alert alert-info">
            Tutorial Menampilkan Data Google SpreadSheet dengan Php
        </h2>
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Tujuan</th>
                        <th>Trip</th>
                        <th>operator</th>
                        <th>vendor</th>
                        <th>Jenis Kendaraan</th>
                        <th>NoPol</th>
                        <th>Nama Driver</th>
                        <th>No HP Driver</th>
                        <th>Jam Berangkat</th>
                        <th>No Seal</th>
                        <th>Jumlah Paket</th>
                        <th>Jumlah TO</th>
                        <th>Barhal</th>
                    </tr>
                    <?php
                    include('data.php');
                    $no = 1;
                    ?>
                    <!-- $newArray adalah variabel yang didapatkan dari data.php  -->
                    <?php foreach ($newArray as $value) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $value["tujuan"]; ?></td>
                            <td><?php echo $value["trip"]; ?></td>
                            <td><?php echo $value["operator"]; ?></td>
                            <td><?php echo $value["nolt"]; ?></td>
                            <td><?php echo $value["vendor"]; ?></td>
                            <td><?php echo $value["jenis"]; ?></td>
                            <td><?php echo $value["nopol"]; ?></td>
                            <td><?php echo $value["driver"]; ?></td>
                            <td><?php echo $value["nohp"]; ?></td>
                            <td><?php echo $value["jam"]; ?></td>
                            <td><?php echo $value["seal"]; ?></td>
                            <td><?php echo $value["parcel"]; ?></td>
                            <td><?php echo $value["noto"]; ?></td>
                            <td><?php echo $value["barhal"]; ?></td>
                        </tr>
                    <?php };
                    ?>
                </table>
            </div>
        </div>
    </div>

    <?php
    require_once 'footer.php';
    ?>