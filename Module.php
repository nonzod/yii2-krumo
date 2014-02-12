<?php

namespace nonzod\krumo;

/**
* krumo module
*
* @author Nicola Tomassoni <nicola@digisin.it>
*/
class Module extends \yii\base\Module {
  
  public function init() {
    parent::init();
    
    Yii::import("nonzod.krumo.krumo");
  }
}