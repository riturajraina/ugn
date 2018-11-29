<?php
    namespace Excel\Config;

    class ExcelConfig
    {
        protected static $configArray = array  (
                                            
                                        );

        public static function get($key)
        {
            return self::$configArray[$key];
        }

    }
