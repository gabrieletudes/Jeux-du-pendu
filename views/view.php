<!--Ma vieuw -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Le Pendu</title>
</head>
<body>
    <div class="">
        <h1>Trouve le mot en moins de <?php echo MAX_TRIALS; ?> coups</h1>
    </div>
    <div class="">
        <p>
            Le mot a deviner compte <?php echo $lettersCount; ?> Letters&nbsp; : <?php echo $replacementString; ?>
        </p>
    </div>
    <div class="">
        <img src="images/pendu<?php echo $lettersCount; ?>.gif" alt="" />
    </div>

    <div class="">
        <p>

        </p>
    </div>
    <form class="formulaire" action="index.php" method="post"><!--Des info Cache, avec get on voit les info-->
        <fieldset>
            <legend> Il te reste x essais pour sauver ta peau</legend>
            <div class="">
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
                <input type="submit" value="essayer cette lettre">
            </div>
        </fieldset>
    </form>
</body>
</html>
