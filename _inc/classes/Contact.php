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
                    //'contact_message'=>$_POST['message'],
                    'contact_message'=>filter_var($_POST['message'],FILTER_SANITIZE_FULL_SPECIAL_CHARS),
                    'contact_acceptance'=>$_POST['acceptance'],
                  );
              
                  try{
              
                    $query = "INSERT INTO test_tb (name, email, subject, message, acceptance) 
                    VALUES (:contact_name, :contact_email, :contact_subject, :contact_message, :contact_acceptance)";
                    $query_run = $this->db->prepare($query);
                    $query_run->execute($data);

            }catch(PDOException $e){

                echo $e->getMessage();
            }

            }
            }else{
            echo 'Nemáme spojenie';
            } 

        }
        public function select(){
            try{
                $sql = "SELECT * FROM test_tb";
                $query =  $this->db->query($sql);
                $contacts = $query->fetchAll();
                return $contacts;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        
        public function delete(){
            try{
                $data = array(
                    'contact_id' => $_POST['delete_contact']
                );
                $query = "DELETE FROM test_tb WHERE id = :contact_id";
                $query_run = $this->db->prepare($query);
                $query_run->execute($data);
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }
?>