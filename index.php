<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="file_box">
        <h1>File Upload System</h1>
        <p>The maximum upload file is <b>100mb<b></p>
        <p><em>jpg, jpeg, png, gif, rar, zip, mp3, mp4, pdf, svg, avif</em></p>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" class="input"><br>
            <button type="submit" name="submit" class="input-btn">UPLOAD</button>
        </form>
    </div>

    <!-- style for code -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'poppins';
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100vh;
            background-color: #69a2ba;
        }
        .file_box{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            background-color: #333333;
            width: 500px;
            height: 350px;
            border-radius: 35px;
        }
        .file_box h1{
            text-transform: uppercase;
        }
        .file_box p{
            padding: 1rem auto;
        }
        .file_box form{
            margin: 1.5rem auto;
            padding: auto 3rem;
        }
        .file_box form .input{
            height: 35px;
            width: 100%;
            background-color: #fff;
            color: #000;
        }
        .input-btn{
            padding: 0.45rem 2rem;
            margin-top: 1rem;
            border-radius: 10px;
            outline: none;
            border: none;
            font-weight: 600;
            font-size: 18px;
            color: #fff;
            background: green;
            cursor: pointer;
        }
    </style>
</body>
</html>