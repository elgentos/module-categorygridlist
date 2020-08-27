<?php

namespace Elgentos\CategoryGridList\Plugin\Block\Product;

use Magento\Framework\Registry;

class ListProductPlugin
{

    /**
     * @var Registry
     */
    public $registry;

    public function __construct(
        Registry $registry
    ) {
        $this->registry = $registry;
    }

    public function afterGetMode(\Magento\Catalog\Block\Product\ListProduct $subject, $result)
    {
        $category = $this->registry->registry('current_category');

        if ($category) {
            return $category->getGridListMode() ?: $result;
        }

        return $result;
    }
}
