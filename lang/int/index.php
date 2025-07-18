<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if ($password == "ghzhost") {
        $_SESSION["logged_in"] = true;
    } else {
        $error_message = "Senha incorreta.";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tradutor</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <?php if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true): ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" placeholder="Digite a senha" required>
                <button type="submit">Enviar</button>

                <?php if (isset($error_message)): ?>
                    <p class="error"><?php echo $error_message; ?></p>
                <?php endif; ?>
            </form>
        <?php else: ?>
            <form method="post" action="tr.php">
            <label for="lang">String $_LANG:</label>
            <input type="text" id="string_php" name="string_php" placeholder="Digite o String" required>

                <label for="frase_original">Frase original:</label>
                <input type="text" id="frase_original" name="frase_original" placeholder="Digite a frase">
                <button type="submit">Traduzir</button>

                <?php if (isset($error_message)): ?>
                    <p class="error"><?php echo $error_message; ?></p>
                <?php elseif (isset($translated_phrase)): ?>
                    <p><?php echo $translated_phrase; ?></p>
                <?php endif; ?>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
