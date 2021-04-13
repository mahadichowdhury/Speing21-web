<!Doctype   html>
<html>
    <head>
        <title> Welcome</title>
        <style type = "lab test 6.css">
        table{
            margin-top : 150 px;
            border : 1px solid;
            background-color: #eee;
        }
        td{
            border: 0px;
            padding: 10px;
        }
        th{ 
            border-bottom: 1px solid;
            background-color: #ddd;
        }
        </style>
        </head>
        <body>
        <form action="welcome.php" method="post">
            <table >
                <tr>
                    <th colspan="2"><h2 >Signin</h2></th>
    </tr>
        <tr>
            <td>Username: </td>
            <td><input type="text"name="uname"> </td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password"name="pwd"> </td>
        </tr>
        <tr>
            <td colspan="2"> <input type ="submit" name="signin" value="signin"></td>
        </tr>
    </table>
    </form>