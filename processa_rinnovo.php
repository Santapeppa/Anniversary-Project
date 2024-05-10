<?php
// Verifica se sono stati inviati dati dal modulo
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sanitizzazione e validazione dei dati inviati dal modulo
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : "N/D";
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : "N/D";

    // Salva i dati in un file di log o invia un'email all'amministratore
    // Questo è solo un esempio di come i dati possono essere gestiti.
    
    // Per esempio, possiamo salvare i dati in un file di log
    $log = fopen("rinnovo_log.txt", "a");
    if ($log) {
        $data = date("Y-m-d H:i:s");
        $log_message = "Data e ora: " . $data . " - Nome: " . $nome . ", Email: " . $email . "\n";
        fwrite($log, $log_message);
        fclose($log);
    } else {
        // Gestione degli errori durante l'apertura del file di log
        error_log("Errore nell'apertura del file di log", 0);
    }

    // Reindirizza l'utente a una pagina di conferma o ringraziamento
    header("Location: conferma_rinnovo.php");
    exit();
} else {
    // Se non sono stati inviati dati tramite POST, reindirizza l'utente alla homepage o ad un'altra pagina di errore
    header("Location: index.php");
    exit();
}
?>
