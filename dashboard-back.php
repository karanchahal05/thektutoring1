<?php
    include_once 'database.php';

    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);

    if(isset($_POST['id'], $_POST['table'])) {
        archiveMessage($_POST['id'], $_POST['table'], $conn);
    }

    function archiveMessage($id, $table, $conn) {
        $id = mysqli_real_escape_string($conn, $id);
        $table = mysqli_real_escape_string($conn, $table);

        $sql1 = "SELECT * FROM `$table` WHERE id='$id';"; 
        $qry1 = mysqli_query($conn, $sql1);
        $result = mysqli_fetch_all($qry1, MYSQLI_ASSOC);

        $email = mysqli_real_escape_string($conn, $result[0]['email']);
        $newnum = mysqli_real_escape_string($conn, $result[0]['ordernumber']);
        $cmessage = mysqli_real_escape_string($conn, $result[0]['cmessage']);
        $timest = mysqli_real_escape_string($conn, $result[0]['timest']);

        if ($table == "viewing") {
            $sql2 = "INSERT INTO archivedContacts(ordernumber, email, cmessage, timest) VALUES('$newnum', '$email', '$cmessage', '$timest');";
            mysqli_query($conn, $sql2);
        }

        if ($table == "archivedContacts") {
            $sql2 = "INSERT INTO viewing(ordernumber, email, cmessage, timest) VALUES('$newnum', '$email', '$cmessage', '$timest');";
            mysqli_query($conn, $sql2);
        }

        $sql = "DELETE FROM `$table` WHERE id='$id';";
        mysqli_query($conn, $sql);
    }

    if(isset($_POST['id1'], $_POST['table1'])) {
        deleteMessage($_POST['id1'], $_POST['table1'], $conn);
    }

    function deleteMessage($id, $table, $conn) {
        $id = mysqli_real_escape_string($conn, $id);
        $table = mysqli_real_escape_string($conn, $table);


        $sql5 = "DELETE FROM `$table` WHERE id='$id';";
        mysqli_query($conn, $sql5);
    }

?>