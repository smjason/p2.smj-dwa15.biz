<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        
        # Set up the view
        $this->template->content = View::instance('v_index_index');
        $this->template->title = "Home";

        # Display the view
        echo $this->template;
    }

    public function signup($error = NULL) {

        # Set up the view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title = "Sign Up";

        # Pass data to the view
        $this->template->content->error = $error;

        # Display the view
        echo $this->template;
    }

    public function p_signup() {

        #Sanitize Data
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        #Email and password
        $q = "SELECT * 
        FROM users 
        WHERE email = '".$_POST['email']."'"; 
        
        #DB query
        $user_exists = DB::instance(DB_NAME)->select_rows($q);
        
        #Does email exist
            if(!empty($user_exists)){
            
                #Send to Login page with error message
                Router::redirect('/users/signup/user-exists');
            }
            
            else {
                
                #Mail Setup
                $to = $_POST['email'];
                $subject = "Welcome to BeachBlog!";
                $message = "We appreciate that you have signed up! Now take off the shoes, get your feet in the sand, and blog away!";
                $from = 'vip@beachblog.com';
                $headers = "From:" . $from;         
                
                #Enters creation and modification dates
                $_POST['created'] = Time::now(); 
                $_POST['modified'] = Time::now();
        
                #Hashes password and token
                $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']); 
                $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());
        
                #user imported into the DB
                $user_id = DB::instance(DB_NAME)->insert('users', $_POST);
        
                #Send an email to the new user
                if(!$this->user) {
                    mail($to, $subject, $message, $headers);
                }         
        
                # Send to the login page
                Router::redirect('/users/login');
            }
    }
    

    public function login($error = NULL) {

        # Set up the view
        $this->template->content = View::instance('v_users_login');
        $this->template->title = "Login";

        # Pass data to the view
        $this->template->content->error = $error;

        # Display the view
        echo $this->template;
    }

    public function p_login() {

        #Sanitize user entered data for added security
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        #Encrypted password that will be compared to DB
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        $q = 'SELECT token 
        FROM users 
        WHERE email = "'.$_POST['email'].'" 
        AND password = "'.$_POST['password'].'"';
        

        $token = DB::instance(DB_NAME)->select_field($q);
          
        #Successful Login. Needs "" around token to set cookie
        if ($token) {
            setcookie("token",$token, strtotime('+1 year'), '/');
            Router::redirect("/users/index");

        }

        #Failed login 
            if(!$token) {
        
             Router::redirect("/users/login/invalid-login"); 
        }
      
    }

    public function logout() {

        # Generate and save a new token for next login
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        # Create the data array 
        $data = Array("token" => $new_token);

        # Update the token
        DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

        # Deletes their token cookie 
        setcookie("token", "", strtotime('-1 year'), '/');

        # Send them back to the login page.
        Router::redirect("/users/login");

}
    

    public function profile($user_name = NULL) {

        # If user is blank, they're not logged in; redirect them to the login page
        if(!$this->user) {
        Router::redirect('/users/login');
    }

        # Set up the view
        $this->template->content = View::instance('v_users_profile');
        $this->template->title = "Profile";

        # Load client files
        $client_files_head = Array (
            '/css/master.css');

        $this->template->client_files_head = Utils::load_client_files($client_files_head);

        $client_files_body = Array (
            '/js/profile.js');

        $this->template->client_files_body = Utils::load_client_files($client_files_body);

        # Pass the data to the view
        $this->template->content->user_name = $user_name;

        # Display the view
        echo $this->template;

}
public function p_profile() {

        $_POST['modified'] = Time::now();

        # Generate and save a new email
        $new_email =$_POST['email'];

        #Create the data array 
        $data = Array('email' => $new_email);

        #Update the email
        DB::instance(DB_NAME)->update("users", $data, "WHERE email = '".$this->user->email."'");

        Router::redirect ('/users/profile');

}
} # end of the class