<?php
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// ----------------------------------------------------------------------
// Globale Einstellungen werden geladen

$global_social		= get_field('opt_socialmedia', 'option') ?: false;
$global_contact		= get_field('opt_contact', 'option') ?: false;
$global_support		= get_field('opt_support', 'option') ?: false;

$global_logos 		= get_field('opt_logos', 'option') ?: false;
$global_footer 		= get_field('opt_footer', 'option') ?: false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$override_logos		= get_field('override_logos') ? get_field('instance_logos')['opt_logos'] : false;
$override_footer	= get_field('override_footer') ? get_field('instance_footer')['opt_footer'] : false;
$override_support	= get_field('override_support') ? get_field('instance_support')['opt_support'] : false;

// ----------------------------------------------------------------------
// Überschreibende Einstellungen werden geladen

$page_logos		= $override_logos ?: $global_logos;
$page_footer	= $override_footer ?: $global_footer;
$page_support	= $override_support ?: $global_support;

// ----------------------------------------------------------------------
?>

<div id="footer-section-contact">
    <div uk-grid>
        <div class="uk-width-1-2@m">
            <div class="content-wrapper">
                <strong class="subheadline">Jetzt Kontakt aufnehmen</strong>
                <h2 class="is-style-h2">Was dürfen wir für Sie tun?</h2>
                <div class="vcard">
                    <div class="logo-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/deux-websolutions-icon.svg" alt="" />
                    </div>
                    <p>Dennis Deux. <span>Geschäftsführung</span></p>
                    <div class="contact">
                        <a href="mailto:info@deux.de">dennis@deux.de</a>
                        <a href="tel:+4944193658002">0441 936 580 02</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-width-1-2@m">
            <p class="adress"><strong>deux websolutions</strong> <span class="space-dot"> </span> Im Kleigrund 5a, 26135 Oldenburg</p>
            <p class="contact">
                <a href="mailto:info@deux.de">info@deux.de</a>
                <a href="tel:+4944193658002">0441 936 580 02</a>
            </p>
            <?php echo do_shortcode('[contact-form-7 id="229" title="Kontaktformular Ansprechpartner"]'); ?>
        </div>

    </div>
</div>

<footer id="footer">
	<div class="alignwide">
        <div class="flex-wrapper">
            <div class="col img-wrapper logo-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/img/deux-websolutions-logo-light.svg" alt="" />
            </div>
            <div class="col socials">
                <?php if($page_footer['show_socialmedia'] && $global_social) { ?>
                    <?php $social_profiles = $global_social;
                    include 'tpl/partials/social.php'; ?>
                <?php } ?>
            </div>
            <div class="col">
                <?php echo wp_nav_menu(array('menu' => 'Footer')); ?>
            </div>
        </div>
    </div>
</footer>
<?php
include 'tpl/partials/offcanvas.php';
wp_footer() ;
?>

</body>
</html>
