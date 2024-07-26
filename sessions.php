<?php 
    session_start();
    include_once 'database.php';

    if($_SESSION['login'] == true) {
        if($_SESSION['userinformation'][4] == 'owner') {
?>

<div class="dashboardgrid">
<?php 
    $sql = "SELECT * FROM viewingConsultation ORDER BY consultationTimeDate ASC";
    $qry = mysqli_query($conn, $sql);
    $results = mysqli_fetch_all($qry, MYSQLI_ASSOC);
    date_default_timezone_set('America/New_York');

    for ($i=0;$i<count($results);$i++) {
?>

    <div class="grid border">
        <text class="normal-bold-black sidetosidepadding toppading">Time of Consultation: <span class="normaltext-black"><br><?php echo date('F j, Y, g:i a', $results[$i]['consultationTimeDate']); ?></span></text>
        <br>
        <text class="normal-bold-black sidetosidepadding">Email: <span class="normaltext-black"><?php echo $results[$i]['email']; ?></span></text>
        <text class="normal-bold-black sidetosidepadding">Phone: <span class="normaltext-black"><?php echo $results[$i]['pnumber']; ?></span></text>
        <text class="normal-bold-black sidetosidepadding">Student Name: <span class="normaltext-black"><?php echo $results[$i]['stname']; ?></span></text>
        <text class="normal-bold-black sidetosidepadding">Education Level: <span class="normaltext-black"><?php echo $results[$i]['edlevel']; ?></span></text>
        <br>
        <text class="normal-bold-black sidetosidepadding">Extra Notes: <br><span class="normaltext-black"><?php echo mysqli_real_escape_string($conn, $results[$i]['extranotes']); ?></span></text>
        <br>
        <button onclick="deleteSession(<?php echo $results[$i]['id']; ?>, 'viewingConsultation')" class="highlightbackground toppadding sidetosidepadding bottompadding normaltext center smallerbuttonsnotpartofnav">Delete</button>
        <br>
    </div>

<?php 
    }
?>
</div>

<script type="text/javascript">
    function deleteSession(id, table) {
        $.post("dashboard-back.php", {id1: id, table1: table}, function(data, status) {
            console.log(data);
            $("#dashboardload").load('sessions.php', {});
        });
    }
</script>

<?php
        }
        else {
                header("Location: index.php?NOTAUTHORIZEDTOACCESSTHATPAGE|REPORTINGILLEGALACTIVITY");
        }
    }
    else {
            header("Location: index.php?LOGINFIRST|REPORTINGILLEGALACTIVITY");
    }
?>