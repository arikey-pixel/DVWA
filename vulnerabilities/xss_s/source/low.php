<?php

if( isset( $_POST[ 'btnSign' ] ) ) {
   $message = trim( $_POST[ 'mtxMessage' ] );
   $name    = trim( $_POST[ 'txtName' ] );

   // Sanitize message input
   $message = stripslashes( $message );
   $message = mysql_real_escape_string( $message );

   // Sanitize name input
   $name = mysql_real_escape_string( $name );

   $query  = "INSERT INTO guestbook ( comment, name ) VALUES ( '$message', '$name' );";
   $result = mysql_query( $query ) or die( '<pre>' . mysql_error() . '</pre>' );
}

?>
