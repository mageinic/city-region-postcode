<?php
/**
 * MageINIC
 * Copyright (C) 2023 MageINIC <support@mageinic.com>
 *
 * NOTICE OF LICENSE
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see https://opensource.org/licenses/gpl-3.0.html.
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category MageINIC
 * @package MageINIC_CityRegionPostcode
 * @copyright Copyright (c) 2023 MageINIC (https://www.mageinic.com/)
 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author MageINIC <support@mageinic.com>
 */

namespace MageINIC\CityRegionPostcode\Model\ResourceModel\Region;

use Magento\Directory\Model\ResourceModel\Region\Collection as CoreCollection;

/**
 * CityRegionPostcode ResourceModel Collection Class
 */
class Collection extends CoreCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'region_id';

    /**
     * Initialize select object
     *
     * @return $this|Collection
     */
    protected function _initSelect()
    {
        $this->addFilterToMap('region_id', 'main_table.region_id');
        parent::_initSelect();
        return $this;
    }
}
