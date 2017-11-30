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
 * @package     Mageplaza_Blog
 * @copyright   Copyright (c) 2017 Mageplaza (http://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */
namespace Mageplaza\Shopbybrand\Model\Config\Source\Widget;

class ShowType implements \Magento\Framework\Option\ArrayInterface
{

	public function toOptionArray()
	{
		return [
			['value' => 'option_id', 'label' => __('Brand By OptionID Widget')],
			['value' => 'featured', 'label' => __('Featured Brand Widget')]
		];
	}

}
