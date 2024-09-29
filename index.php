<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Badwords</title>
</head>
<body>
    <h2>Inserisci un paragrafo e la parola da censurare</h2>
    <form action="filtro.php" method="POST">
        <label for="paragraph">Paragrafo:</label><br>
        <textarea name="paragraph" id="paragraph" rows="5" cols="30" required></textarea><br><br>

        <label for="word">Parola da censurare:</label><br>
        <input type="text" name="word" id="word" required><br><br>

        <input type="submit" value="Invia">
    </form>
</body>
</html>
