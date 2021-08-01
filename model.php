<?php
class Model {
public function getlogin()
{
// here goes some hardcoded values to simulate the database

	//return 'ola';
    include('config.php');
    if (isset($_POST['username'])) {
		//return 'ola';
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = $connection->prepare("SELECT * FROM users WHERE user_name=:user_name");
        $query->bindParam("user_name", $username, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetch(PDO::FETCH_ASSOC);
        if (!$result) {
            return 'invalid usser';
        } else {
			return 'login';
            if (password_verify($password, $result['password'])) {
               // $_SESSION['user_id'] = $result['id'];
                return 'login';
            } else {
				return 'invalid usser';
            }
        }
		
		/*if($_REQUEST['username']=='admin' && $_REQUEST['password']=='admin'){
                  return 'login';
        }
                        else{
                                       return 'invalid usser';
        }*/
	
	}
}
}

?>