<?php

/**
 * Secret stuff
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Gamma extends Application {

    function __construct() {
        parent::__construct();

        // added the access control for admin user only
        $this->restrict(ROLE_ADMIN);
    }

    //-------------------------------------------------------------
    //  We could tell you what was here, but...
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'gamma';
        $this->render();
    }

}
