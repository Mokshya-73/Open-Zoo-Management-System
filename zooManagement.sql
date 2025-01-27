-- Create the zooManagement database
-- CREATE DATABASE zooManagement;

-- Use the zooManagement database
-- USE zooManagement;

-- Create the customers table
CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    visit_date DATE NOT NULL,
    parking ENUM('yes', 'no') NOT NULL,
    parking_slot INT DEFAULT NULL, -- New column to store the parking slot number
    local_below_18_tickets INT DEFAULT 0,
    local_above_18_tickets INT DEFAULT 0,
    foreigners_tickets INT DEFAULT 0,
    total_amount DECIMAL(10, 2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `animals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `type` varchar(191) NOT NULL,
  `dateofbirth` varchar(191) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `image` varchar(191) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;