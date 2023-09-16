<!DOCTYPE html>
<html lang='eng'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAMPLE PATIENT DATA</title>
    <style>
        body {
            background-color: #E8F8F5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
        }

        form {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>SAMPLE PATIENT DATA</h1>
    <div><h2>WELCOME USER</h2></div>
    <form action='connect.php' method='POST'>
        <label for='Pt_ID'>Pt_ID:</label><br>
        <input type='text' name='Pt_ID' id='Pt_ID' required /><br><br>
        <input type='submit' name='submit' id='submit' />
    </form>
</body>

</html>
