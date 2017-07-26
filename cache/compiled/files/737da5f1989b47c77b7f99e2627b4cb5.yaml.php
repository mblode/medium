<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mblode/Sites/medium/user/config/site.yaml',
    'modified' => 1500893206,
    'data' => [
        'title' => 'Medium',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Matthew Blode',
            'email' => 'm.blode@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
