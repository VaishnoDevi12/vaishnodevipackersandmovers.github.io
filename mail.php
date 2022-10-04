<?php
/* Set e-mail recipient */
$myemail  = "vaishnodevipackersandmovers@gmail.com";

/* Check all form inputs using check_input function */
$Name = check_input($_POST['name'], "Name");
$Phone Number = check_input($_POST['Phone Number']);
$Moving = check_input($_POST['Moving From City To City']);
$comments = check_input($_POST['message'], "Write your comments");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}


/* Let's prepare the message for the e-mail */
$message = "Mail From Vaishno Devi Packers And Movers Client. !

Your contact form has been submitted by:

Name: $Name
Number: $Phone Number
From And To Address: $Moving
Message : $comments


End of message
";

/* Send the message using mail() function */
mail($myemail, $Moving, $number, $message);

/* Redirect visitor to the thank you page */
header('Location: https://vaishnodevipackersandmovers.in');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>