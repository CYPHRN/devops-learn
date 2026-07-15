<?php 
echo "NGINX v2 Online: OK<br>";
echo "PHP Online: OK<br>";

$host = getenv("DB_HOST");
$db = getenv("DB_NAME");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");

try {
  $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  echo "RDS Connection Online: OK<br>";
} catch (PDOException $e) {
  echo "RDS Connection FAILED: " . $e->getMessage() . "<br>";
}
