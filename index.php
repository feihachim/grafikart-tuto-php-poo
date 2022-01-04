<?php

require './Form.php';
require './Text.php';
require './Personnage.php';

$merlin = new Personnage('Merlin');
$merlin->regenerer();

var_dump($merlin);

$form = new Form($_POST);
var_dump(Text::withZero(10));

?>

<form action="#" method="POST">
    <?php
    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();
    ?>
</form>