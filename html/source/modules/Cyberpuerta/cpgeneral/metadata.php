<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.1';
/**
 * Module information
 */
$aModule = [
    'id'                      => 'cpgeneral',
    'title'                   => 'General CP',
    'description'             => 'Module used for general purposes',
    'thumbnail'               => '',
    'lang'                    => 'en',
    'version'                 => '1.0',
    'author'                  => 'Cyberpuertians',
    'email'                   => 'sistemas@cyberpuerta.mx',
    'extend'                  => [
        \OxidEsales\Eshop\Application\Controller\FrontendController::class => \Cyberpuerta\Cp\Controller\AllReviewsController::class,
    ],
    'controllers'             => [
        'reviews_by_product' => \Cyberpuerta\Cp\Controller\AllReviewsController::class,
    ],
    'templates'               => [],
    'smartyPluginDirectories' => [],
    'blocks' => [],
    'events'       => [],
    'settings' => []
];