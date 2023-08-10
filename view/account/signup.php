<?php
// session_start();
include('config.php');
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$creat_at = date('Y-m-d H:i:s');,creat_at,:creat_at


    $query = $conn->prepare("SELECT * FROM tbl_member WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);

    $query->execute();
    if ($query->rowCount() > 0) {
        echo '<script>alert("The email address is already registered!")</script>';
    }
    if ($query->rowCount() == 0) {
        $query = $conn->prepare("INSERT INTO tbl_member(username,password,email) VALUES (:username, :password,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password", $password, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
        if ($result) {
            echo '<script>alert("Your registration was successful!")</script>';
        } else {
            echo '<script>alert("Something went wrong!")</script>';
        }
    }
}
?>
<div class="right_col cols">
    <h3 class="header_log log_head">Create account</h3>

    <form method="post" action="" name="signup-form">

        <div class="user_container log-contain">
            <div class="user_content log-content">
                <fieldset class="user_field log-field">
                    <legend class="user_legend log-legend">Username</legend>
                    <input id="login_user" class="log-input" type="text" name="username" pattern="[a-zA-Z0-9]+" required placeholder="Username *" style="border: none; width: 100%" required />
                </fieldset>

                <!-- <span class="login_user-warn log-warn">Please enter a valid e-mail address</span> -->
            </div>
        </div>

        <div class="email_container log-contain">
            <div class="email_content log-content">
                <fieldset class="email_field log-field">
                    <legend class="email_legend log-legend">Email</legend>
                    <input id="login_email" class="log-input" type="email" name="email" required placeholder="Email *" style="border: none; width: 100%" required />
                </fieldset>

                <!-- <span class="login_email-warn log-warn">Please enter a valid e-mail address</span> -->
            </div>
        </div>

        <div class="password_container log-contain">
            <div class="show-hide-password-wrapper"></div>

            <div class="password_content log-content">
                <fieldset class="password_field log-field">
                    <legend class="password_legend log-legend">Password</legend>
                    <input id="login_password" class="log-input" type="password" name="password" required placeholder="Password *" style="border: none; width: 100%" />
                </fieldset>

                <!-- <span class="login_password-warn log-warn">Please enter a password</span> -->
            </div>
        </div>

        <div class="log_but">
            <button type="submit" name="register" value="register" class="login_but">
                <a>REGISTER
                    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#fff" state="intro" style="width: 30px; height: 30px; margin-left: 15px">
                    </lord-icon>
                </a>
            </button>
        </div>

        <div style="margin-top: 15px;"><img src="https://www.adidas.com.vn/glass/react/6fc6c43/assets/img/adiClub-account-register.jpeg" alt="adiClub teaser" height="100%" width="100%"></div>
    </form>
</div>