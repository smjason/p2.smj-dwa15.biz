<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";

        # Set up the view
        $this->template->content = View::instance('v_users_index');
        $this->template->title = "Home";

        # Pass the data to the view
        $this->template->content->user_name = $user_name;

        # Display the view
        echo $this->template;
    }

    public function signup() {

        # Set up the view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title = "Signup";

        # Display the view
        echo $this->template;
    }

    public function p_signup() {

        
        #Enters creation and modification dates
        $_POST['created'] = Time::now(); 
        $_POST['modified'] = Time::now();


        $_POST['password'] =sha1($_POST[PASSWORD_SALT.'password']);
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        /*
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";
        */
        DB::instance(DB_NAME)->insert_row('users', $_POST);

        Router::redirect('/users/login');
    }

    public function login($login = NULL) {

        # Set up the view
        $this->template->content = View::instance('v_users_login');
        $this->template->title = "Login";

               # Display the view
        echo $this->template;
    }

    public function p_login() {

        #Sanitize user entered data for added security
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        #Encrypted password that will be compared to DB
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        $q = "SELECT token 
        FROM users 
        WHERE email = '".$_POST['email']."' 
        AND password = '".$_POST['password']."'";



        // What does the query look like?
        echo $q;
        

        $token = DB::instance(DB_NAME)->select_field($q);
          
        #Successful Login
        if ($token) {
            setcookie('token',$token, strtotime('+1 year'), '/');
            echo "You are logged in!";
        }
        # Failed Login
        else {
            echo "Login failed, please try again!";
        }
    }

    public function logout() {

        # Set up the view
        $this->template->content = View::instance('v_users_logout');
        $this->template->title = "Logout";

        # Display the view
        echo $this->template;
    }
    

    public function profile($user_name = NULL) {

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

        //$view = View::instance ('v_users_profile');
        //$view->user_name = $user_name;
        //echo $view;

        
    }

} # end of the class