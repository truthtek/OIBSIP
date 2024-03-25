// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $dateOfBirth = $_POST["dateOfBirth"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];

    // You can perform additional validation or processing here

    // For example, you can check if the passwords match
    if ($password === $confirmPassword) {
        // Passwords match, you can proceed with further processing (e.g., store data in a database)
        echo "Form submitted successfully!";
        echo "<pre>";
        echo "First Name: " . $firstName . "\n";
        echo "Last Name: " . $lastName . "\n";
        echo "Date of Birth: " . $dateOfBirth . "\n";
        echo "Email: " . $email . "\n";
        echo "Password: " . $password . "\n";
        echo "</pre>";
    } 
    else {
        echo "Passwords do not match";
    }
}