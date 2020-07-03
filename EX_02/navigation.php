<div>
    <?php $url = end(explode('/', $_SERVER['REQUEST_URI'])); ?>
    <nav>
      <a <?php if ($url == "vitrine-accueil.php") echo "style='color: #17c1ff; font-weight: bold;'" ?> class='left' href="vitrine-accueil.php">Accueil</a>
      <a <?php if ($url == "vitrine-programme.php") echo "style='color: #17c1ff; font-weight: bold;'" ?> class='middle' href="vitrine-programme.php">Programme</a>
      <a <?php if ($url == "vitrine-contacts.php") echo "style='color: #17c1ff; font-weight: bold;'"  ?> class='right' href="vitrine-contacts.php">Contact</a>
    </nav>
</div>