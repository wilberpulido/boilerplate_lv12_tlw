<?php

return [
    'title' => 'Simple plans for everyone',
    'subtitle' => 'Choose the plan that best fits your needs.',
    'plans' => [
        'starter' => [
            'name' => 'Starter',
            'price' => '0',
            'description' => 'Great for small personal projects.',
            'features' => ['1 Project', 'Email support', 'Community access'],
            'button' => 'Start for free',
            'featured' => false,
        ],
        'pro' => [
            'name' => 'Professional',
            'price' => '19',
            'description' => 'For professionals who need more power.',
            'features' => ['Unlimited projects', '24/7 Support', 'Advanced analytics', 'Custom domain'],
            'button' => 'Subscribe now',
            'featured' => true,
        ],
    ],
];
