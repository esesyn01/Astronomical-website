<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Słońce</title>
        <link rel="stylesheet" href="static/css/mobilny.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1 id="start">
            Słońce
        </h1>
    
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
    
            <div class="maincontent">
                <header>
                    <h2>
                        Charakterystyka Słońca
                    </h2>
                    <p>
                        Słońce jest jedyną gwiazdą Układu Słonecznego (zdarzają się układy z większą ilością gwiazd). Jest ono okrążane przez przez planety wraz z ich księżycami oraz inne obiekty układu takie jak komety, planetoidy itp. Masa Słońca wynosi 2*10^30 kg i stanowi ponad 99% masy całego układu. Słońce na tle innych gwiazd wypada dość przeciętnie, jest gwiazdą typu żółty karzeł. Jest najjaśniejszym obiektem na ziemskim niebie.
                    </p>
                    <a target="_blank" href="/static/img_static/sun.jpg"><img src="/static/img_static/sun.jpg" width="35%"></a>
                    <h2>
                        Budowa Słońca
                    </h2>
                    <p>
                        Słońce składa się z:
                        <ul>
                            <li>
                                Jądra, w którym dochodzi do reakcji syntezy wodoru w hel, z czego gwiazda czerpie energię. Po wykorzystaniu całego wodoru gwiazda puchnie i zaczyna przetwarzać hel w coraz to cięższe pierwiastki aż reakcja ustaje a gwiazda o takiej masie zapada się. Temperatura w jądrze wynosi około 15 milionów K.
                            </li>
                            <li>
                                Strefy promienistej, czyli strefy gdzie ciepło jest przekazywane za pomocą promieniowania.
                            </li>
                            <li>
                                Strefy konwekcyjnej, czyli strefy gdzie promieniowanie jest już mniej efektywne niż konwekcja, przez co ciepło jest przewodzone konwekcyjnie.
                            </li>
                            <li>
                                Fotosfery, czyli widocznej powierzchni Słońca. Temperatura waha się między 4600 a 7600 K. Na powierzchni można zaobserować plamy słoneczne, czyli obszary o dużo niższej temperaturze względem otoczenia.
                            </li>
                            <li>
                                Atmosfery, widocznej gołym okiem jedynie podczas całkowitego zaćmienia Słońca.
                            </li>
                        </ul>
                    </p>
                </header>
            </div>
    
        <a class="back" href="#start">Kliknij tutaj, aby powrócić na początek strony</a>
        <footer>
            Copyright 2020, Wiktor Kawka<br>
            <a href="http://wikipedia.org">Źródło:wikipedia.pl</a>
        </footer>
    </body>
</html>