<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Article extends Controller_Template {
	
	const INDEX_PAGE = 'index.php/article';
	public $template = 'template';
	
	public function action_index() {
		$articles = ORM::factory('article')->find_all();	// load all articles
		
		$view = new View('article/index');	// load the article/index.php view
		$view->set('articles', $articles);
		
		$this->template->set('content', $view);
	}
	
	public function action_view() {
		$article_id = $this->request->param('id');
		$article = ORM::factory('article', $article_id);
		$view = new View('article/single');
		$view->set("article", $article);
		
		$this->template->set('content', $view);
	}
	
	// loads the new article form
	public function action_new() {
		$article = new Model_Article();
		
		$view = new View('article/edit');
		$view->set("article", $article);
		
		$this->template->set('content', $view);
	}
	
	// edit the article
	public function action_edit() {
		$article_id = $this->request->param('id');
		$article = new Model_Article($article_id);
		
		$view = new View('article/edit');
		$view->set('article', $article);
		
		$this->template->set('content', $view);
	}
	
	// delete the article
	public function action_delete() {
		$article_id = $this->request->param('id');
		$article = new Model_Article($article_id);
		
		$article->delete();
		$this->request->redirect(self::INDEX_PAGE);
	}
	
	// save the article
	public function action_post() {
		$article_id = $this->request->param('id');
		$article = new Model_Article($article_id);
		$article->values($this->request->post());	// populate $article object from $_POST array
		$errors = array();
		
		try {
			$article->save();			// saves the article to the database
			$this->request->redirect(self::INDEX_PAGE);
		} catch (ORM_Validation_Exception $ex) {
			$errors = $ex->errors('validation');
		}
		
		$view = new View('article/edit');
		$view->set("article", $article);
		$view->set('errors', $errors);
		
		$this->template->set('content', $view);
	}
	
}