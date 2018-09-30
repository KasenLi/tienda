<?php
return array(
    // set your paypal credential
    'client_id' => 'ARWxKZTk3jVE_2A5W6Y7ePq_nU4uV3DKjh6Im3nZ-ZSJziUoJtROtS7qwjBW9URMBqKH3lVbRENUvj0J',
    'secret' => 'EDoXO9WcYN5n1mVXT_O-xsYyto8UWcnaUvM6lSvB4hZjt_K3DV6fCJS4TmrQ5XUjgWsrGKD_uL0dWVoy',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);