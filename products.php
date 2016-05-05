<?php
/**
 * Created by PhpStorm.
 * User: session2
 * Date: 4/29/16
 * Time: 4:27 PM
 */
session_start();

if(@$_SESSION['userSession'] == true){

    header('Location: index.php');

}

require_once('conn.php');

$page_title = "Signup";

require_once('header.php');


if(isset($_POST['submit'])){

    $username = trim($_POST['username']);
    $password = password_hash(trim($_POST['password']) , PASSWORD_DEFAULT);
    $email = trim($_POST['email']);

    $query = "INSERT INTO users_login (user_username, user_password, user_email, user_joindate) VALUES ( :user_username, :user_password, :email, NOW()) ";
    $stmt = $conn->prepare($query);
    $stmt->execute(array('user_username' => $username, 'user_password' => $password, 'email' => $email));

    echo '<p style="color: blue;">Congratulations You Are Now Sign Up, '. $username .'<p>';

};


?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <fieldset>

        <legend>Please put in info!</legend><br>

        <label for="username">Username:</label><br>

        <input type="text" name="username" id="username" required="required"><br>

        <label for="password">Password:</label><br>

        <input type="password" id="password" name="password" required="required"><br>

        <label for="email">Email:</label><br>

        <input type="email" name="email" id="email" placeholder="Insert email"><br>

    </fieldset>

    <input type="submit" value="Sign Up" name="submit"><br>

</form>

<div>

    <?php

    if(isset($_POST['Login'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM users_login WHERE user_username = :username';
        $stmt = $conn->prepare($query);
        $stmt->execute(array('username' => $username));

        $rows = $stmt->fetch();

        if(password_verify($rows['user_password'], $password)){

            $_SESSION['userSession'] = $rows['user_id'];
            header('Location: index.php');
            return true;

        }else{

            echo '<p style="color: red">Wrong password / username</p>';

        }


    };

    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h4>LOGIN</h4>

        <label for="username">Username:</label><br>

        <input type="text" id="username" name="username" required="required"><br>

        <label for="password">Password:</label><br>

        <input type="password" id="password" name="password" required="required"><br>

        <input type="submit" name="Login" value="Login">

    </form>

</div>

<?php

require_once('footer.php');

?>



