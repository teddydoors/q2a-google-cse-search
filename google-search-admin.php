<?php
	class gsearch_admin {

		function allow_template($template)
		{
			return ($template!='admin');
		}	   
			
		function admin_form(&$qa_content)
		{					   
							
		// Process form input
			
			$ok = null;
			
			if (qa_clicked('html_save')) {
				qa_opt('cse_id',qa_post_text('cse_id'));
				$ok = qa_lang_html('admin/options_saved');
			}
			
					
			// Create the form for display
			
			$fields = array();
			
			$fields[] = array(
				'label' => 'Enter Google CSE ID:',
				'tags' => 'NAME="cse_id"',
				'value' => qa_opt('cse_id'),
				'type' => 'textarea',
				'note' => 'Go to google.com/cse and register your website then get the CSE id ONLY here.',
				'rows' => 10
			);

			return array(		   
				'ok' => ($ok && !isset($error)) ? $ok : null,
					
				'fields' => $fields,
			 
				'buttons' => array(
					array(
						'label' => 'Save',
						'tags' => 'NAME="html_save"',
					)
				),
			);
		}
	}

