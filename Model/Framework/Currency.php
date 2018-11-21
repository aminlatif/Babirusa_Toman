<?php

namespace Babirusa\Toman\Model\Framework;

use Magento\Framework\App\CacheInterface;

class Currency extends \Magento\Framework\Currency
{
    public function __construct(
        CacheInterface $appCache,
        $options = null,
        $locale = null
    )
    {
        if ($options == "IRT") {
            $options = array();
            $options["precision"] = 0;
            $options["name"] = "Iranian Toman";
            $options["currency"] = "IRT";
            $options["symbol"] = "Toman";
            //$options["format"] = "#،##0.00 ¤";
            $options["format"] = "#,##0.00 ¤";
            if ($locale == "fa" || $locale == "fa_IR") {
                $options["symbol"] = "تومان";
            }
        }

        parent::__construct($appCache, $options, $locale);
    }

    public function toCurrency($value = null, array $options = array())
    {
        $locale = $this->getLocale();
        if ($this->_options['currency'] == 'IRT') {
            if ($locale == "fa" || $locale == "fa_IR") {
                $options["precision"] = 0;
            }else{
                $options["precision"] = 2;
            }
        }
        $currencyStr = trim(parent::toCurrency($value, $options));
        //$currencyStr = str_replace(",", "،", $currencyStr);
        return $currencyStr;
    }
}