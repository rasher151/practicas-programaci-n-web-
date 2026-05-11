<?php
$host = "127.0.0.1";
$port = 5432;        // Puerto por defecto de PostgreSQL
$db   = "carrusel";
$user = "rsolache";  // Usuario por defecto de PostgreSQL
$pass = "201987";      // La contraseña que pusiste al instalar PostgreSQL

try {
    $dsn = "pgsql:host=$host;port=$port;dbname=$db";
    $conexion = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
