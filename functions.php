<?php
// S'assure que le code s'exécute lorsque la REST API est initialisée
add_action('rest_api_init', function () {

    // Crée une route custom : /wp-json/monapi/v1/hello
    register_rest_route('monapi/v1', '/hello', array(
        'methods'  => 'GET', // comme app.get()
        'callback' => function () { // fonction appelée quand quelqu'un fait GET sur cette route
            return ['message' => 'Hello World depuis WordPress !'];
        }
    ));

});
