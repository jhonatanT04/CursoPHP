<?php
const URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);


?>

<body>

    <head>
        <title>La proxima pelicula de marvel</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="description" content="La proxima pelicula de marvel ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <main>


        <section>
            <img
                src="<?= $data["poster_url"]; ?>"
                alt="Poster de la pelicula"
                style="border-radius: 12px;size: 100;">
        </section>
        <hgroup>
            <h3> <?= $data["title"]; ?> se estrena el <?= $data["release_date"]; ?> </h2>
                <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
                <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
        </hgroup>
    </main>
</body>






<style>
    :root {
        color-scheme: dark;
        font-family: 'Courier New', Courier, monospace;

    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;

    }
    h3,p{
        margin: 2 auto;
    }
</style>