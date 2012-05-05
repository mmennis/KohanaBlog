<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Comment extends Controller {
	
	public function action_post() {
		$comment = new Model_Comment();
		$comment->values($this->request->post());
		$comment->save();
		
		$this->request->redirect("index.php/article/view/".$comment->article_id);
	}
}