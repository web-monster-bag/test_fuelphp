<?php

/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.9-dev
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * -----------------------------------------------------------------------------
 *  Global database settings
 * -----------------------------------------------------------------------------
 *
 *  Set database configurations here to override environment specific
 *  configurations
 *
 */

return array(
    'default' => array(
        'type'           => 'mysqli',
        'connection'     => array(
            'hostname'       => 'fuel-db',
            'port'           => '3306',
            'database'       => 'fuel',
            'username'       => 'fuel',
            'password'       => 'fuel',
            'persistent'     => false,
            'compress'       => false,
        ),
        'identifier'     => '`',
        'table_prefix'   => '',
        'charset'        => 'utf8',
        'enable_cache'   => true,
        'profiling'      => false,
        'readonly'       => false,
    ),
);

// return [
//     'default' => [
//         'type'           => 'pdo',
//         'connection'     => [
//             'dsn'            => 'mysql:host=127.0.0.1;port=3399;dbname=fuel',
//             'username'       => 'fuel',
//             'password'       => 'fuel',
//             'persistent'     => false,
//             'compress'       => false,
//         ],
//         'identifier'   => '`',
//         'table_prefix'   => '',
//         'charset'        => 'utf8',
//         'enable_cache'   => true,
//         'profiling'      => false,
//     ],
// ];
