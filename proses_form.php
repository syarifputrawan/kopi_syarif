<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Get the form data
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $no_hp = $_POST["no_hp"];

  // You can perform further actions with the form data here, such as saving it to a database or sending an email.
  // For demonstration purposes, let's just print the data.
  echo "Data yang dikirimkan: <br>";
  echo "Nama: " . $nama . "<br>";
  echo "Email: " . $email . "<br>";
  echo "No HP: " . $no_hp . "<br>";
}
?>
