<?php
// Include the database configuration
include 'dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get customer_id from the form
    $customer_id = $_POST['customer_id'];

    // Prepare the SQL statement
    $sql = "DELETE FROM Customers WHERE customer_id = :customer_id";

    $stmt = $pdo->prepare($sql);
    
    // Bind the customer_id parameter
    $stmt->bindParam(':customer_id', $customer_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Customer deleted successfully!";
    } else {
        echo "Error deleting customer: " . $stmt->errorInfo()[2];
    }
}



?>


