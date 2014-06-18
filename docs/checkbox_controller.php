function index()
	{			
		$this->form_validation->set_rules('companyName', 'Company Name', 'required|max_length[255]');			
		$this->form_validation->set_rules('companyURL', 'Company Website', 'max_length[255]');			
		$this->form_validation->set_rules('companyEmail', 'Company Email', 'required|valid_email|max_length[255]');			
		$this->form_validation->set_rules('companyPhone', 'Phone Number', 'max_length[255]');			
		$this->form_validation->set_rules('gigType', 'Type of Gig', 'required|max_length[255]');			
		$this->form_validation->set_rules('gigLocation', 'Location', 'required|max_length[255]');			
		//$this->form_validation->set_rules('gigCategories', 'Category', 'max_length[255]');			
		$this->form_validation->set_rules('positionTitle', 'Position Title', 'required|max_length[255]');			
		$this->form_validation->set_rules('positionId', 'Position ID', 'max_length[255]');			
		$this->form_validation->set_rules('positionDesc', 'Detailed Description', 'required');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('gig/header');
			$this->load->view('gig/add_gig');
			$this->load->view('gig/footer');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
					       	'companyName' => @$this->input->post('companyName'),
					       	'companyURL' => @$this->input->post('companyURL'),
					       	'companyEmail' => @$this->input->post('companyEmail'),
					       	'companyPhone' => @$this->input->post('companyPhone'),
					       	'gigType' => @$this->input->post('gigType'),
					       	'gigLocation' => @$this->input->post('gigLocation'),
					       	//'gigCategories' => @$this->input->post('gigCategories'),
					       	'positionTitle' => @$this->input->post('positionTitle'),
					       	'positionId' => @$this->input->post('positionId'),
					       	'positionDesc' => @$this->input->post('positionDesc')
						);
			
			$convertCategories = array();
			
			for ($i=0; $i<7; $i++)
			{
			if ($this->input->post('category' . $i) == FALSE) {
				$convertCategories[$i] = 0; 
				
			}
			else {
			$convertCategories[$i] = 1; 	
				
			}
			}
			
			
			//$form_data['gigCategories'] = 'many categories';
					
			// run insert model to write data to db
		
			if ($this->gig_model->SaveForm($form_data, $convertCategories) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('gig/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}