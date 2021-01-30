<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Responsive Navigation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;

        }
        body
        {
            font-family: Verdana;

        }
        nav
        {
            background: #0082e6;
            height: 80px;
            width: 100%;
        }
        label.logo{
            color: white;
            font-size: 30px;
            line-height: 80px;
            padding: 0 70px;
            font-weight: bold;
        }
        nav ul{
            float: right;
            margin-right: 20px;
        }
        nav ul li{
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }
        nav ul li a{
            color: white;
            font-size: 17px;
            padding: 7px 13px;
            border-radius: 2px;
            text-transform: uppercase;
        }
        a.active,a:hover{
            background: #1b9bff;
            transition: .5s;

        }
        .checkbutton{
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 40px;
            cursor: pointer;
        }
        #check{
            display: none;
        }
        @media (max-width: 952px) {
            label.logo{
                font-size: 30px;
                padding-left: 50px;
            }
            nav ul li a{
                font-size: 16px;

            }

        }
        @media (max-width: 858px) {
            .checkbutton{
                display: block;

            }
            ul{
                position: fixed;
                width: 100%;
                height: 100vh;
                background-image:url(images/image1.jpg);
                background-size:cover;
                top: 80px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }
            nav ul li{
                display: block;
                margin: 50px 0;
                line-height: 30px;
            }
            nav ul li a{
                font-size: 20px;
            }
            a:hover,a.active{
                background: none;
                color: #0082e6;
            }
            #check:checked~ul{
                left: 0;
            }

        }
        section{
            background-image:url(images/image1.jpg);
            background-size:cover;
            height: calc(100vh - 80px);
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbutton">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">BBMS</label>
    <ul>
        <li><a class="active" href="donor.php">Donors List</a> </li>
        <li><a href="request.php">Blood Request</a> </li>
        <li><a href="stock.php">Stock</a> </li>
        <li><a href="logout.php">Logout</a> </li>
    </ul>
    <section></section>
</nav>
</body>
</html>
