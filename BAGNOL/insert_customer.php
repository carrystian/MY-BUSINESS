<?php
// Include the database configuration
include 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    // Prepare the SQL statement
    $sql = "INSERT INTO Customers (first_name, last_name, email, phone_number, address) VALUES (:first_name, :last_name, :email, :phone_number, :address)";
    
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone_number', $phone_number);
    $stmt->bindParam(':address', $address);
    
    // Execute the statement
    if ($stmt->execute()) {
        echo "Customer added successfully!";
    } else {
        echo "Error adding customer: " . $stmt->errorInfo()[2];
    }


}
?>
