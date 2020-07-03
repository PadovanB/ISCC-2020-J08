<?php
if (empty($_POST)){
    echo '<p> Aucune donnée reçue.</p>';
}
else{
    echo '<p> nom:  '.$_POST['nom'].'</p>';
    echo '<p> email:  '.$_POST['email'].'</p>';
    echo '<p> message:  '.$_POST['message'].'</p>';
}
?>