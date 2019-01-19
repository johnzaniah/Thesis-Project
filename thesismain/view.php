<!DOCTYPE html>
<html>
    <p style="text-align: center;">
        <span style="font-size:36px;"><strong><span style="font-family: trebuchet ms,helvetica,sans-serif;"><span style="color: rgb(0, 128, 128);">Driver Employee List's</span></span></strong></span></p>
        <p style="text-align: center;">
        &nbsp;</p>
        <head>
            <title>Registered Employees</title>
            <style type="text/css">
            table, td, th
            {
            border:1px solid #666;
            font-style:Calibri;
            }
            th
            {
            background-color:#666;
            color:white;
            font-style:Calibri;
            }
            </style>
        </head>
        <body>
            <table border="1px" width="100%">
                <tr>
                    <th>ID:</th>
                    <th>Licence:</th>
                    <th>Plate Number:</th>
                    <th>First Name:</th>
                    <th>Last Name:</th>
                    <th>Age:</th>
                    <th>Gender:</th>
                    <th>Address:</th>
                    <th>Contact:</th>
                    <th>E-Mail:</th>
                    <th>Birthdate:</th>
                    <th>Nationality:</th>
                    <th>Education Level:</th>
                    <th>Vehicle Type:</th>
                    <th>Year Hired: </th>
                </tr>
                <?php
                $hostname = "localhost";
                $username = "root";
                $password ="";
                $database = "transport";
                $conn = new mysqli($hostname, $username, $password, $database);
                if($conn->connect_error) {
                die("Connection Failed: " . $conn->connect_error);
                }
                $sql = "SELECT id_no, licence, plateno, fname, lastname, age, gender, address, contact, email, bdate, nationality, edulevel, vehicletype, yrhired FROM driver_employee";
                $result = $conn->query($sql);
                $dwb = $result->fetch_all();
                
                for($i=0; $i < sizeof($dwb); $i++){
                {
                print "<tr>";
                    print "<td>" . $dwb[$i][0] . "</td>";
                    print "<td>" . $dwb[$i][1] . "</td>";
                    print "<td>" . $dwb[$i][2] . "</td>";
                    print "<td>" . $dwb[$i][3] . "</td>";
                    print "<td>" . $dwb[$i][4] . "</td>";
                    print "<td>" . $dwb[$i][5] . "</td>";
                    print "<td>" . $dwb[$i][6] . "</td>";
                    print "<td>" . $dwb[$i][7] . "</td>";
                    print "<td>" . $dwb[$i][8] . "</td>";
                    print "<td>" . $dwb[$i][9] . "</td>";
                    print "<td>" . $dwb[$i][10] . "</td>";
                    print "<td>" . $dwb[$i][11] . "</td>";
                    print "<td>" . $dwb[$i][12] . "</td>";
                    print "<td>" . $dwb[$i][13] . "</td>";
                    print "<td>" . $dwb[$i][14] . "</td>";
                print "</tr>" ;
                }
                }
                ?>
            </table>
            <div style="margin: auto;"><a class="link" href="index.php">Return</a></div>

        </body>
    </html>
