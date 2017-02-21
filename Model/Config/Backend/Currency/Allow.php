<?php
namespace Babirusa\Toman\Model\Config\Backend\Currency;

class Allow extends \Magento\Config\Model\Config\Backend\Currency\Allow
{
    protected function _getInstalledCurrencies()
    {
        $_installed = parent::_getInstalledCurrencies();
        array_unshift($_installed , 'IRT');
        return $_installed;
    }
}