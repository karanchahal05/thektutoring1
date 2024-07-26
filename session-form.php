<?php 
    include_once 'database.php';

    $error = 0;

    if(isset($_POST['emailsess'])) {
        $emailsess = mysqli_real_escape_string($conn, $_POST['emailsess']);
        if(filter_var($emailsess, FILTER_VALIDATE_EMAIL)) {
            echo "";
        }
        else {
            echo "- Email is invalid";
            $error += 1;
        }
    }

    if(isset($_POST['pnumbersess'])) {
        $pnumbersess = mysqli_real_escape_string($conn, $_POST['pnumbersess']);
        $pattern = "/[0-9]{3}-[0-9]{3}-[0-9]{4}/";

        if(preg_match($pattern, $pnumbersess) != TRUE) {
            $error += 1;
            echo "- The phone number does not match the format";
        }
    }

    if(isset($_POST['stnamsess'])) {
        $stnamsess = mysqli_real_escape_string($conn, $_POST['stnamsess']);

        if(strlen($stnamsess) > 0) {
            echo "";
        }
        else {
            $error += 1;
            echo "- Student name must be atleast 1 character long";
        }
    }

    if(isset($_POST['edlvlsess'])) {
        $edlvlsess = mysqli_real_escape_string($conn, $_POST['edlvlsess']);
        $edlvlsess = (string) $edlvlsess;
        $arr = array('Grades 11-12', 'Grades 9-10', 'Grades 6-8');

        if(in_array($edlvlsess, $arr)) {
            echo "";
        }
        else {
            $error += 1;
            echo "- Invalid education level";
        }
    }

    if(isset($_POST['consultationtimedate'])) {
        $consultationtimedate = mysqli_real_escape_string($conn, $_POST['consultationtimedate']);
        $consultationtimedate = (string) $consultationtimedate;
        $arr = array();

        for ($i=2;$i<10;$i++) {
            array_push($arr, "5:00pm ".date('F j, Y', strtotime('+'.$i.' day')));
            array_push($arr, "5:30pm ".date('F j, Y', strtotime('+'.$i.' day')));
            array_push($arr, "6:00pm ".date('F j, Y', strtotime('+'.$i.' day')));
            array_push($arr, "6:30pm ".date('F j, Y', strtotime('+'.$i.' day')));
            array_push($arr, "7:00pm ".date('F j, Y', strtotime('+'.$i.' day')));
            array_push($arr, "7:30pm ".date('F j, Y', strtotime('+'.$i.' day')));
        }

        if(in_array($consultationtimedate, $arr)) {
            echo "";
        }
        else {
            $error += 1;
            echo "- Invalid consultation time";
        }
    }

    if(isset($_POST['sessionbutton'])) {
        if ($error == 0) {
            $emailsess = mysqli_real_escape_string($conn, $_POST['emailsess']);
            $pnumbersess = mysqli_real_escape_string($conn, $_POST['pnumbersess']);
            $stnamsess = mysqli_real_escape_string($conn, $_POST['stnamsess']);
            $edlvlsess = mysqli_real_escape_string($conn, $_POST['edlvlsess']);
            $consultationtimedate = mysqli_real_escape_string($conn, $_POST['consultationtimedate']);
            date_default_timezone_set('America/New_York');
            $dateval = strtotime($consultationtimedate);
            $dateval = (int) $dateval;
            $extranotes = mysqli_real_escape_string($conn, $_POST['extranotes']);
            
            $sql = "INSERT INTO consultationTimes(email, pnumber, stname, edlevel, consultationTimeDate, extranotes) VALUES('$emailsess', '$pnumbersess', '$stnamsess', '$edlvlsess', '$dateval', '$extranotes');";
            $qry = mysqli_query($conn, $sql);

            $sql1 = "INSERT INTO viewingConsultation(email, pnumber, stname, edlevel, consultationTimeDate, extranotes) VALUES('$emailsess', '$pnumbersess', '$stnamsess', '$edlvlsess', '$dateval', '$extranotes');";
            $qry1 = mysqli_query($conn, $sql1);

            $subject = "Session Form for ".$stnamsess;
            $mailTo = "karanA9vKAw3z@thektutoring.com";
            $headers = "From: ".$emailsess;
            $message = "Email: ".$emailsess."\n\n"."Student Name: ".$stnamsess."\n\n"."Education Level: ".$edlvlsess."\n\n"."Consultation Time: ".$consultationtimedate."\n\n"."Extra Notes: ".$extranotes;
    
            mail($mailTo, $subject, $message, $headers);

            echo "|.|success";
        }

        else {
            echo "|.|error";
        }
    }





?>