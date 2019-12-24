<?php


namespace LittleChou\Codeigniter\Tracy\Panels;


use Tracy\IBarPanel;

class Session implements IBarPanel
{
    function getTab()
    {
        // TODO: Implement getTab() method.
        return '<span title="Explaining tooltip">
            <img src="https://img.icons8.com/dotty/15/000000/group-background-selected.png">
            <span class="tracy-label">session</span>
        </span>';
    }

    function getPanel()
    {
        // TODO: Implement getPanel() method.
        ob_start();
        require_once CI_TRACY_LAYOUT . 'session/panel.php';
        $buffer = ob_get_contents();
        ob_get_clean();
        return $buffer;
    }

}