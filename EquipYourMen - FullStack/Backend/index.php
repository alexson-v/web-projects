<?php
/**
 * The main template file
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
            <span>Гортайте далі</span>
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arrow-dec.png" alt="v">
        </div>
    </section>
    <section id="about" class="about">
        <div class="container">
            <h2>Про громадську організацію "Споряджай своїх"</h2>
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
            <h2>Підтримати нашу діяльність</h2>
            <div class="support__subtitle"><?php echo carbon_get_post_meta( $post->ID, 'eym_support_subtitle' ); ?></div>
            <div class="support__items">
                <div class="support__card">
                    <div class="support__sign">₴</div>
                    <div class="support__curr">(українська гривня)</div>
                    <div class="support__text">
                        <div class="support__par"><span>Отримувач коштів:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_1' ); ?></div>
                        <div class="support__par"><span>Призначення платежу:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_2' ); ?></div>
                        <div class="support__par"><span>Код отримувача:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_3' ); ?></div>
                        <div class="support__par"><span>Банк отримувача:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_4' ); ?></div>
                        <div class="support__par"><span>Рахунок отримувача (IBAN):</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_uah_5' ); ?></div>
                    </div>
                </div>
                <div class="support__card">
                    <div class="support__sign">€ - $</div>
                    <div class="support__curr">(євро і долар США)</div>
                    <div class="support__text">
                        <div class="support__par"><span>Банк отримувача:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_usd_1' ); ?></div>
                        <div class="support__par"><span>Рахунок отримувача (IBAN):</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_usd_2' ); ?></div>
                        <div class="support__par"><span>Банк посередник:</span></div>
                        <div class="support__par"><u>Платежі у EUR:</u> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_usd_3' ); ?></div>
                        <div class="support__par"><u>Платежі у USD:</u> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_usd_4' ); ?></div>
                    </div>
                </div>
                <div class="support__card">
                    <div class="support__sign">₿</div>
                    <div class="support__curr">(криптовалюта)</div>
                    <div class="support__text">
                        <div class="support__par"><span>Криптогаманець BTC:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_crc_1' ); ?></div>
                        <div class="support__par"><span>Криптогаманець ETH:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_crc_2' ); ?></div>
                        <div class="support__par"><span>Криптогаманець USD TRC20:</span> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_crc_3' ); ?></div>
                        <div class="support__par"><u>Пояснення:</u> <?php echo carbon_get_post_meta( $post->ID, 'eym_support_crc_4' ); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="values" class="values">
        <div class="container">
            <h2>Наші цінності</h2>
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
            <h2>Команда</h2>
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
						<button class="team__more" data-file="<?php echo $i; ?>">Детальніше</button>
					</div>

				<?php endforeach; ?>

            </div>
        </div>
    </section>
    <section id="projects" class="projects">
        <div class="container">
            <h2>Проекти</h2>
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
                    <a class="projects__item-btn" href="<?php echo esc_html( $project[ 'eym_projects_info_link' ] ); ?>" target="_blank">Детальніше</a>
                </div>

				<?php endforeach; ?>
                
            </div>
            <div class="projects__outro">
                <div class="projects__outro-text">
                    <div class="projects__outro-title">Все буде Україна! 🇺🇦</div>
                    <div class="projects__outro-subtitle">Спостерігайте за процесом виконання проектів в наших соціальних мережах</div>
                </div>
                <img src="<?php echo bloginfo('template_url'); ?>/assets/icons/main-screen/heli.svg" alt="Гелікоптер" class="projects__outro-img">
            </div>
        </div>
    </section>
    <section id="feedback" class="feedback">
        <div class="container">
            <h2>Зворотній зв'язок</h2>
            <div class="feedback__container">
                <div class="feedback__form">
                    <div class="feedback__form-title">У вас є питання, скарги та/або пропозиції?</div>
                    <div class="feedback__form-text">Зв’яжіться з нами через нашу офіційну електронну скриньку – <a href="mailto:equipyourmen@gmail.com">equipyourmen@gmail.com</a><br>–<br>або <b>заповніть форму нижче</b> і ми опрацюємо ваше звернення!</div>
                    <form class="uk">
                        <div class="feedback__form-input">
                            <input name="name" id="name" type="text" required>
                            <label class="feedback__form-label">Ваше прізвище та ім'я</label>
                        </div>
                        <div class="feedback__form-input">
                            <input name="email" id="email" type="email" required>
                            <label class="feedback__form-label">Ваша пошта</label>
                        </div>
                        <div class="feedback__form-input">
                            <textarea name="text" id="text"></textarea>
                            <label class="feedback__form-label">Ваше повідомлення</label>
                        </div>
                        <button class="feedback__form-btn">Надіслати повідомлення</button>
                        <div class="feedback__form-agreement">Підтверджуючи відправку, ви надаєте згоду на обробку ваших персональних даних</div>
                    </form>
                </div>
                <div class="feedback__social">
                    <div class="feedback__social-img">
                        <img class="" src="<?php echo bloginfo('template_url'); ?>/assets/img/social-img.jpg" alt="Зображення">
                        <div class="feedback__social-title">Соціальні мережі і фінансовий звіт</div>
                    </div>
                    <div class="feedback__social-descr">Ми активно ведемо сторінки організації в соціальних мережах, звітуємо про закупівлю спорядження для військових та оголошуємо про проведення заходів.<br> – <br>Аби не прогавити свіжі новини, долучайтесь до нашої спільноти на просторах Інтернету!</div>
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