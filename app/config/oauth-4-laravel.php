<?php

return array( 

    /*
    |--------------------------------------------------------------------------
    | oAuth Config
    |--------------------------------------------------------------------------
    */

    /**
     * Storage
     */
    'storage' => 'Session', 

    /**
     * Consumers
     */
    'consumers' => array(

        /**
         * Facebook
         */
        'Facebook' => array(
            'client_id'     => '485243001575422',
            'client_secret' => '5a9a22f44ba762a8665b99b236f57e6b',
            'scope'         => array('email'),
        ),      

    )

);