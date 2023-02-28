<?php
namespace Pegasus\ProductListingToolBar\Plugin\Model;
use Magento\Store\Model\StoreManagerInterface;

class Config
{
    protected $_storeManager;
    public function __construct(
        StoreManagerInterface $storeManager
    )
    {
        $this->_storeManager = $storeManager;
    }
    public function afterGetAttributeUsedForSortByArray(\Magento\Catalog\Model\Config $catalogConfig, $options)
    {
        unset($options['position']);
        unset($options['product_id']);

        $customOption['newest_product'] = __('Newest');
        $options = array_merge($customOption, $options);
        
        return $options;
    }
}