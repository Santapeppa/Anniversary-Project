<!--<!DOCTYPE html>-->
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="it">
    <title>La tua Pagina Web con Sfondo Indie</title>
    <style>
        /* Imposta l'immagine come sfondo */
        body {
            background-image: url('IMM036.JPG'); /* Changed background image */
            background-size: cover;
            background-position: center;
            font-family: 'Courier New', monospace;
            color: #000; /* Changed text color to black */
            line-height: 1.6;
        }
        /* Stili per l'intestazione */
        header {
            display: none; /* Removed the header with blue background */
        }
        /* Stili per il contenitore principale */
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: transparent; /* Removed the blue background */
            border-radius: 10px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }
        /* Stili per l'elemento video */
        .container video {
            display: none; /* Nascondi il video per impostazione predefinita */
        }
        /* Stili per l'immagine GIF */
        .container img {
            width: 100%; /* Imposta la larghezza dell'immagine GIF al 100% del contenitore */
            height: auto; /* Imposta l'altezza automatica per mantenere le proporzioni */
        }
        footer {
            display: none; /* Removed the footer */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sei ormai un affezionato cliente</h2>
        <p>Dopo questi meravigliosi 4 anni, sei pronto a rinnovare il tuo contratto per altri +4?</p>
        <!-- Inserisci qui i tuoi commenti -->
        <video id="video" src="VIDEO_FILE.mp4" autoplay loop muted></video>
        <img id="gif" src="VIDEO_FRAME.gif" alt="Immagine GIF animata">
    </div>

    <script>
        // Nascondi l'immagine GIF
        document.getElementById('gif').style.display = 'none';
        
        // Cattura l'evento "caricamento completato" del video
        document.getElementById('video').addEventListener('loadeddata', function() {
            // Quando il video è stato caricato, nascondi il video e mostra l'immagine GIF
            document.getElementById('video').style.display = 'none';
            document.getElementById('gif').style.display = 'block';
        });
    </script>
</body>
</html>


  
