<?php
/** Opdracht 7*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["kleurcode"]) && !empty($_POST["kleurcode"])) {
        $kleurcode = $_POST["kleurcode"];

        if ($kleurcode) {
            echo '<style>body { background-color: ' . $kleurcode . '; }</style>';
        } else {
            echo 'Ongeldige kleurcode. Voer een geldige HTML-kleurcode in.';
        }
    } else {
        echo 'Voer een kleurcode in.';
    }
}
?>
<form method="post" action="">
    <label for="kleurcode">Voer een HTML-kleurcode in:</label>
    <input type="text" id="kleurcode" name="kleurcode">
    <input type="submit" value="Verstuur">
</form>

