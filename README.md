<!-- <!DOCTYPE html> -->
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
            color: #fff; /* Changed text color to white for better contrast */
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); /* Added text shadow for better visibility */
            line-height: 1.6;
            margin: 0; /* Rimuove i margini di default */
            padding: 0; /* Rimuove i padding di default */
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
        /* Stili per il paragrafo */
        .container p {
            font-size: 1.2rem; /* Aumenta la dimensione del testo */
            font-weight: bold; /* Rendi il testo in grassetto */
            text-align: center; /* Centra il testo */
        }
        footer {
            display: none; /* Removed the footer */
        }
        /* Stili per il link di rinnovo */
        .renewal-link {
            display: block; /* Rendi il link un blocco per occupare l'intera larghezza del contenitore */
            text-align: center; /* Centra il link */
            margin-top: 20px; /* Aggiungi spazio sopra il link */
            text-decoration: none; /* Rimuovi la sottolineatura predefinita */
            color: #fff; /* Colore del testo del link */
            font-weight: bold; /* Rendi il testo del link in grassetto */
            font-size: 1.2rem; /* Dimensione del testo del link */
        }
        /* Stili per il link divertente */
        .surprise-link {
            position: absolute; /* Posizionamento assoluto */
            top: 20px; /* Distanza dall'alto */
            left: 20px; /* Distanza da sinistra */
            width: 120px; /* Larghezza del cerchio */
            height: 120px; /* Altezza del cerchio */
            background-color: rgba(0, 123, 255, 0.7); /* Colore di sfondo azzurro semi-trasparente */
            color: #000; /* Colore del testo */
            border-radius: 50%; /* Rende il link circolare */
            display: flex; /* Usa flexbox per centrare il testo */
            align-items: center; /* Centra il testo verticalmente */
            justify-content: center; /* Centra il testo orizzontalmente */
            text-align: center; /* Centra il testo */
            text-decoration: none; /* Rimuovi la sottolineatura */
            font-family: Verdana, sans-serif; /* Font Verdana */
            font-weight: bold; /* Rendi il testo in grassetto */
            font-size: 0.8rem; /* Dimensione del testo */
            text-transform: uppercase; /* Testo maiuscolo */
            padding: 10px; /* Padding interno per il testo */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Ombra del box */
            z-index: 1000; /* Assicura che il link sia in cima */
        }
        /* Stili per il banner infografica */
        .infographic-banner {
            position: fixed; /* Posiziona il banner in modo fisso in fondo alla pagina */
            bottom: 0; /* Allinea il banner al fondo della pagina */
            left: 0; /* Allinea il banner a sinistra della pagina */
            width: 100%; /* Imposta la larghezza del banner al 100% */
            background-color: rgba(0, 0, 0, 0.7); /* Sfondo nero semi-trasparente */
            color: #fff; /* Colore del testo bianco */
            text-align: center; /* Centra il testo */
            padding: 15px 0; /* Padding sopra e sotto */
            font-size: 1.2rem; /* Dimensione del testo */
            font-weight: bold; /* Testo in grassetto */
            text-decoration: none; /* Rimuovi la sottolineatura */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sei ormai un affezionato cliente</h2>
        <p style="font-size: 1.5rem;">Dopo questi 4 meravigliosi anni, sei pronto a rinnovare il tuo contratto per altri +4?</p>
        <!-- Link alla nuova pagina -->
        <a href="pagina_rinnovo.html" class="renewal-link">CLICCA QUI PER ULTERIORI INFORMAZIONI</a>
    </div>
    <!-- Link sorpresa -->
    <a href="pagina_sorpresa.html" class="surprise-link">Mamma mia, ma sono davvero 4 anni??</a>
    <!-- Banner infografica -->
    <a href="infografiche.html" class="infographic-banner">INFOGRAFICHE</a>
</body>
</html>
