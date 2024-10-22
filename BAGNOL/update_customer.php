<?php
// Include the database configuration
include 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $customer_id = $_POST['customer_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    // Prepare the SQL statement
    $sql = "UPDATE Customers SET first_name = :first_name, last_name = :last_name, email = :email, phone_number = :phone_number, address = :address WHERE customer_id = :customer_id";

    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':customer_id', $customer_id);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone_number', $phone_number);
    $stmt->bindParam(':address', $address);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Customer updated successfully!";
    } else {
        echo "Error updating customer: " . $stmt->errorInfo()[2];
    }
}
?>
