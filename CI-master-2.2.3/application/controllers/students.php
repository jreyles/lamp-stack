<?php
class Students extends CI_Controller {
    //loads the login view
    public function index()
    {
        $this->load->view('login_reg');
    }
    //processes the student login
    public function login()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $this->load->model('Student_model');
        $student = $this->Student_model->get_student_by_email($email);
        if($student && $student['password'] == $password)
        {
            $user = array(
               'student_id' => $student['id'],
               'student_email' => $student['email'],
               'student_name' => $student['first_name'].' '.$student['last_name'],
               'is_logged_in' => true
            );
            $this->session->set_userdata($user);
            redirect("/students/profile");
        }
        else
        {
            $this->session->set_flashdata("login_error", "Invalid email or password!");
            redirect("/students/index");
        }
    }
    //simple profile page of a student
    public function profile()
    {
        if($this->session->userdata('is_logged_in') === TRUE)
            echo "Your are now logged in! Click <a href='/students/logout'>Here</a> to Logout.";
        else
            redirect("/students/login");
    }
    //logout the student
    public function logout()
    {
        $this->session->sess_destroy();
        redirect("/");   
    }
}
?>