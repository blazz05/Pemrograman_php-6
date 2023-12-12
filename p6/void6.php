<?php 
    // membuat fungsi
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Assalamu'alaikum"){
        echo $salam.", ";
        echo "Pekenalan, nama saya ".$nama."<br/>";

        // memanggil fungsi lain
        echo "Saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
        echo "Senang berkenalan dengan anda<br/>";
    }

    // memanggil fungsi perkenalan
    perkenalan("Ardianta");
?>