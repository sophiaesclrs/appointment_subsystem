<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/image/logo-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MSU-IIT NMPC</title>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Raleway&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body{
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)), url(/image/maxresdefault.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

    </style>
</head>

<body>
    <input type="text" id="menu-toggle">
    <div class="sidebar">
        <div class="side-content">
            <div class="profile">
                <img src="{{URL::asset('/image/admanager.png')}}">
            </div>
        </div>
    </div>
</body>
</html>
