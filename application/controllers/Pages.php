<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);

			if($data['title'] == "Home" || $data['title'] == "Test"){		
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			} else {
				$this->load->view('templates/header');
				$this->load->view('pages/'.$page, $data);
				$this->load->view('templates/footer');
			}
		}

		public function send_email(){
			$this->load->library('email');

			$name = $this->input->post("name");
			$from = $this->input->post("email");
			$subject = $this->input->post("subject");
			$message = $this->input->post("message");

			// Get full html:
			$body = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			    <meta http-equiv="Content-Type" content="text/html; charset=' . strtolower(config_item('charset')) . '" />
			    <title>' . html_escape($subject) . '</title>
			    <style type="text/css">
			        body {
			            font-family: Arial, Verdana, Helvetica, sans-serif;
			            font-size: 16px;
			        }
			    </style>
			</head>
			<body>
			' . $message . '
			</body>
			</html>';
			// Also, for getting full html you may use the following internal method:
			//$body = $this->email->full_html($subject, $message);

			$result = $this->email
			    ->from($from)
			    ->reply_to($from)    // Optional, an account where a human being reads.
			    ->to('paul@pcrepairutah.com')
			    ->subject($subject)
			    ->message($message)
			    ->send();

			var_dump($result);
			echo '<br />';
			echo $this->email->print_debugger();

			//sleep(10);

			redirect('/');
		}
	}