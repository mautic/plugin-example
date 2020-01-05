<?php declare(strict_types=1);

return [
    'name'        => 'Example Bundle',
    'description' => 'It does nothing. But it\'s looking great doing so!',
    'version'     => '0.0.0',
    'author'      => 'Mautic Community',

    'services' => [
        'commands' => [
            'cronfig.command.do_nothing' => [
                'class' => \MauticPlugin\MauticExampleBundle\Command\DoNothing::class,
                'tag'   => 'console.command',
            ],
        ],
    ],
];
