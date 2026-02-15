<?php

return [
    'title' => 'Planes sencillos para todos',
    'subtitle' => 'Elige el plan que mejor se adapte a tus necesidades.',
    'plans' => [
        'starter' => [
            'name' => 'Básico',
            'price' => '0',
            'description' => 'Ideal para proyectos personales pequeños.',
            'features' => ['1 Proyecto', 'Soporte por email', 'Acceso a la comunidad'],
            'button' => 'Empezar gratis',
            'featured' => false,
        ],
        'pro' => [
            'name' => 'Profesional',
            'price' => '19',
            'description' => 'Para profesionales que necesitan potencia.',
            'features' => ['Proyectos ilimitados', 'Soporte 24/7', 'Analíticas avanzadas', 'Dominio personalizado'],
            'button' => 'Suscribirse ahora',
            'featured' => true,
        ],
    ],
];
