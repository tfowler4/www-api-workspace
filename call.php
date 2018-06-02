<?php
    require 'services.php';
    $services = new Services();
    $return = $services->makeFrontendCall();

    echo "Frontend call<br>";
    print_r($return);

    echo "<br>";
    echo "Backend call<br>";

    $parametersArray = array(
        'service' => $_GET['service'],
        'func' => $_GET['func'],
        'datatype' => $_GET['data']
    );

    $return = $services->makeBackendCall($parametersArray);
    print_r($return);
?>