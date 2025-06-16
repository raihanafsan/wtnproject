<?php
if (isset($_POST['fname'])) {
    $fname = $_POST['fname'];
} else {
    $fname = 'kk'; // or handle the error
}
echo "First Name: " . $fname;
?>