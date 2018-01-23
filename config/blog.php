<?php

return [

// Mail Notification
    'mail_notification' => env('MAIL_NOTIFICATION') ?: false,

// Default Avatar
    'default_avatar' => env('DEFAULT_AVATAR') ?: '/images/default.png',

// Default Icon
    'default_icon' => env('DEFAULT_ICON') ?: '/images/favicon.ico',

// Meta
    'meta' => [
        'keywords' => 'gitxuzan Blog,blog,pigjian,laravel,vuejs,PJ Blog',
        'description' => 'Nothing is impossible in gitxuzan Blog'
    ],

// Social Share
    'social_share' => [
        'article_share' => env('ARTICLE_SHARE') ?: true,
        'discussion_share' => env('DISCUSSION_SHARE') ?: true,
        'sites' => env('SOCIAL_SHARE_SITES') ?: 'google,twitter,weibo',
        'mobile_sites' => env('SOCIAL_SHARE_MOBILE_SITES') ?: 'google,twitter,weibo,qq,wechat',
    ],

// Google Analytics
    'google' => [
        'id' => env('GOOGLE_ANALYTICS_ID', 'Google-Analytics-ID'),
        'open' => env('GOOGLE_OPEN') ?: false
    ],

// Article Page
    'article' => [
//        'title' => 'Nothing is impossible.',
        'title' => 'Never give up.',
        'description' => 'gitxuzan',
        'number' => 15,
        'sort' => 'desc',
        'sortColumn' => 'published_at',
    ],

// Discussion Page
    'discussion' => [
        'number' => 20,
        'sort' => 'desc',
        'sortColumn' => 'created_at',
    ],

// Footer
    'footer' => [
        'github' => [
            'open' => true,
            'url' => 'https://github.com/Xuzan9396',
        ],
        'twitter' => [
            'open' => true,
            'url' => 'https://twitter.com/pigjian'
        ],
        'meta' => '© gitxuzan Blog 2016. Powered By gitxuzan',
    ],

//    'license' => 'Powered By gitxuzan.<br/>This article is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.',
    'license' => 'Powered By gitxuzan.<br/>采用<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">知识共享 署名-非商业性使用 4.0 国际 许可协议</a>进行许可.',

];