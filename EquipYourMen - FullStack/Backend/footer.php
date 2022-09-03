<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EquipYourMen
 */

if ( is_page( 13 ) ) {
?>

	<footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
				<a href="<?php echo get_home_url(); ?>">
					<?php
						$footer_logo = get_theme_mod('footer_logo');
						$img = wp_get_attachment_image_src($footer_logo, 'full');
						if ($img) :
						?>
						<img class="logo" src="<?php echo $img[0]; ?>" alt="Логотип організації">
						<?php endif; ?>
				</a>
                <div class="footer__social">
                    <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_facebook' ); ?>" target="_blank">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/facebook-media-white.svg" alt="Facebook">
                    </a>
                    <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_telegram' ); ?>" target="_blank">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/telegram-media-white.svg" alt="Telegram">
                    </a>
                    <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_instagram' ); ?>" target="_blank">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/instagram-media-white.svg" alt="Instagram">
                    </a>
                </div>
            </div>
            <div class="footer__wrapper">
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
                <a class="footer__email" href="mailto:<?php echo carbon_get_post_meta( $post->ID, 'eym_email' ); ?>"><?php echo carbon_get_post_meta( $post->ID, 'eym_email' ); ?></a>
            </div>
            <div class="footer__wrapper">
                <div class="footer__copyright"><?php echo carbon_get_post_meta( $post->ID, 'eym_copyright' ); ?></div>
            </div>
        </div>
    </footer>
    <a href="#up" class="page-up">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/main-screen/btn-up.svg" alt="Догори">
    </a>
    <div class="file">
        <div class="file__body">

			<?php
				$teammates = carbon_get_post_meta( get_the_ID(), 'eym_team_info' );
				$i = 0;
				foreach ( $teammates as $teammate ) :
					$i++;
			?>

				<div class="file__content" data-file="<?php echo $i; ?>">
					<a class="file__close" data-file="<?php echo $i; ?>">
						<img src="<?php echo bloginfo('template_url'); ?>/assets/icons/modal-close.svg" alt="X">
					</a>
					<div class="file__img">
						<img src="<?php echo wp_get_attachment_image_url($teammate['eym_team_info_img_extended'], 'full'); ?>" alt="Зображення члена команди">
						<div class="file__contacts">
							<div class="file__contacts-item">
								<span>E-mail:</span>
								<a href="mailto:<?php echo esc_html( $teammate[ 'eym_team_info_email' ] ); ?>" target="_blank"><?php echo esc_html( $teammate[ 'eym_team_info_email' ] ); ?></a>
							</div>
							<div class="file__contacts-item">
								<span>Telegram:</span>
								<a href="https://t.me/<?php echo esc_html( $teammate[ 'eym_team_info_telegram' ] ); ?>/" target="_blank">@<?php echo esc_html( $teammate[ 'eym_team_info_telegram' ] ); ?></a>
							</div>
						</div>
					</div>
					<div class="file__descr">
						<div class="file__descr-name"><?php echo esc_html( $teammate[ 'eym_team_info_name_full' ] ); ?></div>
						<div class="file__descr-position"><?php echo esc_html( $teammate[ 'eym_team_info_position' ] ); ?></div>
						<div class="file__descr-quote">“<?php echo esc_html( $teammate[ 'eym_team_info_quote' ] ); ?>”</div>
						<div class="file__descr-img">
							<img src="<?php echo wp_get_attachment_image_url($teammate['eym_team_info_img_extended'], 'full'); ?>" alt="Зображення члена команди">
						</div>
						<div class="file__descr-about">
							<div class="file__descr-btn">
								<span>Про особу</span>
								<img src="<?php echo bloginfo('template_url'); ?>/assets/icons/modal-arrow.svg" alt="V">
							</div>
							<div class="file__descr-text">
								<ul class="file__descr-list">
									<?php
										foreach ( $teammate['eym_team_info_list'] as $teammate_fact ) :
									?>
									<li><?php echo esc_html( $teammate_fact[ 'eym_team_info_list_item' ] ); ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<?php endforeach; ?>
        </div>
    </div>
    <div class="thankyou">
        <div class="thankyou__body">
            <div class="thankyou__content">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/mail.svg" alt="Іконка поштового конверту">
                <div class="thankyou__title">Дякуємо за ваше звернення!</div>
                <div class="thankyou__subtitle">Ми обов’язково його опрацюємо та надамо вам відповідь на вказану електронну скриньку</div>
                <a class="thankyou__btn">Повернутися до сторінки</a>
            </div>
        </div>
    </div>

	<?php
    } elseif ( is_page( 36 ) ) {
	?>

	<footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
				<a href="<?php echo get_page_link(36); ?>">
					<?php
						$footer_logo = get_theme_mod('footer_eng_logo');
						$img = wp_get_attachment_image_src($footer_logo, 'full');
						if ($img) :
						?>
						<img class="logo" src="<?php echo $img[0]; ?>" alt="Organization logo">
						<?php endif; ?>
				</a>
                <div class="footer__social">
                    <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_facebook' ); ?>" target="_blank">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/facebook-media-white.svg" alt="Facebook">
                    </a>
                    <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_telegram' ); ?>" target="_blank">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/telegram-media-white.svg" alt="Telegram">
                    </a>
                    <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_instagram' ); ?>" target="_blank">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/instagram-media-white.svg" alt="Instagram">
                    </a>
                </div>
            </div>
            <div class="footer__wrapper">
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
                <a class="footer__email" href="mailto:<?php echo carbon_get_post_meta( $post->ID, 'eym_email' ); ?>"><?php echo carbon_get_post_meta( $post->ID, 'eym_email' ); ?></a>
            </div>
            <div class="footer__wrapper">
                <div class="footer__copyright"><?php echo carbon_get_post_meta( $post->ID, 'eym_copyright' ); ?></div>
            </div>
        </div>
    </footer>
    <a href="#up" class="page-up">
        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/main-screen/btn-up.svg" alt="Догори">
    </a>
    <div class="file">
        <div class="file__body">

			<?php
				$teammates = carbon_get_post_meta( get_the_ID(), 'eym_team_info' );
				$i = 0;
				foreach ( $teammates as $teammate ) :
					$i++;
			?>

				<div class="file__content" data-file="<?php echo $i; ?>">
					<a class="file__close" data-file="<?php echo $i; ?>">
						<img src="<?php echo bloginfo('template_url'); ?>/assets/icons/modal-close.svg" alt="X">
					</a>
					<div class="file__img">
						<img src="<?php echo wp_get_attachment_image_url($teammate['eym_team_info_img_extended'], 'full'); ?>" alt="Зображення члена команди">
						<div class="file__contacts">
							<div class="file__contacts-item">
								<span>E-mail:</span>
								<a href="mailto:<?php echo esc_html( $teammate[ 'eym_team_info_email' ] ); ?>" target="_blank"><?php echo esc_html( $teammate[ 'eym_team_info_email' ] ); ?></a>
							</div>
							<div class="file__contacts-item">
								<span>Telegram:</span>
								<a href="https://t.me/<?php echo esc_html( $teammate[ 'eym_team_info_telegram' ] ); ?>/" target="_blank">@<?php echo esc_html( $teammate[ 'eym_team_info_telegram' ] ); ?></a>
							</div>
						</div>
					</div>
					<div class="file__descr">
						<div class="file__descr-name"><?php echo esc_html( $teammate[ 'eym_team_info_name_full' ] ); ?></div>
						<div class="file__descr-position"><?php echo esc_html( $teammate[ 'eym_team_info_position' ] ); ?></div>
						<div class="file__descr-quote">“<?php echo esc_html( $teammate[ 'eym_team_info_quote' ] ); ?>”</div>
						<div class="file__descr-img">
							<img src="<?php echo wp_get_attachment_image_url($teammate['eym_team_info_img_extended'], 'full'); ?>" alt="Зображення члена команди">
						</div>
						<div class="file__descr-about">
							<div class="file__descr-btn">
								<span>Facts</span>
								<img src="<?php echo bloginfo('template_url'); ?>/assets/icons/modal-arrow.svg" alt="V">
							</div>
							<div class="file__descr-text">
								<ul class="file__descr-list">
									<?php
										foreach ( $teammate['eym_team_info_list'] as $teammate_fact ) :
									?>
									<li><?php echo esc_html( $teammate_fact[ 'eym_team_info_list_item' ] ); ?></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>
				</div>

			<?php endforeach; ?>
        </div>
    </div>
    <div class="thankyou">
        <div class="thankyou__body">
            <div class="thankyou__content">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/mail.svg" alt="Іконка поштового конверту">
                <div class="thankyou__title">Thank you for your application!</div>
                <div class="thankyou__subtitle">We will definitely work on it and give you an answer to the indicated email</div>
                <a class="thankyou__btn">Go back to the page</a>
            </div>
        </div>
    </div>


	

    <?php
	}
	wp_footer(); ?>
</body>
</html>