<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/image/logo-removebg-preview.png">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MSU-IIT NMPC</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&family=Raleway&display=swap');

        :root{
            --white-color: #fff;
            --dark-color: #222;
            --section-bg-color: #202834;
            --navigation-item-hover-color: #3b5378;

            --text-shadow: 0 5px 25px rgba(0,0,0,0.1);
            --box-shadow: 0 5px 25px rgb(0 0 0 / 20%);

            --scroll-bar-color: #fff;
            --scroll-thumb-color: #282f4e;
            --scroll-thumb-hover-color: #454f6b;

            --black: #444;
            --light-color: #666;
            --border: 0.1rem solid rgba(0,0,0,.1);
            --border-hover: 0.1rem solid var(--black);
            --box-shadow: 0 .5rem 1rem rgba(0,0,0,.1);
        }

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
            outline: none;
            list-style: none;
            border:  none;
            text-decoration: none;
            transition: all 0.2s linear;
            transition:width none;
        }

        section{ padding: 0 14%; }

        .index{
            height: 100%;
            width: 100%;
            min-height: 100vh;
            background: linear-gradient(rgba(252,244,163, 0.5), rgba(252,244,163, 0.5)), url(/image/white-abstract-background-2pa3nsnx8sj91zs3.jpg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            /* background: #fcf4a3; */
            /*background: linear-gradient(180.5deg, rgb(34, 126, 34) 8.5%, rgb(99, 162, 17) 118.2%);*/
            position: relative;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
            gap: 2rem;
        }

        .index-text{ width: 118%; }
        .index .index-text .title{
            font-size: 60px;
            line-height: 1;
            color: var(--dark-color);
            margin: 0 0 12px;
        }
        .index .index-text p{
            color: var(--dark-color);
            max-width: 570px;
            /* background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            text-shadow: var(--text-shadow);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: var(--box-shadow);
            padding: 20px; */
            letter-spacing: 1.3px;
            font-weight: bold;
            padding-top: 20px;
            border-radius: 10px;


        }
        .index .index-text .signin{
            width: 22.4%;
            border: none;
            outline: none;
            background: #8a0303;
            color: var(--white-color);
            font-size: 1em;
            font-weight: bold;
            padding: 8px 25px;
            display: flex;
            align-items: center;
            margin-top: 40px;
            border-radius: 10px;
            cursor: pointer;
        }
        .index .index-text .signin:hover{
            background: #cc1100;
        }

        .index .index-text .signin i{
            font-size: 1.6em;
            transition: 0.3s ease;
        }
        .index .index-text .signin:hover i{ transform: translateX(5px); }

        .index-img img{
            width: 50%;
            margin-left: 40%;
        }

        .icons{
            position: absolute;
            top: 50%;
            padding: 0 4.5%;
            transform: translateY(-50%);
        }
        .icons i{
            display: block;
            margin: 26px 0;
            font-size: 28px;
            color: #8a0303;
            transition: all .50s ease;
        }
        .icons i:hover{
            transform: translateY(-5px);
            color: #cc1100;
        }

    </style>
</head>

<body>

    <section class="index">
        <div class="index-text">
          <h2 class="title">Hey there, <span>admin!</span></h2>
          <p>Welcome to MSU-IIT NMPC's appointment management site. Let's now manage the appointment schedule matters of our dear clients.</p>

          @guest
            <a href="{{ route('login') }}" class="signin">Sign In  <i class="uil uil-arrow-right"></i></a>
          @endguest

        </div>

        <div class="index-img">
        <img src="{{URL::asset('image/logo-removebg-preview.png')}}">
        </div>
    </section>

    <div class="icons">
        <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
    </div>
</body>
</html>
