<?php
  include 'header.php';
?>
    <br>
    <div class="registrationoverlay">
      <div></div>
      <div class="registrationoverlay2">
        <div class="titletext background bottompadding toppadding sidetosidepadding center">Registration</div>
        <div class="registrationform">
          <div></div>
          <div class="registrationsection background">
            <div class="specificregistrationsection">
              <div class="subtitle toppadding center">Parent/Guardian Name</div>
              <center>
                <form method="post" action="registrationform.php">
                  <input class="textinput1" type="text" name="parentname" placeholder="Joseph Mayson">
                </form>
              </center>
            </div>
            <div class="specificregistrationsection">
              <div class="subtitle center">Parent/Guardian Email</div>
              <center>
                <form method="post" action="registrationform.php">
                  <input class="textinput1" type="text" name="parentemail" placeholder="xyz@gmail.com">
                </form>
              </center>
            </div>
            <div class="specificregistrationsection">
              <div class="subtitle center">Student Name</div>
              <center>
                <form method="post" action="registrationform.php">
                  <input class="textinput1" type="text" name="studentname" placeholder="Mark Mayson">
                </form>
              </center>
            </div>
            <div class="specificregistrationsection">
              <div class="subtitle center">Student Email</div>
              <center>
                <form method="post" action="registrationform.php">
                  <input class="textinput1" type="text" name="studentemail" placeholder="xyz@gmail.com">
                </form>
              </center>
            </div>
            <div class="specificregistrationsection">
              <div class="subtitle center">Student Grade Level</div>
              <center>
                <form method="post" action="registrationform.php">
                  <select class="textinput2" name="gradelevel">
                    <option value="Grade1">Grade 1</option>
                    <option value="Grade2">Grade 2</option>
                    <option value="Grade3">Grade 3</option>
                    <option value="Grade4">Grade 4</option>
                    <option value="Grade5">Grade 5</option>
                    <option value="Grade6">Grade 6</option>
                    <option value="Grade7">Grade 7</option>
                    <option value="Grade8">Grade 8</option>
                    <option value="Grade9">Grade 9</option>
                    <option value="Grade10">Grade 10</option>
                    <option value="Grade11">Grade 11</option>
                    <option value="Grade12">Grade 12</option>
                  </select>
                </form>
              </center>
            </div>
            <div class="specificregistrationsection">
              <div id="programselectortitle" class="subtitle center">Class you are Registering For?</div>
              <center class="formsforclass">
                <form method="post" action="registrationform.php" id="form">
                  <select class="textinput2" name="class">
                    <option value="IB/ IBT/ Scitech Tutoring for K-8">IB/ IBT/ Scitech Tutoring for K-8</option>
                    <option value="IB/ IBT/ Scitech/ AP Admissions Help">IB/ IBT/ Scitech/ AP Admissions Help</option>
                    <option value="Basic English Language Learning for K-8">Basic English Language Learning for K-8</option>
                    <option value="English for K-8">English for K-8</option>
                    <option value="Math for K-8">Math for K-8</option>
                    <option value="Science for K-8">Science for K-8</option>
                    <option value="French for K-6">French for K-6</option>
                    <option value="English for Gr.9 - Gr.12">English for Gr.9 - Gr.12</option>
                    <option value="Business for Gr.9 - Gr.12">Business for Gr.9 - Gr.12</option>
                    <option value="Math for Gr.9-11">Math for Gr.9-11</option>
                    <option value="University General Application Help">University General Application Help</option>
                    <option value="Science for Gr.9-10">Science for Gr.9-10</option>
                    <option value="Coding">Coding</option>
                  </select>
                </form>
              </center>
              <div class="buttongrid">
                <div></div>
                <button onclick="addclassbutton()" class="backgroundbuttons subtitle">Add Class</button>
                <button onclick="removeclassbutton()" class="backgroundbuttons subtitle">Remove Class</button>
                <div></div>
              </div>
            </div>
            <div class="specificregistrationsection">
              <div class="subtitle center">Timing</div>
              <div class="normaltext sidetosidepadding center">List the times you are available from monday to sunday for the introductory meeting which will be approximately 20 minutes in length</div>
              <center>
                <form method="post" action="registrationform.php">
                  <textarea rows="4" class="textinput1" type="text" name="timesfree" placeholder="Monday: 4pm-5pm, Tuesday:2pm-3pm"></textarea>
                </form>
              </center>
            </div>
            <div class="specificregistrationsection">
              <div class="subtitle center">Note:</div>
              <div class="normaltext sidetosidepadding center bottompadding">Fill out all the information before submitting</div>
            </div>
            <div class="textholder">
              <div></div>
              <form method="post" action="registrationform.php" class="grid">
                <button type="submit" name="submit" class="buttonsnotpartofnav backgroundbuttons titletext center">SUB<span class="goodletter">MIT</span></button>
              </form>
              <div></div>
            </div>
          </div>
          <div></div>
        </div>
      </div>
      <div></div>
    </div>
    <br>
    <?php
      include 'footer.php';

      $form = "<select class='textinput2' name='class'> <option value='IB/ IBT/ Scitech Tutoring for K-8'>IB/ IBT/ Scitech Tutoring for K-8</option> <option value='IB/ IBT/ Scitech/ AP Admissions Help'>IB/ IBT/ Scitech/ AP Admissions Help</option> <option value='Basic English Language Learning for K-8'>Basic English Language Learning for K-8</option> <option value='English for K-8'>English for K-8</option> <option value='Math for K-8'>Math for K-8</option> <option value='Science for K-8'>Science for K-8</option> <option value='French for K-6'>French for K-6</option> <option value='English for Gr.9 - Gr.12'>English for Gr.9 - Gr.12</option> <option value='Business for Gr.9 - Gr.12'>Business for Gr.9 - Gr.12</option> <option value='Math for Gr.9-11'>Math for Gr.9-11</option> <option value='University General Application Help'>University General Application Help</option> <option value='Science for Gr.9-10'>Science for Gr.9-10</option> <option value='Coding'>Coding</option> </select>";
    ?>
    <script>
      Element.prototype.appendBefore = function(element) {
        element.parentNode.insertBefore(this, element);
      }, false;

      Element.prototype.appendAfter = function(element) {
        element.parentNode.insertBefore(this, element.nextSibling);
      }, false;

      var numberofclassbuton = 0

      function addclassbutton() {
        document.getElementById('programselectortitle').textContent = "Classes you are Registering For?";
        if (numberofclassbuton == 0) {
          numberofclassbuton = 1;
          var form = document.createElement('form');
          form.setAttribute('id', 'form1');
          form.setAttribute('method', 'post');
          form.setAttribute('action', 'registrationform.php');
          form.appendAfter(document.getElementById('form'));
          document.getElementById('form1').innerHTML = "<?php echo $form ?>";
        }
        else if (numberofclassbuton == 1) {
          var form1 = document.createElement('form');
          form1.setAttribute('id', 'form2');
          form1.setAttribute('method', 'post');
          form1.setAttribute('action', 'registrationform.php');
          form1.appendAfter(document.getElementById('form1'));
          document.getElementById('form2').innerHTML = "<?php echo $form ?>";
          numberofclassbuton = 2;
        }
        else if (numberofclassbuton == 2) {
          var form2 = document.createElement('form');
          form2.setAttribute('id', 'form3');
          form2.setAttribute('method', 'post');
          form2.setAttribute('action', 'registrationform.php');
          form2.appendAfter(document.getElementById('form2'));
          document.getElementById('form3').innerHTML = "<?php echo $form ?>";
          numberofclassbuton = 3;
        }
        else if (numberofclassbuton == 3) {
          var form3 = document.createElement('form');
          form3.setAttribute('id', 'form4');
          form3.setAttribute('method', 'post');
          form3.setAttribute('action', 'registrationform.php');
          form3.appendAfter(document.getElementById('form3'));
          document.getElementById('form4').innerHTML = "<?php echo $form ?>";
          numberofclassbuton = 4;
        }
        else if (numberofclassbuton == 4) {
          var form4 = document.createElement('form');
          form4.setAttribute('id', 'form5');
          form4.setAttribute('method', 'post');
          form4.setAttribute('action', 'registrationform.php');
          form4.appendAfter(document.getElementById('form4'));
          document.getElementById('form5').innerHTML = "<?php echo $form ?>";
          numberofclassbuton = 5;
        }
        else if (numberofclassbuton == 5) {
          var form5 = document.createElement('form');
          form5.setAttribute('id', 'form6');
          form5.setAttribute('method', 'post');
          form5.setAttribute('action', 'registrationform.php');
          form5.appendAfter(document.getElementById('form5'));
          document.getElementById('form6').innerHTML = "<?php echo $form ?>";
          numberofclassbuton = 6;
        }
        else if (numberofclassbuton == 6) {
          var form6 = document.createElement('form');
          form6.setAttribute('id', 'form7');
          form6.setAttribute('method', 'post');
          form6.setAttribute('action', 'registrationform.php');
          form6.appendAfter(document.getElementById('form6'));
          document.getElementById('form7').innerHTML = "<?php echo $form ?>";
          numberofclassbuton = 7;
        }
        else if (numberofclassbuton == 7) {
          var form7 = document.createElement('form');
          form7.setAttribute('id', 'form8');
          form7.setAttribute('method', 'post');
          form7.setAttribute('action', 'registrationform.php');
          form7.appendAfter(document.getElementById('form7'));
          document.getElementById('form8').innerHTML = "<?php echo $form ?>";
          numberofclassbuton = 8;
        }
        else if (numberofclassbuton == 8) {
          var form8 = document.createElement('form');
          form8.setAttribute('id', 'form9');
          form8.setAttribute('method', 'post');
          form8.setAttribute('action', 'registrationform.php');
          form8.appendAfter(document.getElementById('form8'));
          document.getElementById('form9').innerHTML = "<?php echo $form ?>";
          numberofclassbuton = 9;
        }
        else if (numberofclassbuton == 9) {
          var form9 = document.createElement('form');
          form9.setAttribute('id', 'form10');
          form9.setAttribute('method', 'post');
          form9.setAttribute('action', 'registrationform.php');
          form9.appendAfter(document.getElementById('form9'));
          document.getElementById('form10').innerHTML = "<div class='subtitle'>Limit Reached!</div>";
          numberofclassbuton = 10;
        }
      }

      var classform = "form";
      var num = 0;
      var num1 = 0;
      var formstring = 0

      function removeclassbutton() {
        num = numberofclassbuton;
        num1= num.toString();
        formstring = classform + num1
        document.getElementById(formstring).remove();
        numberofclassbuton = numberofclassbuton - 1;
      }

    </script>
  </body>
</html>
