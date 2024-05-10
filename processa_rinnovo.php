<?php
// Verifica se sono stati inviati dati dal modulo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controlla se il campo "nome" è stato compilato
    if (!empty($_POST['nome'])) {
        $nome = $_POST['nome'];
    } else {
        $nome = "N/D";
    }

    // Salva i dati in un file di log o invia un'email all'amministratore
    // Questo è solo un esempio di come i dati possono essere gestiti.
    
    // Per esempio, possiamo salvare i dati in un file di log
    $log = fopen("rinnovo_log.txt", "a");
    $data = date("Y-m-d H:i:s");
    $log_message = "Data e ora: " . $data . " - Nome: " . $nome . "\n";
    fwrite($log, $log_message);
    fclose($log);

    // Reindirizza l'utente alla pagina di conferma del rinnovo
    header("Location: conferma_rinnovo.php");
    exit();
} else {
    // Se non sono stati inviati dati tramite POST, reindirizza l'utente alla homepage o ad un'altra pagina di errore
    header("Location: index.php");
    exit();
}
?>
