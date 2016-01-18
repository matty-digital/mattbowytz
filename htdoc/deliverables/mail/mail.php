<!DOCTYPE html>
<html>
<head>
  <title>Send a Mail Message</title>
</head>
<body>
  <h3>Send mail to a friend!</h3>
    <form action="sendmail.php" method="POST">

    <p>Who are you sending the email to?</p>
    <input type="text" name="receiver" size="30" maxlength="30">
    <br />
    <p>What is your email address?</p>
    <input type="text" name="sender" size="30" maxlength="30">
    <br />
    <p>Subject?</p>
    <input type="text" name="subject" size="60" maxlength="60">
    <br />
    <p>Please type your message below:</p>
    <br />
    <textarea name="msg" rows="5" cols="60"></textarea>
    <br />
    <input type="submit" value="Submit">
  </form>
</body>
</html>
