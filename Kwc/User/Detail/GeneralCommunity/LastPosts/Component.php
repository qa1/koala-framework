<?php
class Kwc_User_Detail_GeneralCommunity_LastPosts_Component extends Kwc_Posts_Latest_Component
{
    protected function _getSelect()
    {
        $select = parent::_getSelect();
        $select->whereEquals('user_id', $this->getData()->getPage()->row->id);
        return $select;
    }
}
