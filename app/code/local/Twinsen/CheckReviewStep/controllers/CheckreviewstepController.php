<?php
/**
 * Created by PhpStorm.
 * User: ekotlyar
 * Date: 13.01.2016
 * Time: 16:58
 */

class Twinsen_CheckReviewStep_CheckreviewstepController extends Mage_Core_Controller_Front_Action {
    public function indexAction(){
        $this->loadLayout();
        $this->renderLayout();
    }

}