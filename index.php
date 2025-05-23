<?php

$fir = new FilesystemIterator("output/", FilesystemIterator::SKIP_DOTS);
$outputCount = iterator_count($fir);

$isVariantA = $outputCount % 2 == 0;
$variantName = $isVariantA ? "A" : "B";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UE/UX Research</title>

    <link type="text/css" href="style.css" rel="stylesheet"/>
    <link rel="icon" href="https://www.uu.nl/themes/custom/corp/favicon.ico" type="">

    <!-- Include the tracker -->
    <?php if($isVariantA): ?>
    <script src="variant_a.js" type="application/javascript"></script>
    <?php else: ?>
    <script src="variant_b.js" type="application/javascript"></script>
    <?php endif ?>
</head>
<body>
<section>
    <h3>For English, see below</h3>

    <p>
        <strong>Nederlands</strong>
    </p>
    <p>
        Lees de tekst die je zo meteen te zien krijgt. Je zal automatisch doorgaan naar de volgende pagina waar een
        aantal vragen op te zien zijn. Er zullen twee controlevragen te zien zijn en een aantal vragen over de website
        zelf.
        Deze zijn allemaal multiple choice vragen en zal je moeten invullen. Daarna kan je weer op klaar drukken en ben
        je op een Afsluitende pagina. Hier kan je je browser sluiten
        Dit onderzoek is alleen voor computergebruikers. Als je dus op je telefoon zit moet je even schakelen naar je
        laptop of computer.
    </p>
    <p>
        Door op "Begin" te klikken ga je akkoord met de volgende voorwaarden:
    </p>
    <ul>
        <li>Deelname aan dit onderzoek is volledig vrijwillig. Je kunt op elk moment stoppen of besluiten toch niet mee
            te doen
        </li>
        <li>Je geeft toestemming voor het gebruik van je gegevens binnen dit onderzoek.</li>
        <li>Je bent ervan op de hoogte dat je gegevens minimaal 10 jaar worden bewaard na afloop van het onderzoek.</li>
        <li>Je bevestigt dat je 16 jaar of ouder bent.</li>
    </ul>
    <p>
        Als je vragen hebt, kun je mailen naar l.vandenberg7@students.uu.nl
    </p>

    <p>
        <strong>English</strong>
    </p>
    <p> Read the text you will see shortly. You will automatically proceed to the next page, which will display a number
        of questions. There will be two control questions and several questions about the website itself. These are all
        multiple-choice questions that you will need to answer. After that, you can click "Done" and you will arrive at
        a final page. From there, you can close your browser. This study is only for computer users. So if you're on
        your phone, please switch to your laptop or computer. </p>
    <p> By clicking "Start", you agree to the following terms: </p>
    <ul>
        <li>Participation in this study is completely voluntary. You can stop at any time or decide not to
            participate.
        </li>
        <li>You give consent for your data to be used in this study.</li>
        <li>You are aware that your data will be stored for at least 10 years after the study ends.</li>
        <li>You confirm that you are 16 years old or older.</li>
    </ul>
    <p> If you have any questions, you can email l.vandenberg7@students.uu.nl </p>
</section>

<form method="post" action="article.php">
    <input type="hidden" name="variantName" value="<?php echo $variantName ?>"

    <label for="name">Naam / Name</label>
    <input type="text" name="name" required id="name"/>

    <button type="submit" class="submitBtn">Begin</button>
</form>
</body>
</html>