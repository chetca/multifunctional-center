<?php 
require 'libs/rb.php';
R::setup( 'mysql:host=localhost;dbname=antari_mfc_test','antari_mfc_test', 'Ri&oRCw5' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

session_start();