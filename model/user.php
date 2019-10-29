<?php
 class User{
    protected $co;
    protected $idUser;
    protected $firstName;
    protected $name;
    protected $mail;
    protected $pwd;
    protected $isConfirm;
    protected $numStu;
    protected $idSpe;
    protected $yearStu;
    protected $idGrp;

    function __construct() {
        //User class constructor takes a variable number of parameters depending on the action
        require('db.php');
 	 	 
        $nbArgs = func_num_args();	 //number of argument pass to constructor
        $param = func_get_args();	 //array containing values of the constructor's parametre

        //two arguments : CONNECTION
        if($nbArgs == 3){
            $isAdmin = false;

            $this->co = $co;
            $this->mail = Security::bdd($param[1]);
            $this->pwd = Security::bdd($param[2]);

            $res = mysqli_fetch_assoc(mysqli_query($this->co, "SELECT firstNameUser FROM user WHERE mailUser = '$this->mail'")) or die("err_User1");
            $this->firstName = implode("", $res); 
            
            $res = mysqli_fetch_assoc(mysqli_query($this->co, "SELECT nameUser FROM user WHERE mailUser = '$this->mail'")) or die("err_User2");
            $this->name = implode("", $res); 
                
            $res = mysqli_fetch_assoc(mysqli_query($this->co, "SELECT idUser FROM user WHERE mailUser = '$this->mail'")) or die("err_User3");
            $this->idUser = implode("", $res);

            $req = "SELECT isConfirm FROM teacher WHERE FK_idUser = '$this->idUser'";
            $res = mysqli_query($this->co, $req) or die('err_User4');

            if(mysqli_num_rows($res)==1){
                $isAdmin = true;
                $res = mysqli_fetch_assoc(mysqli_query($this->co, $req)) or die("err_User5");
                $this->isConfirm = implode('',$res);
                if($this->isConfirm == 0){
                    //Redirection to login page : Cannot login account need to be confirm by an admin
                    $x=0;
                    header('Location: ../controller/ctrl_login.php?x='.$x);
                }
            }
            if(!$isAdmin){
                $this->numStu = implode("",mysqli_fetch_assoc(mysqli_query($this->co,"SELECT numStu From student where FK_idUser = '$this->idUser'"))) or die('err_User6');
                $this->idSpe = implode("",mysqli_fetch_assoc(mysqli_query($this->co,"SELECT FK_idSpeciality From student where FK_idUser = '$this->idUser'"))) or die('err_User7');
                $this->idGrp = implode("",mysqli_fetch_assoc(mysqli_query($this->co,"SELECT FK_idGrp From student where FK_idUser = '$this->idUser'"))) or die('err_User8');
                $this->yearStu = implode("",mysqli_fetch_assoc(mysqli_query($this->co,"SELECT yearStu From student where FK_idUser = '$this->idUser'"))) or die('err_User9');
            }

 	 	 	//user connection
            $req = "SELECT * FROM user WHERE pwdUser = '$this->pwd' and mailUser = '$this->mail'";
 	 	    $res = mysqli_query($this->co, $req) or die("err_User10");
 	 	 	if(mysqli_num_rows($res)==1){ //test if the user is in the database
 	 	 	 	 $this->connection($isAdmin);
            }
            else {
                //Redirection to login page : Unknown mail or password
                $x=1;
                header('Location: ../controller/ctrl_login.php?x='.$x);
            }               
 	 	}
        //the user doesn't exist : ACCOUNT CREATION
        else if($nbArgs == 5){ //teacher
            $this->co = $co;
            $this->name = Security::bdd($param[1]);
            $this->firstName = Security::bdd($param[2]);
            $this->mail = Security::bdd($param[3]);
            $this->pwd = Security::bdd($param[4]);        
            
            //check if the user is already existing
            $res = mysqli_query($this->co, "SELECT * FROM user where mailUser = '$this->mail' and pwdUser = '$this->pwd'") or die("err_User5");

            //if not then add him to the database
            if(mysqli_num_rows($res) == 0){
                $req = "INSERT INTO user(nameUser, firstNameUser, mailUser, pwdUser) VALUES('$this->name','$this->firstName','$this->mail','$this->pwd')";
                mysqli_query($this->co, $req) or die("err_User6");
                $id = mysqli_insert_id($link);
                
                $req = "INSERT INTO teacher(FK_idUser,isConfirm) VALUES($id,0)";
                mysqli_query($this->co, $req) or die("err_User7");
                //Redirection to login page : register done!
                $x=2;
                header('Location: ../controller/ctrl_login.php?x='.$x);
            }
 	 	 	//if the user exist
            elseif (mysqli_num_rows($res) == 1) {
                //Redirection to register page : account is already in DB creation impossible
                $alreadyExist = 1;
                header('Location: ../controller/ctrl_register.php?x='.$alreadyExist);
            }
        }
        elseif ($nbArgs == 9) { //student
            $this->co = $co;
            $this->name = Security::bdd($param[1]);
            $this->firstName = Security::bdd($param[2]);
            $this->mail = Security::bdd($param[3]);
            $this->pwd = Security::bdd($param[4]);
            $this->numStu = Security::bdd($param[5]);
            $this->idSpe = Security::bdd($param[6]);
            $this->yearStu = Security::bdd($param[7]);
            $this->idGrp = Security::bdd($param[8]);

            //check if the user is already existing
            $res = mysqli_query($this->co, "SELECT * FROM user where mailUser = '$this->mail' and pwdUser = '$this->pwd'") or die("err_User8");

            //if not then add him to the database
            if(mysqli_num_rows($res) == 0){
                $req = "INSERT INTO user(nameUser, firstNameUser, mailUser, pwdUser) VALUES('$this->name','$this->firstName','$this->mail','$this->pwd')";
                mysqli_query($this->co, $req) or die("err_User9");
                $id = mysqli_insert_id($this->co);
                
                $req = "INSERT INTO student(FK_idUser,FK_idSpeciality,FK_idGrp,numStu,yearStu) VALUES($id,'$this->idSpe','$this->idGrp','$this->numStu','$this->yearStu')";
                mysqli_query($this->co, $req) or die("err_User10");
                //Redirection to login page : register done!
                $x=2;
                header('Location: ../controller/ctrl_login.php?x='.$x);
            }
 	 	 	//if the user exist
            elseif (mysqli_num_rows($res) == 1) {
                //Redirection to register page : account is already in DB creation impossible
                $alreadyExist = 1;
                header('Location: ../controller/ctrl_register.php?x='.$alreadyExist);
            }
        }
        mysqli_free_result($res); 
 	}

    public function connection($isAdmin) {
        //function connection call in User constructor : start user SESSION and store session variables
        session_start();
        $_SESSION['co'] = $this->co;
        $_SESSION['pwd'] = $this->pwd;
        $_SESSION['mail'] = $this->mail; 
        $_SESSION['name'] = $this->name; 
        $_SESSION['firstName'] = $this->firstName;
        $_SESSION['idUser'] = $this->idUser; 

        if($isAdmin){
            $_SESSION['adm'] = 1;
        }
        else{
            $_SESSION['adm'] = 0;
            $_SESSION['numStu'] = $this->numStu;
            $_SESSION['idSpe'] = $this->idSpe;
            $_SESSION['idGrp'] = $this->idGrp;
            $_SESSION['yearStu'] = $this->yearStu;
        }
    }

    public function modifPwd($newPwd) {
        $this->pwd = Security::bdd($newPwd);
        $modifPwd = "UPDATE user SET pwdUser = '$this->pwd' and loginUser = '$this->login'";
        mysqli_query($this->co, $modifPwd);
    }
 }