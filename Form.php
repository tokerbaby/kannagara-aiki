<!DOCTYPE html>
<html>
  <head>
  </head>

  <body>
    <?php
            // define variables and set to empty values
            $child_nameErr = $parent_nameErr = $emailErr = "";
            $child_name = $parent_name = $email = $comment = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["child_name"])) {
                $child_nameErr = "Name is required";
              } else {
                $child_name = test_input($_POST["child_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$child_name)) {
                  $child_nameErr = "Only letters and white space allowed"; 
                }
              }

              if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["parent_name"])) {
                $parent_nameErr = "Name is required";
              } else {
                $child_name = test_input($_POST["parent_name"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$parent_name)) {
                  $parent_nameErr = "Only letters and white space allowed"; 
                }
              }
              
              if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
                }
              }

              if (empty($_POST["comment"])) {
                $comment = "";
              } else {
                $comment = test_input($_POST["comment"]);
              }
            }

            function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
        ?>

  </body>
</html>
