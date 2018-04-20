<?php
    // HERE STARTS CODE THAT SENDS DATA TO MYSQL

    $servername = "localhost";
    $username = "tokerbaby";
    $password = "sc28i3QW";
    $dbname = "aiki";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = null;
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $birthday = $_POST["birthday"];
    $mobile_number = $_POST["mobile_number"];
    $home_number = $_POST["home_number"];
    $first_dojo = $_POST["first_dojo"];
    $start_kannagara = $_POST["start_kannagara"];
    $rank = $_POST["rank"];
    $file = $_POST["photo"];

    $sql = "INSERT INTO user_profiles (id, name, email, password, date_of_birth, mobile_number, home_number, first_dojo, start_kannagara, rank, photo) 
                VALUES ('" . $id . "', '" . $name . "' , '" . $email . "', '" . $password . "', '" . $birthday . "', '" . $mobile_number . "', '" . $mobile_number . "', '" . $home_number . "', '" . $start_kannagara . "', '" . $rank . "', '" . $file . "')";

    $conn->query($sql);

    /*if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/

    $conn->close();


    // HERE STARTS CODE THAT SENDS EMAILS UPON REGISTRATION

    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../res/PHPMailer-master/src/PHPMailer.php';
    require '../res/PHPMailer-master/src/Exception.php';
    require '../res/PHPMailer-master/src/SMTP.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'nwid2864@yandex.ru';                 // SMTP username
        $mail->Password = 'eARo31ktb088S';                           // SMTP password
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('nwid2864@yandex.ru', 'Ignat');
        $mail->addAddress('nwid2864@yandex.ru', 'Ignat');     // Add a recipient     // Name is optional
        $mail->addReplyTo('nwid2864@yandex.ru', 'Ignat');
        $mail->addCC('cc@example.com');
        $mail->addBCC('bcc@example.com');

        /*//Attachments
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }