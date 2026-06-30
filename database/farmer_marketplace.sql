//MySQL script for Xampp

DROP DATABASE IF EXISTS farmer_marketplace;
CREATE DATABASE farmer_marketplace;
USE farmer_marketplace;

CREATE TABLE users (
 id INT AUTO_INCREMENT PRIMARY KEY,
 full_name VARCHAR(100) NOT NULL,
 email VARCHAR(100) NOT NULL UNIQUE,
 password VARCHAR(255) NOT NULL,
 phone VARCHAR(20),
 address TEXT,
 role ENUM('admin','farmer','vendor','operator') NOT NULL,
 profile_image VARCHAR(255),
 status ENUM('active','inactive') DEFAULT 'active',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE categories (
 id INT AUTO_INCREMENT PRIMARY KEY,
 category_name VARCHAR(100) UNIQUE NOT NULL,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
 id INT AUTO_INCREMENT PRIMARY KEY,
 farmer_id INT NOT NULL,
 category_id INT NOT NULL,
 product_name VARCHAR(150) NOT NULL,
 quantity DECIMAL(10,2) NOT NULL,
 expected_price DECIMAL(10,2) NOT NULL,
 harvest_date DATE NOT NULL,
 image VARCHAR(255),
 status ENUM('Pending','Received','Stored','Sold') DEFAULT 'Pending',
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
 FOREIGN KEY (farmer_id) REFERENCES users(id) ON DELETE CASCADE,
 FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE inventory (
 id INT AUTO_INCREMENT PRIMARY KEY,
 product_id INT NOT NULL,
 operator_id INT NOT NULL,
 quantity DECIMAL(10,2) NOT NULL,
 storage_location VARCHAR(100),
 storage_date DATE,
 expiry_date DATE,
 created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE,
 FOREIGN KEY (operator_id) REFERENCES users(id)
);

CREATE TABLE orders (
 id INT AUTO_INCREMENT PRIMARY KEY,
 vendor_id INT NOT NULL,
 total_amount DECIMAL(12,2) DEFAULT 0,
 status ENUM('Pending','Approved','Rejected','Completed','Cancelled') DEFAULT 'Pending',
 order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 FOREIGN KEY (vendor_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE order_items (
 id INT AUTO_INCREMENT PRIMARY KEY,
 order_id INT NOT NULL,
 product_id INT NOT NULL,
 quantity DECIMAL(10,2) NOT NULL,
 unit_price DECIMAL(10,2) NOT NULL,
 subtotal DECIMAL(12,2) NOT NULL,
 FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE,
 FOREIGN KEY (product_id) REFERENCES products(id)
);

CREATE INDEX idx_users_role ON users(role);
CREATE INDEX idx_products_farmer ON products(farmer_id);
CREATE INDEX idx_products_category ON products(category_id);
CREATE INDEX idx_inventory_product ON inventory(product_id);
CREATE INDEX idx_orders_vendor ON orders(vendor_id);
CREATE INDEX idx_orderitems_order ON order_items(order_id);

INSERT INTO categories (category_name) VALUES
('Vegetables'),
('Fruits'),
('Grains'),
('Dairy'),
('Spices');

INSERT INTO users (full_name,email,password,role)
VALUES ('Administrator','admin@gmail.com','$2y$10$ReplaceWithGeneratedHash','admin');



//for PostgreSQL
DROP DATABASE IF EXISTS farmer_marketplace;
CREATE DATABASE farmer_marketplace;
\c farmer_marketplace;


CREATE TYPE user_role AS ENUM ('admin','farmer','vendor','operator');
CREATE TYPE user_status AS ENUM ('active','inactive');
CREATE TYPE product_status AS ENUM ('Pending','Received','Stored','Sold');
CREATE TYPE order_status AS ENUM ('Pending','Approved','Rejected','Completed','Cancelled');

CREATE TABLE users(
id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
full_name VARCHAR(100) NOT NULL,
email VARCHAR(100) UNIQUE NOT NULL,
password VARCHAR(255) NOT NULL,
phone VARCHAR(20),
address TEXT,
role user_role NOT NULL,
profile_image VARCHAR(255),
status user_status DEFAULT 'active',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

CREATE TABLE categories(
id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
category_name VARCHAR(100) UNIQUE NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

CREATE TABLE products(
id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
farmer_id INT NOT NULL REFERENCES users(id) ON DELETE CASCADE,
category_id INT NOT NULL REFERENCES categories(id),
product_name VARCHAR(150) NOT NULL,
quantity NUMERIC(10,2) NOT NULL,
expected_price NUMERIC(10,2) NOT NULL,
harvest_date DATE NOT NULL,
image VARCHAR(255),
status product_status DEFAULT 'Pending',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

CREATE TABLE inventory(
id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
product_id INT NOT NULL REFERENCES products(id) ON DELETE CASCADE,
operator_id INT NOT NULL REFERENCES users(id),
quantity NUMERIC(10,2) NOT NULL,
storage_location VARCHAR(100),
storage_date DATE,
expiry_date DATE,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

CREATE TABLE orders(
id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
vendor_id INT NOT NULL REFERENCES users(id) ON DELETE CASCADE,
total_amount NUMERIC(12,2) DEFAULT 0,
status order_status DEFAULT 'Pending',
order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

CREATE TABLE order_items(
id INT GENERATED ALWAYS AS IDENTITY PRIMARY KEY,
order_id INT NOT NULL REFERENCES orders(id) ON DELETE CASCADE,
product_id INT NOT NULL REFERENCES products(id),
quantity NUMERIC(10,2) NOT NULL,
unit_price NUMERIC(10,2) NOT NULL,
subtotal NUMERIC(12,2) NOT NULL);

CREATE INDEX idx_users_role ON users(role);
CREATE INDEX idx_products_farmer ON products(farmer_id);
CREATE INDEX idx_products_category ON products(category_id);
CREATE INDEX idx_inventory_product ON inventory(product_id);
CREATE INDEX idx_orders_vendor ON orders(vendor_id);
CREATE INDEX idx_orderitems_order ON order_items(order_id);

INSERT INTO categories(category_name) VALUES
('Vegetables'),('Fruits'),('Grains'),('Dairy'),('Spices');

INSERT INTO users(full_name,email,password,role)
VALUES('Administrator','admin@gmail.com','CHANGE_TO_HASH','admin');
