<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === 'John' && $password === 'Rambo'){
        echo "Ce n'est pas ma guerre";  
    }else{
        echo "votre pire cauchemar";
    }
}
?>