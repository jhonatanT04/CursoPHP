<?php
define("LOGO", 'https://thumb.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/960px-PHP-logo.svg.png');
const NOMBRE = "Miguel";

$name = "juan";
$isDev = true;
$age =  20;


$output = "Hola $name";

$outputAge = match (true) {
    $age < 2 => "Eres un nene, $name",
    $age < 10 => "Eres un nino, $name",
    $age < 18 => "Eres un mayor de edad, $name",
    default => "Eres un adulto, $name"
};

$bestLeagueges = ["PHP", "Java", "Python"];
$bestLeagueges[] = "TypeScript";
$bestLeagueges[] = "Ania";

$person = [
    "name" => "Mateo",
    "isDev" => False,
    "lenaguejes" => ["PHP", "JavaScript", "Python"]
]

?>

<div>
    <?php if ($isDev): ?>
        <h2>Eres Programador</h2>
    <?php endif; ?>
</div>

<div>
    <img src="<?= LOGO ?>" alt="LOGO" width="100">
    wa
    <h1>
        <?= $output ?>
    </h1>
    <h1>
        <?= $outputAge ?>
    </h1>
</div>

<div>
    <?php foreach ($bestLeagueges as $key => $languege) : ?>
        <li> <?= $key . " " . $languege ?> </li>
    <?php endforeach ?>
</div>


<style>
    :root {
        color-scheme: light dark;

    }

    body {
        display: grid;
        place-content: center;
    }
</style>