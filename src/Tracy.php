<?php


namespace LittleChou\Codeigniter\Tracy;

define('CI_TRACY_LAYOUT',dirname(__FILE__). DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR);

use LittleChou\Codeigniter\Tracy\Panels\Database;
use LittleChou\Codeigniter\Tracy\Panels\Session;
use Tracy\Debugger;

class Tracy
{
    public function __construct($mode = 'development')
    {
        Debugger::getBar()
            ->addPanel(new Database())
            ->addPanel(new Session());
        Debugger::enable($mode);
    }
}