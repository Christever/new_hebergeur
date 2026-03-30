<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
    <header>
        <a href="../">
            <span>ShareFILES</span>
        </a>
    </header>
    <section>
        <h1>
            <i class="fas fa-paper-plane"></i>
        </h1>

        <form method="post" action="../src/upload.php" enctype="multipart/form-data">
            <p>
                <label class="text-lg text-center mb-2" for="image">Sélectionnez votre fichier</label>
                <input type="file" name="image" id="image">
            </p>
            <p id="send">
                <button type="submit">
                    Envoyer
                    <i class="fas fa-long-arrow-alt-right"></i>
                </button>
            </p>
        </form>
    </section>
</body>

</html>