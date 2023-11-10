<!DOCTYPE html>
<html>
<head>
    <title>Prime Numbers</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            padding: 10px;
            margin-bottom: 10px;
        }
        button {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        h2 {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Prime Numbers Generator</h1>
        <form method="post">
            <input type="number" name="limit" placeholder="Enter a limit">
            <button type="submit" name="generate">Generate Prime Numbers</button>
        </form>

        <?php
        function isPrime($num) {
            if ($num <= 1) {
                return false;
            }
            for ($i = 2; $i * $i <= $num; $i++) {
                if ($num % $i === 0) {
                    return false;
                }
            }
            return true;
        }

        if (isset($_POST['generate'])) {
            $limit = isset($_POST['limit']) ? (int)$_POST['limit'] : 0;
            echo "<h2>Prime numbers up to $limit:</h2>";
            for ($i = 2; $i <= $limit; $i++) {
                if (isPrime($i)) {
                    echo $i . ' ';
                }
            }
        }
        ?>
    </div>
</body>
</html>