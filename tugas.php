<?php
    $pemasukan = 50000000;
    $hutang_a = 16500000;
    $hutang_b = 9500000;
    $bunga_a = 0.05;
    $bunga_b = 0.045;

    //Mrnghitung Total Bungan
    $totalBunga_a = $hutang_a * $bunga_a;
    $totalBunga_b = $hutang_b * $bunga_b;

    // Menghitung Total Hutang
    $total_hutang = $hutang_a + $hutang_b;

    // Menghitung Total Sisa Uang
    $sisa_uang = $pemasukan - $total_hutang - $totalBunga_a - $totalBunga_b;

    //Output Program
    echo "Sisa Uang : Rp. ".number_format($sisa_uang, 0, ',','.')."\n";
    echo "Jumlah Total Bunga Hutang : Rp. ".number_format($totalBunga_a + $totalBunga_b, 0, ',','.')."\n";
    echo "Jumlah Total Hutang : Rp. ".number_format($total_hutang, 0, ',','.')."\n";
?>