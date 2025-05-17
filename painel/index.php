<?php
include '../config.php';

$sql = "SELECT id, nome FROM participantes";
$resultado = $conexao->query($sql);
?>

<h2>Lista de Inscritos</h2>
<ul>
<?php while ($linha = $resultado->fetch_assoc()) { ?>
    <li>
        <a href="perfil.php?id=<?php echo $linha['id']; ?>">
            <?php echo htmlspecialchars($linha['nome']); ?>
        </a>
    </li>
<?php } ?>
</ul>
