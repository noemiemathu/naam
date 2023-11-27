<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['b']) && !empty($_POST['b'])) {
        $b = $_POST['b'];
        if ($b) {
            for ($i = 1; $i <= 10; $i++) {
                $c = $b * $i;
                echo $c . "<br>";
            }
        }
    }
}
echo "hallo";
?>
<form method="post">
    <label for="b">Voer een nummer in:</label>
    <input type="number" id="b" name="b">
    <input type="submit" value="sent">
</form>
