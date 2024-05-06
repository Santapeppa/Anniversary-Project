# Anniversary-Project

<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La tua Pagina Web con Sfondo</title>
    <style>
        /* Imposta l'immagine come sfondo */
        body {
            background-image: url('IMG_20200620_151942.jpg');
            background-size: cover; /* per adattare l'immagine allo schermo */
            background-position: center; /* posiziona l'immagine al centro dello sfondo */
            /* Altri stili possono essere aggiunti qui */
            color: #fff; /* Cambia il colore del testo per renderlo leggibile sullo sfondo */
        }
        /* Stili per l'intestazione */
        header {
            background-color: rgba(0, 0, 0, 0.5); /* Sfondo scuro traslucido per l'intestazione */
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        /* Stili per il contenitore principale */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Sfondo bianco traslucido per il contenuto */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Ombra per evidenziare il contenuto */
        }
        /* Stili per il piè di pagina */
        footer {
            background-color: rgba(0, 0, 0, 0.5); /* Sfondo scuro traslucido per il piè di pagina */
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        /* Altri stili CSS possono essere aggiunti qui */
    </style>
</head>
<body>
    <header>
        <h1>Benvenuto Gentile Elio</h1>
    </header>
    <div class="container">
        <h2>Sei ormai un affezionato cliente</h2>
        <p>Dopo questi meravigliosi 4 anni, sei pronto a rinnovare il tuo contratto per altri +4?</p>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2024 - Spatabubi</p>
        </div>
    </footer>
</body>
</html>
