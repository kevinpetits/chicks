<?php

function getExtension( $filepath ) { 
    //----------DO NOT MODIFY CODE ABOVE THIS ROW, IT WILL ANYWAY BE RESET BEFORE EXECUTION----------
    
    $ext = pathinfo($filepath, PATHINFO_EXTENSION);

    return $ext;

    //----------DO NOT MODIFY CODE BELOW THIS ROW, IT WILL ANYWAY BE RESET BEFORE EXECUTION----------
}

    print "blah.gif:      ".getExtension( "blah.gif" )."<br />\n";
    print "my.file.gif:   ".getExtension( "my.file.gif" )."<br />\n";
    print "this/is/afile: ".getExtension( "this/is/afile" )."<br />\n";
    print "photo.png: ".getExtension( "photo.png" )."<br />\n";
    print "test.jpg: ".getExtension( "test.jpg" )."<br />\n";


?>