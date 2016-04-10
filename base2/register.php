
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Stores errors:
	$errors = array();

	// Need a payment token:
	if (isset($_POST['stripeToken'])) {

		$token = $_POST['stripeToken'];

		// Check for a duplicate submission, just in case:
		// Uses sessions, you could use a cookie instead.
		if (isset($_SESSION['token']) && ($_SESSION['token'] == $token)) {
			$errors['token'] = 'You have apparently resubmitted the form. Please do not do that.';
		} else { // New submission.
			$_SESSION['token'] = $token;
		}

	} else {
		$errors['token'] = 'The order cannot be processed. Please make sure you have JavaScript enabled and try again.';
	}

	// Set the order amount somehow:
	$amount = 100; // $20, in cents

	// Validate other form data!

	// If no errors, process the order:
	if (empty($errors)) {

		// create the charge on Stripe's servers - this will charge the user's card
		try {

			// Include the Stripe library:
			// Assumes you've installed the Stripe PHP library using Composer!
			require_once('stripe/init.php');

			// set your secret key: remember to change this to your live secret key in production
			// see your keys here https://manage.stripe.com/account
			\Stripe\Stripe::setApiKey("sk_test_3j1kUVTgYEq5TRHIiP79CUio");

			// Charge the order:
			$charge = \Stripe\Charge::create(array(
				"amount" => $amount, // amount in cents, again
				"currency" => "usd",
				"source" => $token
				
				)
			);

			// Check that it was paid:
			if ($charge->paid == true) {

				// Store the order in the database.
				// Send the email.
				// Celebrate!
				$servername = "localhost";
$username = "root";
$password = "";
$dbname = "MyUsers";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO yusers (FullName, Email, Password, PhoneNumber, StreetAddress, City, ZipCode, State)
VALUES ('$_POST[name]','$_POST[email]','$_POST[password]','$_POST[phone]','$_POST[address]','$_POST[city]','$_POST[zip]','$_POST[state]')";

if ($conn->query($sql) === TRUE) {
	session_start();
	$_SESSION['FullName'] = $_POST[name];
    header('Location: member.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$email = $_POST['email'];
$name = $_POST['name'];
require_once 'libs/PHPMailer/PHPMailerAutoload.php';

					$m = new PHPMailer;

					$m -> isSMTP();
					$m ->SMTPAuth = true;


					$m ->Host = 'smtp.gmail.com';

					$m ->Username = 'heatcheck.inc@gmail.com';
					$m ->Password = 'ecommerce16';
					$m ->SMTPSecure = 'ssl';
					$m ->Port=465;

					$m ->From = 'heatcheck.inc@gmail.com';
					$m ->FromName = 'HeatCheck';
					$m ->addReplyTo('heatcheck.inc@gmail.com','reply address');
					$m ->addAddress($email,$name);

					$m ->isHTML(true);


					// this is the subject and email
					$m ->Subject = 'Thanks for joining HEATCHECK';
					$m ->Body = '<p>Dear Customer,</p><p>Thanks for joining HEATCHECK! Your signup is complete and you are all set to <strong>start betting and win BIG!!</strong></p>
					<p>Enjoy!</p><p>- Your friends at HEATCHECK</p>';
					$m ->AltBody = 'this is body';

					if($m->send()){
						echo 'Email Sent';
						} 

$conn->close();

			} else { // Charge was not paid!
				
			}

		} catch (\Stripe\Error\Card $e) {
		    // Card was declined.
			$e_json = $e->getJsonBody();
			$err = $e_json['error'];
			$errors['stripe'] = $err['message'];
		} 

	}else{
		header('Location: signup2_1.html');
	} 

}


?>







