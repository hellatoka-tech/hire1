
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $country = htmlspecialchars($_POST['country']);
    $email = htmlspecialchars($_POST['email']);
    $description = htmlspecialchars($_POST['description']);

    $to = "inboxtoks1@gmail.com";  // Change to your email address
    $subject = "New Form Submission from $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/html; charset=UTF-8";

    $body = "
    <html>
    <body>
      <h2>Form Submission Details</h2>
      <p><strong>Name:</strong> $name</p>
      <p><strong>Country:</strong> $country</p>
      <p><strong>Email:</strong> $email</p>
      <p><strong>Description:</strong> $description</p>
    </body>
    </html>
    ";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h3>Message sent successfully!</h3>";
    } else {
        echo "<h3>Error sending message. Please try again later.</h3>";
    }
} else {
    echo "<h3>Invalid request. Please fill out the form properly.</h3>";
}
