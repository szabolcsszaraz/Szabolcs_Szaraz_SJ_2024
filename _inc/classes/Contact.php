<?php

    class Contact extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function insert(){
            //$conn = db_connection();
            if($this->db){
                if(isset($_POST['contact_submitted'])){
                    $data = array('contact_name'=>$_POST['name'],
                    'contact_email'=>$_POST['email'],
                    'contact_subject'=>$_POST['subject'],
                    'contact_message'=>$_POST['message'],
                    'contact_acceptance'=>$_POST['acceptance'],
                  );
              
                  try{
              
                    $query = "INSERT INTO test_tb (name, email, subject, message, acceptance) 
                    VALUES (:contact_name, :contact_email, :contact_subject, :contact_message, :contact_acceptance)";
                    $query_run = $conn->prepare($query);
                    $query_run->execute($data);

            }catch(PDOException $e){

                echo $e->getMessage();
            }

            }
            }else{
            echo 'Nemáme spojenie';
            } 

}
    }
?>