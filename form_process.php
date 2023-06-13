<?php
// Assuming you have already established a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "indian_strategems";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['last_page']) && $_POST['last_page'] === 'true') {
    // Retrieve the form data
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $state = isset($_POST['state']) ? $_POST['state'] : '';
    $area = isset($_POST['area']) ? $_POST['area'] : '';
    $caste = isset($_POST['caste']) ? $_POST['caste'] : '';
    $religion = isset($_POST['religion']) ? $_POST['religion'] : '';
    $medical = isset($_POST['medical']) ? $_POST['medical'] : '';
    $student = isset($_POST['student']) ? $_POST['student'] : '';
    $sports = isset($_POST['sports']) ? $_POST['sports'] : '';

    // Insert the form data into the "userdata" table
    $sql = "INSERT INTO userdata (age, gender, state, area, caste, religion, medical, student, sports)
            VALUES ('$age', '$gender', '$state', '$area', '$caste', '$religion', '$medical', '$student', '$sports')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
        echo $age;
        echo $gender;
        echo $sports;
        
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    echo "Invalid form submission";
}
?>
