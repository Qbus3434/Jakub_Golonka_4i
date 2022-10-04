<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartkówka - Funkcje i Tablice</title>
</head>
<body>
    <!-- Jakub Golonka 4i -->
    <h1>Kartkówka - Funkcje i Tablice</h1>

    <?php
        function obliczanie($tab,$a)
        {
            for($i = 0; $i <=10; $i++)
            {
                $tab[$i] = rand(0,100);
            }
            for($i = 0; $i <=10; $i++)
            {
                echo $tab[$i] . ' ';
                if($tab[$i] == 10)
                {
                    $a++;
                }
            }
            echo '<div>Liczba 10 wystąpiła ' . $a . ' razy</div>';
        }
        $a = 0;
        $tab = [];
        obliczanie($tab,$a);
    ?>

</body>
</html>
