<?php
class DiscordController extends AppController {

    public function index(){
		$this->loadModel('Discord.Discord');
		$this->set('title_for_layout', 'Discord');
        $datas = $this->Discord->find('all');
        $this->set(compact('datas', 'variable', 'infos'));
    }

    public function admin_index(){
        if($this->isConnected AND $this->User->isAdmin()){
			$this->loadModel('Discord.Discord');
			$this->layout = 'admin';
			$datas = $this->Discord->find('all');
			
			$this->set(compact('datas'));
        }else {
            $this->redirect('/');
        }
    }
	
	public function admin_add_ajax(){
        if($this->isConnected AND $this->User->isAdmin()){
            if($this->request->is('ajax')){
				$this->loadModel('Discord.Discord');
                $this->autoRender = null;

                $api = $this->request->data['api'];

				$this->Discord->create();
				$this->Discord->set(['api_discord' => $api]);
				$this->Discord->save();

                $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('GLOBAL__SUCCESS'))));
            }
        }else {
            $this->redirect('/');
        }
    }

    public function admin_delete($id){
        if($this->isConnected AND $this->User->isAdmin()){
			$this->loadModel('Discord.Discord');
            $this->autoRender = null;

            $this->Discord->delete($id);

            $this->redirect('/admin/discord');
        }else {
            $this->redirect('/');
        }
    }
}