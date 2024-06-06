<?php
// Verifique se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $supervCodigo = $_POST["superv_codigo"];
    $supervNome = $_POST["superv_nome"];
    $supervEndereco = $_POST["superv_endereco"];

    $servername = "localhost:3306";
    $username = "root";
    $password = "123456";
    $dbname = "db_dibu_trucks";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }


    $sql = "INSERT INTO supervisor (codigo, nome, endereco) VALUES ('$supervCodigo', '$supervNome', '$supervEndereco')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conn->error;
    }

    $conn->close();
}
?>
