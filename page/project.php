<!DOCTYPE html>

<html>

<head>
    <title>Chastagnac Léo</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/project.css" />
    <link rel="stylesheet" href="../css/reponsiveProject.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
    <script src="https://kit.fontawesome.com/d7d3f46c80.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
    <section id="sec-1">
        <div class="bandeau">
            <h3>Projets</h3>
            <p>Vous retrouverez ici des projets d'étudiant mais
                également des projets personnels.</p>
        </div>
    </section>

    <section id="sec-2">
        <h1>Projets de BTS SIO</h1>
        <div class="container">
            <img src="../assets/images/gsb.jpg" alt="Grapefruit slice atop a pile of other slices">
            <div class="objectif">
                <h2>Objectif : </h2>
                <p>Suite à une récente fusion le laboratoire Galaxy Swiss Bourdin souhaite uniformiser la gestion des frais professionnels des visiteurs médicaux via le développement en interne d’une
                    application WEB intitulée Gsb-AppliFrais. Cette application est destinée à la fois aux visiteurs médicaux et aux comptables en charges de leur gestion. Elle permet de saisir et d’enregistrer tous les frais
                    engagss par les visiteurs médicaux aussi bien pour l’activité directe (déplacement, restauration et hébergement) que pour les activités annexes (événementiel, conférences, autres).</p>
            </div>
            <div class="outils">
                <h2>Outils, langages et logiciels :</h2>
                <ul>
                    <li>PHP</li>
                    <li>MySql</li>
                    <li>Wamp</li>
                    <li>JavaScript</li>
                    <li>NetBians</li>
                </ul>
            </div>
        </div>
    </section>
    <section id="sec-3">
        <div class="screen">
            <div class="container">
                <input type="radio" name="slider" id="item-1" checked>
                <input type="radio" name="slider" id="item-2">
                <input type="radio" name="slider" id="item-3">
                <div class="cards">
                    <label class="card" for="item-1" id="song-1">
                        <img src="../assets/images/imggsb/1.PNG" alt="song">
                    </label>
                    <label class="card" for="item-2" id="song-2">
                        <img src="https://images.unsplash.com/photo-1559386484-97dfc0e15539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80" alt="song">
                    </label>
                    <label class="card" for="item-3" id="song-3">
                        <img src="https://images.unsplash.com/photo-1533461502717-83546f485d24?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="song">
                    </label>
                </div>
                <div class="player">
                    <div class="upper-part">
                        <div class="play-icon">
                            <svg width="20" height="20" fill="#2992dc" stroke="#2992dc" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-play" viewBox="0 0 24 24">
                                <defs />
                                <path d="M5 3l14 9-14 9V3z" />
                            </svg>
                        </div>
                        <div class="info-area" id="test">
                            <label class="song-info" id="song-info-1">
                                <div class="title">Bunker</div>
                                <div class="sub-line">
                                    <div class="subtitle">Balthazar</div>
                                    <div class="time">4.05</div>
                                </div>
                            </label>
                            <label class="song-info" id="song-info-2">
                                <div class="title">Words Remain</div>
                                <div class="sub-line">
                                    <div class="subtitle">Moderator</div>
                                    <div class="time">4.05</div>
                                </div>
                            </label>
                            <label class="song-info" id="song-info-3">
                                <div class="title">Falling Out</div>
                                <div class="sub-line">
                                    <div class="subtitle">Otzeki</div>
                                    <div class="time">4.05</div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <span class="progress"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>