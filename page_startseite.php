<?php
/*
 * Template Name: Startseite
 */

get_header();
?>
    <!-- SECTION HERO -->
    <div id="home-section-hero" class="section">
        <div class="alignwide">
            <div uk-grid class="uk-flex-middle">
                <div class="uk-width-2-5@m">
                    <div class="content-wrapper-small">
                        <strong class="subheadline">Digitalagentur aus Oldenburg.</strong>
                        <h3 class="is-style-h1-featured-overflow is-style-h1">Unser Antrieb sind<br/>
                            <span id="hero-typer"></span>
                        </h3>
                        <p>deux websolutions ist eine Digitalagentur für digitales Marketing in Oldenburg. Wir nutzen unsere Expertise, um Ihr Unternehmen beim Wachsen zu unterstützen.</p>
                        <a href="#ansprechpartner" class="button-primary">Jetzt Kontakt aufnehmen</a>
                    </div>

                </div>
                <div class="uk-width-3-5@m img-wrapper hero-img">
                    <svg class="herosvg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 799.99 834.17">
                        <defs>
                            <pattern id="hero-img" patternUnits="userSpaceOnUse" width="800" height="800">
                                <image href="<?php echo get_template_directory_uri(); ?>/img/deux-websolutions-hero-4.jpg" x="66" y="0" width="660" height="660"/>
                            </pattern>
                        </defs>
                        <path class="herosvg-back" d="M39.2,92.7c88.5-99,239.3-67.5,369.4-40.8C560.9,83.1,766.8,95.5,797.1,248c29.7,149.5-177.5,209.6-286.6,315.9C406,665.8,341.6,866.2,200.2,829.8,58.6,793.2,86.9,589.6,55.7,446.7,28.7,323-45.1,187.1,39.2,92.7" transform="translate(0.01 0.01)" fill="#f55959"/>
                        <path class="herosvg-front" d="M342.8.8c140.1-11.3,259.7,97.3,325,221.8,60.6,115.7,62.5,261.9-17.4,365.2-68.3,88.3-196.6,67.1-307.6,55.3C258,634,177.9,603.8,131.2,532.4,79,452.9,62.2,356.9,97.4,268.6,145.4,148,213.4,11.2,342.8.8" transform="translate(0.01 0.01)" fill="url(#hero-img)"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- LEISTUNGEN -->
    <div id="home-section-leistungen" class="section">
        <div class="alignwide">

            <div uk-grid class="uk-grid-large">
                <div class="uk-width-1-2@l">
                    <div uk-sticky="media: 1200; offset: 100; bottom: true;">
                        <div class="content-wrapper-small">
                            <strong class="subheadline">Was wir anbieten</strong>
                            <h2 class="is-style-h2">Unsere Leistungen.</h2>
                            <p>Unser Leistungsspektrum umfasst durchdachte Online-Marketing-Prinzipien, die Ihr Unternehmen beim Wachstum unterstützen.</p>
                            <ul class="content-list">
                                <li>Erhöhte Sichtbarkeit</li>
                                <li>Ansprechendes Design</li>
                                <li>Stärkung Ihrer Wettbewerbsfähigkeit</li>
                                <li>Effiziente Budgetnutzung</li>
                            </ul>
                            <a href="#ansprechpartner" class="button-primary purple">jetzt kontakt aufnehmen</a>
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-2@l uk-width-1-2@l" id="home-leistungen">

                    <div uk-grid="masonry: true" class="uk-grid-medium uk-child-width-1-2@l uk-child-width-1-3@m">
                        <div>
                            <div class="teaser first-child fade-in">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/websites.svg" alt="Websites & Webdesign aus Oldenburg"/>
                                </div>
                                <div class="content-wrapper">
                                    <strong>Websites</strong>
                                    <p>Wir realisieren Webseiten, die Sie in bestem Licht repräsentieren. Mit professionellem Webdesign sorgen wir für hohe Performance und Unterstützung beim Unternehmenswachstum.</p>
                                    <!--<a href="#" class="button-plain">mehr über websites</a>-->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="teaser fade-in">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/onlineshops.svg" alt="Onlineshops und E-Commerce"/>
                                </div>
                                <div class="content-wrapper">
                                    <strong>Onlineshops</strong>
                                    <p>Als Experten in der E-Commerce-Webentwicklung helfen wir Ihnen in neue Umsatzregionen vorzustoßen oder Ihren bestehenden Online-Shop zu optimieren.</p>
                                    <!--<a href="#" class="button-plain">mehr über shops</a>-->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="teaser fade-in">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/seo.svg" alt="Suchmaschinenoptimierung (SEO)"/>
                                </div>
                                <div class="content-wrapper">
                                    <strong>Suchmaschinen-Optimierung</strong>
                                    <p>Mit strategischer Vorgehensweise steigern wir die Sichtbarkeit Ihrer Website bei Google und erreichen höhere Positionen für mehr Besucher.</p>
                                    <!--<a href="#" class="button-plain">mehr über seo</a>-->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="teaser fade-in">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/leistung-gads.svg" alt="Google Ads"/>
                                </div>
                                <div class="content-wrapper">
                                    <strong>Google Ads</strong>
                                    <p>Wir erstellen, betreuen und optimieren Ihre PPC-Kampagnen und stellen eine effiziente Nutzung bei maximalen Ergebnissen Ihres Budgets sicher.</p>
                                    <!--<a href="#" class="button-plain">mehr über google ads</a>-->
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="teaser fade-in">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/schulungen.svg" alt="Schulungen"/>
                                </div>
                                <div class="content-wrapper">
                                    <strong>Workshops</strong>
                                    <p>Wir bieten Ihnen Inhouse-Schulungen, um Ihrer Marketingabteilung aktuelles Wissen zu digitalem Marketing verständlich zu vermitteln.</p>
                                    <!--<a href="#" class="button-plain">mehr über schulungen</a>-->
                                </div>
                            </div>
                        </div>


                        <div>
                            <div class="teaser fade-in">
                                <div class="img-wrapper">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/hosting-support.svg" alt=""/>
                                </div>
                                <div class="content-wrapper">
                                    <strong>Webhosting</strong>
                                    <p>Erreichen Sie technische Spitzenwerte und bessere Nutzererfahrung für Ihre Webseite. Als Hosting-Anbieter bieten wir bessere Erreichbarkeit und Stabilität, sowie hohe Ladegeschwindigkeiten.</p>
                                    <!--<a href="#" class="button-plain">mehr zum thema</a>-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION: ZITAT -->
    <div id="home-section-zitat" class="section">
        <div class="alignwide">
            <div uk-grid class="uk-grid-large uk-flex-middle">
                <div class="uk-width-1-2@m">
                    <div class="img-wrapper animated">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ergebnisse.png" alt=""/>
                    </div>

                </div>
                <div class="uk-width-1-2@m uk-text-center uk-text-right@m fade-in">
                    <h2 class="is-style-h1 txt-blue">Unser Antrieb sind messbare Ergebnisse</h2>
                    <p class="zitat txt-black"><strong>Dennis Deux.</strong> <em>Geschäftsführer</em></p>
                </div>
            </div>
        </div>
    </div>


    <!-- PROJEKTE -->
    <div class="projekte-slider-wrapper" id="home-section-projekte">
        <div class="alignwide">
            <div class="flex-wrapper intro">
                <div class="col">
                    <strong class="subheadline">Mit Herz und Leidenschaft</strong>
                    <h3 class="is-style-h2">Erfolgreiche Projekte</h3>
                </div>
            </div>
        </div>
        <div class="slider-wrapper referenzen">
            <div class="slide" id="slide-audioblock" style="background: #161315;">
                <div class="alignwide">
                    <div uk-grid>
                        <div class="img-wrapper uk-width-1-2@m">
                            <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/audioblock-projekt.mp4" playsinline=""></video>
                            <!--<img src="<?php echo get_template_directory_uri(); ?>/img/audioblock-projekt.png" alt=""/>-->
                        </div>
                        <div class="col uk-width-1-2@m">
                            <div class="projekt-content-wrapper">
                                <h3 class="is-style-h3 txt-white">Audioblock</h3>
                                <p>Für den HiFi-Hersteller Audioblock haben wir einen Shop auf Basis von Shopware 6 umgesetzt. Weitere Highlights des Projekts sind die Fachhändlersuche und die zusätzlichen Versandarten "Click & Collect" und "Click & Deliver".</p>
                                <p>Für den HiFi-Hersteller Audioblock haben wir einen Shop auf Basis von Shopware 6 umgesetzt. Weitere Highlights des Projekts sind die Fachhändlersuche und die zusätzlichen Versandarten "Click & Collect" und "Click & Deliver".</p>
                                <a href="https://audioblock.de" target="_blank" class="button-plain">www.audioblock.de</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide" id="slide-audioblock" style="background: linear-gradient(#3c3c40 0%, #2d2d2f 100%);">
                <div class="alignwide">
                    <div uk-grid>
                        <div class="img-wrapper uk-width-1-2@m">
                            <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/audioblock-projekt.mp4" playsinline=""></video>
                            <!--<img src="<?php echo get_template_directory_uri(); ?>/img/audioblock-projekt.png" alt=""/>-->
                        </div>
                        <div class="col uk-width-1-2@m">
                            <div class="projekt-content-wrapper">
                                <h3 class="is-style-h3 txt-white">Audioblock 2</h3>
                                <p>Für den HiFi-Hersteller Audioblock haben wir einen Shop auf Basis von Shopware 6 umgesetzt. Weitere Highlights des Projekts sind die Fachhändlersuche und die zusätzlichen Versandarten "Click & Collect" und "Click & Deliver".</p>
                                <a href="https://audioblock.de" target="_blank" class="button-plain">www.audioblock.de</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- SECTION KUNDEN -->
    <div id="home-section-kunden" class="section">
        <div class="alignwide">
            <div uk-grid class="uk-grid-large uk-flex-middle">
                <div class="uk-width-2-5@m content-wrapper fade-in">
                    <div class="content-wrapper-small">
                        <strong class="subheadline">Für wen wir arbeiten</strong>
                        <h2 class="is-style-h2">Individuelle Lösungen für Oldenburger Unternehmen.</h2>
                        <p>Wir erbringen eine breite Palette an kreativen Online Marketing Dienstleistungen für Unternehmen aus den verschiedensten Branchen. Unsere Kunden schätzen unsere vertrauensvolle und transparente Arbeitsweise mit dem ständigen Ziel Großartiges für Sie zu leisten.</p>
                        <a href="#ansprechpartner" class="button-primary">Jetzt Kontakt aufnehmen</a>
                    </div>
                </div>
                <div class="uk-width-3-5@m">
                    <div uk-grid class="kundenlogos uk-grid-medium uk-child-width-1-3 uk-child-width-1-3@m uk-child-width-1-4@xl">
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/audioblock-logo.svg" alt="Audioblock"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cwm-logo.svg" alt="Carl Wilhelm Meyer"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/siemer-logo.svg" alt="Siemer Treppenlifte"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ife-logo.svg" alt="IFE Eriksen"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/buefa-logo.svg" alt="BÜFA"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/schmacker-logo.svg" alt="Schmacker"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/poppen-logo.svg" alt="Poppen Gewächshausbau"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/pt-logo.svg" alt="PT Oldenburg - André Janacek"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/bruno-logo.svg" alt="BRUNO - Der Oldenbäcker"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/prasse-logo.svg" alt="Zahnarztpraxis Dres. Prasse"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ldo-logo.svg" alt="Laserzentrum Oldenburg"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/stopp-gabler-logo.svg" alt="Kieferorthopädische Praxis Stopp & Gabler"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- WARUM DEUX? -->
    <div id="home-section-warum-deux" class="section uk-text-center">
        <div class="alignwide">
            <strong class="subheadline">Wie wir arbeiten</strong>
            <h2 class="is-style-h2">Warum deux websolutions?</h2>

        </div>
    </div>



    <script type="text/javascript">
        $(document).ready(function () {
            /*
            $('.slider-warum-deux').slick({
                fade: true,
                prevArrow: $('.slider-warum-deux .slick-arrow-prev'),
                nextArrow: $('.slider-warum-deux .slick-arrow-next'),
            });
            */

            $('.slider-wrapper.referenzen').slick({
                fade: true,
                dots: true,
                arrows: true
            });

            $('.slider-wrapper.referenzen').on('beforeChange', function (event, slick, currentSlide, nextSlide) {

                // pause old video (better performance)
                var old_vid = $('.slider-wrapper.referenzen .slide:eq(' + currentSlide + ')').find('video');
                $(old_vid).get(0).pause();

                // play current video from start
                var cur_vid = $('.slider-wrapper.referenzen .slide:eq(' + nextSlide + ')').find('video');
                $(cur_vid).get(0).currentTime = 0;
                $(cur_vid).get(0).play();

            });
        });
    </script>

<?php
get_footer();
