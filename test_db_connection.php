<?php

$host = 'verbmeisterdb-do-user-16767581-0.d.db.ondigitalocean.com';
$port = 25060;
$dbname = 'defaultdb';
$username = 'doadmin';
$password = 'AVNS_louDTyeqG4NKdBTWto3';
$ssl_ca = '/etc/ssl/certs/ca-cert.crt';

$options = [
    PDO::MYSQL_ATTR_SSL_CA => $ssl_ca,
    PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
];

try {
    $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4";
    $pdo = new PDO($dsn, $username, $password, $options);
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

