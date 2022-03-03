<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Zewnętrzny układ słoneczny</title>
        <link rel="stylesheet" href="static/css/style.css">
        <script src="static/js/java.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        
    </head>
    <body onload="crtsat()">
        <h1 id="start">
            Zewnętrzny układ słoneczny
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
                        Jowisz
                    </h2>
                    <p>
                        Jowisz jest piątą planetą w kolejności od Słońca. Jest z nich wszystkich największa, ma też największą masę, większą nawet niż wszystkich planet razem wziętych. Jego 4 największe z księżyców to:Ganimedes, Kalisto, Europa, Io. Jest planetą typu gazowego olbrzyma. Tak jak reszta planet gazowych posiada skaliste jądro, jednak jest otoczone gazami. Istnieje tam burza zwana Wielką Czerwoną plamą - trwa ona co najmniej kilkaset lat. Na Jowiszu padają deszcze diamentów. Jowisz jest nieudaną gwiazdą - zebrał zbyt małą masę by rozpocząć reakcję syntezy wodoru w hel.
                    </p>
                    <a href="/static/img_static/jow.jpg" target="_blank"><img src="/static/img_static/jow.jpg" width="35%"></a>
                    <h2>
                        Saturn
                    </h2>
                    <p id="sat">
                        Saturn jest szóstą planetą w kolejności od Słońca. Ma najbardziej widoczny pierścień ze wszystkich planet. Posiada też najwięcej księżyców w całym układzie słonecznym. Największy z nich - Tytan - jako jedyny posiada własną gęstą atmosferę, przez którą nie można obeserwować jego powierzchni. Na Saturnie na jego biegunie północnym wieje Wielka Sześciokątna Burza. Saturn ma gęstość mniejszą od wody, więc gdyby znaleźć odpowiednio duży akwen, mógłby w nim pływać.<br>
                        <input type="button" onclick="togsatbtn()" id="togsat" disabled="true" value="Wyłącz wyróżnienie" class="satg"> 
                    </p>
                    <a href="/static/img_static/sat.jpg" target="_blank"><img src="/static/img_static/sat.jpg" width="50%"></a>
                    <h2>
                        Uran
                    </h2>
                    <p id="ura">
                        Uran jest siódmą planetą w kolejności od Słońca. Został on odkryty w 1781 roku przez Williama Herschela, wcześniej był uznawany jako gwiazda. Posiada w swoim składzie wiele metanu, czemu zawdzięcza swój cyjanowy kolor. Występują na nim deszcze oraz oceany roztopionych diamentów. Jego oś obrotu jest nachylona względem płaszczyznu o 82 stopnie, co powoduje że Uran "toczy się jak beczka" po swojej orbicie. Największy z jego księżyców to Tytania.
                    </p>
                    <a href="/static/img_static/uran.jpg" target="_blank"><img src="/static/img_static/uran.jpg" width="35%"></a>
                    <h2>
                        Neptun
                    </h2>
                    <p>
                        Neptun jest planetą najdalej od Słońca. Odkryty został w 1846 roku. Jego atmosfera jest jednym z najchłodniejszych miejsc w układzie Słonecznym. Na Neptunie wieją najsilniejsze wiatry w całym Układzie Słonecznym, dochodzące do 2100km/h. Posiada on wielką burzę zwaną jako Wielka Czarna Plama. Swój niebieski kolor zawdzięcza sporej ilości metanu w atmosferze. Istnieje hipoteza, że Neptun nie mógłby osiągnąć takich rozmiarów na swojej orbicie i prawdopodbnie powstał orzed orbitą Uranu, jednak został stamtąd wyrzucony.
                    </p>
                    <a href="/static/img_static/nep.jpg" target="_blank"><img src="/static/img_static/nep.jpg" width="40%"></a>
                <table>
                    <tr>
                        <th>
                            Nazwa planety
                        </th>
                        <th>
                            Średnia odległość od Słońca (j.a)
                        </th>
                        <th>
                            Okres obiegu wokół Słońca (w latach)
                        </th>
                        <th>
                            Okres obiegu wokół własnej osi
                        </th>
                        <th>
                            Długość promienia (km)
                        </th>
                        <th>
                            Masa (w masach Ziemii)
                        </th>
                        <th>
                            Ilość księżyców
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Jowisz
                        </td>
                        <td>
                            5,203
                        </td>
                        <td>
                            11,862 lat
                        </td>
                        <td>
                            9h 53 min
                        </td>
                        <td>
                            70000 
                        </td>
                        <td>
                            317,83
                        </td>
                        <td>
                            79
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Saturn
                        </td>
                        <td>
                            9,582
                        </td>
                        <td>
                            29,457 lat
                        </td>
                        <td>
                            10h 38 min
                        </td>
                        <td>
                            58230
                        </td>
                        <td>
                            95,16
                        </td>
                        <td>
                            82
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Uran
                        </td>
                        <td>
                            19,201
                        </td>
                        <td>
                            84 lat
                        </td>
                        <td>
                            17h 15 min
                        </td>
                        <td>
                            25 362
                        </td>
                        <td>
                            14,54
                        </td>
                        <td>
                            27
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Neptun
                        </td>
                        <td>
                            30,047
                        </td>
                        <td>
                            164,79 lat
                        </td>
                        <td>
                            16h 6min
                        </td>
                        <td>
                            24 622
                        </td>
                        <td>
                            17,15
                        </td>
                        <td>
                            14
                        </td>
                    </tr>
                </table>
                <a href="#start">Kliknij tutaj, aby powrócić na górę strony</a>
                </header>
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