<?php

print_r($_POST);
// Verificação do formulário de registro
if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {

// Obtenção dos dados do formulário
$utilizador = $_POST["utilizador"];
$password = $_POST["password"];
$email = $_POST["email"];

} else {
  echo "Acesso inválido ao script.";
}


    // Obtenção dos dados do formulário
    $utilizador = $_POST["utilizador"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    // Conectar ao banco de dados
    $conn = mysqli_connect("localhost", "root", "", "movieflix");

    // Verificar a conexão
    if (!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    } else {
        echo "Conexão bem-sucedida!";
    }

    // Verificar se o nome de usuário já existe
    $check_utilizador_query = "SELECT * FROM utilizadores WHERE utilizador = ?";
    $check_utilizador_stmt = $conn->prepare($check_utilizador_query);
    $check_utilizador_stmt->bind_param("s", $utilizador);
    $check_utilizador_stmt->execute();
    $check_utilizador_result = $check_utilizador_stmt->get_result();

    if ($check_utilizador_result->num_rows > 0) {
        // Se o nome de usuário já existir, exiba uma mensagem de erro
        echo "<script>alert('O nome de utilizador já existe. Escolha outro.'); window.location.href = 'register.php';</script>";
    } else {
        // Se o nome de usuário não existir, continue com a inserção na tabela
        // Hash da senha (usando algoritmo bcrypt)
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Inserir os dados na tabela 'utilizadores'
        $insert_query = "INSERT INTO utilizadores (utilizador, password, email) VALUES (?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->bind_param("sss", $utilizador, $hashed_password, $email);

        if ($insert_stmt->execute()) {
            echo "Inserção bem-sucedida!";
            echo "<script>alert('Conta criada com sucesso!'); window.location.href = 'login.php';</script>";
        } else {
            echo "Erro durante a execução da consulta de inserção: " . $insert_stmt->error;
            echo "<script>alert('Ocorreu um erro ao registrar sua conta, por favor tente mais tarde.'); window.location.href = 'index.php';</script>";
        }

        // Fechar a conexão com o banco de dados
        $insert_stmt->close();
    }

    // Fechar a conexão com o banco de dados
    $check_utilizador_stmt->close();
    $conn->close();


?>