<?php
namespace Babirusa\Toman\Model\Config\Backend\Currency;

class DefaultCurrency extends \Magento\Config\Model\Config\Backend\Currency\DefaultCurrency
{
    protected function _getInstalledCurrencies()
    {
        $_installed = parent::_getInstalledCurrencies();
        array_unshift($_installed , 'IRT');
        return $_installed;
    }
}