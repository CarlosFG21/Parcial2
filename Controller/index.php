<?php

require_once '../Model/Ofertas.php';

$datos['ofertas'] = Ofertas::getOfertas();

include '../View/listado.php';

?>
