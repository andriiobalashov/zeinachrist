<?php
/**
 * The front-page for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https:/developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zeinachrist theme
 */
get_header();
?>
<main>
    <section class="home-hero" id="hero-section">
    <div class="container">
        <div class="row center-container">
        <div class="col-lg-7">
            <div class="hero-text-section">
            <h1 class="title-1">Agence <label class="hero-word">Créative<img class="border-image" src="<?php echo get_template_directory_uri()?>/media/textures/border.svg" alt=""></label> <br>
                & Social Média</h1>
                <div class="hero-paragraph-container">
                <div class="paragraph-1-scroll">J’accompagne les</div>
                <div class="scroller">
                    <span>
                    entrepreneurs <br/>
                    porteurs de projets <br/>
                    influenceurs <br/>
                    communiquants <br/>
                    créateurs
                    </span>
                </div>
                </div>
                <p class="paragraph-1 hero-parqarqah">à développer du contenu créatif et une communication innovante sur les réseaux sociaux</p>
            <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart hero-button">Je me lance</a>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="content-asolutly-center">
            <div class="hero-mockup">
                <img src="<?php echo get_template_directory_uri()?>/media/textures/vector.png" class="mockup-bg" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/textures/mockup.png" class="mockup" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/textures/sparkle.png" class="mockup-star-top" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/textures/sparkle.png" class="mockup-star-bottom" alt="">
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="home-hero-mobile" id="hero-section-mobile">
        <div class="container">
            <div class="row center-container">
                <div class="col-lg-12">
                <img src="<?php echo get_template_directory_uri()?>/media/textures/hero-mobile.png" class="hero-mobile-img" alt="">
                    <div class="hero-text-section">
                    <h1 class="title-1">Agence <label class="hero-word">Créative<img class="border-image" src="<?php echo get_template_directory_uri()?>/media/textures/border.svg" alt=""></label> <br>
                        & Social Média</h1>
                        <div class="hero-paragraph-container">
                        <div class="paragraph-1-scroll">J’accompagne les</div>
                        <div class="scroller">
                            <span>
                            entrepreneurs <br/>
                            porteurs de projets <br/>
                            influenceurs <br/>
                            communiquants <br/>
                            créateurs
                            </span>
                        </div>
                    </div>
                    <p class="paragraph-1 hero-parqarqah">à développer du contenu créatif et une communication innovante sur les réseaux sociaux</p>
                <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart hero-button">Je me lance</a>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="first-section" id="first-section">
    <div class="first-section-container">
        <div class="top-text">
        <p>
            à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi - à propos de moi
        </p>
        </div>
        <div class="about-text-image-section">
        <div class="image-container">
            <img src="<?php echo get_template_directory_uri()?>/media/2-a-propos/about-zeina.png" class="about-zeina-img" alt="">
            <img src="<?php echo get_template_directory_uri()?>/media/textures/sparkles.svg" class="about-star-top" alt="">
            <img src="<?php echo get_template_directory_uri()?>/media/textures/sparkles.svg" id="star-left" class="about-star-bottom" alt="">
        </div>
        <div class="moving-text-1">Je suis Zeina Je suis Zeina Je suis Zeina Je suis Zeina Je suis Zeina Je suis Zeina</div>
        <div class="moving-text-2">Consultante Social Media Consultant Consultante Social Media Consultant Consultante</div>
        <div class="moving-text-3">& Créatrice de contenu & Cré & Créatrice de contenu & Cré & Créatrice de contenu &</div>
        </div>
        <div class="buttons-container">
        <button id="about-button-1" class="buttons-secondary about-buttons" onclick="document.getElementById('star-left').style.right = '35vw'; document.getElementById('star-left').style.left = null;">Qui suis-je ?</button> <br>
        <button id="about-button-2" class="buttons-secondary about-buttons">Ma vision</button> <br>
        <button id="about-button-3" class="buttons-secondary about-buttons">Mon agence</button>
        </div>
        <div class="container about-paragraph-container">
        <p class="about-paragraph none" id="about-hide-text-1">
            Je suis Zeïna, la fondatrice de <b>Zeïna Christ & Co.</b> <br>
            Passionnée de <b>mode</b> et de <b>digital</b>, je passe mon temps à faire des <b>tas de trucs créatifs</b> ; <br>
            du <b>design graphique</b> aux <b>filtres AR</b> en passant par le <b>montage vidéo</b>. <br> <br>
            À travers mon parcours, qui a débuté dans l’industrie de <b>la mode</b> et <b>du luxe</b>, j’ai réalisé qu’il n' y a <b>aucune limite</b> à ce qu’un individu est <b>capable de créer</b>, d’autant plus lorsqu’il est <b>inspiré par Dieu, Le Créateur</b>.
        </p> 
        <p class="about-paragraph none" id="about-hide-text-2">
            J’ai <b>la conviction</b> que nous avons tous été <b>créés à l’image de Dieu</b> qui a fait <b>des choses grandes</b> et <b>merveilleuses</b>, et qu’il y a de ce fait, au dedans de chaque être humain comme <b>une étincelle de créativité</b> qui le pousse à faire de même et qui ne demande qu’à être développé et exploité pour <b>bénir une multitude</b>.
        </p>
        <p class="about-paragraph none" id="about-hide-text-3">
            À travers mon agence, je veux t’accompagner à développer du <b>contenu créatif</b> et <b>une communication innovante</b> sur <b>les réseaux sociaux</b>, qui constituent un levier de croissance indispensable dans l’ère du digital.
            <br><br>
            Ensemble nous pourrons faire grandir ton projet grâce à <b>des stratégies digitales pertinentes</b>, communiquer de manière <b>attractive</b> et <b>fidéliser une communauté</b>grandissante.
        </p> 
        </div>
    </div>
    </section>
    <section class="second-section" id="second-section">
    <div class="container">
        <div class="second-show-default">
        <h2 class="second-section-title">Les <div class="services-span">services</div> <span>que je propose</span></h2>
        <div class="row cards-container">
            <div class="col-lg-6">
            <div class="service-card">
                <div class="service-card-bg service-top-left">
                <img src="<?php echo get_template_directory_uri()?>/media/3-services/icon-1.png" class="service-card-icon" alt="">
                <h5 class="service-card-title">Coaching Social Média <br> & Créatif</h5>
                <button id="service-button-1" class="service-card-button">En savoir plus</button>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="service-card">
                <div class="service-card-bg service-top-right">
                <img src="<?php echo get_template_directory_uri()?>/media/3-services/icon-2.png" class="service-card-icon" alt="">
                <h5 class="service-card-title">Community <br> management</h5>
                <button id="service-button-2" class="service-card-button">En savoir plus</button>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="service-card">
                <div class="service-card-bg service-bottom-left">
                <img src="<?php echo get_template_directory_uri()?>/media/3-services/icon-3.png" class="service-card-icon" alt="">
                <h5 class="service-card-title">Stratégie <br> Social Média</h5>
                <button id="service-button-3" class="service-card-button">En savoir plus</button>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="service-card">
                <div class="service-card-bg service-bottom-right">
                <img src="<?php echo get_template_directory_uri()?>/media/3-services/icon-4.png" class="service-card-icon" alt="">
                <h5 class="service-card-title">Ateliers & <br> Formations</h5>
                <button id="service-button-4" class="service-card-button">En savoir plus</button>
                </div>
            </div>
            </div>
        </div>
        <div class="second-buttom-container">
            <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart-light second-button">Je me lance</a>
        </div>
        </div>
        <div class="second-hidden-default none">
        <div class="second-nav">
            <button href="" id="service-button-nav-0" class="second-button-arrow">
            <img src="<?php echo get_template_directory_uri()?>/media/textures/arrow-red.svg" alt="">
            </button> <br>
            <button href="" class="second-button-style" id="service-button-nav-1">Coaching Social Media & Créatif</button> <br>
            <button href="" class="second-button-style" id="service-button-nav-2">Stratégie Social Media</button> <br>
            <button href="" class="second-button-style" id="service-button-nav-3">Community Management</button> <br>
            <button href="" class="second-button-style" id="service-button-nav-4">Ateliers & Formations</button>
        </div>
        <div id="service-1-info" class="none">
            <h1 class="service-info-title">Coaching Social Media & Créatif</h1>
            <div class="row">
            <div class="col-lg-6">
                <div class="second-left-container">
                <div class="service-info-1">
                    <div class="second-label">Le concept</div>
                    <div class="service-content">
                    <img class="service-icon-1" src="<?php echo get_template_directory_uri()?>/media/textures/zeina-bitmoji contour-blanc.png" alt="">
                    <p class="service-paragraph">Faire des stories engageantes, créer des visuels avec un petit budget ou utiliser les bons hashtags ? <br>
                    Le temps d'une pause déjeuner, je réponds à toutes tes questions et te partage des astuces et recommandations sur mesure pour t'aider à gérer tes réseaux sociaux ou créer du contenu qualitatif comme une boss !</p>
                    <div class="serivce-price-container"><p class="service-price">à partir de 75€/mois</p></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="second-right-container">
                <div class="service-info-2">
                    <div class="second-label">Les avantages</div>
                    <div class="service-content">
                    <img class="service-icon-1" src="<?php echo get_template_directory_uri()?>/media/textures/zeina-bitmoji-contour-lila.png" alt="">
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Associer la théorie à la pratique</h4>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Faire de la création graphique en moins d’1h</h4>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Recevoir des conseils personnalisés</h4>
                    </div>
                    <div class="second-buttom-container">
                        <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart second-button">Je me lance</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div id="service-2-info" class="none">
            <h1 class="service-info-title">Stratégie Social Média</h1>
            <div class="row">
            <div class="col-lg-6">
                <div class="second-left-container">
                <div class="service-info-1">
                    <div class="second-label">Le concept</div>
                    <div class="service-content">
                    <img class="service-icon-1" src="<?php echo get_template_directory_uri()?>/media/textures/zeina-bitmoji contour-blanc.png" alt="">
                    <p class="service-paragraph">Je t’aide à définir les actions à mettre en place étapes par étapes pour te rendre visible sur les réseaux sociaux, bâtir une communauté engagée et réaliser tes objectifs de marque. </p>
                    <div class="serivce-price-container"><p class="service-price">à partir de 720€/mois</p></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="second-right-container">
                <div class="service-info-2">
                    <div class="second-label">Les avantages</div>
                    <div class="service-content">
                    <img class="service-icon-1" src="<?php echo get_template_directory_uri()?>/media/textures/zeina-bitmoji-contour-lila.png" alt="">
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Avoir une communication pertinente et rentable</h4>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Construire une image de marque</h4>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Réaliser ses objectifs de vente</h4>
                    </div>
                    <div class="second-buttom-container">
                        <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart second-button">Je me lance</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div id="service-3-info" class="none">
            <h1 class="service-info-title">Community Management</h1>
            <div class="row">
            <div class="col-lg-6">
                <div class="second-left-container">
                <div class="service-info-1">
                    <div class="second-label">Le concept</div>
                    <div class="service-content">
                    <img class="service-icon-1" src="<?php echo get_template_directory_uri()?>/media/textures/zeina-bitmoji contour-blanc.png" alt="">
                    <p class="service-paragraph">Suivant une ligne éditoriale bien définie, je gère l’image de ta marque et ton contenu sur les réseaux sociaux en créant de l’engagement et de l'interaction auprès de ta communauté.</p>
                    <div class="serivce-price-container"><p class="service-price">à partir de 529€/mois</p></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="second-right-container">
                <div class="service-info-2">
                    <div class="second-label">Les avantages</div>
                    <div class="service-content">
                    <img class="service-icon-1" src="<?php echo get_template_directory_uri()?>/media/textures/zeina-bitmoji-contour-lila.png" alt="">
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Accroître ta visibilité et ton image de marque</h4>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Construire une communauté engagée</h4>
                    </div>
                    <div class="second-buttom-container">
                        <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart second-button">Je me lance</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div id="service-4-info" class="none">
            <h1 class="service-info-title">Ateliers & Formations</h1>
            <div class="row">
            <div class="col-lg-6">
                <div class="second-left-container">
                <div class="service-info-1">
                    <div class="second-label">Le concept</div>
                    <div class="service-content">
                    <img class="service-icon-1" src="<?php echo get_template_directory_uri()?>/media/textures/zeina-bitmoji contour-blanc.png" alt="">
                    <p class="service-paragraph">Après avoir étudié ton besoin et les compétences à développer, je forme ton équipe de communicants aux pratiques & tendances actuelles à adopter sur les réseaux sociaux et à la création de contenu.</p>
                    <div class="serivce-price-container"><p class="service-price">sur devis</p></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="second-right-container">
                <div class="service-info-2">
                    <div class="second-label">Les avantages</div>
                    <div class="service-content">
                    <img class="service-icon-1" src="<?php echo get_template_directory_uri()?>/media/textures/zeina-bitmoji-contour-lila.png" alt="">
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Atteindre et réaliser un but collectif</h4>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Économique et efficace</h4>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri()?>/media/textures/star.png" class="star-icon" alt="">
                        <h4 class="service-info-h">Seul on va plus vite, ensemble on va plus loin</h4>
                    </div>
                    <div class="second-buttom-container">
                        <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart second-button">Je me lance</a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="case-stadies" id="case-stadies">
    <div class="case-stadie-container">
        <div class="label-container"><div class="case-study-label">Case studies</div></div>
        <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            <div class="slider-container">
                <div class="row">
                <div class="col-lg-5 img-slide-container">
                    <img src="<?php echo get_template_directory_uri()?>/media/textures/case-study-1.png" class="case-study-img" alt="">
                    <div class="second-buttom-container">
                    <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart-light second-button">Je me lance</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div>
                    <h1 class="slide-h">EMCITV <span class="slide-span-1">Community Management</span></h1>
                    <h2 class="slide-h-second">Problématique</h2>
                    <p class="slide-p-second">Moderniser l’image d’une chaîne de télévision référence ; EMCI TV, sur les réseaux sociaux et attirer des milliers de nouvelles personnes sur les pages.</p>
                    <h2 class="slide-h-second">Solution</h2>
                    <p class="slide-p-second">Élaboration d’une stratégie éditoriale et mise en place d’une nouvelle identité visuelle à l’image de la chaîne. Rédaction / Production de contenu pendant 1 semestre, animation de stories quotidiennes pour faire réagir et créer un lien de proximité avec la communauté.</p>
                    <h2 class="slide-h-second">Résultats</h2>
                    <p class="slide-p-second">Plus de 7 millions de comptes atteints sur Instagram, Facebook et plus de 78K de nouveaux abonnés.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="slider-container">
                <div class="row">
                <div class="col-lg-5 img-slide-container">
                    <img src="<?php echo get_template_directory_uri()?>/media/textures/case-study-2.png" class="case-study-img" alt="">
                    <div class="second-buttom-container">
                    <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart-light second-button">Je me lance</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div>
                    <h1 class="slide-h"><span class="slide-span-2">Masterclass / Webinar</span></h1>
                    <h2 class="slide-h-second">Projet</h2>
                    <p class="slide-p-second">Former une centaine de personnes de tous niveaux, à développer leur créativité pour se distinguer sur les réseaux sociaux avec du contenu visuel pertinent.</p>
                    <h2 class="slide-h-second">Résultats</h2>
                    <img src="<?php echo get_template_directory_uri()?>/media/textures/case-study-2-2.png" class="slide-second-img" alt="">
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="swiper-slide">
            <div class="slider-container">
                <div class="row">
                <div class="col-lg-5 img-slide-container">
                    <div class="img-video-container">
                    <video width="100%" height="auto" controls autoplay>
                        <source src="<?php echo get_template_directory_uri()?>/media/textures/video1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    </div>
                    <div class="second-buttom-container">
                    <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart-light second-button">Je me lance</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div>
                    <h1 class="slide-h">Rootz <span class="slide-span-3">Stratégie Social Media</span></h1>
                    <h2 class="slide-h-second">Problématique</h2>
                    <p class="slide-p-second">Moderniser l’image d’une chaîne de télévision référence ; EMCI TV, sur les réseaux sociaux et attirer des milliers de nouvelles personnes sur les pages.</p>
                    <h2 class="slide-h-second">Solution</h2>
                    <p class="slide-p-second">Élaboration d’une stratégie éditoriale et mise en place d’une nouvelle identité visuelle à l’image de la chaîne. Rédaction / Production de contenu pendant 1 semestre, animation de stories quotidiennes pour faire réagir et créer un lien de proximité avec la communauté.</p>
                    <h2 class="slide-h-second">Résultats</h2>
                    <p class="slide-p-second">Plus de 7 millions de comptes atteints sur Instagram, Facebook et plus de 78K de nouveaux abonnés.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        </div>
    </div>
    </section>
    <section class="feedbacks" id="feedbacks"> 
    <div class="container feedback-container">
        <div class="full-w">
        <h1 class="feedback-header">Feedbacks</h1>
        <P class="feedback-p">Le meilleur dans tout ça ? Mes services produisent <span class="feedback-span">des résultats</span></P>
        <img src="<?php echo get_template_directory_uri()?>/media/textures/fleche-feedback.png" class="feedback-arrow" alt="">
        <div class="container-img">
            <div class="row">
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/1.jpeg" class="feedback-img" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/3.jpg" class="feedback-img" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/6.jpeg" class="feedback-img" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/9.jpeg" id="feedback-img-hide-1" class="feedback-img none" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/12.jpeg" id="feedback-img-hide-2" class="feedback-img none" alt="">
            </div>
            <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/2.jpeg" class="feedback-img" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/4.jpeg" class="feedback-img" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/5.jpeg" class="feedback-img" alt="">                
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/7.jpeg" class="feedback-img" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/8.jpeg" class="feedback-img" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/6.jpeg" id="feedback-img-hide-3" class="feedback-img none" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/14.jpeg" id="feedback-img-hide-4"class="feedback-img none" alt="">
                <img src="<?php echo get_template_directory_uri()?>/media/5-feedbacks /screens-feedbacks/15.jpeg" id="feedback-img-hide-5" class="feedback-img none" alt="">
            </div>
            </div>
            <button id="feedback-more-button" class="feedback-more-button"><img src="<?php echo get_template_directory_uri()?>/media/textures/arrow-down.svg" alt=""></button>
            <div class="second-buttom-container">
            <a href="https:/calendly.com/zeinachrist-co" target="_blank" class="button-standart-light second-button">Je me lance</a>
            </div>
        </div>
        </div>
    </div>
    </section>
    <section class="cta-section">
    <div class="background-opacity">
        <div class="container">
        <div class="row">
            <div class="col-lg-6 cta-container-left">
            <h1 class="cta-h">Prêt.e à démarrer l’aventure?</h1>
            </div>
            <div class="col-lg-6 cta-container-right">
            <a href="https:/calendly.com/zeinachrist-co" target="_blank"  class="cta-button">On y va !</a>
            </div>
        </div>
        </div>
    </div>
    </section>
</main>
<?php
get_footer();
