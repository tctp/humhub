<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2018 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

use yii\helpers\Html;

?>

<?php if ($numItems > 0): ?>
    <div class="text-center" style="filter:opacity(.6);font-size:12px">
        <small>
            <?php foreach ($items as $item): ?>
                <?= Html::a($item['label'], $item['url']); ?>&nbsp;&middot;&nbsp;
            <?php endforeach; ?>
        </small>
    </div>
    <br/>
<?php endif; ?>
