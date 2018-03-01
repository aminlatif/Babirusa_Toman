<?php
namespace Babirusa\Toman\Model\Framework\Locale;

class Format extends \Magento\Framework\Locale\Format
{
    public function getPriceFormat($localeCode = null, $currencyCode = null)
    {
        if ($currencyCode) {
            $currency = $this->currencyFactory->create()->load($currencyCode);
            $_currencyCode = $currencyCode;
        } else {
            $currency = $this->_scopeResolver->getScope()->getCurrentCurrency();
            $_currencyCode = $currency->getCurrencyCode();
        }

        $_format = parent::getPriceFormat($localeCode, $currencyCode);

        if($_currencyCode == 'IRT'){
            $_format["precision"]=0;
            $_format["requiredPrecision"]=0;
        }
        return $_format;
    }
}