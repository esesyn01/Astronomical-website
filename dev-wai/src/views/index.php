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
        <h1 id="start">
            Układ Słoneczny
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
                <header>       
                <h2>Ogólna charakterystyka układu słonecznego</h2>
                <p>Układ słoneczny jest układem planetarnym składającym się ze Słońca, ośmiu planet: Merkurego, Wenus, Ziemii, Marsa, Jowisza, Saturna, Urana i Neptuna, ich księżyców oraz wielu mniejszych obiektów orbitująchych wokół Słońca. Jest to nasz macierzysty układ. Jego wiek datuje się na 4.5-5 mld lat. Powstał on wraz z narodzinami Słońca.</p>
                <img src="/static/img_static/us.jpg" width="50%">
                <br>
                <h2>
                    Położenie układu Słonecznego
                </h2>
                <p>
                    Układ Słoneczny znajduje się w spiralnej galaktyce Drogi Mlecznej, dokładniej w jej ramieniu zwanym ramieniem Oriona. Najbliżej Słońca znajduje się inny układ gwiezdny o nazwie Proxima Centauri, składający się z trzech gwiazd karłowatych: Alfa Centauri A,B i C.
                </p>
                <div id="coach" class="ui-widget">
                    <img src="/static/img_static/mw.png">
                    
                </div>
                <br>
                <a class="back" href="#start">Kliknij tutaj, aby powrócić na początek strony</a>
                </header>
            </div>
            <div class="space">
                space
            </div>
        </div>
        <footer>
            Copyright 2020, Wiktor Kawka<br>
            <a href="http://wikipedia.org">Źródło:wikipedia.pl</a>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(document).ready(function() { 
                $('#coach').resizable({
                   handles: "all"
                });
             });
        </script>
    </body>
</html>