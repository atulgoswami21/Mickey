<?php
/*------------------------------------------------------------------------
# SM Listing Extend  - Version 1.1.0
# Copyright (c) 2016 YouTech Company. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: YouTech Company
# Websites: http://www.magentech.com
-------------------------------------------------------------------------*/
namespace Sm\ListingExtend\Model\Config\Source;
class IncludeExclude implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{
		return [
			['value'=>1, 'label'=>__('Include')],
			['value'=>0, 'label'=>__('Exclude')]
		];
	}
}