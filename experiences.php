<?php
if (!isset($_GET['experience'])) {
    echo json_encode(['error' => 'Erro ao encontrar experiencia!']);
    exit;
}

$search = "%".trim($_GET['experience'])."%";

$dbFile = 'compras-e-vendas.sqlite';
$dsn = 'sqlite:'.$dbFile;
$username = '';
$password = '';
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    exit();
}

$sth = $db->prepare("SELECT * FROM experiences WHERE title LIKE :title");
$sth->bindValue(":title", $search, PDO::PARAM_STR);
$sth->execute();
$experiences = $sth->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($experiences);