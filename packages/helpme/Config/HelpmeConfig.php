<?php
    namespace Helpme\Config;

    class HelpmeConfig
    {
        protected static $configArray = array  (
                                            'SEPARATOR' => '||*!$!*||'
                                        );

        public static function get($key)
        {
            return self::$configArray[$key];
        }

    }
