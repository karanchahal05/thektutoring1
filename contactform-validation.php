<?php 
    include 'database.php';


    $error = 0;

    if(isset($_POST['cemail'])) {
        $contactcemail = $_POST['cemail'];
        if(filter_var($contactcemail, FILTER_VALIDATE_EMAIL)) {
                echo "";
        }
        else {
            $error += 1;
            echo "- Email is invalid";
        }
    }
    else {
        $error += 1;
    }

    if(isset($_POST['cmessage'])) {
        $cmessage = $_POST['cmessage'];
        if(strlen($cmessage) < 10) {
            $error +=1;
            echo "- The message must be atleast 10 characters long";
        }
        else {
            echo "";
        }
    }
    else {
        $error += 1;
    }

if(isset($_POST['submit'])) {
    if($error > 0) {
        echo "|.|error";

    }
    else {
        echo "Success";
        $email = mysqli_real_escape_string($conn, $_POST['cemail']);
        $cmessage = mysqli_real_escape_string($conn, $_POST['cmessage']);
        date_default_timezone_set('America/New_York');
        $unixdate = time();
        $propertime = date("F j, Y, g:i a", $unixdate);
        $starred = "yes";

        $sql2 = "SELECT * FROM numberd WHERE id='1';";
        $qry2 = mysqli_query($conn, $sql2);
        $results1 = mysqli_fetch_all($qry2, MYSQLI_ASSOC);

        $newnum = $results1[0]['ordernumber'] + 1;


        $sql = "INSERT INTO contacts(email, ordernumber, cmessage, timest) VALUES('$email', '$newnum', '$cmessage', '$propertime');";
        mysqli_query($conn, $sql);

        $sql1 = "INSERT INTO viewing(email, ordernumber, cmessage, timest) VALUES('$email', '$newnum', '$cmessage', '$propertime');";
        mysqli_query($conn, $sql1);

        $sql3 = "UPDATE numberd SET ordernumber='$newnum' WHERE id='1';";
        mysqli_query($conn, $sql3);

        $subject = "Contact Form from ".$email;
        $mailTo = "karanA9vKAw3z@thektutoring.com";
        $headers = "From: ".$email;

        mail($mailTo, $subject, $cmessage, $headers);

        echo "|.|success";
    }
}

?>