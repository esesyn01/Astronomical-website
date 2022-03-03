<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Wewnętrzny Układ Słoneczny</title>
        <link rel="stylesheet" href="static/css/style.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="static/js/java.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body onload="crtbtn()">
        <h1 id="start">
            Wewnętrzny układ słoneczny
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
                        Merkury
                    </h2>
                    <p>
                        Merkury jest pierwszą planetą w kolejności od Słońca. Jest również z tych planet najmniejszą, jest mniejsza nawet od niektórych księżyców, a na jej powierzchni usianej kraterami odnotować można największe amplitudy temperatury przy powierzchni, bowiem waha się ona od ponad 400 stopni Celsjusza po stronie oświetlonej do -130 stopni po stronie zaciemnionej. Jest to też planeta o największym mimośrodzie orbity w całym układzie słonecznym. Nie posiada ona naturalnych satelitów i praktycznie nie posiada on atmosfery.
                    </p>
                    <a href="/static/img_static/mer.jpg" target="_blank"><img src="/static/img_static/mer.jpg" width="30%"></a>
                    <h2 id="wenus">
                        Wenus
                    </h2>
                    <p>
                        Wenus, niegdyś nazywana Gwiazdą Poranną lub Wieczorną, jest drugą planetą w kolejności od Słońca. Jest to najgorętsza planeta układu słonecznego, ze względu na swoją grubą atmosferę złożoną z dwutlenku węgla. Dzięki niej zbadano zjawisko efektu cieplarnianego. Atmosfera Wenus jest ponad 90 razy cięższa niż Ziemska. Jako jedyna planeta układu słonecznego ma dzień dłuższy niż rok i obraca się w przeciwną stronę. Nie posiada ona żadnego naturalnego satelity. Na tej planecie padają deszcze siarki. Jest odrobinę mniejsza od Ziemii. Jest to 3 obiekt pod względem jasności na niebie.
                    </p>
                    <a href="/static/img_static/ven.jpg" target="_blank"><img src="/static/img_static/ven.jpg" width="45%"></a>
                    <h2>
                        Ziemia
                    </h2>
                    <p>
                        Ziemia jest naszą rodzimą planetą, która jest zarazem trzecią planetą w kolejności od Słońca. Jest największa i najcięższa ze wszystkich planet skalistych. To jedyna planeta, na której odkryliśmy życie, i jedyna w układzie słonecznym która warunki niezbędne do życia posiada. Posiada 1 księżyc, prawdopodobnie został on uformowany podczas zderzenia z inną planetą na etapie formowania układu słonecznego. Posiada silną magnetosferę.
                    </p>
                    <a href="/static/img_static/zie.jpg" target="_blank"><img src="/static/img_static/zie.jpg" width="35%"></a>
                    <h2>
                        Mars
                    </h2>
                    
                    <p id="marss">
                        Mars jest 4 planetą w kolejności od Słońca. Jest sporo mniejszy od Ziemi a jego atmosfera jest bardzo rzadka. Jego czerwony kolor zawdzięcza się tlenkowi żelaza, pokrywającego całą powierzchnię Marsa. Posiada on 2 księżyce: Fobos oraz Deimos. Przypuszcza się że na jego powierzchni występowała kiedyś woda w stanie ciekłym, jednak przez brak magnetosfery jego atmosfera została wywiana przez wiatr słoneczny i temperatura spadła do średnio -63 stopni Celsjusza. Obecnie woda znajduje się tylko w postaci czap lodowych na biegunach. Na jego powierzchni występuje najwyższa góra w układzie słonecznym - Olympus Mons.
                    </p>
                    <div id="mar"></div>
                    <a href="/static/img_static/mars.jpeg" target="_blank"><img src="/static/img_static/mars.jpeg" width="35%"></a>
                    <table>
                        <tr>
                            <th>
                                Nazwa planety
                            </th>
                            <th>
                                Średnia odległość od Słońca (j.a)
                            </th>
                            <th>
                                Okres obiegu wokół Słońca 
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
                                Merkury
                            </td>
                            <td>
                                0,387
                            </td>
                            <td>
                                88 dni
                            </td>
                            <td>
                                58 dni 15h
                            </td>
                            <td>
                                2439
                            </td>
                            <td>
                                0,055
                            </td>
                            <td>
                                0
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Wenus
                            </td>
                            <td>
                                0,723
                            </td>
                            <td>
                                224 dni 
                            </td>
                            <td>
                                243 dni
                            </td>
                            <td>
                                6051
                            </td>
                            <td>
                                0,811
                            </td>
                            <td>
                                0
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ziemia
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                365 dni
                            </td>
                            <td>
                                24h
                            </td>
                            <td>
                                6370
                            </td>
                            <td>
                                1
                            </td>
                            <td>
                                1
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Mars
                            </td>
                            <td>
                                1,523
                            </td>
                            <td>
                                1,881 roku
                            </td>
                            <td>
                                24h 37 min
                            </td>
                            <td>
                                3390
                            </td>
                            <td>
                                0,107
                            </td>
                            <td>
                                2
                            </td>
                        </tr>
                    </table>
                    <br>
                    <div id="draggable" class="ui-widget-content">
                        <p>Wszystkie planety skaliste są obiektem intesywnych badań misji kosmicznych, planowane są również misje załogowe na Marsa.</p>
                      </div>
                    <a href="#wenus">Kliknij, aby wrócić do Wenus</a><br>
                    <a href="#start">Kliknij tutaj, aby powrócić na górę strony</a>
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
            $( function() {
              $( "#draggable" ).draggable();
            } );
            </script>
    </body>
</html>