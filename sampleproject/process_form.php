<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Processed Absentee Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #F8F8FF;
            text-align: center;
        }

        h2 {
            color: #333;
            font-size: 28px; /* Adjust the size as needed */
            margin-bottom: 15px;
        }

        .letter-frame {
            width: 50%;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px; /* Adjust the padding as needed */
            background-color: #F0F8FF;
            margin-top: 20px;
            line-height: 2.6;
        }

        strong {
            font-size: 25px; /* Adjust the size as needed */
        }

        em {
            font-style: italic; 
            font-size: 20px; 
            font-weight: bold;
        }
    </style>
</head>
<body>

    <?php
    // Function to sanitize form data
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Retrieve form data from the URL
    $name = test_input($_GET["name"]);
    $idNumber = test_input($_GET["idNumber"]);
    $section = test_input($_GET["section"]);
    $date = test_input($_GET["date"]);
    $reason = test_input($_GET["reason"]);
    $teacher = test_input($_GET["teacher"]);
    $subject = test_input($_GET["subject"]);

    // Generate Absent Form Letter
    echo "<div class='letter-frame'>";
    echo "<h2><strong>Dear Mr./Ms./Mrs. $teacher,</strong></h2>";
    echo "<p>I am writing to inform you that I, $name (ID: $idNumber), from the section of $section, will be absent on $date for your $subject due to the following reason:</p>";
    echo "<p><em>$reason</em></p>";
    echo "<p>Please consider this as my formal notification of absence. If there are any additional steps or requirements, kindly let me know.</p>";
    echo "<p>Thank you for your understanding.</p>";
    echo "</div>";
    ?>

</body>
</html>
