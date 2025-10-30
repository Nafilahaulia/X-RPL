<?php

    // $nama = array('Teddy', 'Bisma', 'Sinta', 100);

    // var_dump($nama);

    // echo '<br>';

    // foreach ($nama as $key ) {
    //     echo $key.'<br>';
    // }

    $nama = array(
        "Teddy" => "Surabaya",
        "Bisma" => "Malang",
        "Sinta" => "Sidoarjo"   

    );

    var_dump($nama);
    echo '<br>';
    foreach ($nama as $a => $b) {
        echo $a.'-'.$b;
        echo '<br>';
    }

?>