<?php
    $books = [
        "Panduan Belajar PHP untuk Pemula",
        "Membangun Aplikasi Web dengan PHP",
        "Tutorial PHP dengan MySQL",
        "Membuat Chat Bot dengan PHP",
    ];

    echo "\n<h5>Judul Buku PHP:</h5>";
    echo "\n<ul>";
    foreach($books as $buku){
        echo "\n<li>$buku</li>";
    }
    echo "\n</ul>";
?>