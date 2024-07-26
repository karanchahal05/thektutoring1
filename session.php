<?php 
    include "header.php";
    include_once "database.php";
?>
<br>
<div class="homesec9">
    <div></div>
    <div class="bookgrid">
        <form class="bookgrid" method="POST" enctype="multipart/form-data" onsubmit="return false">
            <div class="subtitle-black">Book a Free Consultation</div>
            <div id="outcomeconsform" class="highlight smalltext-error"></div>
            <div class="grid gap-r-5">
                <div class="normaltext-black">Email<span class="highlight">*</span></div>
                <input name="emailsess" class="inputfield3" placeholder="Ex. elisabeth@gmail.com" type="text"></input>
                <p id="emailsesserror" class="highlight smalltext-error"></p>
            </div>
            <div class="grid gap-r-5">
                <div class="normaltext-black">Phone Number<span class="highlight">*</span></div>
                <input name="pnumbersess" class="inputfield3" placeholder="Ex. 123-456-789" type="tel"></input>
                <p id="pnumbersesserror" class="highlight smalltext-error"></p>
            </div>
            <div class="grid gap-r-5">
                <div class="normaltext-black">Student Name (Full Name)<span class="highlight">*</span></div>
                <input name="stnamsess" class="inputfield3" placeholder="Ex. Jacob Rolli" type="text"></input>
                <p id="stnamsesserror" class="highlight smalltext-error"></p>
            </div>

            <div class="grid gap-r-5">
                <div class="normaltext-black">Education Level<span class="highlight">*</span></div>
                <select name="edlvlsess" class="normaltext-black" placeholder="" type="text">
                        <option value="Grades 11-12">Grades 11-12</option>
                        <option value="Grades 9-10">Grades 9-10</option>
                        <option value="Grades 6-8">Grades 6-8</option>
                </select>
                <p id="edlvlsesserror" class="highlight smalltext-error"></p>
            </div>

            <div class="grid gap-r-5">
                <div class="normaltext-black">Consultation Time and Date<span class="highlight">*</span></div>
                <select name="consultationtimedate" class="grid normaltext-black" name="consultationtime">
                <?php 
                date_default_timezone_set('America/New_York');

                for ($i=2;$i<10;$i++) {
                ?>
                        <option value="<?php echo "5:00pm ".date('F j, Y', strtotime('+'.$i.' day')) ;?>"><?php echo "5:00pm ".date('F j, Y', strtotime('+'.$i.' day'));?></option>
                        <option value="<?php echo "5:30pm ".date('F j, Y', strtotime('+'.$i.' day')) ;?>"><?php echo "5:30pm ".date('F j, Y', strtotime('+'.$i.' day'));?></option>
                        <option value="<?php echo "6:00pm ".date('F j, Y', strtotime('+'.$i.' day')) ;?>"><?php echo "6:00pm ".date('F j, Y', strtotime('+'.$i.' day'));?></option>
                        <option value="<?php echo "6:30pm ".date('F j, Y', strtotime('+'.$i.' day')) ;?>"><?php echo "6:30pm ".date('F j, Y', strtotime('+'.$i.' day'));?></option>
                        <option value="<?php echo "7:00pm ".date('F j, Y', strtotime('+'.$i.' day')) ;?>"><?php echo "7:00pm ".date('F j, Y', strtotime('+'.$i.' day'));?></option>
                        <option value="<?php echo "7:30pm ".date('F j, Y', strtotime('+'.$i.' day')) ;?>"><?php echo "7:30pm ".date('F j, Y', strtotime('+'.$i.' day'));?></option>
                <?php } ?>
                </select>
                <p id="consultationtimedateerror" class="highlight smalltext-error"></p>
            </div>
            
            <div class="grid">
                <div class="normaltext-black">Extra Notes</div>
                <textarea name="extranotes" class="normaltext-black" placeholder="Ex. He is interested in being tutored in mathematics."></textarea>
            </div>

            <br>
            <button name="sessionbutton" class="smallerbuttonsnotpartofnav highlightbackground toppading sidetosidepadding bottompadding normaltext center" type="submit">Submit</button>
            <br>
        </form>
    </div>
    <div></div>
</div>

<script type="text/javascript">
    $("input[name='emailsess']").keyup(function() {
        var emailsess = $("input[name='emailsess']").val();

        $.post("session-form.php", {emailsess: emailsess}, function(data, status) {
            $("#emailsesserror").html(data);
        });
    });

    $("input[name='pnumbersess']").keyup(function() {
        var pnumbersess = $("input[name='pnumbersess']").val();

        $.post("session-form.php", {pnumbersess: pnumbersess}, function(data, status) {
            $("#pnumbersesserror").html(data);
        });
    });

    $("input[name='stnamsess']").keyup(function() {
        var stnamsess = $("input[name='stnamsess']").val();

        $.post("session-form.php", {stnamsess: stnamsess}, function(data, status) {
            $("#stnamsesserror").html(data);
        });
    });

    $("select[name='edlvlsess']").change(function() {
        var edlvlsess = $("select[name='edlvlsess']").val();

        $.post("session-form.php", {edlvlsess: edlvlsess}, function(data, status) {
            $("#edlvlsesserror").html(data);
        });
    });

    $("select[name='consultationtimedate']").change(function() {
        var consultationtimedate = $("select[name='consultationtimedate']").val();

        $.post("session-form.php", {consultationtimedate: consultationtimedate}, function(data, status) {
            $("#consultationtimedateerror").html(data);
        });
    });

    $("button[name='sessionbutton']").click(function() {
        dform = new FormData();
        var emailsess = $("input[name='emailsess']").val();
        var pnumbersess = $("input[name='pnumbersess']").val();
        var stnamsess = $("input[name='stnamsess']").val();
        var edlvlsess = $("select[name='edlvlsess']").val();
        var consultationtimedate = $("select[name='consultationtimedate']").val();
        var extranotes = $("textarea[name='extranotes']").val();
        var truevar = true;

        dform.append('emailsess', emailsess);
        dform.append('pnumbersess', pnumbersess);
        dform.append('stnamsess', stnamsess);
        dform.append('edlvlsess', edlvlsess);
        dform.append('consultationtimedate', consultationtimedate);
        dform.append('extranotes', extranotes);
        dform.append('sessionbutton', truevar);

        //m@rV3l0u$P@55w0rd!

        $.ajax({
            url: 'session-form.php',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: dform,
            type: 'post',
            success: function(response) {
                var resarr = response.split('|.|');
                if(resarr[1] == 'success') {
                    $("#outcomeconsform").html("The contact form has been submitted");
                    $("#outcomeconsform").removeClass('highlight');
                    $("#outcomeconsform").addClass('green');

                    $("input[name='emailsess']").val("");
                    $("input[name='pnumbersess']").val("");
                    $("input[name='stnamsess']").val("");
                    $("select[name='edlvlsess']").change();
                    $("select[name='consultationtimedate']").change();
                    $("textarea[name='extranotes']").val("");
                }
                else {
                    $("#outcomeconsform").html("Could not submit the contact form due to errors");
                    $("#outcomeconsform").removeClass('green');
                    $("#outcomeconsform").addClass('highlight');

                    $("input[name='emailsess']").keyup();
                    $("input[name='pnumbersess']").keyup();
                    $("input[name='stnamsess']").keyup();
                    $("select[name='edlvlsess']").change();
                    $("select[name='consultationtimedate']").change();
                    $("textarea[name='extranotes']").keyup();
                }
            }
        });
    });
</script>
