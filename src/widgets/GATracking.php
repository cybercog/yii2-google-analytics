<?php
namespace cybercog\yii\googleanalytics\widgets;

use yii\base\Widget;

class GATracking extends Widget
{
    public $trackingId = null;

    private $_viewParams;

    public function init()
    {
        parent::init();

        $this->_viewParams = [
            'trackingId'     => $this->trackingId,
            'trackingParams' => [
                // :TODO: Add params
            ],
        ];
    }


    public function run()
    {
        echo $this->render('tracking', $this->_viewParams);
    }
} 