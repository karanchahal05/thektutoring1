<?php 
    session_start();
    include_once 'database.php';

    $sql = "SELECT * FROM users";
    $qry = mysqli_query($conn, $sql);
    $userresults = mysqli_fetch_all($qry, MYSQLI_ASSOC);



    if(isset($_POST['email'])) {
        if ($_POST['email'] == $userresults[0]['email']) {
            if(isset($_POST['pwd'])) {
                if ($_POST['pwd'] == $userresults[0]['pass']) {
                    $_SESSION['login'] = true;
                    $_SESSION['userinformation'] = array();
                    array_push($_SESSION['userinformation'], $userresults[0]['email']);
                    array_push($_SESSION['userinformation'], $userresults[0]['pass']);
                    array_push($_SESSION['userinformation'], $userresults[0]['fname']);
                    array_push($_SESSION['userinformation'], $userresults[0]['lname']);
                    array_push($_SESSION['userinformation'], $userresults[0]['typ']);
                    echo "success";
                } 
                else {
                    echo "error";
                }
            } 
            else {
                echo "error";
            }
        } 
        else {
            echo "error";
        }
    } 
    else {
        echo "error";
    }

?>