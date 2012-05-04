<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Article extends Controller {
	
	const INDEX_PAGE = 'index.php/article';
	
	public function action_index() {
		$articles = ORM::factory('article')->find_all();	// load all articles
		
		$view = new View('article/index');	// load the article/index.php view
		$view->set('articles', $articles);
		
		$this->response->body($view);		// render the view in the response
	}
	
	// loads the new article form
	public function action_new() {
		$article = new Model_Article();
		
		$view = new View('article/edit');
		$view->set("article", $article);
		
		$this->response->body($view);
	}
	
	// edit the article
	public function action_edit() {
		$article_id = $this->request->param('id');
		$article = new Model_Article($article_id);
		
		$view = new View('article/edit');
		$view->set('article', $article);
		
		$this->response->body($view);
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
		$article->values($_POST);	// populate $article object from $_POST array
		$article->save();			// saves the article to the database
		
		$this->request->redirect(self::INDEX_PAGE);	// redirects back to articles page
	}
	
}