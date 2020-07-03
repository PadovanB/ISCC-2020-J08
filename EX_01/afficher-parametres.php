<?php
$key = array("param1, param2");
$value = array("valeur1, valeur2");

foreach ($_GET as $key => $value){
echo "
<ul>
<li>$key : $value</li>
</ul>";
echo "<br>";
}
?>