<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            <video class="banner-video" autoplay muted loop poster="<?php echo get_stylesheet_directory_uri() . '/assets/images/Studio-Koukaki-header.png'; ?> " alt="logo Fleurs d'oranger & chats errants" data-bottom="transform: translateY(0px);" data-top-bottom="transform: translateY(-200px);">
                <source src="<?php echo get_stylesheet_directory_uri()."/assets/video/video-header-koukaki.mp4" ?>" type="video/mp4">
            </video>
        </section>
        <section id="story" class="story">
            <span class="title-bg">
                <h2 class="title"><span class="title-story">L'histoire</span></h2>
            </span>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3>Les personnages</h3>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php
                            $characters = $characters_query->get_posts();

                            foreach ( $characters as $character ) {
                                setup_postdata( $character );
                                echo '<div class="swiper-slide"><figure>';
                                echo get_the_post_thumbnail( $character->ID, 'full' );
                                echo '<figcaption>';
                                echo $character->post_title;
                                echo'</figcaption>';
                                echo '</figure></div>';
                            }
                        
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </article>
            <article id="place">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <div class="clouds">
                        <img class="big-cloud" src="<?php echo get_stylesheet_directory_uri()."/assets/images/big_cloud.png" ?>" alt="Grand nuage" data-bottom="transform: translateX(300px);" 
        data-top-bottom="transform: translateX(0px);">
                        <img class="little-cloud" src="<?php echo get_stylesheet_directory_uri()."/assets/images/little_cloud.png" ?>" alt="Petit nuage" data-bottom="transform: translateX(300px);" 
        data-top-bottom="transform: translateX(0px);">
                    </div>
                </div>

            </article>
        </section>


        <section id="studio">
            <span class="title-bg">
                <h2 class="title"><span class="title-studio">Studio</span><span class="title-koukaki"> Koukaki</span></h2>
            </span>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <?php get_template_part( 'section-oscar' ); ?>
    </main><!-- #main -->

<?php
get_footer();
