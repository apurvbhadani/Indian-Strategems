<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['state'] = isset($_POST['state']) ? $_POST['state'] : '';
    $_SESSION['area'] = isset($_POST['area']) ? $_POST['area'] : '';

    header("Location: page3.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form - Page 2</title>
  <link rel="stylesheet" href="css/form.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Welcome to Indian Strategems</h1>
    </header>

    <form action="page2.php" method="POST" class="form1">
      <label for="state" class="state">State</label>
      <select id="state" name="state" class="state">
        <option value="">--Please select--</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadra & Nagar Haveli / Daman & Diu">Dadra & Nagar Haveli / Daman & Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Ladakh">Ladakh</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
      </select>

      <label for="area" class="area">Area</label>
      <select id="area" name="area" required class="area">
        <option value="">--Please select--</option>
        <option value="urban">Urban</option>
        <option value="rural">Rural</option>
      </select>

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
