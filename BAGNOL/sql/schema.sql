CREATE TABLE Customers (
    customer_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone_number VARCHAR(15),
    address VARCHAR(255)
);


CREATE TABLE Orders (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT,
    order_date DATE NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    status VARCHAR(50) DEFAULT 'Pending',
    shipping_address VARCHAR(255),
    
    -- Foreign key to establish the one-to-many relationship
    CONSTRAINT fk_customer
        FOREIGN KEY (customer_id)
        REFERENCES Customers(customer_id)
        ON DELETE CASCADE
);
