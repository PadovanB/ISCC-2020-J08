<!DOCTYPE html>

<html>
    <meta charset="utf-8">
<header>
    <title>mini-site-routing</title>
    <A HREF="http://localhost/ISCC/J08/EX_01/mini-site-routing.php?page=1">ACCUEIL</A> 
            <A HREF="http://localhost/ISCC/J08/EX_01/mini-site-routing.php?page=2">PAGE 1</A> 
            <A HREF="http://localhost/ISCC/J08/EX_01/mini-site-routing.php?page=3">PAGE 2</A>
</header>

<body>

<?php
    if($_GET['page'] == 1){
   echo '<h1>Accueil !</h1>';

}
    elseif($_GET['page'] == 2){
    echo '<h1>Page 2 !</h1>';
}
    elseif ($_GET['page'] == 3){
    echo '<h1>Page 3 !</h1>';
}
?>

</body>

<footer>
</footer>

</html>