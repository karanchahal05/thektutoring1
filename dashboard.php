<?php 
    session_start();
    include 'header.php';
    include_once 'database.php';

    if($_SESSION['login'] == true) {
        if($_SESSION['userinformation'][4] == 'owner') {
?>
    <form class="grid" method="POST" enctype="multipart/form-data">
        <div class="homesec8">
            <div></div>
            <button name="logout" type="submit" class="smallerbuttonsnotpartofnav highlightbackground normal-bold-white center">Log Out</button>
        </div>
    </form>
    
    <br>
    <div class="homesec7">
        <div></div>
        <div class="grid">
            <div class="dashboardnav">
                <div name="contacts" class="subtitle-small-black center textbutton1">Contacts</div>
                <div name="archived_contacts" class="subtitle-small-black center textbutton1">Archived Contacts</div>
                <div name="sessions" class="subtitle-small-black center textbutton1">Sessions</div>
                <div name="students" class="subtitle-small-black center textbutton1">Students</div>
            </div>
            <br>
            <br>
            <div id="dashboardload"></div>
            <br>
        </div>
        <div></div>
    </div>

<?php
        }
        else {
            header("Location: index.php?NOTAUTHORIZEDTOACCESSTHATPAGE|REPORTINGILLEGALACTIVITY");
        }
    }
    else {
        header("Location: index.php?LOGINFIRST|REPORTINGILLEGALACTIVITY");
    }

    if(isset($_POST['logout'])) {
        session_unset();
        header("Location: index.php");
    }
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#dashboardload").load('contacts.php', {});
        $("div[name='contacts']").click(function() {
            $("#dashboardload").load('contacts.php', {});
        });
        $("div[name='archived_contacts']").click(function() {
            $("#dashboardload").load('archive-contacts.php', {});
        });
        $("div[name='sessions']").click(function() {
            $("#dashboardload").load('sessions.php', {});
        });
    });
</script>