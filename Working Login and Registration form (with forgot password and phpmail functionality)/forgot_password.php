<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

try {
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->Mailer = 'gsmtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username = "transmiter email"; // Emai;
$mail->Password = "password"; // Password
$mail->IsHTML(true);
$mail->From = "transmiter email"; // Transmiter Email
$mail->FromName = "Emailservice"; // name
$mail->addAddress("reciver email here", "name"); // Email and name of the reciver
$mail->Subject = "Password Reset"; // subject
$mail->Body = "Hi,<br /><br />Here is your password reset link: <a href='http://Group_20.am/reset.php?token=$token'>Reset Password</a>"; // Email function
}
catch (Exception $e)
{
  print "something went wrong\n";
}
finally
{
  print "3";
}

//The full code down here

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "group_20";

// // Conn to database
// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check conn
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// $is_log = true;

// // Check the form 
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     // Forgot password function
//     if (isset($_POST['forgot_password'])) {
//         // vzat email s formi
//         $email = $_POST['email'];

//         // Check if the email is in the db
//         $sql = "SELECT * FROM userinf WHERE email = ?";
//         $stmt = $conn->prepare($sql);
//         if ($stmt) {
//             $stmt->bind_param("s", $email);
//             if ($stmt->execute()) {
//                 $result = $stmt->get_result();
//                 if ($result->num_rows > 0) {
//                     // Randomly generated password hash token
//                     $token = bin2hex(random_bytes(16));

//                     // update user db using the token
//                     $sql = "UPDATE userinf SET reset_token = ? WHERE email = ?";
//                     $stmt = $conn->prepare($sql);
//                     if ($stmt) {
//                         $stmt->bind_param("ss", $token, $email);
//                         if ($stmt->execute()) {
// try {
//   $mail = new PHPMailer(true);
//   $mail->IsSMTP();
//   $mail->Mailer = 'gsmtp';
//   $mail->SMTPAuth = true;
//   $mail->Host = 'smtp.gmail.com';
//   $mail->SMTPSecure = 'tls';
//   $mail->Port = 587;
//   $mail->Username = "transmiter email"; // Emai;
//   $mail->Password = "password"; // Password
//   $mail->IsHTML(true);
//   $mail->From = "transmiter email"; // Transmiter Email
//   $mail->FromName = "Emailservice"; // name
//   $mail->addAddress("reciver email here", "name"); // Email and name of the reciver
//   $mail->Subject = "Password Reset"; // subect
//   $mail->Body = "Hi,<br /><br />Here is your password reset link: <a href='http://Group_20.am/reset.php?token=$token'>Reset Password</a>"; // Email function
//   }
//   catch (Exception $e)
//   {
//     print "something went wrong\n";
//   }
//   finally
//   {
//     print "3";
//   }
//                             if(!$mail->Send())
//                             echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;
//                        else
//                             echo "Message has been sent";
//                         } else {
//                             echo "Error updating record: " . $stmt->error;
//                         }
//                     } else {
//                         echo "Error preparing statement: " . $conn->error;
//                     }
//                 } else {
//                     echo "Email not found.";
//                 }
//             } else {
//                 echo "Error executing statement: " . $stmt->error;
//             }
//         } else {
//             echo "Error preparing statement: " . $conn->error;
//         }
        
//         // close statement
//     }

// }



?>