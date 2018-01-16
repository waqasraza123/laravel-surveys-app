<?php

return array(


    'pdf' => array(
        'enabled' => true,
        'binary' => base_path('vendor/h4cc/wkhtmltopdf-i386/bin/wkhtmltopdf-i386'),
        //'binary'  => '/usr/bin/wkhtmltopdf',
         //       'binary'  => '"C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf"',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),
    'image' => array(
        'enabled' => true,
        'binary'  => '/usr/local/bin/wkhtmltoimage',
        'timeout' => false,
        'options' => array(),
        'env'     => array(),
    ),


);
