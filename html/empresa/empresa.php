<?php
// Dados de conexão com o banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = "root";
$database = "db_dibu_trucks";

// Crie uma conexão com o MySQL
$conn = new mysqli($servername, $username, $password, $database);

// Verifique se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Inserindo dados na tabela empresa
$emp_nome = "Empresa D";
$emp_email = "empresa_d@example.com";
$emp_endereco = "Rua G, 987";
$emp_nuel = "90123456789012";

$sql_empresa = "INSERT INTO empresa (emp_nome, emp_email, emp_endereco, emp_nuel) VALUES (?, ?, ?, ?)";
$stmt_empresa = $conn->prepare($sql_empresa);
$stmt_empresa->bind_param("ssss", $emp_nome, $emp_email, $emp_endereco, $emp_nuel);
$stmt_empresa->execute();

if ($stmt_empresa->affected_rows > 0) {
    echo "Inserção na tabela empresa bem-sucedida.<br>";

    // Obtendo o ID da empresa recém-inserida
    $empresa_id = $stmt_empresa->insert_id;

    // Inserindo dados na tabela empresa_contacto
    $contacto = "Telefone";
    $sql_empresa_contacto = "INSERT INTO empresa_contacto (codigo_emp, contacto) VALUES (?, ?)";
    $stmt_empresa_contacto = $conn->prepare($sql_empresa_contacto);
    $stmt_empresa_contacto->bind_param("is", $empresa_id, $contacto);
    $stmt_empresa_contacto->execute();

    if ($stmt_empresa_contacto->affected_rows > 0) {
        echo "Inserção na tabela empresa_contacto bem-sucedida.<br>";
    } else {
        echo "Erro na inserção na tabela empresa_contacto: " . $stmt_empresa_contacto->error . "<br>";
    }
} else {
    echo "Erro na inserção na tabela empresa: " . $stmt_empresa->error . "<br>";
}

// Fechando a conexão com o banco de dados
$conn->close();
?>
