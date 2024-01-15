<?php

/**
 *
 * Creare una variabile con un paragrafo di testo a vostra scelta.
 * Stampare a schermo il paragrafo e la sua lunghezza.
 * Una parola da censurare viene passata dall'utente tramite parametro GET.
 * Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con
 * tre  asterischi (***) tutte le occorrenze della parola da censurare.
 *
 */


$paragraph = "Parents pay for their child's education to further increase their knowledge in business 
fields. It is his first year of high school and figures that he will undoubtedly enjoy it. He is eager 
to pass every course and be the topmost student in school. It comes to a shock that he does not 
like the workload and assumes that it will take a long time to complete. Of course, the child 
experienced what high school is and faces with loads of assignments. Studying was not the 
option and figure that plagiarizing will be the answer to all problems. Hopefully, as years go on, 
there will be less plagiarizing and more studying. Yet being careless working on assignments, 
students choose to do wrong and end up not being successful in their careers. Andrew Simmons 
claims that a student stated, I wanted good grades and I didn't want to work. (Simmons, 2018, 
para. 2). Therefore, students will continue to make this bad habit in school and will face the 
consequences of plagiarizing.";

$badword = $_GET['badword'];

$censoredParagraph = str_ireplace(" " . $badword . " ", " *** ", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>

<body>
    <h1>
        PHP Badwords
    </h1>

    <form action="./index.php" method="GEt">
        <label for="badword">Badword to be censored:</label>
        <input type="text" name="badword" id="badword">

        <button type="submit">censore!</button>
    </form>

    <h2>
        Paragraph: <br>
        Length: <?php echo strlen($paragraph); ?>
    </h2>
    <p>
        <?php echo $paragraph; ?>
    </p>
    <hr>
    <h2>
        Censored Paragraph: <br>
        Length: <?php echo strlen($censoredParagraph); ?>
    </h2>
    <p>
        <?php echo $censoredParagraph; ?>
    </p>
</body>

</html>