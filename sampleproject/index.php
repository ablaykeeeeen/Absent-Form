<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Absentee Form</title>
</head>
<body>

    <h2>Absent Form</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = test_input($_POST["name"]);
        $idNumber = test_input($_POST["idNumber"]);
        $section = test_input($_POST["section"]);
        $date = test_input($_POST["date"]);
        $reason = test_input($_POST["reason"]);
        $teacher = test_input($_POST["teacher"]);
        $subject = test_input($_POST["subject"]);

        
        header("Location: process_form.php?" . http_build_query([
            'name' => $name,
            'idNumber' => $idNumber,
            'section' => $section,
            'date' => $date,
            'reason' => $reason,
            'teacher' => $teacher,
            'subject' => $subject
        ]));
        exit();
    }

   
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="idNumber">ID Number:</label>
        <input type="text" name="idNumber" required><br>

        <label for="section">Section:</label>
        <input type="text" name="section" required><br>

        <label for="date">Date:</label>
        <input type="date" name="date" required><br>

        <label for="reason">Reason:</label>
        <textarea name="reason" rows="4" cols="50" required></textarea><br>

        <label for="teacher">Teacher:</label>
        <input type="text" name="teacher" required><br>

        <label for="subject">Subject:</label>
        <input type="text" name="subject" required><br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
