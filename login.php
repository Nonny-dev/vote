<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="page.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

</head>

<body>


    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="content">
        <section class="container" data-aos="zoom-in">
            <center><img src="img/users.png" alt=""></center>
            <header>เข้าสู่ระบบ</header>
            <form action="system/login.php" method="get" class="form">
                <div class="column">
                    <div class="input-box">
                        <label>อีเมล</label>
                        <input type="text" placeholder="อีเมล" name="email" required />
                    </div>
                    <div class="input-box">
                        <label>รหัสผ่าน</label>
                        <input type="password" placeholder="รหัสผ่าน" name="password" required />
                    </div>
                </div>

                <button type="submit" name="login">Submit</button>
                <div class="center-container" data-aos="zoom-in">
                    <a href="register.php" class="login-link">Do you not have member?</a>
                </div>
            </form>
        </section>

    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </div>

</body>

</html>