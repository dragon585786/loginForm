<!DOCTYPE html>

<?php

$servername="localhost";
$usernamee="admin";
$passwordd="admin4321";
$dbname="multilogin";
$conn = mysqli_connect($servername, $usernamee, $passwordd, $dbname);
if(!$conn)
    {
        echo "connection failed oopppsss!!!!!";
    }
else
    {
        echo "connection done";
    }
if(isset($_POST['login']))
    {
        $user=$_POST['$username'];
        $pass=$_POST['$password'];
        $sql= "SELECT * FROM `multilogin` WHERE username '".$user."' and password '".$pass."' ";
        $result = mysqli_query($conn,$sql);
        if ($result)
            {
                while($row=mysql_fetch_array($result))
                    {
                    echo "you are login succesfull as $user:";
                    }


                    if($_POST['id']=='1')
                        {
                            ?>
                            <script type"text/javascript">
                            window.location.href="user.html"</script>
                            <?php

                        }
                            else if ($_POST['id']=='2')
                                {
                                    ?>
                                    <script type"text/javascript">
                                    window.location.href="manager.html"</script>
                                    <?php
                                }

                            else if ($_POST['id']=='3')
                                {
                                    ?>
                                    <script type"text/javascript">
                                    window.location.href="admin.html"</script>
                                    <?php
                                }
                            else 
                            {
                                    echo "some thing is wrong hahhahhaha";
                            }    
                    
            }





    }    

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            multiple user login page
        </title>
    </head>
    <body>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>
                        Username:<input type="text" name="username" placeholder="Enter the user name">
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:<input type="password" name="password" placeholder="Enter the password " >
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>