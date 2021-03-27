<?php

    $path = $_FILES['file']['name'];
    $ext = pathinfo($path, PATHINFO_EXTENSION);
    $json = array('path' => $path, 'extension' => $ext);
    
    echo json_encode($json);

?>