<?php

$u = $_GET['email'];
$p = $_GET['password'];

include_once('db.php');
$sql = "SELECT u.id_user, u.firstname, u.lastname, u.email, u.password, u.tel, u.birth, u.gender, u.address, u.nationality, r.id_role, r.name_role
        FROM users u , role r
        WHERE u.id_role = r.id_role
        AND   u.email = ?
        AND   u.password = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss",$u,$p);
        $stmt->execute();
        $result = $stmt->get_result();

        if($row = $result->fetch_assoc()){
            session_start();
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['email'] = $u;
            $_SESSION['password'] = $p;
            $_SESSION['tel'] = $row['tel'];
            $_SESSION['birth'] = $row['birth'];
            $_SESSION['gender'] = $row['gender'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['nationality'] = $row['nationality'];
            $_SESSION['id_role'] = $row['id_role'];
            $_SESSION['name_role'] = $row['name_role'];

            if($_SESSION['id_role'] == '1'){
                header('location: ../admin/index.php');
                exit(0);
            }elseif($_SESSION['id_role'] == '2'){
                header('location: ../user/index.php?menu=1');
                exit(0);
            }else{
                $_SESSION['alert'] = 'Login error';
                header('location: ../login.php');
                exit(0);
            }
        }else{
            session_start();
            $_SESSION['alert'] = 'Login error';
                header('location: ../login.php');
                exit(0);
        }

?>