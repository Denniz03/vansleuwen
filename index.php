<?php

    if (!empty($_GET['title'])) { $title = $_GET['title']; } else { $title = 'home'; };
    if (!empty($_GET['nightmode'])) { $nightmode = $_GET['nightmode']; } else { $nightmode = 'no'; };

?>
<htmL>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-xVVam1KS4+Qt2OrFa+VdRUoXygyKIuNWUUUBZYv+n27STsJ7oDOHJgfF0bNKLMJF" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Autorijschool van Sleuwen</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        <meta name="apple-touch-icon" href="favicon.png"/>
        <link rel="shortcut icon" sizes="128x128" href="favicon.png">
        <?php if($nightmode == 'yes') { ?>
        <style>
            :root{
                --backgroundColor: #000000ee;
                --topColor: ;
                --menuColor: #ffffff11;
                --submenuColor: #000000;
                --headerColor: #e24c0011;
                --mainColor: ;
                --mainHover: #ffffff11;
                --footerColor: ;
                --borderColor: #ffffff11;
                --borderHover: #ffffff33;
                --mainText: #ffffffaa;
                --subText: #ffffff33;
                --labelColor: var(--backgroundColor);
            }
        </style>
        <?php } else { ?>
        <style>
            :root{
                --backgroundColor: #ffffff;
                --topColor: ;
                --menuColor: #e24c00;
                --menuText: #FFFfff;
                --submenuColor: #ffffff;
                --headerColor: #FFCB7F33;
                --mainColor: ;
                --mainHover: #00000011;
                --footerColor: ;
                --borderColor: #00000011;
                --borderHover: #00000022;
                --mainText: #000000aa;
                --subText: #00000033;
                --labelColor: var(--backgroundColor);
            }
        </style>
        <?php } ?>
        <style>
            :root {
                --overlayColor: #00000022;
                --shadowColor: #00000044;

                --borderRadius: 10px;
                --border: 0px solid var(--borderColor);
                --boxShadow: 0px 2px 0px var(--shadowColor);

                --accentColor: #e24c00;
                --accentLight: #FFCB7F;
                --accentDark: #630000;
                --accentHover: var(--accentLight);
                --accentText: #FFCB7F;

                --padding: 10px;
                --width: 800px;
            }
            * {font-family: 'Calibri'; font-size: 1rem; color: var(--mainText)}
            html, body {margin: 0px; padding: 0px}
            body {background: var(--backgroundColor); background-image: url('images/winter-main.png'); background-repeat: repeat; display: flex; flex-direction: column}
            a, a * {text-decoration: none; color: var(--accentColor)}
            a:hover {color: var(--accentHover); mouse-pointer: hand}
            table {border-collapse: collapse}
            th:not(:last-child), td:not(:last-child) {padding-right: var(--padding)}
            tr:first-child {pointer-events: none}
            tr:hover {background: var(--mainHover)}


            #overlay {display: none; position: fixed; top: 0; height: 100%; width: 100%; background: var(--overlayColor); backdrop-filter: blur(5px); z-index: 10}
            #top {background: var(--topColor)}
            #menu {background: var(--menuColor); overflow: hidden}
            #header {background: var(--headerColor)}
            #main {background: var(--mainColor); flex-grow: 1}
            #footer {background: var(--footerColor); background-image: url('images/winter-bottom.png')}
            #menu, .submenu, .copyright {border: var(--border); border-radius: var(--borderRadius); box-shadow: var(--boxShadow)}

            .content {margin: 0px auto; padding: var(--padding); width: var(--width); overflow: hidden}
            .fixed {overflow-y: hidden}
            .hidden {display: none}

            #top-logo .article-media {height: 80px; background-size: contain; background-repeat: no-repeat; background-position: center}

            #header .content .article-media {}
            #header img {position: absolute; z-index: 1}
            #header img.active {z-index: 3}

            .mobile-menu-chevron {padding-top: 2px; float: right; transition: 0.2s}
            #menu .fa-rotate-180 {margin-right: var(--padding)}
            #menu .menu-list {display: block}
            #menu .menu-button {padding: calc(var(--padding) * 2); display: inline; width: auto; float: left}
            .menu-button, .menu-button * {color: var(--menuText)}
            .menu-button:hover, .menu-button:hover i, .active * {color: var(--accentText)}
            #menu .menu-button:hover {background: var(--mainHover)}
            #menu .menu-button i {padding-right: var(--padding)}
            #menu .admin-button {float: right}
            #menu .mobile-menu {display: none}
            #menu .mobile-menu:first-letter {text-transform: capitalize}

            #menu .submenu {display: none; position: absolute; width: 250px; background: var(--submenuColor); overflow: hidden; z-index: 12}
            #menu .submenu .user-media, #menu .submenu .article-title, #menu .submenu .article-subtitle {text-align: center; pointer-events: none}
            #menu .submenu .user-media i {padding: 0px; width: 150px; height: 150px; border: 1px solid var(--borderColor)}
            #menu .submenu .article-title {padding-top: 0px; padding-bottom: 0px}
            #menu .submenu .article-subtitle {padding-top: 0px; color: var(--subText)}
            #menu .submenu .menu-button {width: calc(100% - (var(--padding) * 4))}
            #menu .submenu .menu-button, #menu .submenu .menu-button * {color: var(--mainText)}
            #menu .submenu .menu-button:hover, #menu .submenu .menu-button:hover * {color: var(--accentColor)}
            #menu .submenu hr {margin: 0px; padding: 0px calc(var(--padding) * 2); border: 0.5px solid var(--borderColor)}

            .user-media {text-align: center; background-repeat: no-repeat; background-position: center;}
            .user-media i {border-radius: 50%; background-size: contain; background-repeat: no-repeat; background-position: center;}
            .company-media i {border-radius: var(--borderRadius); background-size: contain}
            .main-title {display: none; font-size: 1.4rem; color: var(--accentColor)}
            .main-title:first-letter {text-transform: capitalize}
            .article {padding: var(--padding)}
            .article-title:first-letter, .article-subtitle:first-letter, .article-text:first-letter {text-transform: capitalize}
            .article-media {}
            #header .article-media img, #main .article-media img {margin-bottom: var(--padding);border-radius:var(--borderRadius); width: calc(var(--width) - (2 * var(--padding))); background-size: contain; background-repeat: no-repeat; background-position: center}
            .article-title {font-size: 1.2rem; color: var(--accentColor)}
            .article-subtitle, th {font-size: 0.8rem; color: var(--subText); padding-bottom: var(--padding)}
            .article-text {position: relative}
            .article-text i {margin-right: var(--padding); width: 20px; text-align: center; .color: var(--accentColor); font-size: 0.8rem}
            .article-buttons {margin-left: 150px}
            .article-button {margin-right: var(--padding); padding: var(--padding); display: inline-block; width: calc(50% - (var(--padding) * 2) - 7px); background: var(--mainColor); color: var(--accentColor); border: 1px solid var(--accentColor); border-radius: var(--borderRadius); box-shadow: none}
            .article-button:hover {background: var(--mainHover); color: var(--accentHover); box-shadow: var(--boxShadow)}
            .article-button:last-child {margin-right: 0px}
            .submit {background: var(--accentColor)}
            .submit, .submit i {color: var(--backgroundColor)}
            .submit:hover {background: var(--accentHover); color: var(--backgroundColor)}
            .edit {position: absolute; margin-left: -75px; margin-top: 250px; width: 1rem; height: 1rem; border-radius: 50%}

            .admin .article-text {display: none}
            .admin th, .admin td {width: 1rem; text-align: left}
            .admin th:nth-child(n+5) {text-align: center}
            .admin th:nth-child(2), .admin td:nth-child(2) {width: 100%}
            .admin th:nth-child(n+3):nth-child(-n+4), .admin td:nth-child(n+3):nth-child(-n+4) {min-width: 100px}
            .admin .fa-toggle-on {color: var(--accentColor)}
            .admin .fa-toggle-on.fa-rotate-180 {opacity: 0.5}
            .fa-toggle-off {opacity: 0}
            .admin .article-subtitle {display: none}

            label {position: absolute; left: 0px; top: var(--padding); background: var(--labelColor); color: var(--subText); transition: 0.2s; z-index: 0}
            label:first-letter, input:first-letter, select:first-letter, textarea:first-letter {text-transform: capitalize}
            input, select, textarea, .textarea {position: relative; margin-left: 150px; margin-bottom: var(--padding); padding: var(--padding); width: calc(100% - 150px); background: transparent; border: 1px solid var(--borderColor); border-radius: var(--borderRadius); z-index: 1}
            input:hover, select:hover, textarea:hover, .textarea:hover {border: 1px solid var(--borderHover)}
            input:focus, select:focus, textarea:focus, .textarea:focus {border: 1px solid var(--accentColor); outline: none}
            input:valid, select:valid, textarea:valid, .textarea:valid {background: var(--mainColor)}

            #main .user-media .user-photo {width: 300px; height: 300px; border: 1px solid var(--borderColor)}
            #main .company-media .company-photo {margin-left: 150px; width: calc(100% - 150px); height: 160px; border: 1px solid var(--borderColor)}

            #footer-content {display: flex; flex-wrap: wrap; justify-content: space-around;}
            #footer .article {flex-grow: 0}
            #footer .article * {font-size: 0.8rem}
            #footer .article-subtitle {display: none}
            #footer .copyright {flex: 0 0 var(--width); text-align: center; background: var(--menuColor); color: var(--menuText)}
            #footer .copyright a {color: var(--accentText)}
            #footer .copyright .article-text {padding: var(--padding); color: var(--menuText)}

            @media screen and (max-width: 800px){

                :root {
                    --padding: 7.5px;
                    --width: calc(100% - (var(--padding) * 2));
                }

                #top-logo .article-media {margin: -10px; height: 40px}

                #menu .mobile-menu {display: block; width: var(--width)}
                #menu .menu-list {display: none}
                #menu .menu-button {width: calc(var(--width) - var(--padding))}
                #menu .admin-button {float: left}

                #menu .admin-menu {position: fixed; left: var(--padding); right: var(--padding); bottom: var(--padding); width: var(--width)}
                #menu .submenu .user-media i {width: 75px; height: 75px}

                .content {width: var(--width)}
                .article-buttons {margin-left: 0px}
                .article-button {}
                .edit {position: absolute; margin-left: -37px; margin-top: 115px; width: 1rem; height: 1rem; border-radius: 50%}
              
                .admin th:nth-child(n+3):nth-child(-n+4), .admin td:nth-child(n+3):nth-child(-n+4) {display: none}


                label {left: var(--padding)}
                input, select, textarea, .textarea {margin-left: 0px; width: 100%}
                input:focus + label, select:focus + label, textarea:focus + label, .textarea:focus + label {padding: 0px 3px; color: var(--accentColor); top: -6px; left: var(--padding); font-size: 0.6rem; transform: 0.2s; z-index: 1}
                input:valid + label, select:valid + label, textarea:valid + label, .textarea:valid + label {padding: 0px 3px; color: var(--accentColor); top: -6px; left: var(--padding); font-size: 0.6rem; transform: 0.2s; z-index: 1}

                #main .user-media .user-photo {width: 150px; height: 150px}
                #main .company-media .company-photo {width: 100%; height: 50px}

                #footer .article * {font-size: 0.6rem}

            }

        </style>
        <script>
            $(document).ready(function(){
                // overlay
                $("#overlay").click(function(){
                    $("#overlay").toggle();
                    $("body").toggleClass("fixed");
                    $(".submenu").hide();
                });
                // icon hover
                $('li').hover(function(){
                    $(this).children('i').toggleClass('far');
                    $(this).children('i').toggleClass('fas');
                });

                // header
                function headerResize() {
                    $('#header .content .article').css({height: $('#header img').height()});
                };
                headerResize();
                $(window).resize(function(){headerResize();});
                function cycleImages() {
                    var $active = $('#header .active');
                    var $next = ($active.next().length > 0) ? $active.next() : $('#header img').first();
                    $next.css('z-index', 2);
                    $active.fadeOut(1500, function(){
                        $active.css('z-index', 1).show().removeClass('active');
                        $next.css('z-index', 3).addClass('active');
                    });
                };
                setInterval(cycleImages, 4000);
            });
        </script>
    </head>
    <body>
        <div id="overlay"></div>
        <div id="top">
            <div id="top-content" class="content">
                <div class="article">
                    <div id="top-logo">
                        <div class="article-media" style="background-image: url('images/logo.png')"></div>
                    </div>
                </div>
                <div class="article">
                    <div id="top-search"></div>
                </div>
                <div id="menu">
                    <a onclick="$(this).next().slideToggle(); $(this).children('.mobile-menu-chevron').toggleClass('fa-rotate-180');" id="mobile-menu" class="mobile-menu menu-button"><i class="far fa-bars"></i><?= $title ?><i class="far fa-chevron-down mobile-menu-chevron"></i></a>
                    <div class="menu-list" id="menu-list">
                        <a href="?title=home" <?php if($title=='home'){echo 'class="active"';}?>><li class="menu-button"><i class="<?php if($title=='home'){echo'fas';}else{echo'far';}?> fa-home"></i>Home</li></a>
                        <a href="?title=agenda" <?php if($title=='agenda'){echo 'class="active"';}?>><li class="menu-button"><i class="<?php if($title=='agenda'){echo'fas';}else{echo'far';}?> fa-calendar-alt"></i>Agenda</li></a>
                        <a onclick="$(this).next().toggle().css({top: $(this).offset().top + $(this).children().outerHeight(), left: $(this).children().offset().left}); $('#overlay').fadeToggle();"><li class="menu-button"><i class="far fa-shopping-cart"></i>Producten</li></a>
                        <div class="submenu" id="producten-menu">
                            <a href="?title=computers"><li class="menu-button"><i class="far fa-laptop"></i>Computers</li></a>
                            <a href="?title=meubels"><li class="menu-button"><i class="far fa-hammer"></i>Meubels</li></a>
                        </div>
                        <a href="?title=contact" <?php if($title=='contact'){echo 'class="active"';}?>><li class="menu-button"><i class="<?php if($title=='contact'){echo'fas';}else{echo'far';}?> fa-info-circle"></i>Contact</li></a>
                        <a <?php if($title=='admin'){echo 'class="active"';}?> onclick="$(this).next().toggle(); $('#overlay').fadeToggle(); $('body').toggleClass('fixed'); if ($(window).width() >= 800){$(this).next().css({top: $(this).offset().top + $(this).children().outerHeight(), left: $(this).children().offset().left + $(this).children().outerWidth() - 250+'px'});}"><li id="admin-button" class="menu-button admin-button"><i class="<?php if($title=='admin'){echo'fas';}else{echo'far';}?> fa-user"></i>Admin</li></a>
                        <div class="submenu admin-menu">
                            <li class="menu-button user-media"><i style="background-image: url('photos/nick.jpg')" class="far fa-"></i>&nbsp;</li>
                            <li class="menu-button article-title"><i class="far fa-"></i>Nick de Bever</li>
                            <li class="menu-button article-subtitle"><i class="far fa-"></i>nick@autorijschoolvansleuwen.nl</li>
                            <hr class="menu-button">
                            <a href="?title=Account gegevens"><li class="menu-button"><i class="far fa-user-edit"></i>Account gegevens</li></a>
                            <a href="?title=Bedrijf gegevens"><li class="menu-button"><i class="far fa-copyright"></i>Bedrijf gegevens</li></a>
                            <a href="?title=Website beheren"><li class="menu-button"><i class="far fa-edit"></i>Website beheren</li></a>
                            <hr class="menu-button">
                            <a href="?title=Afmelden"><li class="menu-button"><i class="far fa-sign-out"></i>Afmelden</li></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (!($title == 'Account gegevens' || $title == 'Bedrijf gegevens' || $title == 'Website beheren')) { ?>
        <div id="header">
            <div id="header-content" class="content">
                <div class="article">
                    <div class="article-media">
                        <?php
                        $images = glob("headers/*.jpg");

                        foreach($images as $image) {
                            if ($image === reset($images)) {
                            	echo '<img class="active" src="headers/watermark.png" style="background-image: url(\''.$image.'\')">';

                            } else {
                            	echo '<img class="hidden" src="headers/watermark.png" style="background-image: url(\''.$image.'\')">';
                            };
                        };
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div id="main">
            <div id="main-content" class="content">
                <?php if ($title=='Account gegevens') { ?>
                <div class="article">
                    <div class="main-title">Bewerken</div>
                </div>
                <div class="article">
                    <div class="article-media user-media"><i style="background-image: url('photos/nick.jpg')" class="far fa- user-photo"></i><a href="" class="article-button submit edit"><i class="far fa-pen"></i></a></div>
                    <div class="article-title"><?= $title ?></div>
                    <div class="article-subtitle">&nbsp;</div>
                    <div class="article-text"><input type="text" name="name" required value=""><label>naam</label></div>
                    <div class="article-text"><input type="text" name="address" required value=""><label>adres</label></div>
                    <div class="article-text"><input type="text" name="zip" required value=""><label>postcode</label></div>
                    <div class="article-text"><input type="text" name="city" required value=""><label>plaats</label></div>
                    <div class="article-text"><input type="text" name="phone" required value=""><label>telefoon</label></div>
                    <div class="article-text"><input type="text" name="mail" required value=""><label>email</label></div>
                    <div class="article-text"><input type="text" name="username" required value=""><label>gebruikersnaam</label></div>
                    <div class="article-text"><input type="text" name="password" required value=""><label>wachtwoord</label></div>
                    <div class="article-text"><select type="text" name="active" required value="">
                        <option value="yes">Ja</option>
                        <option value="no">Nee</option>
                    </select><label>actief</label></div>
                    <div class="article-text"><select type="text" name="admin" required value="">
                        <option value="yes">Ja</option>
                        <option value="no">Nee</option>
                    </select><label>admin</label></div>
                    <div class="article-buttons"><a href="" class="article-button submit">Opslaan</a><a href="" class="article-button">Annuleren</a></div>
                </div>
                <?php } elseif ($title=='Bedrijf gegevens') { ?>
                <div class="article">
                    <div class="main-title">Bewerken</div>
                </div>
                <div class="article">
                    <div class="article-media user-media"><i style="background-image: url('images/logo.png')" class="far fa- user-photo"></i><a href="" class="article-button submit edit"><i class="far fa-pen"></i></a></div>
                    <div class="article-title"><?= $title ?></div>
                    <div class="article-subtitle">&nbsp;</div>
                    <div class="article-text"><input type="text" name="name" required value=""><label>naam</label></div>
                    <div class="article-text"><input type="text" name="address" required value=""><label>adres</label></div>
                    <div class="article-text"><input type="text" name="zip" required value=""><label>postcode</label></div>
                    <div class="article-text"><input type="text" name="city" required value=""><label>plaats</label></div>
                    <div class="article-text"><input type="text" name="state" required value=""><label>provincie</label></div>
                    <div class="article-text"><input type="text" name="country" required value=""><label>land</label></div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Contact gegevens</div>
                    <div class="article-subtitle">&nbsp;</div>
                    <div class="article-text"><input type="text" name="phone" required value=""><label>telefoon</label></div>
                    <div class="article-text"><input type="text" name="mail" required value=""><label>email</label></div>
                    <div class="article-text"><input type="text" name="facebook" required value=""><label>facebook</label></div>
                    <div class="article-text"><input type="text" name="instagram" required value=""><label>instagram</label></div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Bank gegevens</div>
                    <div class="article-subtitle">&nbsp;</div>
                    <div class="article-text"><input type="text" name="bank" required value=""><label>rekeningnr</label></div>
                    <div class="article-text"><input type="text" name="kvk" required value=""><label>kvk nummer</label></div>
                    <div class="article-text"><input type="text" name="btw" required value=""><label>btw nummer</label></div>
                    <div class="article-buttons"><a href="" class="article-button submit">Opslaan</a><a href="" class="article-button">Annuleren</a></div>
                </div>
                <?php } elseif ($title=='Website beheren') { ?>
                <div class="article">
                    <div class="main-title"><?= $title ?></div>
                </div>
                <div class="article admin">
                    <div class="article-media"></div>
                    <a onclick="$(this).nextAll('.article-text').fadeToggle(); $(this).children().find('i').toggleClass('fa-rotate-180')">
                        <div class="article-title">Menu's<i class="far fa-chevron-down mobile-menu-chevron"></i></div>
                    </a>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">
                        <table>
                            <tr><th>id</th><th>titel</th><th></th><th></th><th>i</th><th>h</th><th>p</th><th>a</th><th>e</th><th>d</th></tr>
                            <tr><td>1</td><td>Home</td><td></td><td></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-toggle-on fa-rotate-180"></i></td><td><i class="far fa-toggle-on fa-rotate-180"></i></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-pen"></i></td><td><i class="far fa-trash-alt"></i></td></tr>
                            <tr><td>2</td><td>Agenda</td><td></td><td></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-toggle-on fa-rotate-180"></i></td><td><i class="far fa-toggle-on fa-rotate-180"></i></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-pen"></i></td><td><i class="far fa-trash-alt"></i></td></tr>
                            <tr><td>3</td><td>Producten</td><td></td><td></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-toggle-on fa-rotate-180"></i></td><td><i class="far fa-toggle-on fa-rotate-180"></i></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-pen"></i></td><td><i class="far fa-trash-alt"></i></td></tr>
                            <tr><td>4</td><td>Contact</td><td></td><td></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-toggle-on fa-rotate-180"></i></td><td><i class="far fa-toggle-on fa-rotate-180"></i></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-pen"></i></td><td><i class="far fa-trash-alt"></i></td></tr>
                        </table>
                    </div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article admin">
                    <div class="article-media"></div>
                    <a onclick="$(this).nextAll('.article-text').fadeToggle(); $(this).children().find('i').toggleClass('fa-rotate-180')">
                        <div class="article-title">Artikelen<i class="far fa-chevron-down mobile-menu-chevron"></i></div>
                    </a>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">
                        <table>
                            <tr><th>id</th><th>titel</th><th></th><th>pagina</th><th></th><th></th><th></th><th>a</th><th>e</th><th>d</th></tr>
                            <tr><td>1</td><td>Wie ben ik?</td><td>&nbsp;</td><td>home</td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-pen"></i></td><td><i class="far fa-trash-alt"></i></td></tr>
                            <tr><td>2</td><td>Wat heb ik te bieden?</td><td>&nbsp;</td><td>home</td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-pen"></i></td><td><i class="far fa-trash-alt"></i></td></tr>
                        </table>
                    </div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article admin">
                    <div class="article-media"></div>
                    <a onclick="$(this).nextAll('.article-text').fadeToggle(); $(this).children().find('i').toggleClass('fa-rotate-180')">
                        <div class="article-title">Gebruikers<i class="far fa-chevron-down mobile-menu-chevron"></i></div>
                    </a>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">
                        <table>
                            <tr><th>id</th><th>titel</th><th></th><th>Gebruikersnaam</th><th></th><th></th><th></th><th>a</th><th>e</th><th>d</th></tr>
                            <tr><td>1</td><td>Danny Korthout</td><td>&nbsp;</td><td>Denniz03</td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-pen"></i></td><td><i class="far fa-trash-alt"></i></td></tr>
                            <tr><td>2</td><td>Max Korthout</td><td>&nbsp;</td><td>MaxiTaxi</td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-off"></i></td><td><i class="far fa-toggle-on"></i></td><td><i class="far fa-pen"></i></td><td><i class="far fa-trash-alt"></i></td></tr>
                        </table>
                    </div>
                    <div class="article-buttons"></div>
                </div>
                <?php } elseif ($title=='contact') { ?>
                <div class="article">
                    <div class="main-title"><?= $title ?></div>
                </div>
                <div class="article">
                    <div class="article-media"><!--img src="images/watermark.png" style="background-image: url('photos/02-1.jpg')"--></div>
                    <div class="article-title">Neem vrijblijvend contact met ons op</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">Samen kunnen we dan bekijken wat voor jou de beste manier is om het rijbewijs te behalen. Wij vinden het leuk om jou te leren autorijden, zodat je vlot, een zelfstandige, veilige en verantwoorde bestuurder wordt.</div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">De Rips</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">
                        <i class="far fa-map-marker-alt"></i>Van Deursenplein 11<br>
                        <i class="far fa-toggle-off"></i>5764SH De Rips<br>
                        <br>
                        <i class="far fa-phone"></i>0493 84 42 21<br>
                        <i class="far fa-toggle-off"></i>06 21 80 69 79 (Lizette)</div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Odiliapeel</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">
                        <i class="far fa-map-marker-alt"></i>Gruttostraat 12<br>
                        <i class="far fa-toggle-off"></i>5409AM Odiliapeel<br>
                        <br>
                        <i class="far fa-phone"></i>0413 27 58 80<br>
                        <i class="far fa-toggle-off"></i>06 46 34 08 99 (Francien)<br>
                        <i class="far fa-toggle-off"></i>06 52 66 52 72 (Lamb�re)<br>
                        <br>
                        <i class="far fa-registered"></i>17149935 (kvk)<br>
                    </div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Oijen</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">
                        <i class="far fa-map-marker-alt"></i>Den Bogert 3<br>
                        <i class="far fa-toggle-off"></i>5394AW Oijen<br>
                        <br>
                        <i class="far fa-phone"></i>0412 85 36 92<br>
                        <i class="far fa-toggle-off"></i>06 57 07 54 77 (Nick)<br>
                        <i class="far fa-toggle-off"></i>06 27 13 28 60 (Simone)<br>
                        <br>
                        <i class="far fa-registered"></i>63900718 (kvk)<br>
                    </div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Oss</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">
                        <i class="far fa-map-marker-alt"></i>Thorbeckestraat 88<br>
                        <i class="far fa-toggle-off"></i>5344SP Oss<br>
                        <br>
                        <i class="far fa-phone"></i>0412 63 51 41<br>
                        <i class="far fa-toggle-off"></i>06 29 02 47 79 (Peter)<br>
                        <br>
                        <i class="far fa-registered"></i>17240192 (kvk)<br>
                    </div>
                    <div class="article-buttons"></div>
                </div>


                <?php } else { ?>
                <div class="article">
                    <div class="main-title"><?= $title ?></div>
                </div>
                <div class="article">
                    <div class="article-media"><!--img src="images/watermark.png" style="background-image: url('photos/02-1.jpg')"--></div>
                    <div class="article-title">Wie zijn wij?</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">Autorijschool van Sleuwen heeft vanaf 2003 ervaring in het op een verantwoorde manier opleiden van jonge en opleiden of bijscholen van de wat oudere automobilist.<br><br>Met filialen in Odiliapeel, De Rips, Oss en nu nieuw Oijen, bent u verzekerd van een goede en betrouwbare rij-opleiding waar kwaliteit en continuiteit hoog in het vaandel staan.</div>
                    <div class="article-buttons"></div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Wat kunnen wij voor jou betekenen?</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">Wij leren jou op een vlotte maar ontspannen manier autorijden! Daarbij is er veel aandacht voor veiligheid, mentaliteit en verantwoordelijkheden in het verkeer, zodat jij je vlot, veilig en zelfstandig in het hedendaagse (hectische) verkeer kunt handhaven!</div>
                    <div class="article-buttons"></div>
                </div>
                <?php } ?>
            </div>
        </div>
        <div id="footer">
            <div id="footer-content" class="content">
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Adres</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">Den bogert 3<br>5394AW Oijen<br>Noord-brabant</div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Contact</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">06 57 07 54 77<br>06 27 13 28 60<br>oijen@vansleuwen.nl</div>
                </div>
                <div class="article">
                    <div class="article-media"></div>
                    <div class="article-title">Openingstijden</div>
                    <div class="article-subtitle">Geplaatst door: Danny Korthout op 11/12/2019</div>
                    <div class="article-text">Ma - wo Gesloten<br>Do - vr 9:00 - 16:45<br>Za - zo Gesloten</div>
                </div>
                <div class="article copyright">
                    <div class="article-text">&copy; Copyright 2019 <a href="www.denniz03.nl">Denniz03</a>. Alle rechten voorbehouden.</div>
                </div>
            </div>
        </div>
    </body>
</htmL>