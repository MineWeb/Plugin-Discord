<?php
class DiscordController extends DiscordAppController{

    public function index(){

        // Chargement du Model Tutorial
        $this->loadModel('Discord.Info');

        //On enregistre dans $datas le contenu de toute la table tutorial
        $datas = $this->Info->find('all');

        //On passe la variable à la vue afin de pouvoir la réutiliser dans index.ctp
        $this->set(compact('datas', 'variable', 'infos'));

        //Pour passer plusieurs variable à la vue :
        //$this->set(compact('datas', 'variable', 'infos'));

        //Pour donner un titre à votre page : Dans le html <title> Titre <title>
        $this->set('title_for_layout', 'Discord');
    }

    public function admin_index(){
        if($this->isConnected AND $this->User->isAdmin()){
            $this->loadModel('Discord.Info');

            //Si la requete est de type ajax
            if($this->request->is('ajax')){
                $this->autoRender = null;

                //Je récupère le champs name="pseudo"
                $api = $this->request->data['api'];

                $this->Info->add($api);

                //Envoi réponse en ajax
                $this->response->body(json_encode(array('statut' => true, 'msg' => $this->Lang->get('GLOBAL__SUCCESS'))));
            }else{
                //Je déclare le thème du panel admin
                $this->layout = 'admin';

                //Je récupère les données de ma base.
                $datas = $this->Info->get();

                $this->set(compact('datas'));
            }
        }else {
            $this->redirect('/');
        }
    }

    public function admin_delete($id){
        if($this->isConnected AND $this->User->isAdmin()){
            $this->autoRender = null;

            $this->loadModel('Discord.Info');

            //J'utilise _delete() car delete() existe déjà avec cakephp
            $this->Info->_delete($id);

            //Redirection vers notre page
            $this->redirect('/admin/discord');
        }else {
            $this->redirect('/');
        }
    }
}