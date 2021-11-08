<?php

    class FrontendAjax {

        public function __construct()
        {
            $argsAction = [
                'gmo_search_input'  => array($this, 'gmoSearch'),
            ];

            foreach ($argsAction as $key => $value) {
                add_action('wp_ajax_'.$key, $value);
                add_action('wp_ajax_nopriv_'.$key, $value);
            }
        }

        public function gmoSearch() {

            $search = sanitize_text_field( $_POST['valInput']) ;

            $searchQuery = new WP_Query( array(
                'post_type' => 'gmo_Product',
                'posts_per_page' => -1,
                's' => $search
            ) );

            $result = [];
            if ( !empty($searchQuery->posts) ) {
                foreach( $searchQuery->posts as $post ) {
                    $result[] = [
                        'id' => $post->ID,
                        'title' => $post->post_title,
                        "url" => get_the_permalink($post->ID),
                        'totalPost' => $searchQuery->found_posts
                    ];
                }
            }

            wp_reset_query();

            echo wp_json_encode($result);
            wp_die();
        }
    }