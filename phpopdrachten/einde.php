<?php
$cwd = getcwd();
//echo $cwd;
if (isset($_GET['cwd'])) {
    $cwd = realpath($_GET['cwd']);

    if (!$cwd || strpos($cwd, getcwd()) !== 0){
        //exit('Kan niet verder!');
        $cwd = getcwd();
    }
}
//print_r(scandir($cwd));
$all = scandir($cwd);

$breadcrumbs = explode(DIRECTORY_SEPARATOR, $cwd);
$breadcrumb_path = '';
foreach ($breadcrumbs as $breadcrumb) {
    $breadcrumb_path .= $breadcrumb . DIRECTORY_SEPARATOR;
    echo '<a href="einde.php?cwd=' . rtrim($breadcrumb_path, DIRECTORY_SEPARATOR) . '">' . $breadcrumb . '</a> / ';
}
echo '<br>';

if ($cwd != getcwd()) {
    $path = dirname($cwd);
    echo '[D] <a href="einde.php?cwd=' . $path . '">..</a><br>';
}

foreach ($all as $a) {
    //echo $a . "<br>";
    $full_path = $cwd . DIRECTORY_SEPARATOR . $a;
    if (is_dir($full_path)) {
        echo '[D] <a href="einde.php?cwd=' . $full_path . '">' . $a . "</a><br>";
    } else {
        echo '[F] <a href="einde.php?cwd=' . $cwd . '&file=' . $a . '">' . $a . "</a><br>";
    }
}

if (isset($_GET['file'])) {
    echo "Er is op een bestand geklikt<br>";
    $file = $_GET['file'];
    echo $file . "<br>";

    $full_path = $cwd . DIRECTORY_SEPARATOR . $file;

    $filesize = filesize($full_path);
    $filesize = round($filesize / 1024);
    echo $filesize . " MB <br>";

    echo substr(sprintf('%o', fileperms($full_path)), -4) . "<br>";

    $filedate = date('d-m-Y H:i:s', filemtime($full_path));
    echo $filedate . "<br>";

    $mime = mime_content_type($full_path);

    if (strpos($mime, 'text/') === 0) {
        $content = file_get_contents($full_path);

        echo "<form method='post'>";
        echo "<textarea name='tekst' rows='10' cols='30'>" . $content . "</textarea><br>";
        echo "<input type='submit' value='Opslaan'>";
        echo "</form>";

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newContent = $_POST['tekst'];
            file_put_contents($full_path, $newContent);
            echo "Bestand is bewerkt en opgeslagen.";
        }
    }elseif (strpos($mime, 'image/') === 0) {
        // full path
        // cwd er afhalen
        $new = str_replace(getcwd() . DIRECTORY_SEPARATOR, '', $full_path);
        echo "<img src='$new ' alt='$file'>";
    } else {
        echo "Bestandstype wordt niet ondersteund voor weergave.";
    }
}
