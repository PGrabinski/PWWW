<?php
class Product
{
    public $name;
    public $details;
    public $url;
    public $price;
    public $producent;
    public $category;
    public $amount;
    public $id;
}
session_start();
if(empty($_SESSION['cart'])) {
  $_SESSION['cart']=array();
}
$host = 'sql.pgrabinski.nazwa.pl';
$user = 'pgrabinski_osoby';
$password = 'PWWWosoby1';
$db = 'pgrabinski_osoby';
$db = new mysqli($host, $user, $password, $db);
if ($db->connect_error) {
    die("Connection failed: " . $baza->connect_error);
} else {
    $db->query("CREATE TABLE IF NOT EXISTS products
  (id integer primary key auto_increment,
  name text,
  price float,
  category char(30),
  producent char(20),
  details text,
  imgUrl text
  )");
    $db->query("CREATE TABLE IF NOT EXISTS user
  (id integer primary key auto_increment,
  email char(100),
  imie char(20),
  nazwisko char(30),
  login char(20),
  haslo char(20),
  rola int,
  token char(65)
  )");
    $db->query("CREATE TABLE IF NOT EXISTS comments
  (id integer primary key auto_increment,
  product integer,
  user char(60),
  comment text,
  timeStamp DateTime
  )");

    // $db->query("INSERT INTO user(email,imie,nazwisko,login,haslo,rola)
  //           values ('pawelrgrabinski@gmail.com','Paweł','Grabiński','pgrabinski','PWWWuser1','2')");
}
$me=$_SESSION['me'];
