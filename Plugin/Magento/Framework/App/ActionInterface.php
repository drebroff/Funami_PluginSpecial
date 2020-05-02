<?php


namespace Funami\PluginSpecial\Plugin\Magento\Framework\App;

class ActionInterface
{

    public function afterexecute(
        \Magento\Framework\App\ActionInterface $subject,
        $result
    ) {
        $a = 132;
        //Your plugin code
        return $result;
    }
}
