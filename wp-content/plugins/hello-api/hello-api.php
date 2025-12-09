<?php
/**
 * Plugin Name: Hello API
 * Description: Endpoint REST API "Hello World"
 * Version: 1.0
 * Author: Toi
 */

add_action('rest_api_init', function () {
    register_rest_route('monapi/v1', '/hello', array(
        'methods' => 'GET',
        'callback' => function () {
            return ['message' => 'Hello World depuis WordPress !'];
        }
    ));
});
