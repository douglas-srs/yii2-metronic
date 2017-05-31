<?php

/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace douglassrs\metronic\bundles;

/**
 * SpinnerAsset for spinner widget.
 */
class ListViewSortableAsset extends BaseAssetBundle {

    /**
     * @var array JS
     */
    public $js = [
        'global/scripts/sortable.listview.js',
    ];

    /**
     * @var array depends
     */
    public $depends = [
        'yii\jui\JuiAsset',
    ];

}
