<?php

/**
 *
 * @Author              Ngo Quang Cuong <bestearnmoney87@gmail.com>
 * @Date                2016-12-13 18:27:07
 * @Last modified by:   nquangcuong
 * @Last Modified time: 2016-12-13 18:27:36
 */

namespace Firstflight\Firstship\Model\ResourceModel\RegionName;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'region_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init(
            \Firstflight\Firstship\Model\RegionName::class,
            \Firstflight\Firstship\Model\ResourceModel\RegionName::class
        );
    }
}
