<?php
namespace faryshta\assets;

use yii\web\AssetBundle;

/**
 * @author Angel (Guevara) López <angeldelcaos@gmail.com>
 */
class ActiveFormDisableSubmitButtonsAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = "@faryshta/disable-submit-buttons/js";

    /**
     * @inheritdoc
     */
    public $js = ['disable-submit-buttons.js',];

    /**
     * @inheritdoc
     */
    public $depends = ['yii\\web\\JqueryAsset'];
}
