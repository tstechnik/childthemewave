<?php 

$aTheme = [
    'id'            => 'norsg',
    'title'         => 'Norsg',
    'description'   => 'Wave child theme to show theme inheritance',
    'thumbnail'     => 'theme.jpg',
    'version'       => '0.0.1',
    'author'        => 'Uemit Sevim',
    'settings'      => [
        [
            'group' => 'customize',
            'name'  => 'blSomeSetting',
            'type'  => 'bool',
            'value' => 1
        ]
    ],
    'parentTheme'   => 'wave',
    'parentVersions'=> ['1.3.1']
];