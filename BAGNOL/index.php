<?php 
require_once('dbConfig.php');
require_once('models.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affordable Furniture Management</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px;">
    <h1 style="text-align: center; color: #333;">Affordable Furniture Management System</h1>

    <!-- Add New Customer Form -->
    <h2 style="color: #007BFF; margin-top: 20px;">Add New Customer</h2>
    <form action="insert_customer.php" method="POST" style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
        <label for="first_name" style="display: block; margin: 10px 0 5px;">First Name:</label>
        <input type="text" id="first_name" name="first_name" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="last_name" style="display: block; margin: 10px 0 5px;">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="email" style="display: block; margin: 10px 0 5px;">Email:</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="phone" style="display: block; margin: 10px 0 5px;">Phone Number:</label>
        <input type="text" id="phone" name="phone_number" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="address" style="display: block; margin: 10px 0 5px;">Address:</label>
        <textarea id="address" name="address" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"></textarea>

        <input type="submit" value="Add Customer" style="background-color: #007BFF; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">
    </form>

    <!-- Delete Customer Form -->
    <h2 style="color: #007BFF; margin-top: 20px;">Delete Customer</h2>
    <form action="delete_customer.php" method="POST" style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
        <label for="customer_id" style="display: block; margin: 10px 0 5px;">Customer ID:</label>
        <input type="number" id="customer_id" name="customer_id" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <input type="submit" value="Delete Customer" style="background-color: #007BFF; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">
    </form>

    <!-- Update Customer Details Form -->
    <h2 style="color: #007BFF; margin-top: 20px;">Update Customer Details</h2>
    <form action="update_customer.php" method="POST" style="background-color: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); margin-bottom: 20px;">
        <label for="update_customer_id" style="display: block; margin: 10px 0 5px;">Customer ID:</label>
        <input type="number" id="update_customer_id" name="customer_id" required style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="update_first_name" style="display: block; margin: 10px 0 5px;">New First Name:</label>
        <input type="text" id="update_first_name" name="first_name" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="update_last_name" style="display: block; margin: 10px 0 5px;">New Last Name:</label>
        <input type="text" id="update_last_name" name="last_name" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="update_email" style="display: block; margin: 10px 0 5px;">New Email:</label>
        <input type="email" id="update_email" name="email" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="update_phone" style="display: block; margin: 10px 0 5px;">New Phone Number:</label>
        <input type="text" id="update_phone" name="phone_number" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

        <label for="update_address" style="display: block; margin: 10px 0 5px;">New Address:</label>
        <textarea id="update_address" name="address" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"></textarea>

        <input type="submit" value="Update Customer" style="background-color: #007BFF; color: white; border: none; padding: 10px 15px; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease;">
    </form>
</body>
</html>
