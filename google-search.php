<?php
/*
Google Custom Search Plugin
*/

class csearch
{
	private $directory;
	private $urltoroot;


	public function load_module($directory, $urltoroot)
	{
		$this->directory = $directory;
		$this->urltoroot = $urltoroot;
	}


	public function suggest_requests() // for display in admin interface
	{
		return array(
			array(
				'title' => 'Search',
				'request' => 'csearch',
				'nav' => 'M', // 'M'=main, 'F'=footer, 'B'=before main, 'O'=opposite main, null=none
			),
		);
	}


	public function match_request($request)
	{
		return $request == 'csearch';
	}


	public function process_request($request)
	{
		$qa_content = qa_content_prepare();

		$qa_content['title'] = qa_lang('main/search_title');
		$cseid = qa_opt('cse_id');
$fields .= '<script async src="https://cse.google.com/cse.js?cx='.$cseid.'"></script><div class="gcse-search"></div>';
$qa_content['custom'] = $fields;
		return $qa_content;
	}
}
