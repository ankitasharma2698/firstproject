<?php
require_once './include/const.php';
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS) or exit('could not connect');
echo "connected<br>";

$query = "drop schema if exists $dbname ";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "db dropped<br>";

$query = "create schema $dbname ";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "db created<br>";

mysqli_select_db($con, $dbname);

$query = "CREATE  TABLE app_users (
  id INT NOT NULL AUTO_INCREMENT ,
  user_name VARCHAR(45) NULL ,
  email VARCHAR(100) NULL ,  
  pass VARCHAR(45) NULL ,
  phone_no VARCHAR(45) NULL ,
  sec_q VARCHAR(200) NULL ,
  sec_a VARCHAR(100) NULL ,
  role VARCHAR(45) NULL ,
  status VARCHAR(45) NULL ,
  PRIMARY KEY (id) ,
  UNIQUE INDEX email_UNIQUE (email ASC) );";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";

$query = "insert into app_users(user_name, email, pass, phone_no, sec_q, sec_a, role, status ) values "
        . "                     ('admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'approved') ";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "inserted<br>";

/*$query = "CREATE  TABLE report (
  id INT NOT NULL AUTO_INCREMENT ,
  subject VARCHAR(45) NULL ,
  article TEXT NULL ,
  p_name VARCHAR(100) NULL ,
  crdate date NULL ,
  PRIMARY KEY (id));";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";
*/

$query = "CREATE  TABLE patients (
  id INT NOT NULL AUTO_INCREMENT ,
  p_name VARCHAR(45) NULL ,
  p_addr VARCHAR(100) NULL ,  
  phone_no VARCHAR(45) NULL ,
  status VARCHAR(45) NULL ,
  p_desc TEXT NULL ,
  d_name VARCHAR(100) NULL ,
  PRIMARY KEY (id));";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";
$query = "CREATE  TABLE doctors (
  id INT NOT NULL AUTO_INCREMENT ,
  d_name VARCHAR(100) NULL ,
  d_addr VARCHAR(100) NULL ,  
  phone_no VARCHAR(45) NULL ,
  p_name VARCHAR(45) NULL ,
  status VARCHAR(45) NULL ,  
  email VARCHAR(100) NULL , 
  
  PRIMARY KEY (id));";
$r = mysqli_query($con, $query) or exit(mysqli_error($con));
echo "table created<br>";

