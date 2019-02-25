<?php
# ---------------
# -- Programmer:    Jack Morris
# -- Course:        ITSE-1306 (Intro to PHP)
# -- Instructor:    Cesar "Coach" Marrero
# -- Assignment:    Week7-Lab Rule of 72
# -- Description:   
# ---------------

if ($_POST['rate'] = 0) 
    print '<p class="error">Unable to divide by zero!</p>';
elseif (!is_numeric($_POST['rate']))
    print '<p class="error">Please enter a valid rate of return';

?>