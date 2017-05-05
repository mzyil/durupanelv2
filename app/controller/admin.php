<?php

if (!url(1)){
    $_url[1] = 'index';
}

if (!file_exists(controller('admin/' . url(1)))){
    $_url[1] = 'index';
}

if (!session('login')){
    $_url[1] = 'login';
}

$admin['menu'] = [
    'index' => [
        'title' => 'Anasayfa',
        'icon' => 'icon-dashboard',
        'submenu' => [
            'index' => [
                'title' => 'Anasayfa'
            ]
        ]

    ],
    'users' => [
        'title' => 'Müşteriler',
        'icon' => 'icon-user',
        'submenu' => [
            'users' => [
                'title' => 'Müşteriler'
            ],
            'new-user' => [
                'title' => 'Müşteri Ekle'
            ]
        ]
    ],
    'allinterviews' => [
        'title' => 'Görüşmeler',
        'icon' => 'icon-comments-alt',
        'submenu' => [

            'allinterviews' => [
                'title' => 'Son Görüşmeler'
            ],
            'new-interview' => [
                'title' => 'Görüşme Ekle'
            ]
        ]
    ]
];

require controller('admin/' . url(1));
