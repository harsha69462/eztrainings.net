<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login']='LoginController/index';
$route['register']='RegistrationController/index';

$route['allcourses']='InternshipController/index';

$route['aboutus']='AboutUsController/index';

$route['team']='AboutUsController/team';
$route['contactus']='ContactUsController/index';

$route['blogs']='BlogController/index';
$route['replycomment']='BlogController/replycomment';


$route['workshops/interested']='InterestController/index';




// workshop routes starts
$route['workshops/pythonworkshop']='WorkshopsController/pythonworkshop';
$route['workshops/csharpworkshop']='WorkshopsController/csharpworkshop';
$route['workshops/djangoworkshop']='WorkshopsController/djangoworkshop';
$route['workshops/datascience']='WorkshopsController/datascience';
$route['workshops/aiworkshop']='WorkshopsController/aiworkshop';
$route['workshops/mlworkshop']='WorkshopsController/mlworkshop';
$route['workshops/ethicalhacking']='WorkshopsController/ethicalhacking';
$route['workshops/gamedevworkshop']='WorkshopsController/gamedevworkshop';
$route['workshops/awsworkshop']='WorkshopsController/awsworkshop';
$route['workshops/rprogramming']='WorkshopsController/rprogramming';
$route['workshops/golang']='WorkshopsController/golang';
$route['workshops/fullstackworkshop']='WorkshopsController/fullstackworkshop';

$route['workshops/angularworkshop']='WorkshopsController/angularworkshop';
$route['workshops/englishworkshop']='WorkshopsController/englishworkshop';
$route['workshops/webfullstackcourse']='WorkshopsController/webfullstackcourse';
// workshop routes ends


$route['payments']='PaymentsController/index';


$route['admin/dashboard'] = "Admin/AdminDashboardController/index";
$route['logout'] = "HomeController/logout";
$route['admin/login'] = "Admin/AdminLoginController/index";
$route['user/dashboard'] = "DashboardController/index";
$route['user/sessions'] = "DashboardController/sessions";
$route['user/my-courses'] = "DashboardController/mycourses";
$route['user/requests'] = "DashboardController/requests";
$route['user/notifications'] = "DashboardController/nofications";
$route['user/chat'] = "DashboardController/nofications";
$route['account/pending'] = "HomeController/pending";


$route['admin/requests'] = "Admin/AdminDashboardController/requests";
$route['admin/add-comment'] = "Admin/AdminDashboardController/addComment";

$route['account/reset-password'] = "ForgotPasswordController/resetPassword";
$route['forgot-password'] = "ForgotPasswordController/index";



// chat contrtrolle routes
$route['user/chat'] = 's/ChatController/index';
$route['user/send-message'] = 's/ChatController/send_text_message';
$route['user/chat-attachment/upload'] = 's/ChatController/send_text_message';
$route['user/get-chat-history-vendor'] = 's/ChatController/get_chat_history_by_vendor';
$route['user/chat-clear'] = 's/ChatController/chat_clear_client_cs';


//landing page
$route['fswdlanding'] = "Landing/index";
