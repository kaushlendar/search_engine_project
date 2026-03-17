<!DOCTYPE html>
<html>
<head>
    
    <title>Google Website</title>
    <style>
        input
        {
            width: 700px;
            height: 35px;
            border-radius: 5px;
            border: 1px solid green;
            font-size: 20px;
        }
         #searchbtn
        {
            width: 130px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid blue;
            color: blue;
            font-size: 18px;
            background-color:white;
        }
        #searchbtn:hover
        {
            background-color:blue;
            color:white;
        }
    </style>
</head>
<body>
    <br><br><br>
<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPG4Lu1RAkEa2912Hth29oIWwVmlKiXNZFCQ&s" width="20%"></center>

<form action="result.php" method="GET">

<br>
<center><input type="text" name="search"></center>
<br><br>
<center><input type="submit" name="searchbtn" id="searchbtn" value="search"></center>

</body>
</html>