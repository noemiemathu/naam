<?php
$text = file_get_contents("opdracht17.txt");
?>
    <h3>Schrijf hier een tekst:</h3>
    <form method="get">
        <textarea name="input" cols="15" rows="5"><?php echo $text ?></textarea><br>
        <input name="t" type="submit">
    </form>
<?php
if (isset($_GET['input'])) {
    file_put_contents("opdracht17.txt", $_GET['input']);
}
