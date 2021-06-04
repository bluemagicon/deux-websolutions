<?php
/*
 * Template Name: Startseite
 */

get_header();
?>

<div class="two-col-wrapper hero-main col-margin-top">
    <div class="alignwide">
        <div class="flex-wrapper">
            <div class="col">
                <h1 class="is-style-h1-featured-overflow"><em>deine werbeagentur</em> aus oldenburg.</h1>
                <p>Deux Websolutions ist eine Webagentur für digitales Marketing in Oldenburg. Wir nutzen unsere Expertise, um Ihr Unternehmen beim Wachsen zu unterstützen.</p>
            </div>
            <div class="col img-wrapper rotate-on-scroll">
                <img src="<?php echo get_template_directory_uri(); ?>/img/hero-main-img.png" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="two-col-wrapper messbare-ergebnisse reversed align-center">
    <div class="alignwide">
        <div class="flex-wrapper">
            <div class="col align-right">
                <h2 class="is-style-h1 blue">“<br />unser antrieb sind messbare ergebnisse</h2>
                <p class="zitat"><strong>dennis deux.</strong> <em>Geschäftsführer</em></p>
            </div>
            <div class="col img-wrapper animated">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ergebnisse.png" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="two-col-wrapper kunden-logos align-center">
    <div class="alignwide">
        <div class="flex-wrapper">
            <div class="col">
                <h2 class="is-style-h2">individuelle lösungen für oldenburger unternehmen.</h2>
                <p>Wir erbringen eine breite Palette an kreativen Online Marketing Dienstleistungen für Unternehmen aus den verschiedensten Branchen. Überregional, mit Fokus auf Oldenburg.</p>
            </div>
            <div class="col img-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/kunden-logos.png" alt="" />
            </div>
        </div>
    </div>
</div>

<div class="two-col-wrapper leistungen">
    <div class="alignwide">
        <div class="flex-wrapper">
            <div class="col">
                <h2 class="is-style-h2">unsere leistungen.</h2>
                <p>Unser Leistungsspektrum umfasst durchdachte Online-Marketing-Prinzipien, die Ihr Unternehmen beim Wachstum unterstützen.</p>
                <ul>
                    <li>Mehr Kunden und erhöhte Sichtbarkeit</li>
                    <li>Design & Storytelling für Ihre Markenwahrnehmung</li>
                    <li>Stärkung Ihrer Wettbewerbsfähigkeit</li>
                    <li>Effiziente Budgetnutzung</li>
                </ul>
            </div>
            <div class="col">
                <div class="sub-col">
                    <div class="teaser">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/websites.svg" alt="" />
                        </div>
                        <div class="content-wrapper">
                            <strong>websites.</strong>
                            <p>Wir bauen Webseiten, die Sie in bestem Licht repräsentieren. Mit professionellem Webdesign sorgen wir für hohe Performance und Unterstützung beim Unternehmenswachstum.</p>
                            <a href="#">mehr über websites</a>
                        </div>
                    </div>
                    <div class="teaser">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/seo.svg" alt="" />
                        </div>
                        <div class="content-wrapper">
                            <strong>suchmaschinen-optimierung.</strong>
                            <p>Mit strategischer Vorgehensweise steigern wir die Sichtbarkeit Ihrer Website bei Google und erreichen höhere Positionen für mehr Besucher.</p>
                            <a href="#">mehr über seo</a>
                        </div>
                    </div>
                    <div class="teaser">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/schulungen.svg" alt="" />
                        </div>
                        <div class="content-wrapper">
                            <strong>schulungen.</strong>
                            <p>Wir bieten Ihnen Inhouse-Schulungen, um Ihrer Marketingabteilung aktuelles Wissen zu digitalem Marketing verständlich zu vermitteln. Lorem ipsum dolor sit amet consetetur.</p>
                            <a href="#">mehr über schulungen</a>
                        </div>
                    </div>
                </div>
                <div class="sub-col">
                    <div class="teaser">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/onlineshops.svg" alt="" />
                        </div>
                        <div class="content-wrapper">
                            <strong>onlineshops.</strong>
                            <p>Als Experten in der E-Commerce-Webentwicklung helfen wir Ihnen in neue Umsatzregionen vorzustoßen oder Ihren bestehenden Online-Shop zu optimieren. Lorem ipsum dolor sit amet consetetur.</p>
                            <a href="#">mehr über shops</a>
                        </div>
                    </div>
                    <div class="teaser">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/google-ads.svg" alt="" />
                        </div>
                        <div class="content-wrapper">
                            <strong>google ads.</strong>
                            <p>Wir erstellen, betreuen und optimieren Ihre PPC-Kampagnen und stellen eine effiziente Nutzung bei maximalen Ergebnissen Ihres Budgets sicher. Lorem ipsum dolor sit amet consetetur.</p>
                            <a href="#">mehr über google ads</a>
                        </div>
                    </div>
                    <div class="teaser">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hosting-support.svg" alt="" />
                        </div>
                        <div class="content-wrapper">
                            <strong>hosting & support.</strong>
                            <p>Erreichen Sie technische Spitzenwerte und bessere Nutzererfahrung für Ihre Webseite. Als Hosting-Anbieter bieten wir bessere Erreichbarkeit und Stabilität, sowie hohe Ladegeschwindigkeiten.</p>
                            <a href="#">mehr zum thema</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();