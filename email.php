<?php
if($_POST["Message"]) {
mail("oladapoka@mcu.edu.ng", "Here is the sample subject line",
$_POST["Insert Your Message"]. "oladapoka@mcu.edu.ng");
}
?>
