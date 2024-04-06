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
            color: #000;         
            float: left;
           }
           .cont video{
            float: center;
            width: 90%;
            margin-left: 60px;
            margin-top: 20px;
           }
           .main-wrapper h2{ 
            color: #0097d7;
            margin-left: 60px;
            margin-top: -21px;
            font-size: 51px;
           }  
           .main-wrapper h1{ 
            font-size: 31px;
            margin-left: 120px;
            margin-top: 70px;
           }  
           .main-wrapper img{
            width: 32px;
            margin-left: 400px;
            margin-top: -107px;
            position: absolute;
            }
            .wrapper{
            background-color: #203c59;
            float: right;
            margin-top: -107px;
            width: 796px;
            height: 446px;
            }
            .wrapper p{
                font-size: 21px;
                position: absolute;
                color: white;
                margin-top: -8px;
            }
            .wrapper h1{
                color: white;
                margin-top: 12px;
            }
            .stat p{
                position: absolute;
                margin-top: 45px;
                font-family: "Roboto",Helvetica,Arial,sans-serif;
                color: #fd5502;                
                font-size: 21px;
                margin-left: 33px;
                font-weight: bolder;
            }
            .stat h3{
                position: absolute;
                margin-top: 45px;
                font-family: "Roboto",Helvetica,Arial,sans-serif;
                color: #000;
                margin-left: 393px;
                font-weight: bolder;
            }
            .prno{     
            position: absolute;  
                display: flex;
            justify-content: space-around;
            align-items: center;
            text-decoration: none;
            margin-top: 159px;
                margin-left: 1px;
            }
            .prno h1{
            padding: 0 75px; 
            cursor: pointer;
            color: #0097d7;
            font-size: 21px;
            }            
            .prno1{     
                position: absolute;  
                display: flex;
                justify-content: space-around;
                align-items: center;
                text-decoration: none;
                margin-top: 190px;
                margin-left: 9px;
            }
            .prno1 h1{
                padding: 0 18px; 
                font-size: 13px;
            }
            .prno2{     
            position: absolute;  
                display: flex;
            justify-content: space-around;
            align-items: center;
            text-decoration: none;
            margin-top: 279px;
                margin-left: 77px;
            }
            .prno2 h1{
            padding: 0 75px; 
            cursor: pointer;
            color: #0097d7;
            font-size: 21px;
            }            
            .prno3{     
                position: absolute;  
                display: flex;
                justify-content: space-around;
                align-items: center;
                text-decoration: none;
                margin-top: 309px;
                margin-left: 96px;
            }
            .prno3 h1{
                padding: 0 18px; 
                font-size: 13px;
            }
            .ton{     
                position: absolute;  
                display: flex;
                justify-content: space-around;
                align-items: center;
                text-decoration: none;
                margin-top: 489px;
                margin-left: 50px;
            }
            .ton img{
                padding: 0 68px; 
                width: 273px;
                cursor: pointer;
            }
            .ton img:hover{
                transform: scale(1.1);
                z-index: 1;
            }
              

            /* Modal Styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
    overflow: hidden;
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    padding: 20px;
    text-align: center;
}

.close{
    position: absolute;
    right: 10px;
    font-size: 20px;
    margin-top: -550px;
    cursor: pointer;
}

/* Responsive Video */
iframe {
    width: 1098px;
    left: -530px;     
    margin-top: -350px;
    height: 670px;
    position: absolute;
}
.aven h1{
    font-size: 25px;
    color: black;
    letter-spacing: 0;
    top: 3699px;
    position: absolute;    
    left: 550px;
    font-family: Georgia, serif;
    transform: translate(-5%, 50%);
}
.aven2 p{
    font-size: 17px;
    color: black;
    letter-spacing: 0;
    top: 3750px;
    position: absolute;    
    left: 125px;
    font-family: Georgia, serif;
    transform: translate(-5%, 50%);
}
.aven3 h1{
    font-size: 25px;
    color: black;
    letter-spacing: 0;
    top: 3930px;
    position: absolute;    
    left: 530px;
    font-family: Georgia;
    transform: translate(-5%, 50%);
}
.aven3 img{
    position: absolute;    
    top: 4040px;
    width: 540px;
    left: 9px;
}

.naz img{
    width: 502px;
    margin-top: 158px; 
    position: absolute;    
}
.naz h1{
    margin-left: 504px;
    margin-top: 243px;
    position: absolute;    
}
.custom-btn {
 width: 130px;
 height: 40px;
    margin-left: 504px;
    margin-top: 393px;
 color: #fff;
 border-radius: 5px;
 padding: 10px 25px;
 font-family: 'Lato', sans-serif;
 font-weight: 500;
 background: transparent;
 cursor: pointer;
 transition: all 0.3s ease;
 position: relative;
 display: inline-block;
 box-shadow: inset 2px 2px 2px 0px #0097d7,
   7px 7px 20px 0px #0097d7,
   4px 4px 5px 0px #0097d7;
 outline: none;
}

