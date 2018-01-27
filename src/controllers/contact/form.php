<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $captcha = $_POST['captcha'];

    $errors = array();

    $field = 'firstname';
    if (empty($$field)){
        $errors[$field] = array();
        $errors[$field][] = 'This field is required';
    }
    $field = 'lastname';
    if (empty($$field)){
        $errors[$field] = array();
        $errors[$field][] = 'This field is required';
    }
    $field = 'email';
    if (empty($$field)){
        $errors[$field] = array();
        $errors[$field][] = 'This field is required';
    }
    elseif (!valid_email($email)) {
        $errors[$field] = array();
        $errors[$field][] = 'The e-mail format is invalid';
    }
    $field = 'comment';
    if (empty($$field)){
        $errors[$field] = array();
        $errors[$field][] = 'This field is required';
    }
    $field = 'captcha';
    if (empty($$field)){
        $errors[$field] = array();
        $errors[$field][] = 'This field is required';
    }
    elseif (str_replace('*','',$_SESSION['captcha']['form_contact']) != $captcha){
        $errors[$field] = array();
        $errors[$field][] = 'The captcha number was incorrect';
    }

    if (count($errors) == 0) {
        // Storing information into the database
        $sql = 'INSERT INTO contact_form (creation_date,firstname,lastname,email,comment,status) values (?,?,?,?,?,?)';
        $result = db_query($sql,array(date('YmdHis'),$firstname,$lastname,$email,$comment,'1'));

        // Result page
        header('Location: /contact/result');
    }

}

require PATH_VIEW.'contact/form.php';
