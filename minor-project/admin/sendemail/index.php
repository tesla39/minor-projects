<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #ddd;
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
        margin-top: 10px;
    }
    input, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        font-size: 14px;
        border: 1px solid #ccc;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Send an Email</h1>
     <!-- <form action="send.php" method="post">  -->
    <form action="recieve.php" method="post">
        <label for="email">From:</label>
        <input type="email" name="email" id="email" required>
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" required>
        <label for="message">Message:</label>
        <textarea name="message" id="message" rows="10" required></textarea>
        <input type="submit" name="send" value="Send">
    </form>
</div>
</body>
</html>