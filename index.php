<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Reproductor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="url"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #218838;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Generador de Reproductor de Radio</h2>
        <form action="generador.php" method="POST">
            <div class="form-group">
                <label for="nombreRadio">Nombre de la Radio</label>
                <input type="text" id="nombreRadio" name="nombreRadio" required>
            </div>
            <div class="form-group">
                <label for="urlLogo">URL del Logo</label>
                <input type="url" id="urlLogo" name="urlLogo" required>
            </div>
            <div class="form-group">
                <label for="urlStreaming">URL de Streaming</label>
                <input type="url" id="urlStreaming" name="urlStreaming" required>
            </div>
            <div class="form-group">
                <label for="numeroTelefono">Número de Teléfono (Formato: codpais+numero)</label>
                <input type="tel" id="numeroTelefono" name="numeroTelefono" required>
            </div>
            <button type="submit">Generar Reproductor</button>
        </form>
    </div>
</body>
</html>
