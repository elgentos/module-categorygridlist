<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Elgentos\CategoryGridList\Model\Category\Attribute\Source;

use Magento\Catalog\Helper\Product\ProductList;
use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class GridListMode extends AbstractSource
{

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['value' => 0, 'label' => __('Default')],
                ['value' => ProductList::VIEW_MODE_GRID, 'label' => __('Grid')],
                ['value' => ProductList::VIEW_MODE_LIST, 'label' => __('List')]
            ];
        }
        return $this->_options;
    }
}

