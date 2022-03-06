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
    ];
    $user = $this->User->fetch($data);
    $data = [
        'userid' => $user['userid'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'userlevel' => $user['userlevel'],
    ];
    echo $this->User->update($data);
}
