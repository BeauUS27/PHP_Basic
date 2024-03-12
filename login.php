<form method="post">
    <div>Username : <input name="username" /></div>
    <div>Password : <inpur name="password" type="password" /></div>
    <button type="submit">
        Sign In
    </button>

    <?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != null && $password != null) {
        if ($username == 'admin' && $password == 'admin') {
            echo 'Welcome to BackOffice';
       } else {
            echo 'Username invalid';
       }
    }
    
    ?>