<?php
session_start();
    //this tells you what the variable state is in the global scope as well as local scope
    function globalsTest(){
       
        $stick = 'bauer';//local scope
        echo '$stick is of the type: '.$GLOBALS["stick"].'<br>';//displays the global scope
        echo '$stick is of the brand: '.$stick.' internally<br><br>';//displays the local scope
    }
    $stick = 'Hockey';//global scope
    echo 'This is an example of globals<br>';
    globalsTest();

    //this function just returns the name of the current web server the code is running on
    function serverTest(){
        echo $_SERVER['SERVER_NAME'].'<br>';
    }

    echo 'This is an example of SERVER<br>';
    serverTest();

    //this should pull the name from the urlstring and print it out 
    //after the ?name= it will pull what it is equal to and store it in the variable nameurlstring
    //the purpose of this is to retrive values from the get array
    function getTest(){
        $nameurlstring = $_GET['name'];
        echo $nameurlstring;
    }

    echo '<br>This is an example of get<br><br>';
    getTest();

    //this should pull the name from the url string and print it out 
    //this is under the assumption that the form submission posts a value under name 
    //it will retrive the value from the post request and store it in the variable nameurlstring then echo it
    //the purpose of this is to be able to retrieve values from the post array
    function postTest(){
        $nameurlstring = $_POST['name'];
        echo $nameurlstring;
    }

    //this function will pull the number of files that are uploaded through the post method 
    //since nothing was uploaded it returns 0 for the count and an empty array with print_r
    //the purpose of this is to see how many files are uploaded through a form submission
    function fileTest(){
        echo '<br>number of files uploaded is: '.count($_Files).'<br>';
        print_r($_FILES);
    }

    echo 'This is an example of file';
    fileTest();

    //sets a cookie to a certain value
    //then echos the value of the cookie given the name, in this case SampleCookie
    //the purpose of this is to create values for cookies that remain persistent on the server
    function cookieTest(){
        $cookievalue = 'hey how are you';

        setcookie("SampleCookie", $cookievalue);
        echo $_COOKIE["SampleCookie"];
    }

    echo '<br><br>This is an example of cookie<br>';
    cookieTest();

    //this creates a session array named brand
    //it then sets the value of that array to sony
    //it then echos the value of the session array brand
    //the purpose of this is to create a client side cookie that remains persistent and active until 
    //the session closes or the web browser is terminated
    function sessionTest(){
        $_SESSION['brand'] = 'Sony';

        echo $_SESSION['brand'];
    }

    echo '<br><br> This is an example of sessions<br>';
    sessionTest();

    //this function will echo the values for GET, POST, and COOKIE 
    //it will return an empty array since none of those values are set globally for my program
    //the purpose of this is to retrieve an array that contains those values so they can be 
    //manipulated through certain array functions
    function requestTest(){
        print_r($_REQUEST);
    }

    echo '<br><br> This is an example of request<br>';
    requestTest();

    //the purpose of this superglobal is to retrieve values about the environment that the php script is running on 
    //in this case i am trying to get the user name of the person (me) logged into the web.njit.edu server
    //the output will be empty though since i do not have to log into the server
    function envTest(){
        echo 'Username is: '.$_ENV["USER"].'<br>';
    }

    echo '<br><br> This is an example of ENV<br>';
    envTest();

?>



