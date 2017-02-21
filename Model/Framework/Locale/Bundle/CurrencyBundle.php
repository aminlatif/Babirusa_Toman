<?php

namespace Magento\Framework\Locale\Bundle;

class CurrencyBundle extends DataBundle
{
    /**
     * @var string
     */
    protected $path = 'ICUDATA-curr';
    /**
     * @param string $locale
     * @param string $path
     * @return null|\ResourceBundle
     */

    protected function createResourceBundle($locale, $path)
    {
        try {
            $currencyRelativePath = 'data'.DIRECTORY_SEPARATOR.'curr';
            $currencyAbsolutePath = dirname(__FILE__).DIRECTORY_SEPARATOR.$currencyRelativePath;
            $currencyPath = $currencyAbsolutePath;

            $bundle = new \ResourceBundle($locale, $currencyPath);

        } catch (\Exception $e) {
            $bundle = null;
        }
        return $bundle;
    }
}