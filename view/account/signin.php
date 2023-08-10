<?php
session_start();
include('config.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $email = $_POST['email'];

    $query = $conn->prepare("SELECT * FROM tbl_member WHERE username=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    // $query->bindParam("email", $email, PDO::PARAM_STR);,email=:email


    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    $_SESSION['isUser'] = $_POST['username'];
    // $_SESSION['isEmail'] = $_POST['email'];
    if (!$result) {
        echo '<script>alert("Username password combination is wrong!")</script>';
    } else {
        if ($password == $result['password']) {
            $_SESSION['user_id'] = $result['id'];
            echo '<script>alert("Congratulations, you are logged in!")</script>';
            // echo "<h3>Chúc mừng $username đã đăng nhập thành công!</h3>";
            header("Location: ../../index.php");
            exit;
        } else {
            echo '<script>alert("Username password combination is wrong!")</script>';
        }
    }
}
?>
<div class="left_col cols">
    <h3 class="header_log log_head">Log in</h3>
    <form method="post" action="" name="signup-form">
        <a class="login-form-forgot-password"> Forgotten Your Password? </a>

        <div class="email_container log-contain">
            <div class="email_content log-content">
                <fieldset class="email_field log-field">
                    <legend class="email_legend log-legend">Username</legend>
                    <input id="login_email" class="log-input" name="username" pattern="[a-zA-Z0-9]+" type="text" placeholder="Username *" style="border: none; width: 100%" required />
                </fieldset>

                <span class="login_email-warn log-warn">Please enter a valid e-mail address</span>
            </div>
        </div>

        <div class="password_container log-contain">
            <div class="show-hide-password-wrapper"></div>

            <div class="password_content log-content">
                <fieldset class="password_field log-field">
                    <legend class="password_legend log-legend">Password</legend>
                    <input id="login_password" class="log-input" name="password" type="password" required placeholder="Password *" style="border: none; width: 100%" />
                </fieldset>

                <!-- <span class="login_password-warn log-warn">Please enter a password</span> -->
            </div>
        </div>

        <div class="log_but">
            <button type="submit" class="login_but" name="login" value="login">
                <a>LOGIN
                    <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                    <lord-icon src="https://cdn.lordicon.com/zmkotitn.json" trigger="loop" colors="primary:#fff" state="intro" style="width: 30px; height: 30px; margin-left: 15px">
                    </lord-icon>
                </a>
            </button>
        </div>

        <div class="implicit-consent-terms">
            <p>
                By clicking “LOGIN”, I acknowledge that I have read, understood
                and accepted the <span>adiClub Terms and Conditions</span>, the
                <span>Website Terms and Conditions</span> and
                <span>adidas Privacy Policy</span>, and that I hereby consent to
                the transfer, sharing, use, collection and disclosure of my
                personal data to third parties as set out in the
                <span>adidas Privacy Policy</span>.
            </p>
        </div>
    </form>
</div>