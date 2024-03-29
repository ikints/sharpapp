<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {

	private $ctrl 	= "feedback";
	private $title 	= "Feedback";
	private $menu 	= "feedback";

	public function __construct()
	{
		parent::__construct();

		//Session
		$this->load->library('session');
        $this->load->library('email');
        $this->load->config('email');
		
		//library
		$this->load->library('user_agent');

		//model
		$this->load->model('feedback_model');

		//
		$this->load->helper('url');
		
	}

	public function feedback_sample()
	{
		$data['title'] = 'Feedback Form';						
		$data['main_content'] = 'frontend/feedback/sample';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_quota()
	{
		$data['title'] = 'Feedback Form';						
		$data['main_content'] = 'frontend/feedback/quota';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_form()
	{
		$data['title'] = 'Feedback Form';						
		$data['main_content'] = 'frontend/feedback/form';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q1()
	{
		$fb_name = $this->input->post('name');
		$fb_email = $this->input->post('email');
		$fb_phone = $this->input->post('phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;

		$data['title'] = 'Feedback Question 1';						
		$data['main_content'] = 'frontend/feedback/question-1';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q2()
	{	
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;
		//
		$fb_q1 = $this->input->post('fb_q1');
		//
		$data['fb_q1'] = $fb_q1;

		$data['title'] = 'Feedback Question 2';						
		$data['main_content'] = 'frontend/feedback/question-2';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q3()
	{	
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;
		//
		$fb_q1 = $this->input->post('fb_q1');
		$fb_q2 = $this->input->post('fb_q2');
		//
		$data['fb_q1'] = $fb_q1;
		$data['fb_q2'] = $fb_q2;

		$data['title'] = 'Feedback Question 3';						
		$data['main_content'] = 'frontend/feedback/question-3';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q4()
	{
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;
		//
		$fb_q1 = $this->input->post('fb_q1');
		$fb_q2 = $this->input->post('fb_q2');
		$fb_q3 = $this->input->post('fb_q3');
		//
		$data['fb_q1'] = $fb_q1;
		$data['fb_q2'] = $fb_q2;
		$data['fb_q3'] = $fb_q3;

		$data['title'] = 'Feedback Question 4';						
		$data['main_content'] = 'frontend/feedback/question-4';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q5()
	{
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;
		//
		$fb_q1 = $this->input->post('fb_q1');
		$fb_q2 = $this->input->post('fb_q2');
		$fb_q3 = $this->input->post('fb_q3');
		$fb_q4 = $this->input->post('fb_q4');
		//
		$data['fb_q1'] = $fb_q1;
		$data['fb_q2'] = $fb_q2;
		$data['fb_q3'] = $fb_q3;
		$data['fb_q4'] = $fb_q4;

		$data['title'] = 'Feedback Question 5';						
		$data['main_content'] = 'frontend/feedback/question-5';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q6()
	{
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;
		//
		$fb_q1 = $this->input->post('fb_q1');
		$fb_q2 = $this->input->post('fb_q2');
		$fb_q3 = $this->input->post('fb_q3');
		$fb_q4 = $this->input->post('fb_q4');
		$fb_q5 = $this->input->post('fb_q5');
		//
		$data['fb_q1'] = $fb_q1;
		$data['fb_q2'] = $fb_q2;
		$data['fb_q3'] = $fb_q3;
		$data['fb_q4'] = $fb_q4;
		$data['fb_q5'] = $fb_q5;

		$data['title'] = 'Feedback Question 6';						
		$data['main_content'] = 'frontend/feedback/question-6';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q7()
	{
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;
		//
		$fb_q1 = $this->input->post('fb_q1');
		$fb_q2 = $this->input->post('fb_q2');
		$fb_q3 = $this->input->post('fb_q3');
		$fb_q4 = $this->input->post('fb_q4');
		$fb_q5 = $this->input->post('fb_q5');
		$fb_q6 = $this->input->post('fb_q6');
		//
		$data['fb_q1'] = $fb_q1;
		$data['fb_q2'] = $fb_q2;
		$data['fb_q3'] = $fb_q3;
		$data['fb_q4'] = $fb_q4;
		$data['fb_q5'] = $fb_q5;
		$data['fb_q6'] = $fb_q6;

		$data['title'] = 'Feedback Question 7';						
		$data['main_content'] = 'frontend/feedback/question-7';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q8()
	{
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;
		//
		$fb_q1 = $this->input->post('fb_q1');
		$fb_q2 = $this->input->post('fb_q2');
		$fb_q3 = $this->input->post('fb_q3');
		$fb_q4 = $this->input->post('fb_q4');
		$fb_q5 = $this->input->post('fb_q5');
		$fb_q6 = $this->input->post('fb_q6');
		$fb_q7 = $this->input->post('fb_q7');
		//
		$data['fb_q1'] = $fb_q1;
		$data['fb_q2'] = $fb_q2;
		$data['fb_q3'] = $fb_q3;
		$data['fb_q4'] = $fb_q4;
		$data['fb_q5'] = $fb_q5;
		$data['fb_q6'] = $fb_q6;
		$data['fb_q7'] = $fb_q7;

		$data['title'] = 'Feedback Question 8';						
		$data['main_content'] = 'frontend/feedback/question-8';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_q9()
	{
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$data['fb_name'] = $fb_name;
		$data['fb_email'] = $fb_email;
		$data['fb_phone'] = $fb_phone;
		//
		$fb_q1 = $this->input->post('fb_q1');
		$fb_q2 = $this->input->post('fb_q2');
		$fb_q3 = $this->input->post('fb_q3');
		$fb_q4 = $this->input->post('fb_q4');
		$fb_q5 = $this->input->post('fb_q5');
		$fb_q6 = $this->input->post('fb_q6');
		$fb_q7 = $this->input->post('fb_q7');
		$fb_q8 = $this->input->post('fb_q8');
		//
		$data['fb_q1'] = $fb_q1;
		$data['fb_q2'] = $fb_q2;
		$data['fb_q3'] = $fb_q3;
		$data['fb_q4'] = $fb_q4;
		$data['fb_q5'] = $fb_q5;
		$data['fb_q6'] = $fb_q6;
		$data['fb_q7'] = $fb_q7;
		$data['fb_q8'] = $fb_q8;

		$data['title'] = 'Feedback Question 9';						
		$data['main_content'] = 'frontend/feedback/question-9';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_save()
	{
		$today = date('Y-m-d');
		//
		$fb_name = $this->input->post('fb_name');
		$fb_email = $this->input->post('fb_email');
		$fb_phone = $this->input->post('fb_phone');
		//
		$fb_q1 = $this->input->post('fb_q1');
		$fb_q2 = $this->input->post('fb_q2');
		$fb_q3 = $this->input->post('fb_q3');
		$fb_q4 = $this->input->post('fb_q4');
		$fb_q5 = $this->input->post('fb_q5');
		$fb_q6 = $this->input->post('fb_q6');
		$fb_q7 = $this->input->post('fb_q7');
		$fb_q8 = $this->input->post('fb_q8');
		$fb_q9 = $this->input->post('fb_q9');
		//
		$vf = $this->feedback_model->fb_voucher();
		$fb_voucher = $vf['voucher'];
		$fb_quota = $vf['quota'];
		//insert new ip
		$data = array(

			'fb_name' 			=> $fb_name,
			'fb_email' 			=> $fb_email,
			'fb_phone' 			=> $fb_phone,
			'fb_question_1' 	=> $fb_q1,
			'fb_question_2' 	=> $fb_q2,
			'fb_question_3' 	=> $fb_q3,
			'fb_question_4' 	=> $fb_q4,
			'fb_question_5' 	=> $fb_q5,
			'fb_question_6' 	=> $fb_q6,
			'fb_question_7' 	=> $fb_q7,
			'fb_question_8' 	=> $fb_q8,
			'fb_question_9' 	=> $fb_q9,
			'fb_date'			=> date('Y-m-d'),
			'fb_voucher'		=> $fb_voucher

		);
		$result = $this->feedback_model->fb_add_feedback($data);

		//check pembatasan kuota penerima voucher feedback
		$kuota = $this->feedback_model->fb_kuota($today);
		$kuota_today = $kuota['count_kuota'];

		if($kuota_today > $fb_quota){
			//kuota sudah terpenuhi
			redirect('feedback/quota');
		}else{
			//send email
			$from 	= "sharpvirtualexhibition.id <hello@sharpvirtualexhibition.id>";
			$_from 	= "hello@sharpvirtualexhibition.id";
			$_me 	= "Sharp Virtual Exhibition";

	        $subject = 'Sharp Virtual Exhibition | Feedback Sharp | Voucher';

	        $data['_voucher'] = $fb_voucher;
	        //
	        $email_body = $this->load->view('template/email/feedback', $data, true);

	        $this->email->set_newline("\r\n");
	        $this->email->from($from);
	        $this->email->to($fb_email);
	        $this->email->subject($subject);
	        $this->email->message($email_body);
	        $this->email->set_mailtype("html");
	        $this->email->reply_to($_from, $_me);

	        if ($this->email->send()) {
	            redirect('feedback/results');
	        }else{
	        	redirect('feedback/results');
	        }
		}

		
	}

	public function feedback_results()
	{
		$data['title'] = 'Feedback Form';						
		$data['main_content'] = 'frontend/feedback/results';
		$this->load->view('template/frontend/view', $data);
	}

	public function feedback_share()
	{
		$_email = $this->input->post('email');
		//send email
		redirect('feedback/share/results');
	} 

	public function feedback_share_results()
	{
		$data['title'] = 'Feedback Form';						
		$data['main_content'] = 'frontend/feedback/share-results';
		$this->load->view('template/frontend/view', $data);
	}
}