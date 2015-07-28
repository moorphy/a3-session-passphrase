<?php
//verify.php

//start the session to verify Passphrase
session_start();

//Passphrase = 'abc123'
/* Tasks
-See if form is submitted
-Place correct info in passphrase variable
-fire the session up or reload
*/

define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

//variable passphrase is the submitted Password. Must equal passphrase.
$passphrase = $_POST['passphrase'];
$password = abc123

function passForm(){
    echo '<h2>Enter the Passphrase</h2>
            <form action = "'.THIS_PAGE.'"method="post" id="form">
            <fieldset>
            <legend>LOGIN</legend>
            <label>PASSPHRASE: </label>
            <input type="text" name="passphrase" id="passphrase">
            <input type="submit" id="submit" value="submit">
            </fieldset>
            </form>
            ';
}
    
    
    if(!isset($passphrase)){
            //make sure form passphrase is set
    
            if(!isset($passphrase){
                //Show Form
                passform();
                die();
            }
            elseif ($passphrase != $password){
                //Show Form
                passform();
                die();
            }
            else{
                echo 'Passphrase correct';

            }
               }
    else{
        passForm();
        die(); 
        }//End if(isset($passphrase)) CONDITIONAL
        

