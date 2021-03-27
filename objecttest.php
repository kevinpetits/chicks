<?php

class First {
}

class Second {

}

class Third extends Second {

}

class Fourth {

}

function checkObject( $obj ) {
    if(is_a($obj, 'First') || is_a($obj, 'Second') || is_a($obj, 'Third')){
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
}

$first = new First();
$second = new Second();
$third = new Third();
$fourth = new Fourth();

checkObject($first);
print "<br>\n";
checkObject($second);
print "<br>\n";
checkObject($third);
print "<br>\n";
checkObject($fourth);

?>