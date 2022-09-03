<?php
/**
 * Template Name: Main page
 * 
 * English localization.
 * 
 * @package EquipYourMen
 */

get_header();
?>
    <section class="main container">
        <div class="main__slogan">
            <div class="main__header-wrapper">
                <h1><?php the_content(); ?></h1>
                <span></span>
            </div>
            <div class="main__icons">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/main-screen/warrior-1.svg" alt="Стоячий військовий">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/main-screen/warrior-2.svg" alt="Сидячий військовий">
                <img class="animate__animated animate__animated animate__shakeY animate__infinite animate__infinite" src="<?php echo bloginfo('template_url'); ?>/assets/icons/main-screen/heli.svg" alt="Гелікоптер">
            </div>
        </div>
        <div class="main__call">
            <span>Keep scrolling</span>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow-dec.png" alt="v">
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <h2>About the "Equip Your Men" public organization</h2>
            <div class="about__items">
                <div class="about__par">
                    <div class="about__container">
                        <p><?php echo carbon_get_post_meta( $post->ID, 'eym_about_par_1_1' ); ?></p>
						<p><?php echo carbon_get_post_meta( $post->ID, 'eym_about_par_1_2' ); ?></p>
                    </div>
                    <div class="about__container">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/map-ukraine.svg" alt="Карта України">
                    </div>
                </div>
                <div class="about__par">
                    <div class="about__container">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/paratroopers.svg" alt="Десантники">
                    </div>
                    <div class="about__container">
                        <p><?php echo carbon_get_post_meta( $post->ID, 'eym_about_par_2_1' ); ?></p>
                        <p><?php echo carbon_get_post_meta( $post->ID, 'eym_about_par_2_2' ); ?></p>
                    </div>
                </div>
                <div class="about__par">
                    <div class="about__container">
                        <p><?php echo carbon_get_post_meta( $post->ID, 'eym_about_par_3_1' ); ?></p>
                        <p><?php echo carbon_get_post_meta( $post->ID, 'eym_about_par_3_2' ); ?></p>
						<p><?php echo carbon_get_post_meta( $post->ID, 'eym_about_par_3_3' ); ?></p>
                    </div>
                    <div class="about__container">
                        <img class="about__png" src="<?php echo bloginfo('template_url'); ?>/assets/img/airdrop.png" alt="Повітряний груз">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="support" class="support">
        <div class="container">
            <h2>Support our activities</h2>
            <div class="support__subtitle"><?php echo carbon_get_post_meta( $post->ID, 'eym_support_subtitle' ); ?></div>
            <div class="support__items">
                <div class="support__card">
                    <div class="support__sign">₴</div>
                    <div class="support__curr">(Ukrainian hryvnia)</div>
                    <div class="support__text">
                        <div class="support__par"><span>Recipient of funds:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_1' ); ?></div>
                        <div class="support__par"><span>Purpose of payment:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_2' ); ?></div>
                        <div class="support__par"><span>Receiver code:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_3' ); ?></div>
                        <div class="support__par"><span>Recipient's bank:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_4' ); ?></div>
                        <div class="support__par"><span>Recipient's account (IBAN):</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_5' ); ?></div>
                    </div>
                </div>
                <div class="support__card">
                    <div class="support__sign">€ - $</div>
                    <div class="support__curr">(euro and US dollar)</div>
                    <div class="support__text">
                        <div class="support__par"><span>Recipient's bank:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_usd_1' ); ?></div>
                        <div class="support__par"><span>Recipient's account (IBAN):</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_usd_2' ); ?></div>
                        <div class="support__par"><span>Intermediary bank:</span></div>
                        <div class="support__par"><u>Payments in EUR:</u> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_usd_3' ); ?></div>
                        <div class="support__par"><u>Payments in USD:</u> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_usd_4' ); ?></div>
                    </div>
                </div>
                <div class="support__card">
                    <div class="support__sign">₿</div>
                    <div class="support__curr">(cryptocurrency)</div>
                    <div class="support__text">
                        <div class="support__par"><span>BTC crypto wallet:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_crc_1' ); ?></div>
                        <div class="support__par"><span>ETH crypto wallet:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_crc_2' ); ?></div>
                        <div class="support__par"><span>USD TRC20 crypto wallet:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_crc_3' ); ?></div>
                        <div class="support__par"><u>Explanation:</u> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_crc_4' ); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="values" class="values">
        <div class="container">
            <h2>Our principles</h2>
            <div class="values__container">

				<?php
					$values = carbon_get_post_meta( get_the_ID(), 'eym_values_info' );
					foreach ( $values as $value ) :
				?>
					<div class="values__pair">
						<div class="values__item">
							<h3><?php echo esc_html( $value[ 'eym_values_name_1' ] ); ?></h3>
							<p><?php echo esc_html( $value[ 'eym_values_text_1' ] ); ?></p>
						</div>
						<div class="values__item">
							<h3><?php echo esc_html( $value[ 'eym_values_name_2' ] ); ?></h3>
							<p><?php echo esc_html( $value[ 'eym_values_text_2' ] ); ?></p>
						</div>
					</div>
					<div class="values__line"></div>
				<?php endforeach; ?>

                <div class="values__pair">
                    <div class="values__item">
                        <h3><?php echo carbon_get_post_meta( $post->ID, 'eym_values_last_name_1' ); ?></h3>
                        <p><?php echo carbon_get_post_meta( $post->ID, 'eym_values_last_text_1' ); ?></p>
                    </div>
                    <div class="values__subline"></div>
                    <div class="values__item">
                        <h3><?php echo carbon_get_post_meta( $post->ID, 'eym_values_last_name_2' ); ?></h3>
                        <p><?php echo carbon_get_post_meta( $post->ID, 'eym_values_last_text_2' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team" class="team">
        <div class="container">
            <h2>Team</h2>
            <div class="team__container">
				
				<?php
					$teammates = carbon_get_post_meta( get_the_ID(), 'eym_team_info' );
					$i = 0;
					foreach ( $teammates as $teammate ) :
						$i++;
				?>

					<div class="team__item">
						<img src="<?php echo wp_get_attachment_image_url($teammate['eym_team_info_img_preview'], 'full'); ?>" alt="Зображення члена команди">
						<div class="team__descr">
							<div class="team__descr-name"><?php echo esc_html( $teammate[ 'eym_team_info_name_short' ] ); ?></div>
							<div class="team__descr-position"><?php echo esc_html( $teammate[ 'eym_team_info_position' ] ); ?></div>
							<div class="team__descr-quote">"<?php echo esc_html( $teammate[ 'eym_team_info_quote' ] ); ?>"</div>
						</div>
						<button class="team__more" data-file="<?php echo $i; ?>">Read more</button>
					</div>

				<?php endforeach; ?>

            </div>
        </div>
    </section>
    <section id="projects" class="projects">
        <div class="container">
            <h2>Projects</h2>
            <div class="projects__container">
				<?php
					$projects = carbon_get_post_meta( get_the_ID(), 'eym_projects_info' );
					foreach ( $projects as $project ) :
				?>

				<div class="projects__item">
                    <div class="projects__item-content">
                        <img class="projects__item-img" src="<?php echo wp_get_attachment_image_url($project['eym_projects_info_img'], 'full'); ?>" alt="Прев'ю проекту">
                        <div class="projects__item-wrapper">
                            <div class="projects__item-title"><?php echo esc_html( $project[ 'eym_projects_info_title' ] ); ?></div>
                            <p class="projects__item-descr"><?php echo esc_html( $project[ 'eym_projects_info_text' ] ); ?></p>
                        </div>
                    </div>
                    <a class="projects__item-btn" href="<?php echo esc_html( $project[ 'eym_projects_info_link' ] ); ?>" target="_blank">Details</a>
                </div>

				<?php endforeach; ?>
                
            </div>
            <div class="projects__outro">
                <div class="projects__outro-text">
                    <div class="projects__outro-title">Everything will be Ukraine! 🇺🇦</div>
                    <div class="projects__outro-subtitle">Follow the progress of projects in our social networks</div>
                </div>
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/main-screen/heli.svg" alt="Гелікоптер" class="projects__outro-img">
            </div>
        </div>
    </section>
    <section id="feedback" class="feedback">
        <div class="container">
            <h2>Feedback</h2>
            <div class="feedback__container">
                <div class="feedback__form">
                    <div class="feedback__form-title">Have questions, complaints and/or suggestions?</div>
                    <div class="feedback__form-text">Contact us via our official email – <a href="mailto:equipyourmen@gmail.com">equipyourmen@gmail.com</a><br>–<br>or <b>complete the form below</b> and we will process your application!</div>
                    <form class="en">
                        <div class="feedback__form-input">
                            <input name="name" id="name" type="text" required>
                            <label class="feedback__form-label">Your full name</label>
                        </div>
                        <div class="feedback__form-input">
                            <input name="email" id="email" type="email" required>
                            <label class="feedback__form-label">Your email</label>
                        </div>
                        <div class="feedback__form-input">
                            <textarea name="text" id="text"></textarea>
                            <label class="feedback__form-label">Your message</label>
                        </div>
                        <button class="feedback__form-btn">Send message</button>
                        <div class="feedback__form-agreement">By confirming the sending of the letter, you consent to the processing of your personal data</div>
                    </form>
                </div>
                <div class="feedback__social">
                    <div class="feedback__social-img">
                        <img class="" src="<?php echo bloginfo('template_url'); ?>/assets/img/social-img.jpg" alt="Зображення">
                        <div class="feedback__social-title">Social networks and the financial report</div>
                    </div>
                    <div class="feedback__social-descr">We actively maintain the organization's pages in social networks, report on the purchase of equipment for the military and announce events.<br> – <br>In order not to miss the latest news, join our community on the Internet!</div>
                    <div class="feedback__social-links">
                        <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_facebook' ); ?>" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/facebook-media-black.svg" alt="Facebook">
                        </a>
                        <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_telegram' ); ?>" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/telegram-media-black.svg" alt="Telegram">
                        </a>
                        <a href="<?php echo carbon_get_post_meta( $post->ID, 'eym_instagram' ); ?>" target="_blank">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/social-media/instagram-media-black.svg" alt="Instagram">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>