<?php

require_once('models/users_model.php');


class users_controller{ 

    private $model_e;
    private $model_p;

    function __construct(){
        $this->model_e=new users_model();
    }

    function index(){
        $user =$this->model_e->get_users();
        include_once('views/users_view.php');

    }

     function user(){
            $data=NULL;
            if(isset($_REQUEST['id'])){
                $data=$this->model_e->get_id($_REQUEST['id']);    
            }
            $query=$this->model_e->get_users();

            include_once('views/agregar.php');
        }
    function get_datosE(){
        $data['id']=$_REQUEST['id'];
        $data['name']=$_REQUEST['name'];
        $data['email']=$_REQUEST['email'];
        $data['phone']=$_REQUEST['phone'];

        if ($_REQUEST['id']=="") {
            $this->model_e->create($data);
        }
        
        if($_REQUEST['id']!=""){
            
            $date=$_REQUEST['id'];
            $this->model_e->update($data,$date);
        }
        
        header("Location: index.php");

    }
    function confirmarDelete(){

        $data=NULL;

        if ($_REQUEST['id']!=0) {
            $data['id']=$_REQUEST['id'];

            echo($data['id']);
            $this->model_e->delete($data['id']);
            header("Location:index.php");
        }
        


    }

        
}


?>