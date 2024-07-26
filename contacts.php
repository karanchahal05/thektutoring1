<?php 
    session_start();
    include_once 'database.php';

    if($_SESSION['login'] == true) {
        if($_SESSION['userinformation'][4] == 'owner') {
?>

<div class="dashboardgrid">
<?php 
    $sql = "SELECT * FROM viewing ORDER BY ordernumber DESC";
    $qry = mysqli_query($conn, $sql);
    $results = mysqli_fetch_all($qry, MYSQLI_ASSOC);

    for ($i=0;$i<count($results);$i++) {
?>

    <div class="grid border">
        <text class="normal-bold-black sidetosidepadding toppading">Date: <span class="normaltext-black"><?php echo $results[$i]['timest']; ?></span></text>
        <text class="normal-bold-black sidetosidepadding">Email: <span class="normaltext-black"><?php echo $results[$i]['email']; ?></span></text>
        <br>
        <text class="normaltext-black sidetosidepadding bottompadding"><?php echo $results[$i]['cmessage']; ?></text>
        <br>
        <button onclick="archiveMessage('<?php echo $results[$i]['id']; ?>', 'viewing')" class="smallerbuttonsnotpartofnav highlightbackground normaltext center">Archive</button>
        <br>
    </div>

<?php 
    }
?>
</div>

<script type="text/javascript">
    function archiveMessage(id, table) {
        $.post("dashboard-back.php", {id: id, table: table}, function(data, status) {
            console.log(data);
            $("#dashboardload").load('contacts.php', {});
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