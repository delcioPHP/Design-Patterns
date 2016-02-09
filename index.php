
<?php

define('CLASS_DIR', 'source');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();



use source\modular\CreatDiv;
use source\modular\CreatForm;
use source\modular\CreatInput;
use source\modular\Formulario;

$creatInput = new  CreatInput();
$creatDiv = new CreatDiv();
$creatForm = new CreatForm('angola.com', 'POST');

$teste = new Formulario($creatInput, $creatDiv,$creatForm );

echo $teste->render();

