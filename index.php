<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badword</title>
</head>
<body>
  
Esercizio di oggi: PHP Badwords
nome repo: php-badwords
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.


    <main>
 
     <?php
        # echo "Ciao a tutti";
        #.
        #.
       
        $sentence = "Lorem ipsum dolor sit amet consectetur adipsicing. Sed corporis reiciendis nisi illo repellat a consectetur rerum deserunt eos cumque dolores eveniet, earum temporibus id debitis corrupti, iusto eum? Deleniti.
         Placeat eius iure harum totam fugit ipsam commodi, animi error, voluptatum, tempora officiis numquam ex nemo. Hic, optio, amet perferendis consequatur iusto explicabo aspernatur vel saepe error voluptatibus quidem labore.
         Minus impedit libero vitae atque quibusdam voluptate odio excepturi in porro.";
        echo strlen($sentence);
        // echo 'il testo : {$testo}  è lungo'  strlen($testoLenght) 'caratteri.'; 
        echo ' caratteri  contiene il seguente testo:  '; 
        // parola chiave *** asterisco

        $testoast = $_GET['word'];
        $testosentenceast= str_replace ($testoast, '***', $sentence);
       
     ?>
       <p><?php  echo $testosentenceast?></p>
    </main>

</body>
</html>


