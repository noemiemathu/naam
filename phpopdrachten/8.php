<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (!empty($_POST['a']) && !empty($_POST['b'])){
        $a = $_POST['a'];
        $b = $_POST['b'];
        if ($a && $b){
            for($i = 0; $i < $b; $i ++){
                echo $a . "<br>";
            }
        }
    }
}
?>
<form method="post">
    Geef uw naam en leeftijd. <br>
    <label for="a">Naam:</label>
    <input type="text" id="a" name="a">
    <label for="b">Leeftijd</label>
    <input type="number" id="b" name="b">
    <input type="submit" value="verzenden">
</form>
