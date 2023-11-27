<?php
/** Opdracht 13*/
$contents = file_get_contents("img/content.txt");
echo $contents . "<br><br>";

/** Opdracht 14 */
?>
<form method="post">
    <textarea name="text" rows="10" cols="20"><?php echo $contents ?></textarea>
</form>

<?php
/** Opdracht 15 */
$w = file_get_contents("index.php");
?>
<form method="post">
    <textarea name="tekst" rows="10" cols="30"><?php echo $w ?></textarea>
</form>
