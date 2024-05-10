<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="it">
    <title>Dettagli del Rinnovo</title>
    <style>
        /* Stili CSS rimossi per brevità */
    </style>
    <script>
        function confermaRinnovo() {
            // Esegui azioni desiderate, ad esempio invia il modulo
            document.getElementById("rinnovoForm").submit();
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Dettagli del Rinnovo</h1>
        <p class="bottom-text">Grazie per il tuo interesse nel rinnovare il tuo abbonamento! Per favore, inserisci il tuo nome e clicca sul pulsante per confermare il rinnovo.</p>
    </div>
    <form id="rinnovoForm" action="processa_rinnovo.php" method="POST">
        <input type="text" id="nome" name="nome" placeholder="Metti qui il tuo nome" required>
        <input type="submit" value="Clicca qui per confermare" onclick="confermaRinnovo()">
    </form>
</body>
</html>
