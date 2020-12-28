<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
    </head>
    <body>

        <section id="sec-1">
            <div class="container">
                <div class="imgMove1" data-rellax-speed="2">
                    <img src="assets/images/icons8-linux-100.png" class="img1" alt="imagedeco"/>    
                    <img src="assets/images/icon2.jpg" class="img2" alt="imagedeco"/> 
                </div>

                <div class="logo">
                    <img src="assets/images/logo.png" alt="logo" />
                </div>
                <div class="slogan">
                    <h1>De la recherche </h1><p>au</p><h1>Développement.</h1>
                </div>
                <div class="imgMove2" data-rellax-speed="8">
                    <img src="assets/images/icon3.jpg" class="img3" alt="imagedeco"/>    
                    <img src="assets/images/icon4.jpg" class="img4" alt="imagedeco"/>   
                </div>
            </div>
        </section>
        <script>
            var rellax = new Rellax('.imgMove2');
            var rellax = new Rellax('.imgMove1');
        </script>




        <section id="sec-2">
            <div class="container">
                <img src="assets/images/rubanwave.png" class="image__img" alt="banière wave"/>
                <div class="image__overlay">
                    <h1 class="title">Qui suis-je ?</h1>
                    <div class="texte">
                        <p>Je m'appelle Léo Chastagnac, j'ai 19 ans, j'habite au Beausset et je suis passionné par l'informatique et les différentes technologies qui composent ce domaine.
                            De plus je pratique la 
                            guitare en autodidacte depuis 5ans, le piano depuis 2ans et le 
                            développement personnel. Je également passionné de sport ou je
                            pratique la musculation, le street workout, le tricking et le VTT</p>
                    </div>

                </div>
            </div>
        </section>
        <section class="sec-3">
            <div class="container2">
                <!--  partie gauche!-->
                <div class="ex-Pro">
                    <h2>Expériences professionnelles</h2>  
                    <div class="experience">         
                        <div class="col-1">             
                            <div class="lieu">La Petite Provence</div>         
                            <div class="date">depuis mai 2019</div>       
                        </div>               
                        <div class="col-2">            
                            <div class="profession"><br>Contrat étudiant chez un primeur</div>     
                            <div class="details">Mise en place de la marchandise, 
                                achats auprès de grossistes et création d'un site vitrine pour l'entreprise
                                à l'aide d'un CMS.
                            </div>     
                        </div>            
                    </div>  
                    <div class="experience2">         
                        <div class="col-3">                
                            <div class="lieu">Triiptic</div>             
                            <div class="date">2020 (7 sem.)</div>          
                        </div>                 
                        <div class="col-4">        
                            <div class="profession">Stage en Développement Web </div>        
                            <div class="details">Medley d'ajout de fonctionnalité sur un site web.
                            </div>         
                        </div>          
                    </div>    
                    <div class="experience3">         
                        <div class="col-5">                
                            <div class="lieu">LBC PRO</div>             
                            <div class="date">2018 (6 sem.)</div>          
                        </div>                 
                        <div class="col-6">        
                            <div class="profession">Stage en évènementiel </div>        
                            <div class="details">Mise en place de solutions et de prestations techniques
                                pour des événements.
                            </div>         
                        </div>          
                    </div>    
                    <div class="experience6">       
                        <div class="col-7">            
                            <div class="lieu">Mairie du Beausset</div>     
                            <div class="date">2018 (6 sem.)</div> 
                        </div>            
                        <div class="col-8">         
                            <div class="profession">Stage au centre informatique de la mairie</div>             
                            <div class="details">Création du schéma réseau du Beausset, maintenant et dépannages informatiques auprès des services publics.         
                            </div>           
                        </div>       
                    </div> 
                    <div class="experience7">       
                        <div class="col-9">            
                            <div class="lieu">Dôme informatique</div>     
                            <div class="date">2017(6 sem.)</div> 
                        </div>            
                        <div class="col-10">         
                            <div class="profession">Stage d'informatique</div>             
                            <div class="details">Maintenant et dépannages informatiques auprès de clients.         
                            </div>           
                        </div>       
                    </div>
                </div>
                <!-- flèche centrale -->
                <div class="fleche">
                    <img src="assets/images/Sans titre.png" alt=""/>
                </div>
                <!--  partie droite!-->
                <div class="ex-sco">
                    <h2>Parcours scolaire</h2>  
                    <div class="experience">         
                        <div class="col-1">             
                            <div class="lieu">La Petite Provence</div>         
                            <div class="date">depuis mai 2019</div>       
                        </div>               
                        <div class="col-2">            
                            <div class="profession"><br>Contrat étudiant chez un primeur</div>     
                            <div class="details">Mise en place de la marchandise, 
                                achats auprès de grossistes et création d'un site vitrine pour l'entreprise
                                à l'aide d'un CMS.
                            </div>     
                        </div>            
                    </div>  
                </div>
            </div>
        </section>
    </body>
</html>

