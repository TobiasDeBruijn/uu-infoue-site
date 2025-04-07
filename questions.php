<?php
$name = $_POST['name'];
$startTime = $_POST['startTime'];
$variantName = $_POST['variantName'];

$readEndTime = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UE/UX Research</title>

    <link type="text/css" href="style.css" rel="stylesheet"/>
    <link rel="icon" href="https://www.uu.nl/themes/custom/corp/favicon.ico" type="">
</head>
<body>
    <section>
        <h3>For english, see below</h3>

        <p>
            <strong>Nederlands</strong>
        </p>
        <p>
            Om er zeker van te zijn dat je het artikel goed hebt gelezen vragen we je de volgende controlevragen in te vullen.
            Deze controlevragen zullen in het Engels zijn.
        </p>

        <p>
            <strong>English</strong>
        </p>
        <p>
            To make sure you have read the article correctly, we ask you to fill in the following control questions.
            These control questions will be in English.
        </p>
    </section>

    <h3>Control Questions</h3>
    <form method="post" action="thankyou.php">
        <input type="hidden" name="name" value="<?php echo $name ?>">
        <input type="hidden" name="startTime" value="<?php echo $startTime ?>">
        <input type="hidden" name="readEndTime" value="<?php echo $readEndTime ?>">
        <input type="hidden" name="variantName" value="<?php echo $variantName ?>">

        <label for="question1">According to Stuart Peirson, what primarily affects our circadian rhythm?</label>
        <select id="question1" name="question1">
            <option value="a">a) The color of light</option>
            <option value="b">b) The brightness and duration of light exposure</option>
            <option value="c">c) The time of day we are exposed to light</option>
            <option value="d">d) The distance of the light source</option>
        </select>

        <label for="question2">What does Peirson suggest to help signal the body that it's time to sleep?</label>
        <select id="question2" name="question2">
            <option value="a">a) Turning off all electronic devices an hour before bed</option>
            <option value="b">b) Using blue light blocking glasses in the evening</option>
            <option value="c">c) Decreasing screen time and turning down the brightness on your phone </option>
            <option value="d">d) Avoiding exposure to any light after sunset</option>
        </select>

        <button type="submit" class="submitBtn">Klaar / Done</button>
    </form>
</body>
</html>
