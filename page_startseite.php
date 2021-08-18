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
                        <h3 class="is-style-h1-featured-overflow is-style-h1">Wir entwickeln<br/>
                            <span id="hero-typer"></span>
                        </h3>
                        <!--<p>deux websolutions ist eine Digitalagentur für digitales Marketing in Oldenburg. Wir nutzen unsere Expertise, um Ihr Unternehmen beim Wachsen zu unterstützen.</p>-->
                        <p>Deux websolutions ist eine Werbeagentur für digitales Marketing in Oldenburg. Unser Antrieb sind erfolgreiche, effizient und nachhaltig umgesetzte Online-Projekte.</p>
                        <a href="#footer-section-contact" class="button-primary">Jetzt Kontakt aufnehmen</a>
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
                            <p>Unser Leistungsspektrum umfasst sämtliche Online Marketing-Strategien und -Maßnahmen, die Ihr Unternehmen beim Wachstum unterstützen. Mit unserer Kreativität und aktuellem technischen Know How unterstützen wie Sie in allen Online-Themen.</p>
                            <ul class="content-list">
                                <li>Moderne Ästhetik und ansprechendes Design</li>
                                <li>Wirkungsvolle Nutzererfahrung</li>
                                <li>Technisch hochwertige Ergebnisse</li>
                                <li>Effiziente Nutzung Ihres Marketingbudgets</li>
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
                                    <p>Wir realisieren Webseiten, die Sie in bestem Licht repräsentieren. Mit professionellem Webdesign sorgen wir für hohe Performance und Unterstützung beim Unternehmenswachstum und dem Erreichen Ihrer Ziele.</p>
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
                                    <p>Als Experten in der E-Commerce-Webentwicklung beraten wir Sie zum Einsatz verschiedenster Online-Shopsysteme, entwickeln Ihren Shop oder optimieren bestehende Online-Shops.</p>
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
                                    <p>Mit fundiertem Expertenwissen und strategischer Vorgehensweise steigern wir die Sichtbarkeit Ihrer Website bei Google und erreichen höhere Positionen für mehr Besucher.</p>
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
                                    <!--<p>Wir erstellen, betreuen und optimieren Ihre PPC-Kampagnen und stellen eine effiziente Nutzung bei maximalen Ergebnissen Ihres Budgets sicher.</p>-->
                                    <p>Wir erstellen, betreuen und optimieren Ihre PPC (Pay per Click)-Werbekampagnen und stellen eine effektive Nutzung Ihres Budgets sicher – für Ihren maximalen Erfolg.</p>
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
                                    <p>Gute Arbeit basiert auf einem tiefgehenden Verständnis Ihrer Anforderungen und Ziele. Für optimale Ergebnisse starten wir Projekte in der Regel mit einem kurzen Workshop, der den konkreten Bedarf erfasst.</p>
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
                                    <p>Wir stellen für unsere Kunden Webspace zur Verfügung. Sie profitieren dabei von zuverlässiger Erreichbarkeit, hohen Ladegeschwindigkeiten und erstklassigem Service rund um Webseite und E-Mails.</p>
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
                        <!--<img src="<?php echo get_template_directory_uri(); ?>/img/ergebnisse.png" alt=""/>-->
                        <svg class="herosvg" xmlns="http://www.w3.org/2000/svg" width="812" height="741.361" style="width: 100%; height: auto;" viewBox="0 0 812 741.361">
                            <defs>
                                <pattern id="hero-img" patternUnits="userSpaceOnUse" x="200" y="200" width="812" height="742">
                                    <image href="<?php echo get_template_directory_uri(); ?>/img/ergebnisse.png" width="812" height="742" />
                                </pattern>
                            </defs>
                            <path fill="url(#hero-img)" class="herosvg-front" d="M596.218,209.372c125.239-12.826,251.8,35.012,334.714,129.744,87.573,100.054,145.418,241.3,99.149,365.951-42.609,114.8-186.668,132.918-300.79,177.3-96.921,37.692-195.063,91.469-291.73,53.13-103.627-41.1-178.669-138.209-199.1-247.8-19.57-104.962,35.284-202.324,99.234-287.825,67.454-90.186,146.492-179.027,258.527-190.5" transform="translate(-234.434 -207.321)"/>
                        </svg>
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-text-center uk-text-right@m fade-in">
                    <h2 class="is-style-h1 txt-blue">Unser Antrieb sind erfolgreiche, zufriedene Kunden</h2>
                    <p class="zitat txt-black"><strong>Dennis Deux.</strong> <em>Geschäftsführer</em></p>
                </div>
            </div>
        </div>
    </div>


    <!-- PROJEKTE -->
    <div class="projekte-slider-wrapper" id="home-section-projekte">
        <div class="alignwide">
            <div class="flex-wrapper intro uk-text-center">
                <div class="col">
                    <strong class="subheadline">Mit Herz und Leidenschaft</strong>
                    <h3 class="is-style-h2">Erfolgreiche Projekte</h3>
                </div>
            </div>
        </div>

        <div class="slider-wrapper referenzen">
            <!-- Schmacker -->
            <div class="slide" id="slide-audioblock" style="background: #ffdc00;">
                <div class="">
                    <div class="video-wrapper">
                        <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/schmacker-referenz.mp4" playsinline=""></video>
                        <div class="referenz-content-wrapper">
                            <h3 class="is-style-h1-big txt-white">Schmacker.</h3>
                            <a href="#" target="_blank" class="button-plain">Projekt-Details +</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Audioblock -->
            <div class="slide" id="slide-audioblock" style="background: #0f0e0f;">
                <div class="">
                    <div class="video-wrapper">
                        <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/audioblock.mp4" playsinline=""></video>
                        <div class="referenz-content-wrapper">
                            <h3 class="is-style-h1-big txt-white">Audioblock.</h3>
                            <a href="#" target="_blank" class="button-plain">Projekt-Details +</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PT Oldenburg -->
            <div class="slide" id="slide-audioblock" style="background: #f5c518;">
                <div class="">
                    <div class="video-wrapper">
                        <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/pt-oldenburg.mp4" playsinline=""></video>
                        <div class="referenz-content-wrapper">
                            <h3 class="is-style-h1-big txt-white">PT Oldenburg.</h3>
                            <a href="#" target="_blank" class="button-plain">Projekt-Details +</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- BRUNO -->
            <div class="slide" id="slide-audioblock" style="background: #f39711;">
                <div class="">
                    <div class="video-wrapper">
                        <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/bruno.mp4" playsinline=""></video>
                        <div class="referenz-content-wrapper">
                            <h3 class="is-style-h1-big txt-white">BRUNO.</h3>
                            <a href="#" target="_blank" class="button-plain">Projekt-Details +</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dringenburger -->
            <div class="slide" id="slide-audioblock" style="background: #cdac72;">
                <div class="">
                    <div class="video-wrapper">
                        <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/dringenburger.mp4" playsinline=""></video>
                        <div class="referenz-content-wrapper">
                            <h3 class="is-style-h1-big txt-white">Dringenburger.</h3>
                            <a href="#" target="_blank" class="button-plain">Projekt-Details +</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stopp & Gabler -->
            <div class="slide" id="slide-audioblock" style="background: #15a7e3;">
                <div class="">
                    <div class="video-wrapper">
                        <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/kfo.mp4" playsinline=""></video>
                        <div class="referenz-content-wrapper">
                            <h3 class="is-style-h1-big txt-white">Gabler & Stopp.</h3>
                            <a href="#" target="_blank" class="button-plain">Projekt-Details +</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trendcom -->
            <div class="slide" id="slide-audioblock" style="background: #188990;">
                <div class="">
                    <div class="video-wrapper">
                        <video autoplay="" loop="" muted="" src="<?php echo get_template_directory_uri(); ?>/video/trendcom.mp4" playsinline=""></video>
                        <div class="referenz-content-wrapper">
                            <h3 class="is-style-h1-big txt-white">Trendcom.</h3>
                            <a href="#" target="_blank" class="button-plain">Projekt-Details +</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div></div>

    <!-- SECTION KUNDEN -->
    <div id="home-section-kunden" class="section">
        <div class="alignwide">
            <div uk-grid class="uk-grid-large uk-flex-middle">
                <div class="uk-width-2-5@m content-wrapper fade-in">
                    <div class="content-wrapper-small">
                        <strong class="subheadline">Für wen wir arbeiten</strong>
                        <h2 class="is-style-h2">Individuelle Lösungen für Oldenburger Unternehmen.</h2>
                        <p>Wir erbringen eine breite Palette an kreativen Online Marketing Dienstleistungen für Unternehmen aus verschiedensten Branchen in der Region. Dabei verstehen wir uns als langfristiger Partner. Unsere Kunden schätzen unsere vertrauensvolle und transparente Arbeitsweise.</p>
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
                            <img src="<?php echo get_template_directory_uri(); ?>/img/dringenburger-logo.svg" alt="PT Oldenburg - André Janacek"/>
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
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/weberhof-logo.svg" alt="BRUNO - Der Oldenbäcker"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/trendcom-logo.svg" alt="Zahnarztpraxis Dres. Prasse"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/nordenholzer-hof-logo.svg" alt="Laserzentrum Oldenburg"/>
                        </div>
                        <div class="logo img-wrapper uk-flex uk-flex-middle">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ewe-logo.svg" alt="Kieferorthopädische Praxis Stopp & Gabler"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- WARUM DEUX? -->
    <div id="home-section-warum-deux" class="section">
        <div class="alignwide">
            <div class="intro uk-text-center">
                <strong class="subheadline">Wie wir arbeiten</strong>
                <h2 class="is-style-h2">Warum deux websolutions?</h2>
            </div>
            <div uk-grid class="uk-grid-large uk-flex-center">
                <div class="uk-width-1-3@m with-icon icon-lampe">
                    <h4 class="is-style-h4">Über 10 Jahre Know-How</h4>
                    <p>Unsere Erfolge sind nachweisbar und für Sie nachvollziehbar. Seit über 10 Jahren bieten wir passende Lösungen und liefern messbare Ergebnisse, statt realitätsferne Versprechen.</p>
                </div>
                <div class="uk-width-1-3@m with-icon icon-rakete">
                    <h4 class="is-style-h4">Über den Tellerrand hinaus.</h4>
                    <p>Manche Probleme erfordern ein Denken Out-of-the-box. Unsere Vorgehensweise ist individuell und an Ihre speziellen Bedürfnisse und Wünsche angepasst. Lorem ipsum dolor sit amet consetetur.</p>
                </div>
                <div class="uk-width-1-3@m with-icon icon-haende">
                    <h4 class="is-style-h4">Professionelles Team.</h4>
                    <p>Als Webagentur in Oldenburg bestehen wir aus einem professionellen Team, das für digitales Marketing brennt und bestrebt darin ist, Sie mit echtem Wachstum zu überzeugen.</p>
                </div>
                <div class="uk-width-1-3@m with-icon icon-geld">
                    <h4 class="is-style-h4">Passend zu Ihrem Budget.</h4>
                    <p>Wir glauben an Ehrlichkeit, an Integrität und an den Respekt gegenüber unseren Kunden. Wir bieten Ihnen, passend zu Ihrem Budget, individuelle Lösungen für messbare Erfolge.</p>
                </div>
                <div class="uk-width-1-3@m with-icon icon-netzwerk">
                    <h4 class="is-style-h4">Großes Experten-Netzwerk.</h4>
                    <p>Wir haben uns auf wichtige Leistungen spezialisiert, die viele Probleme lösen können. Sollten wir dennoch an unsere Grenzen stoßen, haben wir ein professionelles Netzwerk das wir nutzen können.</p>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {

            $('.slider-wrapper.referenzen').slick({
                dots: true,
                arrows: true,
            });

            $('.slider-wrapper.referenzen').on('beforeChange', function (event, slick, currentSlide, nextSlide) {

                var old_vid = $('#slick-slide'+("00" + currentSlide).slice(-2)).find('video');
                $(old_vid).get(0).pause();

                var cur_vid = $('#slick-slide'+("00" + nextSlide).slice(-2)).find('video');
                $(cur_vid).get(0).currentTime = 0;
                $(cur_vid).get(0).play();


            });

            $('.slider-wrapper.referenzen video').on('ended',function(){
                $('.slider-wrapper.referenzen').slick("slickNext");
            });
        });
    </script>

<?php
get_footer();
