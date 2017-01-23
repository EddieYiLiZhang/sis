<?php
    #write your comment here
    //write your comment here
    /*write your comment here*/
    $studentNo = "";
    $lastName = "";
    $firstName = "";
    $emailAddress = "";
    $password = "";
    $birthDate = "null";
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Register Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="form">     
      <div class="tab-content">
        <div id="signup">   
          <h1>Register</h1>
          
          <form method="POST" action="welcome.php">
          
          <div class="field-wrap">
            <label>
              Student ID<span class="req">*</span>
            </label>
            <input type="number" required name="sid" autocomplete="off"/>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" required name="ln" autocomplete="off" />
            </div>

        
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required name="fn" autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" required name="email" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" required name="pwd" autocomplete="off"/>
          </div>

          <div class="field-wrap">
          <label>Birthdate<span class="req">*</span></label><br/><br/>
            <label>
              <span class="req"></span>
            </label>
            <input type="date" name="bday" required name="bday" autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block" name="register" class="btn btn-success"/>Register</button>

          </form>
        </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>