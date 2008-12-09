<?php

/**
 * diary components.
 *
 * @package    OpenPNE
 * @subpackage diary
 * @author     Rimpei Ogawa <ogawa@tejimaya.com>
 */
class diaryComponents extends sfComponents
{
  public function executeMyDiaryList()
  {
    $this->diaryList = DiaryPeer::retrieveByMemberId($this->getUser()->getMemberId(), 5);
  }
}