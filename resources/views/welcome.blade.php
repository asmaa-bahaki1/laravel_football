<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Football</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel="icon" href="/images/football.png" width="-91px">
        <!-- Styles -->
        <style>
           .deb img{
            margin-top: 35px;
            margin-left: 100px;
            width: 40px;
            float: left;
           }
           .deb1 h1{
            position: absolute;
            margin-top: 38px;
            margin-left: 180px; 
            float: left;
           }
           .foot{
            text-decoration: none;
            margin-top: -20px;
           }
           .foot img{ 
            padding: 33px;
            width: 29px;
            height: 29px;
            float: right;
           }
           .equ{
            position: absolute;
            text-decoration: none;
            margin-top: 47px;
            margin-left: 848px;
           }
           .equ h1{ 
            padding: 10px;
            font-size: 12px; 
            float: right;
           } 
           .cont video{
            float: center;
            width: 90%;
            margin-left: 60px;
            margin-top: 60px;
           }
           .equipe{
            position: absolute;
            text-decoration: none;
            margin-top: 47px;
            margin-left: 34px;
           }
           .equipe img{ 
            padding: 3px;
            height: 260px;
            cursor: pointer;
            width: 200px;
           } 
           .equipe img:hover{
           transform: scale(1.1);
           z-index: 1;
           }
           .laer{ 
            display: flex;
            position: absolute;
            text-decoration: none;
            margin-top: 277px;
            margin-left: 14px;
           }
           .laer h1{ 
            padding: 53px;
            font-size: 13px;
           } 
           .azil h2{
            margin-top: 400px;
            font-size: 19px;
            cursor: pointer;
            margin-left: 614px;
           }        
           .azil h2:hover{
            color: purple;
           } 
           .frim h2{
            margin-left: 34px;
            margin-top: 92px;
           }
           .frim img{
            margin-left: 34px;
           }
           .frim p{
            background-color: white;
            width: 259px;  
            margin-top: -424px;
            margin-left: 704px;
           }
           .tyaz{
            position: absolute;
            text-decoration: none;
            margin-top: 47px;
            margin-left: 34px;
           }
           .tyaz img{
            padding: 63px;
            width: 192px;
            height: 190px;
            cursor: pointer; 
            border-radius: 290px;
           }
           
           .tyaz1{
            position: absolute;
            text-decoration: none;
            margin-top: 297px;
            margin-left: 190px;
           }
           .tyaz1 img{
            padding: 69px;
            width: 192px;
            height: 190px;
            cursor: pointer; 
            border-radius: 290px;
           }
           
           .tyaz2{
            position: absolute;
            text-decoration: none;
            margin-top: 587px;
            margin-left: 378px;
           }
           .tyaz2 img{
            padding: 72px;
            width: 192px;
            height: 190px;
            cursor: pointer; 
            border-radius: 290px;
           }
           .deb2{
            position: absolute;
            margin-top: 48px;
            padding: -89px ;
            margin-left: 130px;
            text-decoration: none; 
           }
           .deb2 img{
    width: 20px;
    height: 20px;
           }
            </style>
    </head> 
     <body>
        <div class="deb">
            <img src="/images/football.png">
        </div>
         <div class="deb1">
            <h1>tball</h1> 
        </div>
        <div class="deb2">
            <img src="/images/bull.png">
            <img src="/images/bull.png">
        </div>
        <div class="foot"> 
            <img src="/images/juventus.png"></img>
            <img src="/images/milan.png"></img>
            <img src="/images/raja.png"></img>
            <img src="/images/real.png"></img>
            <img src="/images/wydad.png"></img>
        </div>
        <div class="equ"> 
            <h1>Juventus</h1>
            <h1>AC MILAN</h1>
            <h1>Raja Club Athletic</h1>
            <h1>Real Madrid</h1>
            <h1>Wydad Athletic Club</h1>
        </div>
        <div class="cont">
            <video controls>
                <source src="/images/ezgif.mp4" type="video/mp4"> 
            </video>
        </div>    
        <div class="equipe"> 
            <a href="/amineharit"><img src="/images/amineh.png"></img></a>
            <a href="/achrafhakimi"><img src="/images/HakimiAchraf.png"></img></a>
            <a href="/hakimziyech"><img src="/images/hakimiz.png"></img></a>
            <a href="/sofyanamrabat"><img src="/images/sofyana.png"></img></a>
            <a href="/nayefaguerd"><img src="/images/nayef.png"></img></a>
            <a href="/sofyanboufal"><img src="/images/sofyan.png"></img></a>
        </div>
        <div class="laer"> 
            <h1>AMINE HARIT</h1>
            <h1>ACHRAF HAKIMI</h1>
            <h1>HAKIM ZIYECH</h1>
            <h1>SOFYAN AMRABAT</h1>
            <h1>NAYEF AGUERD</h1>
            <h1>SOUFYAN BOUFAL</h1>
        </div>
        <div class="azil"> 
            <h2>VIEW ALL</h2>
        </div>
        <div class="frim"> 
            <h2>Equipe Du Maroc Féminine De Football</h2>
            <img src="/images/equ.png"></img>
            <p>Les Lionnes de l’Atlas disputeront deux rencontres amicales contre l’équipe de l’Ouganda les 1ᵉʳ et 5 décembre prochain, respectivement à Casablanca et Rabat. La première confrontation est programmée au stade du Père Jégo de Casablanca (19h00) alors que la seconde se jouera au Complexe Sportif Prince Héritier Moulay El Hassan de Rabat (19h00), annonce la Fédération royale marocaine de football (FRMF). A lire : Les Lionnes de l’Atlas : Défaite, mais une fierté nationale A l’occasion de cette double confrontation amicale, programmée en prévision des prochaines échéances, l’entraineur Gorge Vilda a retenu une liste de 31 joueuses pour participer à un stage de préparation du 27 novembre au 5 décembre 2023 au Complexe Mohammed VI de Salé, précise la Fédération dans un communiqué.</p>
         </div>
        <div class="tyaz"> 
            <img src="/images/elodien.png"></img>
            <img src="/images/nesrynee.png"></img>
            <img src="/images/khadijaer.png"></img>
            <img src="/images/ibtissamj.png"></img>
        </div>
        <div class="tyaz1"> 
            <img src="/images/rosellaa.png"></img>
            <img src="/images/fatimat.png"></img>
            <img src="/images/anissa.png"></img>
        </div>
        <div class="tyaz2"> 
            <img src="/images/nouhb.png"></img>
            <img src="/images/ghizlanec.png"></img>
        </div>
  </body>
</html>

