<?php
return [
    'namespace' => 'Nucleus',
    'slim-api' => [
        'modules' => [
            'SlimApi\Phinx', //provides migrations
            'SlimApi\Eloquent', //provides ORM
            'SlimApi\Mvc' //provides structure
        ]
    ]
];
