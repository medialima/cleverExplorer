<?php

require '../../cleverApi/Catalogues.php';

$cata = new Catalogues();

$res = $cata->getAdvertisersType();

$obj = json_decode($res);

//print_r ($gen);
$carrera = $obj->{'response_object'}->{'values'};

//print_r ($obj);
     echo '<option value="">Tipo de Anunciante*</option>';
foreach ($carrera as &$valor) {
     echo '<option value="'.$valor->{'id'}.'">' . $valor->{'value'} . "</option>";
    //print_r ($valor->{'value'});
}
