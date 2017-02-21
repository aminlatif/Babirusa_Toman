<?php
namespace Babirusa\Toman\Model\Config\Backend\Currency;

class Base extends \Magento\Config\Model\Config\Backend\Currency\Base
{
    protected function _getInstalledCurrencies()
    {
        $_installed = parent::_getInstalledCurrencies();
        array_unshift($_installed , 'IRT');
        return $_installed;
    }
}