<?php

date_default_timezone_set("Asia/Jakarta");

//Data Isian Sapaan//
$jam = date("H");
if ($jam >= 00 && $jam <= 9)
    $sapa = "Selamat Pagi.";

else if ($jam >= 10 && $jam <= 14)
    $sapa = "Selamat Siang.";

else if ($jam >= 15 && $jam <= 18)
    $sapa = "Selamat Sore.";

else if ($jam >= 19 && $jam <= 23)
    $sapa = "Selamat Malam.";

// Data isian jam //
/* $jam = date("H:i"); */

if ($jam >= 7 && $jam <= 8)
    $sapa1 = "09:00";

else if ($jam >= 9 && $jam <= 10)
    $sapa1 = "11:00";

else if ($jam >= 11 && $jam <= 12)
    $sapa1 = "13:00";

else if ($jam >= 13 && $jam <= 14)
    $sapa1 = "15:00";

else if ($jam >= 15 && $jam <= 16)
    $sapa1 = "17:00";

else if ($jam >= 17 && $jam <= 18)
    $sapa1 = "18:30";

else if ($jam >= 18 && $jam <= 20)
    $sapa1 = "21:00";

else if ($jam >= 21 && $jam <= 23)
    $sapa1 = "23:00";

else if ($jam >= 00 && $jam <= 1)
    $sapa1 = "01:00";

else if ($jam >= 1 && $jam <= 2)
    $sapa1 = "03:00";

else if ($jam >= 3 && $jam <= 4)
    $sapa1 = "05:00";

else if ($jam >= 5 && $jam <= 7)
    $sapa1 = "06:30";


// Format Tanggal Dan Hari //

function format_hari_tanggal($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );

    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );

    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date('H:i:s', strtotime($waktu));

    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";    
    //untuk menampilkan hari, tanggal bulan tahun

    return "$hari, $tanggal $bulan $tahun ";
}

function format_hari_tanggal1($waktu)
{
    $hari_array = array(
        'Minggu',
        'Senin',
        'Selasa',
        'Rabu',
        'Kamis',
        'Jumat',
        'Sabtu'
    );

    $hr = date('w', strtotime($waktu));
    $hari = $hari_array[$hr];
    $tanggal = date('j', strtotime($waktu));
    $bulan_array = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember',
    );

    $bl = date('n', strtotime($waktu));
    $bulan = $bulan_array[$bl];
    $tahun = date('Y', strtotime($waktu));
    $jam = date('H:i', strtotime($waktu));

    //untuk menampilkan hari, tanggal bulan tahun jam
    //return "$hari, $tanggal $bulan $tahun $jam";    
    //untuk menampilkan hari, tanggal bulan tahun

    return "$hari, $tanggal $bulan $tahun $jam";
}


$date2 = date('Y-m-d', strtotime("-1 day", strtotime(date("Y-m-d"))));;
$date = date('Y-m-d');
