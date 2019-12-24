<?php
/**
 * Session Panel
 *
 * @another 小周
 */

namespace LittleChou\Codeigniter\Tracy\Panels;

use Tracy\IBarPanel;

class Database implements IBarPanel
{
    function getTab()
    {
        // TODO: Implement getTab() method.
        return '<span title="Explaining tooltip">
            <img src="https://img.icons8.com/offices/15/000000/database.png">
            <span class="tracy-label">database</span>
        </span>';
    }

    function getPanel()
    {
        // TODO: Implement getPanel() method.
        ob_start();
        require_once CI_TRACY_LAYOUT . 'database/panel.php';
        $buffer = ob_get_contents();
        ob_get_clean();
        return $buffer;
    }
}