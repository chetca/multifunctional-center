<?php
require_once('library.php');

if( isset( $_POST["submit"] ) )
{
    $new_user = new user(); 
    $new_user->family_surname = $_POST["family_surname"];
    $new_user->family_name = $_POST["family_name"];
    $new_user->family_middlename = $_POST["family_middlename"];
    $new_user->doc_serial = $_POST["doc_serial"];
    $new_user->doc_number = $_POST["doc_number"];
    $new_user->card_number = $_POST["card_number"];
    $new_user->card_date = $_POST["card_date"];
    $new_user->insert_user();   
}
