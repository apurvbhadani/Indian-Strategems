<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['caste'] = isset($_POST['caste']) ? $_POST['caste'] : '';
    $_SESSION['religion'] = isset($_POST['religion']) ? $_POST['religion'] : '';
    $_SESSION['medical'] = isset($_POST['medical']) ? $_POST['medical'] : '';

    header("Location: page4.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Form - Page 3</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="container">
        
        <header>
            <h1>Welcome to Indian Strategems</h1>
        </header>

        <form action="page3.php" method="POST" class="form1">

            <label for="caste" class="caste">Caste:</label>
            <select id="caste" name="caste" required class="caste">
                <option value="">--Please select--</option>
                <option value="General">General</option>
                <option value="Other Backward Classes">Other Backward Classes(OBC)</option>
                <option value="Scheduled Castes">Scheduled Castes(SC)</option>
                <option value="Scheduled Tribes">Scheduled Tribes(ST)</option>
            </select>

            <label for="religion" class="religion">Religion:</label>
            <select id="religion" name="religion" required class="religion">
                <option value="">--Please select--</option>
                <option value="Hinduism">Hinduism</option>
                <option value="Islam">Islam</option>
                <option value="Christianity">Christianity</option>
                <option value="Sikhism">Sikhism</option>
            </select>

            <label for="disability" class="disability">Do you need any medical help?</label>
            <div class="radio-container">
                <input type="radio" id="disability-yes" name="medical" value="yes" class="options">
                <label for="disability-yes" >Yes</label>
                <input type="radio" id="disability-no" name="medical" value="no" class="options">
                <label for="disability-no">No</label>
            </div>

            <button type="submit">Next</button>
            <button type="reset">Reset Form</button>
        </form>

        <footer>
            <div> <a href="" class="extra">Reach Us</a> </div>
            <div> <a href="Disclaimer.html" class="extra">Disclaimer</a> </div>
            <div> <a href="Terms&Conditions.html" class="extra">Terms & Conditions</a>  </div>
            <div> <a href="FAQs.html" class="extra">FAQs</a> </div>
            <div> <a href="" class="extra">Contact Us</a> </div>
        </footer>
    </div>
</body>
</html>
