<?php
Class Controller 
{
    private $User;

    public function __construct(PDO $pdo) 
    {
        $this->User = new User($pdo);
    }

    public function index() {

        $page = filter_input(INPUT_GET, 'p', FILTER_SANITIZE_SPECIAL_CHARS);

        switch ($page) {

            case ($page === ""):
                require "Views/home.php";
                exit();
            break;

            case ($page === "users"):
                require "Views/users.php";
                exit();
            break;

            case ($page === "admins"):
                require "Views/admins.php";
                exit();
            break;

            case ($page === "test"):
                $users = $this->User->fetchAll();
                echo $users[0]['username'];
            break;

            case ($page === "submit"):
                // print_r($_POST);
                $data = [
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'userlevel' => 'Admin',
                ];
                echo $this->User->create($data);
                
            break;
            
            default:
                require "Views/error.php";
                exit();
            break;
        }
    }
}



