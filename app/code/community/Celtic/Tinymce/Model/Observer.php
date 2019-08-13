<?php
class Celtic_Tinymce_Model_Observer extends Mage_Core_Model_Abstract
{
    public function addConfigBlock($observer)
    {
        $layout = $observer->getLayout();
        if(!$layout)
        {
            return;
        }
        $head = $layout->getBlock('head');
        if(!$head)
        {
            return;
        }
        $block = $layout->createBlock('core/template', 'mcejs')->setTemplate('celticmce/js.phtml');

        $head->insert($block, 'calendar', true);
    }
}