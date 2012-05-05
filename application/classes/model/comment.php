<?php defined('SYSPATH') or die('No direct script access.'); 

class Model_Comment extends ORM {
	
	protected $_belongs_to = array (
		// a comment is attached to one article
		'article'	=> array(
			'model'		=> 'article',
			'foreign_key' => 'article_id'
		),		
	);
}