<?php
include("config.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="person_id" name="person_id_input">
        <label for="person_id">User ID</label><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>

    <?php 
    if (isset($_POST['search_user'])) {
        $person_id = $_POST['person_id_input'];

        $SearchUserAccountQuery = "SELECT * FROM person WHERE person_id = '$person_id'";

        $result = $connection->query($SearchUserAccountQuery);

        if ($result) {
            while ($row = mysqli_fetch_object($result)) {
                $person_id = $row->person_id;
                $Last_Name = $row->Lname;
                $First_Name = $row->Fname;
                $Middle_Name = $row->Mname;
                $extension_Name = $row->Ename;
                $sex = $row->Sex;
                $birth_Date = $row->Birthdate;
                $age = $row->Age;
                $home_Address = $row->Home_Address;
                $civil_Status = $row->Civil_status;
                $nationality = $row->Nationality;
                $religion = $row->Religion;
                $boarding_Address = $row->Boarding_address;
                $contact_Number = $row->Contact_Number;
                $email_Address = $row->Email_address;

                echo '<input type="text" id="person_id" name="person_id" value="' . $person_id . '">
                      <label for="person_id">User ID</label><br>';
                echo '<input type="text" id="Last_Name" name="Last_Name" value="' . $Last_Name . '">
                      <label for="Last_Name">Last Name</label><br>';
                echo '<input type="text" id="First_Name" name="First_Name" value="' . $First_Name . '">
                      <label for="First_Name">First Name</label><br>';
                      echo '<input type="text" id="Middle_Name" name="Middle_Name" value="' . $Middle_Name . '">
                      <label for="First_Name">Middle Name</label><br>';
                      echo '<input type="text" id="extension_Name" name="extension_Name" value="' . $extension_Name . '">
                      <label for="First_Name">Extension Name</label><br>';
                      echo '<input type="text" id="sex" name="sex" value="' . $sex . '">
                      <label for="First_Name">Sex</label><br>';
                      echo '<input type="text" id="birth_Date" name="birth_Date" value="' . $birth_Date . '">
                      <label for="First_Name">Birth date</label><br>';
                      echo '<input type="text" id="age" name="age" value="' . $age . '">
                      <label for="First_Name">Age</label><br>';
                      echo '<input type="text" id="home_Address" name="home_Address" value="' . $home_Address . '">
                      <label for="First_Name">Home Address</label><br>';
                      echo '<input type="text" id="civil_Status" name="civil_Status" value="' . $civil_Status . '">
                      <label for="First_Name">Civil Status</label><br>';
                      echo '<input type="text" id="nationality" name="nationality" value="' . $nationality . '">
                      <label for="First_Name">Nationality</label><br>';
                      echo '<input type="text" id="religion" name="religion" value="' . $religion . '">
                      <label for="First_Name">Religion</label><br>';
                      echo '<input type="text" id="boarding_Address" name="boarding_Address" value="' . $boarding_Address . '">
                      <label for="First_Name">Boarding Address</label><br>';
                      echo '<input type="text" id="contact_Number" name="contact_Number" value="' . $contact_Number . '">
                      <label for="First_Name">Contact Number</label><br>';
                      echo '<input type="text" id="email_Address" name="email_Address" value="' . $email_Address . '">
                      <label for="First_Name">Email Address</label><br>';
            }
        } else {
            echo "Error executing the query: " . $connection->error;
        }
    }
    ?>
</body>
</html>