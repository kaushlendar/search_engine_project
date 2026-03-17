<!DOCTYPE html>
<html>
<head>
    
    <title>RESULT By Warriors</title>

<style>

    #searchfield
    {
        width: 500px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid green;
    }

    #gobtn
    {
        width: 100px;
        height: 39px;
        border-radius: 5px;
        border: 1px solid green;
        background-color: white;
        font-size: 17px;
    }

    #gobtn:hover
    {
        background-color: green;
        color: white;
    }
    a
    {
        color:0000cc;
        text-decoration:none;
    }

</style>

</head>
<body>

<form action="" method="GET">
    <table border="0" width="100%" bgcolor="f2f2f2">
        <tr>
            <td width="10%">
                <a href="index1.php"><img src="https://play-lh.googleusercontent.com/1-hPxafOxdYpYZEOKzNIkSP43HXCNftVJVttoo4ucl7rsMASXW3Xr6GlXURCubE1tA=w3840-h2160-rw" width="100%"></a>
            </td>
            <td>
                <input type="text" name="" id="searchfield">
                <input type="submit" name="" value="GO!" id="gobtn">
           </td>
        </tr>
    </table>


<table border="0" style="margin-left: 100px;";
    <tr>
<?php
include("connection.php");
if(isset($_GET['searchbtn']))
    {
        $search = $_GET['search'];
        if($search=="")
            {
                echo "<b><p align='center'>Please Write Something in search Box</p></b>";
                exit();
            }
        $query = "select * from add_website where  website_keywords like '%$search%' limit 0,4";
        $data = mysqli_query($conn,$query);

        if(mysqli_num_rows($data)<1)
            {
                echo "NO result font";
                exit();
            }
        echo "<a href='#' style='margin-lift:105px;'><font size='4'>More Images for $search</a>";

        while($row = mysqli_fetch_array($data))
            {
                echo "
                <td>
                <img src='$row[4]' width='200px';'>
                </td>
                ";
            }

    }
?>
</tr>

</form>
<?php include("finalsearch.php");  ?>
    
</body>
</html>