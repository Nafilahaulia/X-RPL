<?php

    // array dimensi

    // $nama = array("Jihan","Teddy","Bisma","Sinta",100, 2.5);

    // var_dump($nama);

    // echo "<br>";

    // echo $nama[5];

    // echo "<br>";

    // for ($i=0; $i < 6; $i++) {
    //     // echo $i;
    //     echo $nama[$i]."<br>";
    // }

    // foreach ($nama as $k) {
    //     echo $k.'<br>';
    // }

    // array asosiatif

    // $nama = array(
    //     "Jihan" => "Surabaya",
    //     "Teddy" => "Malang Raya",
    //     "Bisma" => "Jakarta",
    //     "Sinta" => "Sidoarjo"
    // );

    $nama["Jihan"]="Surabaya";
    $nama["Teddy"]="Malang Raya";
    $nama["Bisma"]="Jakarta";
    $nama["Sinta"]="Sidoarjo";
    $nama["Esa"]="Semarang";



    var_dump($nama);

    echo "<br>";

    // echo $nama ['Bisma'];

    foreach ($nama as $k => $v) {
        echo $k." =>". $v;

        echo "<br>";
    }


?>