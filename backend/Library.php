<?php

require_once('Database.php');

class User extends DataBase {
    
    private $table = 'user_data';

    public $family_surname;
	public $family_name;
	public $family_middlename;
	public $doc_serial;
    public $doc_number;
    public $card_number;
	public $card_date;

    public function __construct() {
        parent::__construct();
    }

    public function insert_user()
	{
		try{
            $this->STH = $this->DBH->prepare("INSERT INTO `".$this->table."` (family_surname, family_name, family_middlename, doc_serial, doc_number, card_number, card_date) VALUES (:family_surname, :family_name, :family_middlename, :doc_serial, :doc_number, :card_number, :card_date)");
            $this->STH->execute(array(
                ':family_surname' => $this->family_surname,
                ':family_name' => $this->family_name,
                ':family_middlename' => $this->family_middlename,
                ':doc_serial' => $this->doc_serial,
                ':doc_number' => $this->doc_number,
                ':card_number' => $this->card_number,
                ':card_date' => $this->card_date,
            ));
            return true;
        }catch(PDOException $e){
            $e->getMessage();
            return false;
        }
	}
}

