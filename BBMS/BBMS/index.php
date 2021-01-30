<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Blood Management</title>
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
		.search-box{
     
	    width:500px; 
		margin-left:auto;
		margin-right:auto;
		position:relative;
    
	padding:30px;
        font-size: 14px;
    }
	.search-box input[type="text"]{
		text-align: center;
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
	 .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
		background:	#00FFFF;
    } 
	 .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
	  .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
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
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbutton">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo">BBMS</label>
    <ul>
        <li><a class="active" href="donor_reg.html">Donor Registration</a> </li>
        <li><a href="donorlist.php">Donors</a> </li>
        <li><a href="request_for_blood.HTML">Request</a> </li>
        <li><a href="stock.php">Available</a> </li>
        <li><a href="admin_after_login.php">Admin</a> </li>
    </ul>
    <section></section>
</nav>
<div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Blood Group" />
        <div class="result"></div>
</div>
</body>
</html>
