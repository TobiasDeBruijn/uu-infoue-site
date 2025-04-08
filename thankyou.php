<?php

// Read in POST params
$name = $_POST['name'];
$startTime = $_POST['startTime'];
$readEndTime = $_POST['readEndTime'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$variantName = $_POST['variantName'];
$isVariantA = strcmp($variantName, "A") === 0;

$endTime = date("Y-m-d H:i:s");

// Open file
$outfileDate = date("m-d-Y H.i.s");
$outfileName = 'output/' . $name . '-' . $outfileDate . '.csv';
$outfile = fopen($outfileName, 'w') or die('Could not save results');

// Write CSV
fwrite($outfile, "Name,StartTime,ReadEndTime,EndTime,Question1,Question2,Variant\n");
fwrite($outfile, $name . "," . $startTime . "," . $readEndTime . "," . $endTime . "," . $question1 . "," . $question2 . "," . $variantName . "\n");

// Done
fclose($outfile);
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
            Dankjewel voor je deelname aan dit onderzoek. Je mag dit venster sluiten.
        </p>

        <p>
            <strong>English</strong>
        </p>
        <p>
            Thank you for participating in this study. You may close this window.
        </p>
    </section>
</body>
</html>