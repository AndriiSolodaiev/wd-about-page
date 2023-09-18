<?php
#Template Name: Главная
$pageInfo = get_field('block_2', 7);
?>
<?php get_header();?>
<div class="page__content">
    <section class="main">
        <div class="main-content">
            <h1><div class="line"><div class="inner1"> <span>W</span>hale</div></div>
            <div class="line"><div class="inner2">development</div></div></h1>
            <div class="main-text">
                <h3><?_e('Ваша опора у виборі нерухомості','holybuild');?></h3>
                <div class="main-scroll" data-scroll-to="about-company">
                    <div class="main-scroll-arrow">
                        <svg class="scroll" width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <path d="M1 10.4762L11 20M11 20L21 10.4762M11 20V0" stroke="#142034"/>
                        </svg>

                        <!-- <svg class="scroll" version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                            <title>scroll</title>
                            <path d="M16 31.467c-8.542 0-15.467-6.925-15.467-15.467s6.925-15.467 15.467-15.467c8.542 0 15.467 6.925 15.467 15.467s-6.925 15.467-15.467 15.467zM16 32c8.837 0 16-7.163 16-16s-7.163-16-16-16c-8.837 0-16 7.163-16 16s7.163 16 16 16z"></path>
                            <path class="scroll-arrow" d="M15.733 21.333c0-0.801-0.255-2.011-1.013-3.014-0.748-0.99-2.002-1.799-4.054-1.799v-0.533c2.215 0 3.628 0.884 4.479 2.011 0.239 0.316 0.433 0.65 0.587 0.986v-8.317h0.533v8.317c0.155-0.336 0.348-0.669 0.587-0.986 0.852-1.126 2.264-2.011 4.479-2.011v0.533c-2.052 0-3.306 0.809-4.054 1.799-0.758 1.003-1.013 2.213-1.013 3.014h-0.533z"></path>
                        </svg> -->
                    </div>
                    <p><?_e('Дізнатися більше','holybuild');?></p>
                </div>
            </div>
            <div class="main-img1"><img src="<?=get_template_directory_uri()?>/assets/images/main1.jpg" alt=""></div>
            <div class="main-img2">
                <img src="<?=get_template_directory_uri()?>/assets/images/main2.jpg" alt="">
                 <!-- <picture>
                    <source srcset="<?=get_template_directory_uri()?>/assets/images/main2-mobile.jpg" media="(max-width: 576px)" />
                </picture> -->
            </div>
            <!--<div class="main-img3"><img src="<?=get_template_directory_uri()?>/assets/images/main3.jpg" alt=""></div>-->
            <div class="main-img4">
                <img src="<?=get_template_directory_uri()?>/assets/images/main4.jpg" alt="">
                 <!-- <picture>
                    <source srcset="<?=get_template_directory_uri()?>/assets/images/main4-mobile.jpg" media="(max-width: 576px)" />
                </picture> -->
            </div>
        </div>
    </section>
    <section class="about-company" data-container="about-company">
        <div class="about-company-text">
            <div class="about-company-text-content">
                <div class="about-company-text-description">
                    <h2 class="description-title"><?_e('Про компанію','holybuild');?></h2>
                    <p data-span-entry><?_e('Whale development – нове втілення перевіреної будівельної компанії зі сталими принципами та переконаннями, головними з яких є якість, надійність та відповідальність за результат.','holybuild');?></p>
                </div>
                <a class="about-company-scroll" href="<?=get_permalink(114)?>">
                    <div class="scroll-arrow">
                        <svg class="scroll-more" width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M10.4759 21.001L19.9998 11.001M19.9998 11.001L10.4759 1.00098M19.9998 11.001L-0.000244578 11.001" stroke="#142034"/>
                        </svg>
                    </div>
                    <p><?_e('Дивитися Проєкти','holybuild');?></p>
                </a>
            </div>
            <div class="about-company-more" > 
                <img data-src="<?=get_template_directory_uri()?>/assets/images/about-company2.png" alt="">
                <p  data-span-entry><?_e('Наріжним каменем нашої концепції є турбота про наших клієнтів, і не тільки до моменту вручення ключів, а й забезпечення комфортного користування придбаною нерухомістю.','holybuild');?> </p>
            </div>
            <img class="about-company-bg-img" data-src="<?=get_template_directory_uri()?>/assets/images/activity-about-company-bg-img.svg" alt="">
        </div>
        <div class="about-company-img">
            <img id="img-about-company" data-paralax data-src="<?=get_template_directory_uri()?>/assets/images/IMG_9461.jpg" alt="">
            <img id="img-about-company-mobile" data-paralax data-src="<?=get_template_directory_uri()?>/assets/images/IMG_9461.jpg" alt="">
        </div>
    </section>
    <section class="activity about-company" >
        <div class="activity about-company-img"> <img data-paralax data-src="<?=get_template_directory_uri()?>/assets/images/c3397318db03cd05f7d5f40be797f7d9.jpg" alt=""></div>
        <div class="activity about-company-text">
            <div class="activity about-company-text-content">
                <div class="activity about-company-text-description">
                    <h2 class="description-title"><?_e('наша Діяльність','holybuild');?></h2>
                    <p data-span-entry><?_e('Роками кропітливої праці компанія демонструє стабільність та надійність, якість та сучасний підхід до втілення дійсно сміливих, надихаючих, креативних ідей та здобула довіру інвесторів.','holybuild');?></p>
                </div>
            </div>
            <div class="activity about-company-more"> 
                <p data-span-entry><?_e('Ми зростали та розвивалися, впевнено долаючи хвилі нестабільності у світовій економіці в умовах пандемії, кризи та інших викликів. І сьогодні ми можемо по праву вважати себе справжнім Китом у тій справі, якою ми займаємося, як символ сильної та потужної основи будівельного ринку нерухомості Одеси!','holybuild');?> </p>
            </div>
            <img class="activity about-company-bg-img" data-src="<?=get_template_directory_uri()?>/assets/images/activity-about-company-bg-img.svg" alt="">
        </div>
    </section>
    <section class="director" >
        <div class="director-content">
            <h1 class="director-content-titel"><?_e('Філософія','holybuild');?></h1>
            <div class="director-content-text-wrapper">
            <svg class="icon--“" role="presentation">
              <use xlink:href="#icon-“"></use>
            </svg>
            <p class="director-content-text" data-span-entry><?_e('Наші проєкти - наша гордість, тому що ми змогли створити не лише комфортне житло. Кожен дім має душу, яка складається з зовнішньої та внутрішніх атмосфер, людей, які надихаються разом з нами і надихають нас.','holybuild');?></p>
            </div>
           </div>
    </section>
    <section class="project">
        <div class="project-content">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'projects',
                        'posts_per_page' => -1,
                        'order'       => 'DESC'
                    );
                    $status = [
                        1 => __('Збудовано','holybuild'),
                        2 => __('В роботі','holybuild')];

                    $the_query = new WP_Query($args);
                    if ( $the_query->have_posts() ) {
                        foreach ($the_query->posts as $post){
                                $pageInfoArray = get_field('block_2', $post->ID);
                                ?>
                                <div class="wrapper-slider-content swiper-slide">
                                    <h2 class="project-slide-title"><?= get_the_title($post->ID) ?></h2>
                                    <div class="swiper-slide-my">
                                        <div class="project-slide">
                                            <!-- <div class="project-slide-info" data-span-entry>
                                                <h2 class="project-slide-title"><?= get_the_title($post->ID) ?></h2>
                                                <h3 class="project-slide-tagline"><?=$pageInfoArray['project_info']['label']?></h3>
                                                <div class="project-slide-info-description">
                                                    <div class="subparagraph"><?_e('Місцезнаходження:','holybuild');?></div>
                                                    <div class="subparagraph-info"><?= $pageInfoArray['project_info']['location'] ?></div>
                                                </div>
                                            </div> -->
                                            <div class="project-slide-img">
                                                <div class="project-slide-img-wrapper">
                                                    <img data-paralax src="<?= $pageInfoArray['project_info']['imgs']['big']['url'] ?>" alt="" importance="high">
                                                    <div class="project-slide-status <?if($pageInfoArray['project_info']['status']==1){echo 'project-slide-status-completed';}else{ echo 'project-slide-status-progress';}?> "><?=$status[$pageInfoArray['project_info']['status']];?></div>
                                                </div>
                                                <!-- <a class="project-slide-more" href="<?= get_permalink($post->ID) ?>"><?_e('переглянути проєкт','holybuild');?></a> -->
                                                <!-- <div class="swiper-button-container">
                                                    <div class="swiper-pagination"> </div>
                                                    <div class="swiper-button-prev">
                                                        <div class="swiper-arrow">
                                                            <title>scroll</title>
                                                            <svg viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.5238 21L1 11M1 11L10.5238 1M1 11L21 11" stroke="white"/>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                    <div class="swiper-button-next">
                                                        <div class="swiper-arrow">
                                                            <svg viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10.4762 21L20 11M20 11L10.4762 1M20 11L-4.37114e-07 11" stroke="white"/>
                                                            </svg>

                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blok-info-about-project">
                                    <div class="subparagraph-wrap">
                                        <div class="subparagraph"><?_e('Місцезнаходження:','holybuild');?></div>
                                        <div class="subparagraph-info"><?= $pageInfoArray['project_info']['location'] ?></div>
                                    </div>
                                    <a class="project-slide-more" href="<?= get_permalink($post->ID) ?>"><?_e('переглянути проєкт','holybuild');?></a>
                                    </div>
                                </div>
                           <?
                            }
                        }
                        wp_reset_postdata();
                        ?>
                </div>

                    <div class="swiper-button-container">
                        <div class="swiper-pagination"> </div>
                        <div class="swiper-button-prev">
                            <div class="swiper-arrow">
                                <title>scroll</title>
                                <svg viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5238 21L1 11M1 11L10.5238 1M1 11L21 11" stroke="white"/>
                                </svg>
                            </div>
                        </div>
                        <div class="swiper-button-next">
                            <div class="swiper-arrow">
                                <svg viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.4762 21L20 11M20 11L10.4762 1M20 11L-4.37114e-07 11" stroke="white"/>
                                </svg>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </section>
    <section class="news">
        <div class="news-content">
            <h2 class="news-content-title"><?_e('Новини','holybuild');?></h2>
            <div class="news-plagination">
                <div class="news-plagination-current active"></div>
                <div class="news-plagination-current"></div>
                <div class="news-plagination-current"></div>
            </div>
        </div>
        <div class="news-swiper mynews-swiper">
            <div class="swiper-wrapper">
                <?
                $args = array(
                    'post_type' => 'post',
                    'category_name' => 'news',
                    'posts_per_page' => -1,
                    'order'       => 'DESC'
                );

                $the_query = new WP_Query($args);
                if ( $the_query->have_posts() ) {
                foreach ($the_query->posts as $post){
                        $pageInfoArray = get_field('block_2', $post->ID);
                        $img = get_the_post_thumbnail_url($post->ID);
                        ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-content">
                                <a href="<?=get_permalink($post->ID)?>">
                                    <img data-src="<?=$img?>" alt="">
                                    <p><?=get_the_title($post->ID)?></p>
                                </a>
                            </div>
                        </div>
                    <?
                    }
                }
                wp_reset_postdata();?>
            </div>
        </div>
    </section>
    <section class="feedback">
        <div class="feedback-content">
            <div class="feedback-title">
                <button class="js-call"> <?_e('Зворотний зв’язок','holybuild');?></button>
            </div>
            <div class="feedback-description">
                    <p class="subtitle"><?_e('Адреса:','holybuild');?></p>
                    <p class="details"><?_e('м. Одеса, вул. Дерибасівка 1','holybuild');?></p>
                    <a class="feedback-link" href="https://goo.gl/maps/Mbaf74cZXDCjoxX87" target="_blank">
                        <div class="arrow-gold">
                            <svg viewBox="0 0 21 22">
                             <path d="M10.4762 21L20 11M20 11L10.4762 1M20 11L-4.37114e-07 11"/>    
                            </svg>
                        </div>
                        <?_e('Відкрити на Google maps','holybuild');?>
                    </a>
                    <p class="subtitle"><?_e('Телефон:','holybuild');?></p><a class="details" href="tel:+380487008833">(048)-700-88-33</a>
                    <p class="subtitle">E-mail:</p><a class="details" href="mailto:main@wd.od.ua">main@wd.od.ua</a>
                </div>
        </div>
    </section>
</div>
<?php get_footer();?>

