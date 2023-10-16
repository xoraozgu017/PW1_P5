<?php
    $pemasukan = 50000000;
    $hutang_a = 16500000;
    $hutang_b = 9500000;
    $bunga_a = 0.05;
    $bunga_b = 0.045;

    // Menghitung Total Hutang
    $total_hutang = $hutang_a + $hutang_b;

    // Menghitung Total Sisa Uang
    $sisa_uang = $pemasukan - $total_hutang - $totalBunga_a - $totalBunga_b;

    //Output Program
    echo "sisa uang : ".number_format($sisa_uang, 0, ',', '.')."\n";
    echo "Jumlah total bunga hutang : ".number_format($totalBunga_a + $totalBunga_b, 0, ',', '.')."\n";
    echo "Jumlah total hutang : ".number_format($total_hutang, 0, ',', '.')."\n";
?>