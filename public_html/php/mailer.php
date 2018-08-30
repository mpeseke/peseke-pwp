<?php
/**
 * mailer.php
 *
 * This file handles secure mail transport using the Swiftmailer Library with Google reCaptcha
 * integration.
 *
 * @author Marlon Oliver Peseke <mpeseke@gmail.com>
 **/

//require all composer dependencies
require_once (dirname(__DIR__, 2). "/vendor/autoload.php");

//require mail-config.php
require_once("mail-config.php");

//verify the user's reCaptcha input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
	//if there's a reCaptcha error, throw exception
	if (!$resp->isSuccess()) {
		throw(new Exception("reCaptcha error!"));
	}

	/**
	 * Sanitize the inputs from the mailer fields
	 * This assumes jQuery will be AJAX submitting the form,
	 * so we are using the $_POST superglobal.
	 */

	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	//create Swift message
	$swiftMessage = new Swift_Message();

	/**
	 * attach the sender to the message.
	 * This takes the form of an associative array where $email is the key for the real name.
	 */
	$swiftMessage->setFrom([$email=>$name]);

	/**
	 * attach the recipients to the message.
	 * $MAIL_RECIPIENTS is set in mail-confit.php
	 * */

	$recipients = $MAIL_RECIPIENTS;
	$swiftMessage->setTo($recipients);

	//attach the subject line to the message
	$swiftMessage->setSubject($subject);

	/**
	 * attach the actial message to the message.
	 */
	$swiftMessage->setBody($message, "text/html");
	$swiftMessage->addPart(html_entity_decode($message), "text/plain");

	/**
	 * Send the email via SMTP.
	 */

	$smtp = new Swift_SmtpTransport("localhost", 25);
	$mailer = new Swift_Mailer($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);

	/**
	 * the send method returns the number of recipients that accepted the email.
	 * If the number attempted !==number accepted it's an Exception.
	 */
	if($numSent !== count($recipients)) {
		//The $failedRecipients parameter passed in the send() contains an array of the emails that failed
		throw(new RuntimeException("Unable to send email"));
	}

	//report if successful!
	echo "<div class=\"alert alert-success\" role=\"alert\">Email sent successfully! Marlon will get back to you soon!</div>";
} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\"><strong>Oh No!</strong> Something's wrong: " . $exception->getMessage() . "</div>";
}