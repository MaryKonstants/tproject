<?php
return [
    'adminEmail' => 'admin@example.com',
    'supportEmail' => 'support@example.com',
    'senderEmail' => 'noreply@example.com',
    'senderName' => 'Example.com mailer',
    'user.passwordResetTokenExpire' => 3600,
    'user.passwordMinLength' => 8,
    'domain' => 'https://yourdomain.example',
    'custom_view_for_modules' => [
        'blog_front' => [
            'index' => '@frontend/views/custom_view_for_modules/blog_front/index',
            'view' => '@frontend/views/custom_view_for_modules/blog_front/view',
        ],
        'page_front' => [
            'view' => '@frontend/views/custom_view_for_modules/page_front/view',
        ],
    ],
];
