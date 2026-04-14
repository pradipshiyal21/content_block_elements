<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'testing',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '15.0.0-15.99.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Nitsan\\Testing\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Pradip Shiyal',
    'author_email' => 'pradip.shiyal@mail.nitsan.ai',
    'author_company' => 'nitsan',
    'version' => '1.0.0',
];
