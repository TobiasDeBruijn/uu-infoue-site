<?php
$name = $_POST['name'];
$startTime = date("Y-m-d H:i:s");
$variantName = $_POST['variantName'];

$isVariantA = strcmp($variantName, "A") === 0;

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
    <?php if($isVariantA): ?>
    <!-- Variant a shows a clock -->
    <div class="countdown">
        <h1 id="countdownClock"></h1>
    </div>
    <?php endif ?>

    <section>
        <h2>
            Is it true that … the blue light from night-time scrolling can stop you sleeping?
        </h2>

        <p>
            We often blame our phone’s glare for finding it difficult to fall asleep. But our expert thinks things are more complicated
        </p>

        <p>
            Struggling to nod off? It’s easy to blame the phone that’s just inches from your face and the never-ending newsfeed your thumb is busy scrolling as you lie in bed. But the idea that it’s the blue light emitted by your smartphone that’s disturbing you isn’t quite right.
            While blue or short-wavelength light (such as daylight or that emitted by tech) does affect our circadian rhythm, things are less clear cut than we often think.
            “Sleep is a complex process,” says Stuart Peirson, professor of circadian neuroscience at Oxford University.
        </p>

        <p>
            He explains that while the receptors in our eyes that tell our brain when it’s time to be awake are triggered by cells that absorb blue light,
            they’re also triggered by those that absorb longer wavelengths of light (such as red) too.
            Which means it’s not the colour of the glow that’s the problem,
            it’s the brightness and length of time we’re exposed to it for – and the screens of our phones are actually pretty dim.
        </p>
        <p>
            Daylight is 1,000 times brighter than the average light emitted by a phone. Room lighting is, on average,
            10 times brighter. (This is why turning off the big light as you wind down in the evening can help you feel sleepier.)
        </p>
        <p>
            “Technically, blue light from smartphones can affect sleep,” says Peirson.
            “But these effects are small unless you are using your phone for hours with a bright screen and
            already have sleep problems.” In lab studies at Harvard University, even around four hours of light exposure from an e-reader
            at full strength had only a relatively small effect: a 10-minute delay in sleep onset. In fact, your sleep
            is more likely to be affected by the kinds of content you’re consuming.
        </p>
        <p>
            If you think light is impacting your sleep, Peirson says you don’t need to spend money on special
            “blue-light blocking” glasses. Instead, he recommends decreasing your screen time and turning down the brightness on your phone.
        </p>
    </section>
    <form method="post" action="questions.php">
        <input type="hidden" name="name" value="<?php echo $name ?>">
        <input type="hidden" name="startTime" value="<?php echo $startTime ?>">
        <input type="hidden" name="variantName" value="<?php echo $variantName ?>">

        <button type="submit" name="Submit" class="submitBtn">Klaar / Done</button>
    </form>
</body>

<?php if($isVariantA): ?>
<script>
    // Get today's date and time
    const now = new Date().getTime();

    const duration = 2.5;
    const countDownDate = new Date(now + duration * 60000);

    // Update the count-down every 1 second
    let x = setInterval(function () {
      const timerNow = new Date().getTime();

      // Find the distance between now and the count-down date
      const distance = countDownDate - timerNow;

      // Time calculations for days, hours, minutes and seconds
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("countdownClock").innerHTML = minutes + "m " + seconds + "s ";

      // If the count-down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdownClock").innerHTML = "EXPIRED";
      }
    }, 1000);
</script>
<?php endif; ?>
</html>
