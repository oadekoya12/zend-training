<?php
return [
    //The database access credentials
    'db' => [
        'dsn' => '127.0.0.1',
        'username' => 'vagrant',
        'password' => 'vagrant',
        'database' => 'phpcourse'
    ],

    'default_timezone' => 'America/Los_Angeles',

    // The sortby options
    'sort_by' => [
        'default' => 'id',
        'date',
        'status',
        'amount',
        'customer'
    ],

    // The status options
    'status_codes' => [
        'default' => 'open',
        'cancelled',
        'held',
        'invoiced',
        'complete'
    ],

    // The orders table headings
    'orders' => [
        'Order #',
        'Date',
        'Customer',
        'Status',
        'Total',
        'Description'
    ],

    // Form config
    'forms' => [
        'filter' => [
            'name' => 'filter',
            'id' => 'filter',
            'action' => 'index.php',
            'method' => 'post',
            'layout' => 'horizontal',
            'elements' => [
                1 => [
                    'label' => 'Search for Order#:',
                    'type' => 'text',
                    'name' => 'filter',
                    'class' => '',
                    'divclass' => 'inline',
                    'size' => 5
                ],
                2 => [
                    'label' => 'Sort by:',
                    'type' => 'select',
                    'name' => 'sort_by',
                    'divclass' => 'inline',
                    'all_option' => false
                ],
                3 => [
                    'label' => 'Filter on Order Status:',
                    'type' => 'select',
                    'name' => 'status_codes',
                    'divclass' => 'inline',
                    'all_option' => true
                ],
                4 => [
                    'type' => 'submit',
                    'class' => 'button',
                    'divclass' => 'inline',
                    'value' => 'Reload'
                ],
            ],
        ],
        'new_order' => [
            'name' => 'addorder',
            'id' => 'addorder',
            'action' => 'index.php',
            'method' => 'post',
            'layout' => 'vertical',
            'elements' => [
                2 => [
                    'label' => 'Description:',
                    'type' => 'textarea',
                    'name' => 'description',
                    'class' => '',
                    'id' => '',
                    'cols' => 50,
                    'rows' => 4
                ],
                1 => [
                    'label' => 'Amount:',
                    'type' => 'text',
                    'name' => 'amount',
                    'class' => '',
                    'id' => '',
                    'size' => 6
                ],
                3 => [
                    'label' => 'Customer:',
                    'type' => 'select',
                    'name' => 'customer',
                    'table' => 'customers',
                    'all_option' => false
                ],
                4 => [
                    'type' => 'submit',
                    'class' => 'button',
                    'value' => 'Add Order'
                ],
            ],
        ],
    ],

    // Company information
    'company' => [
        'name' => 'Zend Technologies',
        'type' => 'Inc.',
        'parent' => 'Rogue Wave',
        'web' => 'www.zend.com',
        'copyright' => 'All rights reserved.',
        'uris' => [
            'privacy_policy' => 'en/terms-and-conditions#privacy',
            'terms_and_conditions' => 'en/terms-and-conditions',
            'feedback' => 'en/contact',
            'contact' => 'en/company/contact-us'
        ]
    ],

    // Page information
    'page' => [
        'title' => 'PHP Foundations',
        'project_name' => 'Final Project - Order Inquiry',
        'script_meta' => [
            'script' => 'index.php',
            'date' => date('M d, Y'),
            'time' => date('h:i:s a'),
        ],
    ],

    // Templates
    'templates' => [
        'main' => 'main',
        'content' => 'content_main',
        'content_new_order' => 'content_new_order',
        'form_result_content' => 'content_form_result'
    ]
];


