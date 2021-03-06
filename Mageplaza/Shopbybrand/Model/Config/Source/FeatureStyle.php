<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Shopbybrand
 * @copyright   Copyright (c) 2017 Mageplaza (http://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
namespace Mageplaza\Shopbybrand\Model\Config\Source;

/**
 * Class FeatureStyle
 *
 * @package Mageplaza\Shopbybrand\Model\Config\Source
 */
class FeatureStyle implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Display slider
     */
    const DISLAY_SLIDER = 0;

    /**
     * Display simple
     */
    const DISPLAY_SIMPLE = 1;

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'label' => __('Slider View'),
                'value' => self::DISLAY_SLIDER
            ],
            [
                'label' => __('Simple View'),
                'value' => self::DISPLAY_SIMPLE
            ],
        ];
    }
}
