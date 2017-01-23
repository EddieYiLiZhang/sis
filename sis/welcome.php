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
          <h1>WELCOME</h1>
          
          <form method="POST" action="register.php">
          
          <div class="field-wrap">
			<label>
			<?php
			if (isset($_POST['register']))
			{
				$studentNo = $_POST['sid'];
				$lastName = $_POST['ln'];
				$firstName = $_POST['fn'];
				$emailAddress = $_POST['email'];
				$password = $_POST['pwd'];
				$birthDate = $_POST['bday'];

				echo "WELCOME, " . $lastName . " " . $firstName . "!</br>" . 
				"Your ID number is " . $studentNo . "!</br>" . 
				"Your Email Address is " . $emailAddress . "! </br>" .
				"Your Password is ". $password . "! </br>" .
				"Your Birthday is ". $birthDate . "! </br>" . 
				"The Time is " . date('c');
			}
			else
			{
				header('location: register.php');
			}

			?>
              <span class="req">*</span>
            </label>
            <br><br><br><br><br><br><br><br><br>
          </div>

          <button type="submit" class="button button-block" name="register" class="btn btn-success"/>Log Out</button>

          </form>
        </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>
</html>
