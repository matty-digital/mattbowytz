<!DOCTYPE html>
<html>
<head>
    <title>Send a Mail Message</title>
</head>
<body>
    <h3>Send mail to a friend!</h3>
    <form action = "sendmail.php"
          method = "POST">

    <b>Who are you sending the email to?</b>
    <input type = "text" name = "receiver" size = "30" maxlength = "30">
    <br /><br />
    <b>What is your email address?</b>
    <input type = "text" name = "sender" size = "30" maxlength = "30">
    <br /><br />
    <b>Subject?</b>
    <input type = "text" name = "subject" size = "60" maxlength = "60">
    <br /><br />
    <b>Please type your message below:</b><br />
    <br />
    <textarea name="msg" rows="5" cols="60"></textarea>
    <br /><br />
    <input type = "submit" value = "Submit">
    </form>
</body>
</html>
