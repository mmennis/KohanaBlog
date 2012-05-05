<?php defined('SYSPATH') or die('No direct script access.'); 

class Model_Article extends ORM {
	
	// contains many comments
	protected $_has_many = array(
		// an article has many comments
		'comments' => array(
			'model'			=> 'comment',
			'foreign_key'	=> 'article_id'
		),		
	);
	
	/**
	 * Rules for article model validation
	 * 
	 * @return array
	 */
	public function rules() {
		return array(
			'title' => array(
				array('not_empty'),
			),
			'content' => array(
				array('not_empty'),
				array(
					'min_length',
					array(':value', 10)
				),
			),
		);
	}
}