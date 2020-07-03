<?php
include('header.php');

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Site routing </title>

    <nav>
   <?php if($_GET['page']=='accueil'):?>
   <strong><a style="color:#17cc1ff" href="vitrines-accueil.html">Accueil</a></strong>
   <?php else : ?>
   <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=accueil">Accueil</a>
   <?php endif; ?>
        <?php if($_GET['page']=='programme'):?>
        <strong><a style="color:#17cc1ff" href="vitrines-programme.html">Programme</a></strong>
        <?php else : ?>
        <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=programme">Programme</a>
        <?php endif; ?>
            <?php if($_GET['page']=='contact'):?>
             <strong><a style="color:#17cc1ff" href="vitrines-contacts.html">Contact</a></strong>
            <?php else : ?>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=contact">Contact</a>
            <?php endif; ?>
            <?php if($_GET['page']=='contact-form'):?>
             <strong><a style="color:#17cc1ff" href="contact-form.php">Contact-Form</a></strong>
            <?php else : ?>
            <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=contact-form">Contact-Form</a>
            <?php endif; ?>

   </nav>
  </head>

</html>
<?php
        if($_GET['page'] == 'accueil')
        {
            //afficher page d'accueil
            include('vitrine-accueil.html');
        }
            elseif($_GET['page'] == 'programme')
            {
                //afficher page 2
                include('vitrine-programme.html');
            }
            elseif($_GET['page'] == 'contact')
            {
                //afficher page 3
                include('vitrine-contacts.html');
            
            }
            elseif($_GET['page']=='contact-form')
            {
                include('contact-form.php');
            }

            else{
                include('404.php');
            }

            include('footer.php');
