<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $paragraph = $_POST['paragraph'];
    $word = $_POST['word'];


    echo "<p><strong>Paragrafo Originale:</strong> $paragraph</p>";
    echo "<p>Lunghezza: " . strlen($paragraph) . " caratteri</p>";


    $censored_paragraph = str_ireplace($word, '***', $paragraph);
    echo "<p><strong>Paragrafo Censurato:</strong> $censored_paragraph</p>";
    echo "<p>Lunghezza: " . strlen($censored_paragraph) . " caratteri</p>";
}
?>
