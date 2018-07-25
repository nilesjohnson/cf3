<?php
namespace App\Controller;

use App\Controller\AppController;


class ConferencesController extends AppController
{
public function beforeFilter(Event $event) {
		parent::beforeFilter($event);
		//we will use admin prefix for editing stuff
		$this->Auth->allow();
}

    public function index()
    {
		$this->set('view_title','Upcoming Meetings');
		$query=$this->Conferences->find('all')->where(['end_date > '=>date('Y-m-d', strtotime("-1 week"))]);
		$conferences = $this->paginate($query);
		$this->set(compact('conferences'));
		//
	/*	$this->render_list(['tagstring' => $tagstring,
			     'conditions' => array (
						    "Conference.end_date >" => date('Y-m-d', strtotime("-1 week"))),
			     ));*/
				 
	   // BAKED
	   // $conferences = $this->paginate($this->Conferences);
       // $this->set(compact('conferences'));
    }

    
}
