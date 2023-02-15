<?php

session_start();

$nav = [
    ['label' => 'Home', 'href' => 'index.php'],
    ['label' => 'Login', 'href' => 'login.php'],
    ['label' => 'Reserve', 'href' => 'reserve.php'],
    ['label' => 'Logout', 'href' => 'logout.php']
];
?>

<ul>
    <?php
    foreach ($nav as $link) {
    ?>

        <li><a href="<?php echo $link['href'] ?>"><?php echo $link['label'] ?></a></li>

    <?php
    }
    ?>
</ul>