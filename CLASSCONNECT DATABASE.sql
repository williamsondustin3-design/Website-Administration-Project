-- creates the main database used by the site
CREATE DATABASE classconnect;
USE classconnect;

-- table storing all user accounts
CREATE TABLE users (
    ID INT AUTO_INCREMENT PRIMARY KEY,      
    username VARCHAR(100) UNIQUE NOT NULL,   
    password VARCHAR(255) NOT NULL          
);

-- table for storing group names (not tied to courses)
CREATE TABLE usergroups (
    ID INT AUTO_INCREMENT PRIMARY KEY,       
    group_name VARCHAR(50) UNIQUE NOT NULL  
);

-- table that stores academic groups/classes
CREATE TABLE group_s (
    subject_id VARCHAR(50) PRIMARY KEY,      
    Class_Name VARCHAR(50) UNIQUE NOT NULL,  
    class_id VARCHAR(50) UNIQUE NOT NULL,    
    group_name VARCHAR(50) UNIQUE NOT NULL  
);
