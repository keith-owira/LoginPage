<?php
Interface Account {
    public function signup ($pdo);
    public function login($pdo);
    public function changePassword($pdo);
    public function logout($pdo);
}
class user implements Account {
   
     //properties
        private $fullName; 
        private $email;
        private $password;
        private $city;
        //class constructor 
        public function __construct(){}

        public function setFullName ($fn){
            $this->fullName = $fn;
        }
        public function getFullName (){
            return $this->fullName;
        }
        public function setEmail ($email){
            $this->email = $email;
        }
        public function getEmail (){
            return $this->email;
        } 
        public function setPassword ($password){
            $this->password = $password;
        }
        public function getPassword (){
            return $this->password;
        } 
        public function setCity ($city){
            $this->city = $city;
        }
        public function getCity (){
            return $this->city;
        }
        

    public function signup ($pdo){
        $passwordHash = password_hash($this->getpassword() ,PASSWORD_DEFAULT);
        try {
            $stmt = $pdo->prepare ("INSERT INTO user_details (full_name, email, password,city) VALUES (?,?,?,?)");
            $stmt->execute([$this->getFullName(),$this->getEmail(),$passwordHash,$this->getCity()]);
            $stmt = null;
            return "Member is signed up succesfully";
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function login ($pdo){
        
         try {
                $stmt = $pdo->prepare("SELECT password FROM user_details WHERE email=?");
                $stmt->execute([$this->getEmail()]);
                $row = $stmt->fetch();
                if($row == null){
                    return "This account does not exist";
                }
                if (password_verify($this->getPassword(),$row['password'])){
                    return "Correct blah blah....";
                }
                return "Your username or password is not correct";
            } catch (PDOException $e) {
                return $e->getMessage();
            }
           
        }
    
    public function changePassword ($pdo){
           
        }

    public function logout ($pdo){
           
        }
    } 


?>
