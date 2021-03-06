<?php
/**
 * @copyright Copyright (c) 2014 Digital Deals s.r.o.
 * @license http://www.digitaldeals.cz/license/
 */

namespace  douglassrs\metronic\bundles;

/**
 * SpinnerAsset for spinner widget.
 */
class SpinnerAsset extends BaseAssetBundle
{

    public $js = [
        'plugins/fuelux/js/spinner.min.js',
    ];

    public $depends = [
        'douglassrs\metronic\bundles\CoreAsset',
    ];
}
