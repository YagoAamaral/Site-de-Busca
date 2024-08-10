<?php
include 'db/connection.php';

$userId = $_SESSION['user_id'];  // Assumindo que você usa sessões
$query = "SELECT * FROM favoritos WHERE user_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Meus Favoritos</title>
</head>
<body>
    <h1>Meus Favoritos</h1>
    <div id="produtos">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="produto">
                <h2><?= htmlspecialchars($row['product_name']) ?></h2>
                <img src="<?= htmlspecialchars($row['product_image']) ?>" alt="<?= htmlspecialchars($row['product_name']) ?>">
                <p>Preço: R$ <?= htmlspecialchars($row['product_price']) ?></p>
                <a href="<?= htmlspecialchars($row['product_link']) ?>">Ver produto</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
