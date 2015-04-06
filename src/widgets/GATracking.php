<?php
/**
 * @link https://github.com/cybercog/yii2-twittable
 * @copyright Copyright (c) 2015 LLC CyberCog
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace cybercog\yii\googleanalytics\widgets;

use yii\base\Widget;

/**
 * Class GATracking
 * @package cybercog\yii\googleanalytics\widgets
 * @author Anton Komarev <ell@cybercog.su>
 */
class GATracking extends Widget
{
    /**
     * The GA tracking ID
     * @var null
     */
    public $trackingId = null;

    /**
     * Anonymize IP
     * @var string
     */
    public $anonymizeIp = 'true';

    /**
     * In-Page-Analysis
     * extended link assignment
     * @var bool
     */
    public $inPageAnalysis = false;

    /**
     * @var array
     */
    private $_viewParams;

    public function init()
    {
        parent::init();

        $this->_viewParams = [
            'trackingId'     => $this->trackingId,
            'trackingParams' => [
                'anonymizeIp'    => $this->anonymizeIp,
                'inPageAnalysis' => $this->inPageAnalysis
                // :TODO: Add more params
            ],
        ];
    }

    public function run()
    {
        echo $this->render('tracking', $this->_viewParams);
    }
}