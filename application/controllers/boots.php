<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class boots extends CI_Controller { //parent object is CI_Controller

	public function __construct(){
		parent::__construct();
		$this->load->model('students_model','students');
		$this->load->model('courses_model','crs');
	}
	public function index()
	{
		$students= array();
		$courses= array();
		$condition = null;
		$rs = $this->students->read($condition); //laman  ng record nasa rs na
		foreach ($rs as $r) {
			$info = array('idno'=>$r['idno'],
						'lastname'=>$r['lname']);
			$students[]=$info;
		}
		$rrs = $this->crs->read_crs($condition); //laman  ng record nasa rs na
		foreach ($rrs as $s) {
			$info = array('crs_code'=>$s['crs_code'],
						'crs_desc'=>$s['crs_desc']);
			$courses[]=$info;
		}
		$data['students'] = $students;
		$data['crs'] = $courses;
		$header_data['title'] = "SMS Dashboard";
		$this->load->view('include/header1',$header_data);
		$this->load->view('students/dashboard',$data);
		$this->load->view('include/footer1');
	}
	public function list_students() //The firstmethod to be always called is the constractor if its declared if not its the index
	{
		$header_data['title']="The title of the page";
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
	public function profile($id){
	$student = $this->students->read(array('idno'=>$id));
	$header_data['title'] = "Student view";
	$data['student']=$student;
			$this->load->view('students/profile',$data);
			$this->load->view('include/header1',$header_data);
	}


	public function new_student(){
		$header_data['title'] = "New Student";
		$option = $this->crs->read_crs();

		foreach ($option as $a) {
			// $info = array('crs_desc'=>$a['crs_desc']);
			$info =array( '<option value = "'.$a['crs_desc'].'">'.$a['crs_desc'].'</option>');
			$courses[]=$info;
		}
		//print_r($courses); 
		$data['crs'] = $courses;
		$this->load->view('students/new_student',$data);
		$this->load->view('include/header',$header_data);
		if(isset($_POST['submit'])){
			$student=array('idno'=>$_POST['idno'],'lname'=>$_POST['lname'],'fname'=>$_POST['fname'],'mname'=>$_POST['mname'],
				'sex'=>$_POST['sex'],'course'=>$_POST['course']);
	//		print_r($data);
			$this->students->create($student);

		$students= array();
			//$record=array();
			$data2['title']="The title of the page";
			$condition = array('idno'=>$_POST['idno']);
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
			$data['students'] = $students;
			$this->load->view('students/view_students',$data);
			$this->load->view('include/header',$data2);//,$header_data);
			//$data['student']=$rs;
		}
	}


	public function edit_student($id){
	$student = $this->students->read(array('idno'=>$id));
	$header_data['title'] = "Edit Student";
	$data['student']=$student;
			$this->load->view('students/edit_student',$data);
			$this->load->view('include/header1',$header_data);
		if(isset($_POST['submit'])){
			$student=array('idno'=>$id,'lname'=>$_POST['lname'],'fname'=>$_POST['fname'],'mname'=>$_POST['mname'],
				'sex'=>$_POST['sex'],'course'=>$_POST['course']);
			$this->students->update($id, $student);
		}
	}
	public function drop($id){
		$student = $this->students->delete_students(array('idno'=>$id));
		$header_data['title'] = "Delete Student";
		$data['student']=$student;
			$this->load->view('students/profile',$data);
			$this->load->view('include/header1',$header_data);

	}
	//courses
	public function list_courses() //The firstmethod to be always called is the constractor if its declared if not its the index
	{
		$header_data['title']="SMS Courses";
		$courses= array();
		$condition = null;
		$rrs = $this->crs->read_crs($condition); //laman  ng record nasa rs na
		foreach ($rrs as $s) {
			$info = array('crs_code'=>$s['crs_code'],
						'crs_desc'=>$s['crs_desc']);
			$courses[]=$info;
		}
		$data['crs'] = $courses;
		$this->load->view('include/header1',$header_data);
		$this->load->view('students/courses',$data);
		$this->load->view('include/footer1');

}
public function new_course(){
	$header_data['title'] = "New Course";
	$this->load->view('students/new_course');
	$this->load->view('include/header',$header_data);
	if(isset($_POST['submit'])){
		$course=array('crs_code'=>$_POST['crs_code'],'crs_desc'=>$_POST['crs_desc']);
//		print_r($data);
		$this->crs->create($course);

	$students= array();
		//$record=array();
		$courses = array();
		$data2['title']="The title of the page";
		$rss = $this->crs->read_crs(); //laman  ng record nasa rs na
		foreach ($rss as $s) {
			$info = array('crs_code'=>$s['crs_code'],
						'crs_desc'=>$s['crs_desc']);
			$courses[]=$info;
		}
		$data['crs'] = $courses;
		$this->load->view('students/courses',$data);
		$this->load->view('include/header',$data2);//,$header_data);
		//$data['student']=$rs;
	}
}
}
?>
