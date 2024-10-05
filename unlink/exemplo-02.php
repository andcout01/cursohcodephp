<?php

if (!is_dir('images')) {
    mkdir('images');
}

foreach (scandir('../upload/uploads') as $item) {
    if (!in_array($item, array(".", ".."))) {
        // unlink("images/" . $item);
        var_dump($item);
        
    }
}