<?php

return [
    /**
     * When the dial code and the number are in the same field,
     * this parameter is used to filter the Ivorian numbers.
     */
    'dial_code' => ['225', '00225', '+225'],

    /**
     * this parameter is used to make the number in a string composed only of digits
     * If in database your contacts were formatted with () you must add them as a parameter.
     */
    'separators' => [
        ' ', '-', '(', ')'
    ],

    /**
     * Formatting the number after processing
     */
    'format' => [
        /**
         * Separator used after formatting
         */
        'separator' => ' ',

        /**
         * number formatting after migration
         */
        'model_migrate' => 'XX-XX-XX-XX-XX',

        /**
         * number formatting after migration
         */
        'model_rollback' => 'XX-XX-XX-XX'
    ],

    'gsm' => [
        'orange' => [
            'mobile_digit' => '07',

            'fix_digit' => '27',

            'fix' => [
                '202', '203', '212', '213', '215', '217', '224',
                '225', '234', '235', '243', '244', '245', '306',
                '316', '319', '327', '337', '347', '359', '368'
            ],

            'mobile' => [
                '07', '08', '09', '47', '48', '49', '57', '58',
                '59', '67', '68', '69', '77', '78', '79', '87',
                '88', '89', '97' , '98'
            ],
        ],
        'mtn' => [
            'mobile_digit' => '05',

            'fix_digit' => '25',

            'fix' => [
                '200', '210', '220', '230', '240', '300', '310',
                '320', '330', '340', '350', '360',
            ],

            'mobile' => [
                '04', '05', '06', '44', '45', '46', '54', '55',
                '56', '64', '65', '66', '74', '75', '76', '84',
                '85', '86', '94', '95', '96'
            ],
        ],
        'moov' => [
            'mobile_digit' => '01',

            'fix_digit' => '21',

            'fix' => [
                '208', '218', '228', '238'
            ],

            'mobile' => [
                '01', '02', '03', '40', '41', '42', '43', '50',
                '51', '52', '53', '70', '71', '72', '73'
            ],
        ]
    ],
];
