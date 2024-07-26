<?php 

    session_start();

    include "header.php";
    include_once "database.php";
?>

<br>

<div class="homesec6">
    <div></div>
    <div class="grid">
        <div class="heading-black">Login</div>
        <br>
        <div id="loginstatus" class="smalltext-error highlight"></div>
        <br>
        <text class="normal-bold-black">Email</text>
        <input name="email" class="inputfield3" placeholder="Ex. hello@gmail.com"> 
        <br>
        <text class="normal-bold-black">Password</text>
        <input name="password" class="inputfield3" type="password" placeholder="Ex. GGKDD12L_"> 
        <br>
        <br>
        <button name="pwdsubmit" class="center smallerbuttonsnotpartofnav highlightbackground normaltext">Submit</button>
    </div>
    <div></div>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("button[name='pwdsubmit']").click(function() {

            var email = $("input[name='email']").val();
            var password = $("input[name='password']").val();

            var dataform = new FormData();
            dataform.append('email', email);
            dataform.append('pwd', password);
            
            $.ajax({
                url: 'login-backened.php',
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: dataform,
                type: 'post',
                success: function(response) {
                    if(response == 'success') {
                        window.location.replace("dashboard.php");
                    }
                    else {
                        window.location.replace("login.php?message=error");
                    }
                }
            });

        });
    });

</script>