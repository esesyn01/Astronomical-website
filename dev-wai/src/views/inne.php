<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inne obszary układu słoncznego</title>
        <link rel="stylesheet" href="static/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="static/js/java.js"></script>
        <script>
          $(document).ready(function(){
         $("#kui").hover(function(){
            alert("To jest tekst o pasie Kuipera");
                });
            });
       </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body onload="crtkui()">
        <h1 id="start">
            Inne obszary układu słoncznego
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
                    <h2>
                        Pas asteroid
                    </h2>
                    <p>
                        Pas asteroid to pas pomiędzy orbitą Marsa a Jowisza. W tym miejscu krąży wiele milionów okruchów skalnych jak i większych planetoid. Nie powstała tutaj żadna planeta ze względu na zbyt silne wpływy grawitacji Marsa i Jowisza. Największe obiekty z tego obszaru to: Ceres, Pallas, Juno, Westa i Hygiea.
                    </p>
                    <h2 id>
                        Pas Kuipera<br>
                    </h2>
                    <p id="kui">
                        Jest to pas różnych obiektów krążących wokół słońca rozciągający się za orbitą Neptuna do około 50 j.a. Poruszają się tam planetoidy, komety, okruchy skalne i inne obiekty kosmiczne. Najbardziej znanym obiektem Pasa Kuipera jest Pluton, odkryty w 1930 roku. Został uznany za dziewiątą planetę, jednak w 2006 roku odebrano mu status planety i jest obecnie planetą karłowatą. Status odebrano mu na podstawie większej ilości obiektów odkrytych poza orbitą Neptuna. Pluton posiada kilka księżyców, największym z nich jest Charon. Inne ciekawsze obiekty to Makemake, Waruna, Quaoar, Haumea.  
                    </p>
                    <h2>
                        Dysk rozproszony
                    </h2>
                    <p2>
                        Zachodzi on na Pas Kuipera lecz rozciąga się dużo dalej, do ponad 100 j.a. Uważa się go za główne źródło komet. Największym znanym obiektem tego miejsca jest Eris.
                    </p2>
                    <h2>
                        Najdalsze obszary układu Słonecznego
                    </h2>
                    <p>
                        <ul>
                            <li>
                                Heliosfera - strefa, gdzie wiatr słoneczny przeważa nad ciśnieniem materii międzygwiezdnej
                            </li>
                            <li>
                                Szok końcowy - strefa, gdzie wiatr słoneczny zderza się z wiatrem galaktycznym i zwalnia do prędkości poddźwiękowej.
                            </li>
                            <li>
                                Płaszcz - materia z wiatru słoncznego spowolniona jest na tyle, że zagęszcza się. Kończy się heliopauzą - miejscem, gdzie wiatr słoneczny ustaje całkowicie.
                            </li>
                            <li>
                                Obłok Oorta - Liczna grupa obiektów okrążające Słońce za heliopauzą. Najbardziej znanym obiektem tego miejsca jest Sedna - o silnie wydłużonej orbicie.
                            </li>
                        </ul>
                    </p>
                    <div>
                        <div class="margin">d</div>
                        <div class="gallery">
                            <div class="gal_img"><a href="/static/img_static/cer.png" target="blank"><img src="/static/img_static/cer.png"</a></div>
                            <div class="gal_text">Ceres</div>
                        </div>
                        <div class="margin">d</div>
                        <div class="margin">d</div>
                        <div class="gallery">
                            <div class="gal_img"><a href="/static/img_static/pal.png" target="_blank"><img src="/static/img_static/pal.png"></a></div>
                            <div class="gal_text">Pallas</div>
                        </div>
                        <div class="margin">d</div>
                        <div class="margin">d</div>
                        <div class="gallery">
                            <div class="gal_img"><a href="/static/img_static/wes.jpg" target="_blank"><img src="/static/img_static/wes.jpg"></a></div>
                            <div class="gal_text">Westa</div>
                        </div>
                        <div class="margin">d</div>
                        <div class="margin">d</div>
                        <div class="gallery">
                            <div class="gal_img"><a href="/static/img_static/hyg.jpg" target="_blank"><img src="/static/img_static/hyg.jpg"></a></div>
                            <div class="gal_text">Hygiea</div>
                        </div>
                        <div class="margin">d</div>
                    </div>
                    <div class="morespace">d</div>
                    <div>
                        <div class="margin">d</div>
                        <div class="gallery">
                            <div class="gal_img"><a href="/static/img_static/oum.jpg" target="_blank"><img src="/static/img_static/oum.jpg"></a></div>
                            <div class="gal_text">Oumuamua - obiekt spoza układu Słonecznego - wizja asrtystyczna</div>
                        </div>
                        <div class="margin">d</div>
                        <div class="margin">d</div>
                        <div class="gallery">
                            <div class="gal_img"><a href="/static/img_static/plu.jpg" target="_blank"><img src="/static/img_static/plu.jpg"></a></div>
                            <div class="gal_text">Pluton</div>
                        </div>
                        <div class="margin">d</div>
                        <div class="margin">d</div>
                        <div class="gallery">
                            <div class="gal_img"><a href="/static/img_static/cha.jpg" target="_blank"><img src="/static/img_static/cha.jpg"></a></div>
                            <div class="gal_text">Charon</div>
                        </div>
                        <div class="margin">d</div>
                        <div class="margin">d</div>
                        <div class="gallery">
                            <div class="gal_img"><a href="/static/img_static/eris.jpg" target="_blank"><img src="/static/img_static/eris.jpg"></a></div>
                            <div class="gal_text">Obraz Eris z teleskopu</div>
                        </div>
                        <div class="margin">d</div>
                    </div>
                   
                </header>
            </div>

            <div class="space">
                space
            </div>
        </div>
        <br>
        <footer>
            Copyright 2020, Wiktor Kawka<br>
            <a href="http://wikipedia.org">Źródło:wikipedia.pl</a>
        </footer>
    </body>
</html>