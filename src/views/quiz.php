<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Quiz</title>
        <link rel="stylesheet" href="static/css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="static/js/java.js"></script>
    </head>
    <body onload="reveal()">
        <h1>
            Quiz wiedzy o układzie słonecznym
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
                    <div id="wstep">
                        Rozwiąż poniższy quiz. Kliknij przycisk, aby rozpocząć mierzenie czasu.<br>
                        <input type="button" value="Start" onclick="g()" id="starter" class="satg">
                    </div>
                    <form id="forme" action="quizz" target="_blank">
                        1. Która planeta jest największa ze wszystkich?<br>
                        <input type="text" name="1pyt" id="pyt1"><br>
                        <div id="order">
                        <svg id="medal" width="500px" height="600px">
                            <polygon class="trapez" points="50,20 150,320 350,320 450,20"></polygon>
                            <circle class="kolo" cx="250" cy="388" r="116"></circle>
                        </svg>
                        </div>
                        2. Wybierz wszystkie planety skaliste, które nie mają księżyców.<br>
                        <input type="checkbox" name="wenus" value="wenus" id="pyt2_1">Wenus<br>
                        <input type="checkbox" name="merk" value="merk" id="pyt2_2">Merkury<br>
                        <input type="checkbox" name="nept" value="nept" id="pyt2_3">Neptun<br>
                        3.Wpisz nazwę planety, która toczy się po orbicie jak beczka.<br>
                        <input type="text" name="3pyt" id="pyt3"><br>
                        4.Merkury jest najgorętszą planetą układu słonecznego<br>
                        <label for="true">Prawda</label>
                        <input type="radio" name="4pyt" id="true_4" value="true">
                        <br>
                        <label for="false">Fałsz</label>
                        <input type="radio" name="4pyt" id="false_4" value="false"><br>
                        5.Która z planet została odkryta najpóźniej?<br>
                        <select id="pyt5">
                            <option value="1">Mars</option>
                            <option value="2">Neptun</option>
                            <option value="3">Uran</option>
                        </select><br>
                        6. Wpisz nazwę planety, która ma najokazalsze pierścienie.<br>
                        <input type="text" name="6pyt" id="pyt6"><br>
                        7.Czy Pluton jest planetą? Odpowiedź uzasadnij.<br>
                        <label for="true">Prawda</label>
                        <input type="radio" name="7pyt" id="true_7" value="true">
                        <br>
                        <label for="false">Fałsz</label>
                        <input type="radio" name="7pyt" id="false_7" value="false">
                        <br>
                        <input type="reset">
                        <input type="submit" value="Podsumuj" onclick="result()">
                        <br>
                        
                    </form>
                    <div id="result">

                    </div>
                    <div id="xyz"></div>
                    <div id="yzx"></div>
                    
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
    </body>
</html>