<?php

namespace phpunit {

    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;

    class bundle_phpunit extends \adapt\bundle
    {

        public function __construct($data)
        {
            parent::__construct('phpunit', $data);
        }

        public function install()
        {
            if (parent::install()) {
                
            }
        }

        public function boot()
        {
            if (parent::boot()) {

                return true;
            }

            return false;
        }

    }

}

?>