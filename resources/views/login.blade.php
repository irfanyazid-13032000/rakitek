<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .container {
            width: 900px;
            height: 500px;
            border: 5px black solid;
            margin: 50px auto;
            display: flex;
            background-color: #3598DC;
        }

        .container .content {
            width: 200px;
            height: 230px;
            margin: auto;
            background-color: white;
            border: 5px black solid;
            border-radius: 10px;
            /* overflow: hidden; */
            padding: 20px;

        }

        .container .content .inputan form {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            /* margin-bottom: 10px; */
        }

        .container .content .inputan form input {
            margin-bottom: 10px;
            color: #6C757D;
            background-color: #f2f2f2;
            border: hidden;
            text-align: center;

        }

        h4 {
            color: #7a7a7a;
        }


        #username {
            height: 30px;
            font-size: 15px;
        }


        #password {
            height: 30px;
            font-size: 15px;
        }


        #button {
            margin-top: 10px;
            width: 196px;
            border: none;
            height: 34px;
            background-color: #3598DC;
            font-size: 15px;
            color: white;
            font-weight: bold;
        }
    </style>
</head>


<body>

    <div class="container">
        <div class="content">
            <div class="inputan">
                <h4 style="text-align:center">LOGIN</h4>
                <form action="/login" method="POST">
                    @csrf
                    <input type="text" id="username" name="name" placeholder="username">
                    <input type="password" id="password" name="password" placeholder="password">
                    <button type="submit" id="button">Login</button>
            </div>
        </div>
    </div>

    </form>
</body>

</html>
