<?php
/*
Google Custom Search Plugin
*/

class qa_html_theme_layer extends qa_html_theme_base
{    public function search()
	{
		$search = $this->content['search'];

		$this->output('<div class="qa-search"><form METHOD="GET" ACTION="'.qa_opt('site_url').'csearch">',
			@$search['form_extra']
		);

		$this->search_field($search);
		$this->search_button($search);

		$this->output(
			'</form>',
			'</div>'
		);
	}
	
}	