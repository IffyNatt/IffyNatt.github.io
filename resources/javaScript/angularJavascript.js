var app = angular.module("hrNetwork", []);

var complaince_questions=[
            {"id":1,"content":"Do you have an I-9 completed for each employee?", "status":''},
            {"id":2,"content":"Do you mail a terminated employee's final paycheck to their home?", "status":''},
            {"id":3,"content":"Do you know the difference between an exempt and non-exempt employee?", "status":''},
            {"id":4,"content":"Do you obtain a release when checking references for new hires?", "status":''},
            {"id":5,"content":"Do your employees ever work during their lunch break?", "status":''},
            {"id":6,"content":"Do you have a written & updated Safety Plan?", "status":''},
            {"id":7,"content":"Do you have a 'Use it or Lose it' Vacation Policy?", "status":''},
            {"id":8,"content":"Have you conducted Sexual Harassment training for your employees and supervisors?", "status":''},
            {"id":9,"content":"Do you use a Non-Compete Agreement?", "status":''},
            {"id":10,"content":"Do you have an Employee Handbook that has been updated in the last year?", "status":''}, 
            {"id":11,"content":"Do you have an Employee Handbook that has been updated in the last year?", "status":''}    
        ];


app.controller('myCtrl', function($scope, $http) 
   {   
        $scope.sumTotal = 0;
            var complaince_id =0;
            $scope.count = complaince_questions[complaince_id].id;
            $scope.text = complaince_questions[complaince_id].content; 
            complaince_questions[complaince_id].status = document.getElementById('chck1').checked;
            document.getElementById('btn1').disabled=true;

/** START OF "SET STATUS OF PREVIOUS & NEXT BUTTONS WITH COUNT OF QUESTIONS" SCRIPT **/                
        $scope.previous= function()
           {  
                document.getElementById('btn2').disabled=false; 
                document.getElementById('chck1').checked = false;

                 if(complaince_id<complaince_questions.length)
                        {      complaince_id--;
                            if(complaince_id<1)
                                {
                                    document.getElementById('btn1').disabled =true;
                                }
                            if(complaince_id<complaince_questions.length)
                                {
                                $scope.count = complaince_questions[complaince_id].id;
                                $scope.text = complaince_questions[complaince_id].content;
                                }
                         document.getElementById('chck1').checked = complaince_questions[$scope.count].status;
                        }
           };
 

        $scope.next = function()
           {   
                document.getElementById('btn1').disabled=false; 
                document.getElementById('chck1').checked = false;
                 if(complaince_id<9)
                        {
                            complaince_id++;
                            if($scope.count ==9)
                                {
                                    document.getElementById('btn2').disabled=true;
                                } 
                            if(complaince_id<complaince_questions.length)
                                {
                                $scope.count = complaince_questions[complaince_id].id;
                                $scope.text = complaince_questions[complaince_id].content;                     
                                }
                           document.getElementById('chck1').checked = complaince_questions[$scope.count].status;
                        }

            };

/****************************** END ************************************/
    

/** SETTING THE CHECKBOX CALCULATES THE COMPLAINCE VALUE  **/
            $scope.getValue=   
            function getDat(){
                    complaince_questions[$scope.count].status = document.getElementById('chck1').checked;
                if(document.getElementById('chck1').checked == true && $scope.count ==1)
                {
                    $scope.sumTotal= $scope.sumTotal + 100000;

                }
                
                if(document.getElementById('chck1').checked == false && $scope.count ==1)
                {
                    $scope.sumTotal= $scope.sumTotal - 100000;
                }
                
                if(document.getElementById('chck1').checked == true && $scope.count ==2)
                {
                    $scope.sumTotal= $scope.sumTotal + 3600;

                }
                
                if(document.getElementById('chck1').checked == false && $scope.count ==2)
                {
                    $scope.sumTotal= $scope.sumTotal - 3600;
                }
                
                if(document.getElementById('chck1').checked == true && $scope.count ==3)
                {
                    $scope.sumTotal= $scope.sumTotal + 1950;

                }
                
                if(document.getElementById('chck1').checked == false && $scope.count ==3)
                {
                    $scope.sumTotal= $scope.sumTotal - 1950;
                }

                if(document.getElementById('chck1').checked == true && $scope.count ==4)
                {
                    $scope.sumTotal= $scope.sumTotal + 10000;

                }
                
                if(document.getElementById('chck1').checked == false && $scope.count ==4)
                {
                    $scope.sumTotal= $scope.sumTotal - 10000;
                }
                
                if(document.getElementById('chck1').checked == true && $scope.count ==5)
                {
                    $scope.sumTotal= $scope.sumTotal + 780;

                }
                if(document.getElementById('chck1').checked == false && $scope.count ==5)
                {
                    $scope.sumTotal= $scope.sumTotal - 780;
                }

                if(document.getElementById('chck1').checked == true && $scope.count ==6)
                {
                    $scope.sumTotal= $scope.sumTotal + 70000;

                }
                
                if(document.getElementById('chck1').checked == false && $scope.count ==6)
                {
                    $scope.sumTotal= $scope.sumTotal - 70000;
                }
                
                if(document.getElementById('chck1').checked == true && $scope.count ==7)
                {
                    $scope.sumTotal= $scope.sumTotal + 1200;

                }
                
                if(document.getElementById('chck1').checked == false && $scope.count ==7)
                {
                    $scope.sumTotal= $scope.sumTotal - 1200;
                }

                if(document.getElementById('chck1').checked == true && $scope.count ==8)
                {
                    $scope.sumTotal= $scope.sumTotal + 100000;

                }
                
                if(document.getElementById('chck1').checked == false && $scope.count ==8)
                {
                    $scope.sumTotal= $scope.sumTotal - 100000;
                }
                
                if(document.getElementById('chck1').checked == true && $scope.count ==9)
                {
                    $scope.sumTotal= $scope.sumTotal + 5000;

                }
                if(document.getElementById('chck1').checked == false && $scope.count ==9)
                {
                    $scope.sumTotal= $scope.sumTotal - 5000;
                }

                if(document.getElementById('chck1').checked == true && $scope.count ==10)
                {
                    $scope.sumTotal= $scope.sumTotal + 300000;

                }
                if(document.getElementById('chck1').checked == false && $scope.count ==10)
                {
                    $scope.sumTotal= $scope.sumTotal - 300000;
                }

            }
    
/****************************** END **********************/

/** RESET ALL FIELDS IN COMPLAINCE SECTION **/
        $scope.refresh=function()
            {
            window.location.reload();
            };

/*************END*********/
    
/** LOGIN IN AND SIGNUP MODULE DISPLAY **/
    
    $scope.open =function(){
        document.getElementById('id01').style.display='block';
    };
    
    $scope.closeLogin =function(){
        document.getElementById('id01').style.display='none';
           
    };
    


      $scope.formData={name:"iffy"};  

    $scope.formSubmit = function(){
                $http({
                  method  : 'POST',
                  url     : 'mailer.php',
                  data    : $.param($scope.formData),  // pass in data as strings
                  headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
                 })
                  .success(function(data) {
                    console.log('iffy');

                    if (success==-1) {
                      // if not successful, bind errors to error variables
                        $scope.message= 'Ooops, something went wrong, please try again'
                    } else {
                      // if successful, bind success message to message
                      $scope.message = 'Thank You for you email, we will get in touch very shortly'
                    }
                  });

            }
    
    
});