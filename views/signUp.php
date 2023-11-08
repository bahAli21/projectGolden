<! doctype html>
<html>
<head>
    <title>signUp</title>
    <meta charset="utf-8" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <div class="wrapper">
        <div class="form-box login">
            <h2>Sign Up</h2>
            <form method="get" action="" class="form">
                <div class="input-box">
                    <input type="text" name="lastName" />
                    <label>Last Name :</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="firstName" />
                    <label> First Name :</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="text" name="studentNumber" />
                    <label>Student Number :</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="passWord" />
                    <label> Pass Word :</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="confirmationPassWord" />
                    <label> Confirm Pass Word :</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <input type="submit" value="Submit" class="btn">
            </form>
        </div>
    </div>
</body>
</html>