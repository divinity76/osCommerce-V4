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

use common\classes\Migration;

/**
 * Class m230118_123112_banners
 */
class m230118_123112_banners extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $themes = \common\models\Themes::find()->asArray()->all();
        foreach ($themes as $theme) {
            $this->updateTheme($theme['theme_name'], 'lib/console/migrations/themes/m230118_123112_banners.json');
            $this->updateTheme($theme['theme_name'] . '-mobile', 'lib/console/migrations/themes/m230118_123112_banners.json');
        }
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
    }
}
