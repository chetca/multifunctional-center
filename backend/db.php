<?php 
require 'libs/rb.php';
R::setup( 'mysql:host=127.0.0.1;dbname=antari_mfc_test','root', '' ); 

if ( !R::testconnection() )
{
		exit ('Нет соединения с базой данных');
}

session_start();