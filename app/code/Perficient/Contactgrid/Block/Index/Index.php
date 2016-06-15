<?php
/**
 * Copyright © 2015 Perficient . All rights reserved.
 */
namespace Perficient\Contactgrid\Block\Index;
use Perficient\Contactgrid\Block\BaseBlock;
class Index extends BaseBlock
{
	/**
	 * Returns action url for contact form
	 *
	 * @return string
	 */
	public function getFormAction()
	{
		return $this->getUrl('contactgrid/index/post', ['_secure' => true]);
	}
}
