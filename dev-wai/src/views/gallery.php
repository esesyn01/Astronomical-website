<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
   <title>Układ Słoneczny</title>
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="main">
        
    </h1>
        <div class="main">
        <div class="sidebar">
                <nav>
                <?php
                  if (isset($_SESSION['iflogged']) && $_SESSION['iflogged']==true)  
                  {
                      echo"Jesteś zalogowany<br/>";
                      echo"<a href=logout>Wyloguj</a></br>";
                  }
                  else
                  {
                    echo"Nie jesteś zalogowany<br/>";
                    echo"<a href=loginform>Zaloguj się</a><br/>";
                    echo"<a href=registerform>Nie masz konta? Zarejestruj się</a><br/>";
                  }
                ?>
                <a href="index">Strona główna</a><br>
                Tematy:
                <ol type="I">
                    <li>
                        <a href="slonce">Słońce</a>
                    </li>
                    <li>
                        <div class="hd">
                        Budowa układu słonecznego:
                        <div class="budowa">
                        <ul>
                            <li>
                                <a href="wewuklad">Wewnętrzny układ słoneczny</a>
                            </li>
                            <li>
                                <a href="zewuklad">Zewnętrzny układ słoneczny</a>
                            </li>
                            <li>
                                <a href="inne">Inne obszary układu słonecznego</a>
                            </li>
                        </ul>
                        </div>
                        </div>
                    </li>
                    <li>
                        <a href="quiz" target="_blank">Quiz wiedzy o układzie słonecznym</a>
                    </li>
                </ol>
                <br><a href="gallery">Galeria zdjęć</a><br>
                1 j.a - Jednostka astronomiczna = 150 mln km (średnia odległość Ziemii od Słońca).
                </nav>
            </div>
            <div class="space">
                space
            </div>
            <div class="maincontent">
                Witaj na stronie galerii zdjęć związanych z astronomią. Możesz przesłać swoje zdjęcie w formacie .png lub .jpg, jeśli nie przekracza ono rozmiaru 1MB.<br>
                Aby przesłać zdjęcie, wypełnij <a href="imgform">formularz.</a><br>
                <div id="gal">
                    <?php
                        $images=$zdjecia;
                        foreach ($images as $zdjecie)
                        {
                            echo $zdjecie['autor'].' - '.$zdjecie['tytul'].'<br/>';
                            if ($zdjecie['private']==='true')
                            {
                                echo 'Zdjęcie jest prywatne';
                            }
                            $dir1="/static/images/".$zdjecie['wtm'];
                            $dir2="/static/images/".$zdjecie['min'];
                            echo"<a href='{$dir1}'><img src='{$dir2}'></a>";
                            echo '<br/>';
                        }
                        $pg=$page;
                        $prev=$pg-1;
                        if($pg>1)
                        {
                            echo ' <a href="?page=' . $prev . '">Poprzednia strona      </a>';
                        }
                        $pgs=$pages;
                        $next=$pg+1;
                        if ($pg<$pgs)
                        {
                            echo ' <a href="?page=' . $next . '">Nastepna strona</a>';
                        }
                    ?>
                </div>
            </div>
            <div class="space">
                space
            </div>
    </div>
    <footer>
            Copyright 2020, Wiktor Kawka<br>
            <a href="http://wikipedia.org">Źródło:wikipedia.pl</a>
        </footer>

</body>
</html>