<?php

require "HiringManager.php";
require "Developer.php";

class DeveloperManager extends HiringManager
{
    /**
     * @return Developer
     */
    public function makeInterviewer() {
        return new Developer();
    }
}
