<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP 8 App</title>
    <link rel="stylesheet" href="/assets/css/bulma.min.css">
</head>

<body>
    <section class="hero is-medium is-info is-bold">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    Exercice PHP 8
                </h1>
            </div>
        </div>
    </section>

    <section>
        <h2 class="title has-text-centered">Exercice 1</h2>
        <?php require_once('./helloword.php'); ?>
        <p class="has-text-centered"><? echo helloWorld(); ?></p>
    </section>

    <section>
        <h2 class="title has-text-centered">Exercice 2</h2>
        <?php require_once('./revers.php');
        $text = "cool"; ?>
        <p class="has-text-centered"><?= reverseString($text) ?></p>
    </section>

    <section>
        <h2 class="title has-text-centered">Exercice 3</h2>
        <?php require_once('./robot.php');
        $robot = new Robot(); ?>
        <p class="has-text-centered"><?= $robots ?></p>
    </section>

    <section>
        <h2 class="title has-text-centered">Exercice 4</h2>
        <?php require_once('./maskify.php');
        $cc = "1234-5678-9012"?>
        <p class="has-text-centered"><?= maskify($cc) ?></p>
    </section>

    <section>
        <h2 class="title has-text-centered">Exercice 4</h2>
        <?php require_once('./clock.php');
        $time= new Clock();
        // $time2 = $time.addMin(1);
        // $time3 = $time.subMin(1);?>        
        <p class="has-text-centered">The time is <?= $time ?></p>
        <!-- <p class="has-text-centered">The time is <?= $time2 ?></p>
        <p class="has-text-centered">The time is <?= $time3 ?></p> -->
    </section>
</body>

</html>