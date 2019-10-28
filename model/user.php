<?php
 class User{
    private $co;
    private $idUser;
    private $firstName;
    private $name;
    private $mail;
    private $pwd;

    function __construct() {
        //User class constructor takes a variable number of parameters depending on the action

        require('db.php');
 	 	 
        $nbArgs = func_num_args();	 //number of argument pass to constructor
        $param = func_get_args();	 //array containing values of the constructor's parametre

        //two arguments : CONNECTION
        if($nbArgs == 2){
            $this->co = $co;
            $this->mail = Security::bdd($param[1]);
            $this->pwd = Security::bdd($param[2]);
            
            $res = mysqli_fetch_assoc(mysqli_query($this->co, "SELECT firstNameUsernameUser FROM user WHERE mailUser = '$this->mail'")) or die("err_User_1");
            $this->firstName = implode("", $res); 
            
            $res = mysqli_fetch_assoc(mysqli_query($this->co, "SELECT nameUser FROM user WHERE mailUser = '$this->mail'")) or die("err_User_2");
            $this->name = implode("", $res); 
                
            $res = mysqli_fetch_assoc(mysqli_query($this->co, "SELECT idUser FROM user WHERE mailUser = '$this->mail'")) or die("err_User_3");
            $this->idUser = implode("", $res);
                
 	 	 	//user connection
            $req = "SELECT * FROM user WHERE pwdUser = '$this->pwd' and mailUser = '$this->mail'";
 	 	    $res = mysqli_query($this->co, $req) or die("err_User_4");
 	 	 	if(mysqli_num_rows($res)==1){
 	 	 	 	 $this->connection();
 	 	 	}
 	 	}
        //the user doesn't exist : ACCOUNT CREATION
        else{
            require('db.php');
            $this->co = $co;
            $this->mail = Security::bdd($param[1]);
            $this->login = Security::bdd($param[2]);
            $this->pwd = Security::bdd($param[3]);
            $this->name = Security::bdd($param[4]);
            $this->firstName = Security::bdd($param[5]);	 
             
            
            //check if the user is already existing
            $res = mysqli_query($this->co, "SELECT * FROM user where mailUser = '$this->mail' and pwdUser = '$this->pwd' and loginUser = '$this->login'") or die("err_User_5 ".mysqli_error($co));

            //if not then add him to the database
            if(mysqli_num_rows($res) == 0){
                $req = "INSERT INTO user(loginUser,pwdUser,mailUser,nameUser,firstNameUser) VALUES('$this->login','$this->pwd','$this->name','$this->firstName','$this->mail')";
                mysqli_query($this->co, $req) or die("err_User_6");
                                    
                //Redirection to view_connexion
                $x=1;
                header('Location: ../view/view_connection.php?x='.$x);
            }
 	 	 	 //if the user exist
            elseif (mysqli_num_rows($res) == 1) {

                //Redirection to view_inscription
                $alreadyExist = 1;
                header('Location: ../view/view_inscription.php?x='.$alreadyExist);
            }
        }
        mysqli_free_result($res);
 	 	 
 	}

    public function connection() {
        //function connexion call in User constructor : start user SESSION and store session variables
        session_start();
        $_SESSION['co'] = $this->co;
        $_SESSION['pwd'] = $this->pwd;
        $_SESSION['mail'] = $this->mail; 
        $_SESSION['name'] = $this->name; 
        $_SESSION['firstName'] = $this->firstName;
        $_SESSION['idUser'] = $this->idUser; 
        
        //one account for admin user
        if($_SESSION['name'] == 'admin'){
            $_SESSION['adm'] = 1;
        }
        else {
            $_SESSION['adm'] = 0;
        }
    }

 	 public function modifPwd($newPwd) {
 	 	 $this->pwd = Security::bdd($newPwd);
 	 	 $modifPwd = "UPDATE user SET pwdUser = '$this->pwd' and loginUser = '$this->login'";
 	 	 mysqli_query($this->co, $modifPwd);
 	 }
 }