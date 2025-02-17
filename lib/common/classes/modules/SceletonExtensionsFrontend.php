<?php
/**
 * This file is part of osCommerce ecommerce platform.
 * osCommerce the ecommerce
 * 
 * @link https://www.oscommerce.com
 * @copyright Copyright (c) 2000-2022 osCommerce LTD
 * 
 * Released under the GNU General Public License
 * For the full copyright and license information, please view the LICENSE.TXT file that was distributed with this source code.
 */

namespace common\classes\modules;

use yii;

abstract class SceletonExtensionsFrontend extends \frontend\controllers\Sceleton {

    use SceletonExtensionsTrait;

    public function __construct($id, $module = null)
    {
        $this->initConstruct();
        parent::__construct($id, $module);
    }

}
