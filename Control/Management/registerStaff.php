<?php

require_once '../CommonFunction/CommonFunction.php';
require_once '../../Model/staff.php';
require_once '../../Model/staffDa.php';
require_once '../../Model/email.php';
//<a href="../../View/Management/viewStaff.php"></a>
//             ../../View/Management/registerStaff.php

$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$contactNo = $_POST['contactNo'];

$validation = true;
$message = "";
$path = " ../../View/Management/registerStaff.php";
$cf = new commonFunction();
if (empty($name)) {
    $message .= "Name cannot be blank.";
    $validation = false;
}
if (empty($email)) {
    $message .= " Email cannot be blank.";
    $validation = false;
}
if (!$cf->checkEmailFormat($email)) {
    $message .= " Wrong email format.";
    $validation = false;
}
if (empty($gender)) {
    $message .= " Gender cannot be blank.";
    $validation = false;
}
if (empty($address)) {
    $message .= " Home address cannot be blank.";
    $validation = false;
}
if (empty($contactNo)) {
    $message .= " Contact Number cannot be blank";
    $validation = false;
}
if (!is_numeric($contactNo)) {
    $message = " Contact Number only can contain 1 - 9.";
    $validation = false;
}
if ($validation) {
    $staffDa = new staffDa();
    $result = $staffDa->checkExistedStaffEmail($email);
    if ($result == 0) {
        $newStaff = new staff($name, $email, $gender, $address, $contactNo);
        $staffDa->registerNewStaff($newStaff);
        $email = new email($email, "User Registration", "Your account was register successfully, here is your password : " . $newStaff->password);
        $email->sendEmail();
        $message = "New staff was registered";
    } else if ($result > 0) {
        $message = "The email have already used.";
    } else {
        $message = "Please contact IT staff for this error, email used. ";
    }
}
$cf->messageAndRedict($message, $path);


