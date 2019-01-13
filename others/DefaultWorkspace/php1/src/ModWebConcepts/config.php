<?php
return [
    'forms' => [
        'add_item' => [
            'name' => 'addChecklistItem',
            'id' => 'addChecklistItem',
            'class' => '',
            'action' => 'form_present_processing.php',
            'method' => 'post',
            'layout' => 'vertical',
            'elements' => [
                1 => [
                    'label' => 'Enter the checklist item:',
                    'type' => 'text',
                    'name' => 'item',
                    'class' => '',
                    'id' => 'item',
                    'size' => 90
                ],
                2 => [
                    'label' => 'Enter the priority:',
                    'type' => 'text',
                    'name' => 'priority',
                    'class' => '',
                    'id' => 'priority',
                    'size' => 5
                ],
                3 => [
                    'type' => 'submit',
                    'class' => 'button',
                    'value' => 'Submit'
                ],
            ],
        ],
    ],
];


