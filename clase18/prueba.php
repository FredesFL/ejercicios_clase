<?php

require_once 'cliente.php';
require_once 'persona.php';
require_once 'pyme.php';
require_once 'multinacional.php';
require_once 'cuenta.php';
require_once 'Classic.php';
require_once 'Gold.php';
require_once 'Platinum.php';
require_once 'Black.php';

$flor = new persona ("Flor", "FL", 30830614, "28 Enero 1984");

var_dump ($flor);

$psa = new pyme (273030309, "Industrias Pugliese SA", "psa@psa.com.ar", "1234");

var_dump ($psa);

 ?>
