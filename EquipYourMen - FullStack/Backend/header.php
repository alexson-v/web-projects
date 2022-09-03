<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EquipYourMen
 */

if ( is_page( 13 ) ) {
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ми – громадська організація 'Споряджай своїх'. Одна з головних сфер нашої діяльності – забезпечення Збройних Сил України необхідним оснащенням. Наша мотивація – перемогти окупантів і жити в мирній країні.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_home_url(); ?>">
    <meta property="og:title" content="Сайт ГО 'Споряджай своїх'">
    <meta property="og:description" content="Ми – громадська організація 'Споряджай своїх'. Одна з головних сфер нашої діяльності – забезпечення Збройних Сил України необхідним оснащенням. Наша мотивація – перемогти окупантів і жити в мирній країні.">
    <meta property="og:image" content="https://i.imgur.com/HCoo2BU.jpg">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="261">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo get_home_url(); ?>">
    <meta property="twitter:title" content="Сайт ГО 'Споряджай своїх'">
    <meta property="twitter:description" content="Ми – громадська організація 'Споряджай своїх'. Одна з головних сфер нашої діяльності – забезпечення Збройних Сил України необхідним оснащенням. Наша мотивація – перемогти окупантів і жити в мирній країні.">
    <meta property="twitter:image" content="https://i.imgur.com/HCoo2BU.jpg">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#231F20">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#FFC700">
	<?php wp_head(); ?>
</head>
<body>
    <div class="menu">
        <div class="menu__block">
            <div class="menu__close">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/burger-close.svg" alt="X">
            </div>
            <nav>
                <ul>
                    <li><a href="#about">Про організацію</a></li>
                    <li><a href="#support">Підтримати</a></li>
                    <li><a href="#values">Цінності</a></li>
                    <li><a href="#team">Команда</a></li>
                    <li><a href="#projects">Проекти</a></li>
                    <li><a href="#feedback">Зворотній зв'язок</a></li>
                </ul>
            </nav>
            <div class="menu__links">
                <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_facebook' ); ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/facebook-media-black.svg" alt="Facebook"></a>
                <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_telegram' ); ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/telegram-media-black.svg" alt="Telegram"></a>
                <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_instagram' ); ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/instagram-media-black.svg" alt="Instagram"></a>
            </div>
            <a href="mailto:<?php echo carbon_get_post_meta( $post->ID, 'eym_email' ); ?>" class="menu__email"><?php echo carbon_get_post_meta( $post->ID, 'eym_email' ); ?></a>
            <div class="menu__copyright"><?php echo carbon_get_post_meta( $post->ID, 'eym_copyright' ); ?></div>
        </div>
        <div class="menu__overlay"></div>
    </div>
    <header class="main__header">
        <div class="container">
            <div class="main__lang mobile">
                <a href="<?php echo get_home_url(); ?>">UA</a>
                <span></span>
                <a href="<?php echo get_page_link(36); ?>">EN</a>
            </div>
			<a href="<?php echo get_home_url(); ?>">
				<img class="logo" src="<?php
					$custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
					echo $custom_logo__url[0];
				?>" alt="Логотип організації">
			</a>
            <nav class="main__nav">
                <ul>
                    <li><a href="#about">Про організацію</a></li>
                    <li><a href="#support">Підтримати</a></li>
                    <li><a href="#values">Цінності</a></li>
                    <li><a href="#team">Команда</a></li>
                    <li><a href="#projects">Проекти</a></li>
                    <li><a href="#feedback">Зворотній зв'язок</a></li>
                </ul>
            </nav>
            <div class="main__wrapper">
                <div class="main__lang">
                    <a href="<?php echo get_home_url(); ?>">UA</a>
                    <span></span>
                    <a href="<?php echo get_page_link(36); ?>">EN</a>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span class="long"></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
<?php
    } elseif ( is_page( 36 ) ) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PO "Equip Your Men"</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="We are Ukrainian public organization 'Equip Your Men'. One of the main areas of our activity is providing the Armed Forces of Ukraine with the necessary equipment. Our motivation is to defeat the occupiers and live in a peaceful country.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo get_page_link(36); ?>">
    <meta property="og:title" content="PO 'Equip Your Men'">
    <meta property="og:description" content="We are Ukrainian public organization 'Equip Your Men'. One of the main areas of our activity is providing the Armed Forces of Ukraine with the necessary equipment. Our motivation is to defeat the occupiers and live in a peaceful country.">
    <meta property="og:image" content="https://i.imgur.com/B4VBssL.jpg">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="261">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo get_page_link(36); ?>">
    <meta property="twitter:title" content="PO 'Equip Your Men'">
    <meta property="twitter:description" content="We are Ukrainian public organization 'Equip Your Men'. One of the main areas of our activity is providing the Armed Forces of Ukraine with the necessary equipment. Our motivation is to defeat the occupiers and live in a peaceful country.">
    <meta property="twitter:image" content="https://i.imgur.com/B4VBssL.jpg">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo('template_url'); ?>/assets/icons/favicon//manifest.json">
    <meta name="msapplication-TileColor" content="#231F20">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#FFC700">
	<?php wp_head(); ?>
</head>
<body>
    <div class="menu">
        <div class="menu__block">
            <div class="menu__close">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/burger-close.svg" alt="X">
            </div>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#support">Support</a></li>
                    <li><a href="#values">Principles</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#feedback">Feedback</a></li>
                </ul>
            </nav>
            <div class="menu__links">
                <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_facebook' ); ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/facebook-media-black.svg" alt="Facebook"></a>
                <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_telegram' ); ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/telegram-media-black.svg" alt="Telegram"></a>
                <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_instagram' ); ?>" target="_blank"><img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/instagram-media-black.svg" alt="Instagram"></a>
            </div>
            <a href="mailto:<?php echo carbon_get_post_meta( $post->ID, 'eym_email' ); ?>" class="menu__email"><?php echo carbon_get_post_meta( $post->ID, 'eym_email' ); ?></a>
            <div class="menu__copyright"><?php echo carbon_get_post_meta( $post->ID, 'eym_copyright' ); ?></div>
        </div>
        <div class="menu__overlay"></div>
    </div>
    <header class="main__header">
        <div class="container">
            <div class="main__lang mobile">
                <a href="<?php echo get_home_url(); ?>">UA</a>
                <span></span>
                <a href="<?php echo get_page_link(36); ?>">EN</a>
            </div>
			<a href="<?php echo get_page_link(36); ?>">
				<?php
					$header_eng_logo = get_theme_mod('header_eng_logo');
                    $img = wp_get_attachment_image_src($header_eng_logo, 'full');
                    if ($img) :
                    ?>
                    <img class="logo" src="<?php echo $img[0]; ?>" alt="Organization logo">
                    <?php endif;
                    ?>
			</a>
            <nav class="main__nav">
                <ul>
                    <li><a href="#about">About organization</a></li>
                    <li><a href="#support">Support us</a></li>
                    <li><a href="#values">Our principles</a></li>
                    <li><a href="#team">Team</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#feedback">Feedback</a></li>
                </ul>
            </nav>
            <div class="main__wrapper">
                <div class="main__lang">
                    <a href="<?php echo get_home_url(); ?>">UA</a>
                    <span></span>
                    <a href="<?php echo get_page_link(36); ?>">EN</a>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span class="long"></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
<?php
    }
?>