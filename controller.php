<?php
include_once("model.php");
class Controller {
public $Objmodel;
public function __construct()
    {
        $this->objmodel = new Model();
    }
public function invoke()
{
	$result=null;
    $result = $this->objmodel->getlogin();  
   // it call the getlogin() function of model class and store the return value of this function into the reslt variable.

//include('afterlogin.php');
//include('login.php');
if( $result=="login"  || $result=="invalid usser")
	{
		include('afterlogin.php');

}
else
{
	include('login.php');

}



}
}
?>