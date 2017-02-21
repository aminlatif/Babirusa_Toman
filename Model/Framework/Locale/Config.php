<?php
namespace Babirusa\Toman\Model\Framework\Locale;

class Config extends \Magento\Framework\Locale\Config
{
    /**
     * @inheritdoc
     */
    public function getAllowedCurrencies()
    {
        $this->_allowedCurrencies[] = 'IRT';
        return $this->_allowedCurrencies;
    }
}