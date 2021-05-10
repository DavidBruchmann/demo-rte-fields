<?php

/**
 * Extension Manager/Repository config file for ext "demo_rte_fields".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Demo RTE Fields',
    'description' => 'Demonstration about RTE fields in forms for TYPO3 extensions, includes marginal sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'WebdevelopmentBarlian\\DemoRteFields\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'David Bruchmann',
    'author_email' => 'david.bruchmann@gmail.com',
    'author_company' => 'Webdevelopment Barlian',
    'version' => '1.0.0',
];