.btn-1 {
 background: #0097d7;
 background: linear-gradient(0deg, #0097d7 0%, #0097d7 100%);
 border: none;
}

.btn-1:before {
 height: 0%;
 width: 2px;
}

.btn-1:hover {
 box-shadow: 4px 4px 6px 0 #0097d7,
              -4px -4px 6px 0 #0097d7, 
    inset -4px -4px 6px 0 #0097d7,
    inset 4px 4px 6px 0 #0097d7;
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
     <a href="/"><img src="/images/football.png"></a>
        </div>
         <div class="deb1">
         <a href="/"><h1>tball</h1></a>
        </div>
        <div class="deb2">
        <a href="/"><img src="/images/bull.png"></a>
        <a href="/"><img src="/images/bull.png"></a>
        </div>
         <div class="cont">
            <video controls>
                <source src="/images/But Amrabat.mp4" type="video/mp4"> 
            </video>
        </div>    
        <div class="main-wrapper"> 
            <h1>SOFYAN</h1>
            <h2>4 AMRABAT</h2>   
            <img src="/images/mlogo.png"></img>
        </div>
        <div class="wrapper"> 
            <h1>BIOGRAPHIE</h1>
            <p>né le 21 août 1996 à Huizen aux Pays-Bas, est un footballeur international marocain jouant au poste de milieu de terrain à Manchester United, prêté par l'ACF Fiorentina.<br><br>Formé au FC Utrecht, il fait ses débuts professionnels en 2014 et atteint la finale de la Coupe des Pays-Bas en 2016 . Élu meilleur talent du club, il s'engage au Feyenoord Rotterdam en 2017, remporte la Supercoupe des Pays-Bas et la Coupe des Pays-Bas en 2018. Transféré au Club Bruges, il remporte le championnat en 2020. Prêté au Hellas Vérone, il dispute une saison avant d'être transféré à l'ACF Fiorentina, club avec lequel il atteint la finale de la Coupe d'Italie et la Ligue Europa Conférence en 2023.

Il possède également la nationalité néerlandaise.<br><br>Après avoir honoré quatre sélections avec les Pays-Bas -15 ans, comme son frère Nordin Amrabat, il finit par trancher en faveur du Maroc, sélection avec laquelle il prend part à la Coupe du monde 2018, la CAN 2021, la Coupe du monde 2022 et la CAN 2023.</p>   
        </div>
        <div class="stat"> 
        <p>STATISIQUES<h3>2023/24</h3><p>
        </div>
        <div class="prno"> 
        <h1>252</h1>  
        <h1>6</h1>  
        <h1>611</h1>
        </div>
        <div class="prno1"> 
        <h1>MATCHS JOUÉS</h1>  
        <h1>MATCHS COMMENCÉS</h1>  
        <h1>MINUTES JOUÉES</h1>
        </div>
        <div class="prno2"> 
        <h1>15</h1>  
        <h1>8</h1>
        </div>
        <div class="prno3"> 
        <h1>BUTS MARQUÉS</h1>  
        <h1>PASSES DÉCISIVES</h1>
        </div>
        <div class="naz">
            <img src="/images/amrabat.png"></img>
            <h1>Maillot Maroc Sofyan Amrabat 4 Domicile<br>Coupe du Monde 2023</h1>
            <button class="custom-btn btn-1" id="opnModal" class="btn-play">VIEW VIDEO</button>
        </div>        
        <div class="ton"> 
                <img src="/images/amrabat1.png" id="openModal" class="btn-play"></img>
                <img src="/images/amrabat2.png" id="opeModal" class="btn-play"></img>
                 <img src="/images/amrabat3.png" id="opModal" class="btn-play"></img>
            
        </div> 
    <div id="videoModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModal"></span>
            <iframe id="videoFrame" src="https://www.youtube.com/embed/6woXLSo-nEA?si=aIsUBd2fP6rx6lno" frameborder="0" allowfullscreen></iframe>
        </div>
    </div> 
    <script>
        // Get elements
var openModal = document.getElementById("openModal");
var opnModal = document.getElementById("opnModal");
var closeModal = document.getElementById("closeModal");
var videoModal = document.getElementById("videoModal");
var videoFrame = document.getElementById("videoFrame");

// Open the modal
openModal.addEventListener("click", function() {
    videoFrame.src = "https://www.youtube.com/embed/mq3dgqRLYak?si=hzMcVQsI767SDj3t"; // Replace with your video's URL
    videoModal.style.display = "block";
});
opeModal.addEventListener("click", function() {
    videoFrame.src = "https://www.youtube.com/embed/_0R9YvFhsGA?si=x4dFTVTep48Qykij"; // Replace with your video's URL
    videoModal.style.display = "block";
});
opModal.addEventListener("click", function() {
    videoFrame.src = "https://www.youtube.com/embed/SpQFHA6jr_w?si=NXv9yA79VG0mAFq0"; // Replace with your video's URL
    videoModal.style.display = "block";
});
opnModal.addEventListener("click", function() {
    videoFrame.src = "https://www.youtube.com/embed/4x02_70lgzQ?si=_EPVB8Nkueb3VMcB"; // Replace with your video's URL
    videoModal.style.display = "block";
});
// Close the modal
closeModal.addEventListener("click", function() {
    videoModal.style.display = "none";
});

// Close the modal if the background is clicked
window.addEventListener("click", function(event) {
    if (event.target == videoModal) {
        videoModal.style.display = "none";
        videoFrame.src = "";
    }
});

    </script> 
</body>
</html>

        
  </body>
</html>

