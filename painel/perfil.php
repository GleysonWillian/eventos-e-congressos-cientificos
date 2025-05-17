<?php
include '../config.php';

// Verifica se o ID foi passado pela URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Prepara e executa a consulta para buscar os detalhes do participante
    $sql = "SELECT nome, email, telefone FROM participantes WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id); // "i" indica que o parâmetro é um inteiro
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $perfil = $resultado->fetch_assoc();
        $nome = htmlspecialchars($perfil['nome']);
        $email = htmlspecialchars($perfil['email']);
        $telefone = htmlspecialchars($perfil['telefone']);
    } else {
        echo "Participante não encontrado.";
        exit();
    }

    $stmt->close();
} else {
    echo "ID do participante não fornecido.";
    exit();
}

$conexao->close();
?>

<h2>Perfil do Inscrito</h2>
<p>Nome: <?php echo $nome; ?></p>
<p>Email: <?php echo $email; ?></p>
<p>Telefone: <?php echo $telefone; ?></p>