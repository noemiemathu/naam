<?php
$directory = "img/back/";
$files = scandir($directory);

foreach ($files as $file) {
    if (is_file($directory . $file)) {
        $link = $directory . $file;
        echo '<a href="' . $link . '">' . $file . '</a><br>';
    }
}
