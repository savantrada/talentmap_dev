<?php 

class phpConfig{
   static $config = array(
        
    "dbCon" => array(
        "host"=>"localhost",
        "user" => "root",
        "password" => "toor",
        "port" => "3306",
        "database" => "talentMap"
    ),
    //used only in webApi.ph file
    "responseFormat" => array(
        "status"=>200,    //change it as per requirment
        "error"=>"",      // if any error, write description
        "responseData"=>"" //array with key - pair value from controller's function
        
    ),
    
    //used in each controller's function file
    "responseDataFormat" => array(
        "data" => "", //actual data if any
        "error" =>"", //any error occured here
        "status" =>200 //change to other if issues occore
    ),    
    
    //specifying error code and message, If any new added,also add in app.config.js file.
    "statusCode" => array(
        "taskCompleted" => 200,
        "taskIncompleted" => 204,
        "invalidApiName" => 404,
        "validApiName" => 200,
        "unAuthorisedApiCall" => 400,
        "databaseDown" => 204,
        "invalidCredentials" => 300,
        "validCredentials" => 200
    ),
    "jwt_key" =>"t@lentM@p",
    "registrationRequestMailTemplate" => array(
           "subject" => "TalentMap Registration Request",
            "body"  => "Hello, <br>".
                     " Thanks for making registration request. <br>".
                     " You will soon receive mail with the username and password to login into the system. <br>".
                     " Regards, <br> &copy; TalentMap Dev Team"
        ),
       "passwordResetMailTemplate" => array(
           "subject" => "TalentMap Password Reset Request",
           "body"  => "Hello, <br>".
                " You will soon receive mail with the username and password to login into the system. <br>".
                " Regards, <br> &copy; TalentMap Dev Team"
       ),
       "passwordSetMailTemplate"=> array(
           "subject" => "TalentMap Login Details",
           "body"  => "Hello, <br>".
           "Please find the login details below <br>".
           "Username: __username__ <br>".
           "Password: __password__ <br>".
           "Please select your user role and login into system using given credentials.<br>".
           " Regards, <br> &copy; TalentMap Team"
       )
  );
       
}

?>