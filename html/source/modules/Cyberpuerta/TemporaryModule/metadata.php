<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.1';
/**
 * Module information
 */
$aModule = [
    'id'                      => 'cyberpuertatemporarymodule',
    'title'                   => '[CP] Temporary Module',
    'description'             => 'This module is temporary, will be used for install and uninstall testings.',
    'thumbnail'               => '',
    'lang'                    => 'en',
    'version'                 => '1.0',
    'author'                  => 'Cyberpuertians',
    'email'                  => 'sistemas@cyberpuerta.mx',
    'extend'                  => [
        \OxidEsales\Eshop\Application\Controller\FrontendController::class => \Cyberpuerta\TempModule\Controller\TemporaryController::class,
    ],
    'controllers'             => [
        'temp_controller' => \Cyberpuerta\TempModule\Controller\TemporaryController::class,
    ],
    'templates'               => [
        'temporaryTemplate.tpl'            => 'Cyberpuerta/TemporaryModule/views/tpl/temporaryTemplate.tpl',
    ],
    'smartyPluginDirectories' => [],
    'blocks' => [],
    'events'       => [],
    'settings' => []
];