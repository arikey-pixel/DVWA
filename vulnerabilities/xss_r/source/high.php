<?php

if( array_key_exists ( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Anti-CSRF
	checkTokens( $_POST[ 'token' ] , "index.php");

	$html .= '<pre>';
	$html .= 'Hello ' . htmlspecialchars( $_GET[ 'name' ] );
	$html .= '</pre>';
}

?>
