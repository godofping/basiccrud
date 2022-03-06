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


            case ($page === "user-edit"):
                require "Views/user-edit.php";
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
                require "Controllers/Submit.php";
            break;
            
            default:
                require "Views/error.php";
                exit();
            break;
        }
    }
}



