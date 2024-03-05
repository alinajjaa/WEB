<?php
    include "../config.php";
    class employeC{
    public function ListEmployees(){
        $sql ="SELECT *  FROM employer ";
        $db= config ::getConnexion();
        try{
            $List=$db->query ($sql ) ;
            return $List ;

        }
        catch(Exception $e){
            die ("message error". $e->getMessage()); 
        }
    }
    public function Deleteemployes($id){
        $sql="DELETE FROM employer where id= :id" ;
        $db=config::getConnexion() ;
        $req=$db->prepare($sql) ;
        $req->bindValue(":id" , $id);
        try {
            $req->execute() ;
        }
        catch(Exception $e){
            die ("message error". $e->getMessage());
        }

        }
    public function addemployes($emp)
    {
        $sql="INSERT INTO employer  VALUES  (NULL , :firstName , :lastName , :email , :DoB ) " ;
        $db=config::getConnexion() ;
        try {
            $req=$db->prepare($sql) ;
            $req->execute(["firstName"=>$emp->getfirstName() ,
            "lastName" =>$emp->getlastName() ,
             "email" =>$emp->getemail() ,
              "DoB"=>$emp->getDoB()->format("Y/m/d")]) ;

        }
        catch(Exception $e){
            die ("message error". $e->getMessage());
        }


        
    }

       



    }


?>