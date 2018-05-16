<?php
class Info extends DiscordAppModel{

    public function get(){
        return $this->find('all');
    }

    public function _delete($id){
        return $this->delete($id);
    }

    public function add($api){
        $this->create();
        $this->set(['api' => $api]);
        return $this->save();
    }
}