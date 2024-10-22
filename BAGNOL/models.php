<?php

class Customer {
    private $customer_id;
    private $first_name;
    private $last_name;
    private $email;
    private $phone_number;
    private $address;

    // Constructor to initialize the customer
    public function __construct($first_name, $last_name, $email, $phone_number = null, $address = null, $customer_id = null) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone_number = $phone_number;
        $this->address = $address;
        $this->customer_id = $customer_id;
    }

    // Getters and Setters
    public function getCustomerId() {
        return $this->customer_id;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPhoneNumber() {
        return $this->phone_number;
    }

    public function setPhoneNumber($phone_number) {
        $this->phone_number = $phone_number;
    }

    public function getAddress() {
        return $this->address;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}
?>


<?php

class Order {
    private $order_id;
    private $customer_id;
    private $order_date;
    private $total_amount;
    private $status;
    private $shipping_address;

    // Constructor to initialize the order
    public function __construct($customer_id, $order_date, $total_amount, $status = 'Pending', $shipping_address = null, $order_id = null) {
        $this->customer_id = $customer_id;
        $this->order_date = $order_date;
        $this->total_amount = $total_amount;
        $this->status = $status;
        $this->shipping_address = $shipping_address;
        $this->order_id = $order_id;
    }

    // Getters and Setters
    public function getOrderId() {
        return $this->order_id;
    }

    public function getCustomerId() {
        return $this->customer_id;
    }

    public function setCustomerId($customer_id) {
        $this->customer_id = $customer_id;
    }

    public function getOrderDate() {
        return $this->order_date;
    }

    public function setOrderDate($order_date) {
        $this->order_date = $order_date;
    }

    public function getTotalAmount() {
        return $this->total_amount;
    }

    public function setTotalAmount($total_amount) {
        $this->total_amount = $total_amount;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getShippingAddress() {
        return $this->shipping_address;
    }

    public function setShippingAddress($shipping_address) {
        $this->shipping_address = $shipping_address;
    }
}
?>
