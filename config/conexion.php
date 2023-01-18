<?php
class Conectar{
    protected $dbh;
    protected function Conexion(){
        try{
            $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=crud2","root","");
            return $conectar;

        }catch(Exception $e){
            print "Error DB!: ". $e->getMessage(). "<br/>";
            //Terminamos nuestra conexion 
            die();
        }
    }
        

}

?>