<?php

    class Model{
            private $host="localhost:3308";
            private $name="ecom";
            private $user="root";
            private $pass="";
            private $bd;

        function __construct($host=null, $name=null, $user=null, $pass=null){

                if($host != null){

                    $this->host=$host;
                    $this->name=$name;
                    $this->user=$user;
                    $this->pass=$pass;
                }
                try {
                    $this->bd = new PDO('mysql:host='.$this->host .  ';dbname='  . $this->name, $this->user, $this->pass );
                } catch (Exception $e) {
                    die('Erreur de connection : BDD' .$e->getMessage());
                }

        }


        public function ajout($sql, $data=array()){
            $req=$this->bd->prepare($sql);
            $req->execute($data);

        }

        public function affiche($sql, $data=array()){
            $req=$this->bd->query($sql);
            $data=$req->fetchAll();
            return $data;

        }

        public function modif($sql, $data=array()){
            $req=$this->bd->prepare($sql);
            $req->execute();

        }

        public function supprime($sql, $data=array()){
            $req=$this->bd->prepare($sql);
            $req->execute();

        }

        


        
        

    }

    $BD = new Model();

?>