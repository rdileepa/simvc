<?php
class User extends Controller{

    function __construct(){

        parent::__construct();

    }

    function index(){

		
		
		
		
    }

function executelogin(){

		
		
		
		if (isset($_POST["loginbtn"])){
				$username= $_POST["username"];
				$pwd=$_POST["password"];
				
				if(($username=="admin") && ($pwd=="password")){
				   $message="success";
				} else {
					$message ="error";
				}
				
				
				header("location:". SITE_PATH."user/message/".$message."");
							
		}
        $this->view->render('login');
    }


    function executeusers($id){
    	echo "This is Users Function and this is ID : ".$id;
;    }
	function executemessage($message){
	
		if($message=="success"){
			echo "Successfully Logged";
		} else{
		    echo "Error.. Pls Try Again";
		}
	}
	
}