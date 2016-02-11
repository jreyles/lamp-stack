<?php
class Courses extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model'); //puts it on every single function
    }
    public function index()
    {
        $this->load->view('index');
    }
    public function show($id)
    {   
        $this->output->enable_profiler(TRUE); //enables the profiler
        $this->load->model("Course"); //loads the model
        $course = $this->Course->get_course_by_id($id);  //calls the get_course_by_id method
        var_dump($course);
    }
    public function add()
    {
        $this->load->model("Course");
        $course_details = array(
            "title" => "JavaScript",
            "description" => "JavaScript Rocks!"
        ); 
        $add_course = $this->Course->add_course($course_details);
        if($add_course === TRUE)
            echo "Course is added!";
    }
    public function create_course()
    {
        $this->model->create_course($this->input->post());
        redirect('/main/index');
    //    var_dump($this->input->post());
    }
    public function show_course($course_id)
    {
        $query = "SELECT * FROM Courses WHERE Courses = ?";
        $value = array($course_id);
        return $this->db->query($query,$value)->row_array();
    }
    public function delete_course($course_id)
    {
        $this->model->delete_course($course_id);
        redirect('/');
    }
}
?>
