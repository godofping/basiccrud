<?php 

$submit = $_POST['submit'];

if ($submit == 'createuser') 
{
    $data = [
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'userlevel' => 'Admin',
    ];
    echo $this->User->create($data);
}
elseif ($submit == 'updateuser') 
{
    $data = [
        'userid' => $_POST['userid'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'userlevel' => 'Admin',
    ];
    echo $this->User->update($data);
}
