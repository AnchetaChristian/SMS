<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class boots extends CI_Controller { //parent object is CI_Controller

	public function __construct(){
		parent::__construct();
		$this->load->model('students_model','students');
	}
	public function index()
	{
		$students= array();
		//$dummy = array('idno'=>'15-037-075','last name'=>'Ancheta','first name'=>'Christian Daniel','middle name'=>'Mozo','course'=>'BSIT','sex'=>'M');
		//$students[]=$dummy;
		$condition = null;
		//$condition = array('sex'=>'male');//,'course'=>'BSIT');
		$rs = $this->students->read($condition); //laman  ng record nasa rs na
		//print_r($rs);
		//exit;
		foreach ($rs as $r) {
			$info = array('idno'=>$r['idno'],
						'lastname'=>$r['lname'],
					'course'=>$r['course']);
			$students[]=$info;
		}
		$data['students'] = $students;
		$header_data['title'] = "SMS Dashboard";
		$this->load->view('include/header1',$header_data);
		$this->load->view('students/dashboard',$data);
		$this->load->view('include/footer1');
	}
	public function list_students() //The firstmethod to be always called is the constractor if its declared if not its the index
	{
		//echo "My first CI Controller";
		//$this->load->view('welcome_message');
		//$fruits = array('banana','apple','tomato','etc');
		//$data['fruits']= $fruits;
		$header_data['title']="The title of the page";
		//$this->load->view('hello',$data);
		if(isset($_GET['submit'])){
					$condition[0]=array('idno'=>$_GET['search']);
					$condition[1]=array('lname'=>$_GET['search']);
					$condition[2]=array('fname'=>$_GET['search']);
					$condition[3]=array('mname'=>$_GET['search']);
					$condition[4]=array('sex'=>$_GET['search']);
					$condition[5]=array('course'=>$_GET['search']);
			//		print_r($data);
						$students= array();
						$i;
						for ($i=0; $i <6 ; $i++) {
							# code...
							$rs = $this->students->read($condition[$i]); //laman  ng record nasa rs na
							foreach ($rs as $r) {
								$info = array('idno'=>$r['idno'],
											'lastname'=>$r['lname'],
											'firstname'=>$r['fname'],
											'middlename'=>$r['mname'],
											'sex'=>$r['sex'],
											'course'=>$r['course']);
								$students[]=$info;
								//break;
							}
						}
						$data['students'] = $students;
						$this->load->view('include/header1',$header_data);//,$header_data);
						//$this->load->view('students/contents', $data);
						$this->load->view('students/view_students',$data);
						$this->load->view('include/footer1');
					}
		else {
		//Passing dummy  data
		$students= array();
		//$dummy = array('idno'=>'15-037-075','last name'=>'Ancheta','first name'=>'Christian Daniel','middle name'=>'Mozo','course'=>'BSIT','sex'=>'M');
		//$students[]=$dummy;
		$condition = null;
		//$condition = array('sex'=>'male');//,'course'=>'BSIT');
		$rs = $this->students->read($condition); //laman  ng record nasa rs na
		//print_r($rs);
		//exit;
		foreach ($rs as $r) {
			$info = array('idno'=>$r['idno'],
						'lastname'=>$r['lname'],
						'firstname'=>$r['fname'],
						'middlename'=>$r['mname'],
						'sex'=>$r['sex'],
						'course'=>$r['course']);
			$students[]=$info;
		}
		$data['students'] = $students;
		$this->load->view('include/header1',$header_data);//,$header_data);
		//$this->load->view('students/contents', $data);
		$this->load->view('students/view_students',$data);
		//$this->load->view('include/footer');
		//call the model
		}
	}
	// public function index(){
	// 	//echo "CI And Bootstrap";
	// 	$header_data['title'] = "Star na si Van Damme Stallone";
	// 	$data['name'] = "Kiko";
	// 	$data['years'] = "35";
	// 	$this->load->view('include/header1', $header_data);
	// 	$this->load->view('students/contents', $data);
	// 	$this->load->view('include/footer1');
	// }
	public function profile($id){  //is $id=null means id is optional
		//echo "Displays students profile with id = $id";
		//load the model.
		//find the student resourcebundle_get_error_code
		//load the view
//		$data['idno'];
	$student = $this->students->read(array('idno'=>$id));
//if (count($student) >0)
//{

	$header_data['title'] = "Student view";
	$data['student']=$student;
			$this->load->view('students/profile',$data);
			$this->load->view('include/header1',$header_data);
		//,$header_data);

//	}
//else{
	//redirect('students','refresh');
//}
	}

	public function new_student(){
		if ($_SERVER['REQUEST_METHOD']=='POST'){
			//save new student
			// do some stuff

			print_r($_POST);
			// $validate = array(
			// 	array('field'=>'idno','label'=>'ID NO','rules'=>'trim[required]')
		}
		else { //display blank form
			$header_data['title'] = "Add New Student";
			$data = array();

			$this->load->view('include/header1', $header_data);
			$this->load->view('students/new_student', $data);
			$this->load->view('include/footer1');
		}

		}

		public function drop($id){
		$student = $this->students->delete_students(array('idno'=>$id));
		$header_data['title'] = "Delete Student";
		$data['student']=$student;
		//	$this->load->view('students/profile',$data);
			$this->load->view('include/header1',$header_data);
			$this->load->view('include/view_students',$header_data);


	}
	public function edit_student($id){
	//$student = $this->students->edit(array('idno'=>$id));

    	/*$student1 = $this->students->read(array('idno'=>$id));
    	$data['student1']=$student1;
		$header_data['title'] = "Edit Student";
		$this->load->view('students/edit_student',$data);
		$this->load->view('include/header',$header_data);
	*/

	$student = $this->students->read(array('idno'=>$id));
	$header_data['title'] = "Student view";
	$data['student']=$student;
			$this->load->view('students/edit_student',$data);
			$this->load->view('include/header1',$header_data);


		if(isset($_POST['submit'])){
			$student=array('idno'=>$id,'lname'=>$_POST['lname'],'fname'=>$_POST['fname'],'mname'=>$_POST['mname'],
				'sex'=>$_POST['sex'],'course'=>$_POST['course']);
	//
			//print_r($student);

			$this->students->update($id, $student);

		}
	}
	public function find(){
		$data['title']="Search";
		$students= array();
		$condition = null;
		if(isset($_GET['submit'])){
			$data2 = array('idno'=>$_GET['search']);
		}
		$condition = array('sex'=>'male');
		print_r($data2);
		$rs = $this->students->read($condition); //laman  ng record nasa rs na
		foreach ($rs as $r) {
			$info = array('idno'=>$r['idno'],
						'lastname'=>$r['lname'],
						'firstname'=>$r['fname'],
						'middlename'=>$r['mname'],
						'sex'=>$r['sex'],
						'course'=>$r['course']);
			$students[]=$info;
		}
		$data3['students'] = $students;
		$this->load->view('include/header1',$data);//,$header_data);
		$this->load->view('students/view_students',$data3);
	}
}
?>
