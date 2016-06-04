<!--Ma vieuw -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Le Pendu</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>
    <section class="game">
        <div class="header">
            <h1 class="header__title"> Le mot a deviner compte <?php echo $lettersCount; ?> Letters&nbsp; : <?php echo $replacementString; ?></h1>
            <p class="header__essayez">
                Trouve le mot en moins de <?php echo MAX_TRIALS; ?> coups</h1>
            </p>
        </div>
        <div class="images">
            <img src="images/pendu<?php echo $trials; ?>.jpg" alt="<?php echo $trials."eme"; ?> image pour le jeux du pendu" />
        </div>

        <div class="container">
            <p class="container__letters">
                T’as deja choisi les lettres: <br><span><?php echo $triedLetters; ?></span>
            </p>

        <?php if($wordFound): ?>
            <p class="container__winner">
                Bravo t'as trouve
            </p>

        <?php elseif ($remainingTrials == 0): ?>
            <p class="container__lost">
                T'as perdu, le mots a trouver etait : <span><?php echo $word ?></span>
            </p>
            <br>
            <div class="container__message__lien">
                <a href="index.php">Recomence</a>
            </div>
        <?php else:?>
            <form class="container__formulaire" action="index.php" method="post"><!--Des info Cache, avec get on voit les info-->
                <legend class="formulaire__legend"> Il te reste <?php echo $remainingTrials; ?> essais pour sauver ta peau</legend>
                <div class="formulaire__choix">
                    <label for="triedLetter">Choisir ta lettre</label>
                    <select  id="triedletter" name="triedLetter"><!--ensemble dees letters-->
                        <?php foreach ($lettersArray as $letter => $status): ?>
                            <?php if($status): ?>
                                <option value="<?php echo $letter ?>"><?php echo $letter ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <input type="hidden" name="serializedLetters" value="<?php echo $serializedLetters; ?>">
                    <input type="hidden" name="triedLetters" value="<?php echo $triedLetters; ?>">
                    <input type="hidden" name="wordIndex" value="<?php echo $wordIndex; ?>">
                    <input type="hidden" name="replacementString" value="<?php echo $replacementString; ?>">
                    <input type="hidden" name="lettersCount" value="<?php echo $lettersCount; ?>">
                    <input type="hidden" name="trials" value="<?php echo $trials; ?>"><br>
                    <input type="submit" value="essayer cette lettre">
                </div>
            </form>
        <?php endif; ?>
    </div>
</section>
</body>
</html>
