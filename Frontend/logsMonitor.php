<?php
$jsonlogs = file_get_contents("http://localhost/Oracle_Monitor_SGA_TableSpce/server/results.php?q=logsinfo");
$jsonmode = file_get_contents("http://localhost/Oracle_Monitor_SGA_TableSpce/server/results.php?q=logmode");
$jsonmin = file_get_contents("http://localhost/Oracle_Monitor_SGA_TableSpce/server/results.php?q=logsswitch");
$logsinfo = json_decode($jsonlogs);
$mode = json_decode($jsonmode);
$switchminutes = json_decode($jsonmin);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10" >
    <title>SGA Size Monitor</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style/userS.css">

</head>

<body>
    <div class="container">
    <div class="row">
            <div class="header">
                <div class="box1">
                    <p class="titu">Logs Status Monitor</p>
                    <img class="logo" src="img/logo.png">
                </div>
            </div>
        </div>
        
            <h1>Logs</h1>
            <br>

        <div class="form-control">
            <br><div class="table-responsive">
                <table class="table">
                    <thead cGROUPtext-muted">
                    <thead class="text-muted">
                        <th>GROUP</th>
                        <th>MEMBERS</th>
                        <th>STATUS</th>
                    </thead> 
                    <tbody>
                    </tbody>              
                </table>
            </div>
        </div>
    
        <div class="form-control">
            <br><div class="table-responsive">
                <table class="table">
                    <thead class="text-muted">
                        <th>Switch Log (minutes) </th>
                    </thead>    
                    <tbody>
                        <tr>
                            <td><?php echo $switchminutes; ?></td>
                        </tr>
                    </tbody>                  
                </table>
            </div>
        </div>

        <div class="form-control">
            <br><div class="table-responsive">
                <table class="table">
                    <thead class="text-muted">
                        <th>Log Mode</th>
                    </thead>    
                    <tbody> 
                        <tr>
                            <td><?php echo $mode; ?></td>
                        </tr>                       
                    </tbody>                  
                </table>
            </div>
        </div>
        <div class="button">
            <a href="menu.html">
                <button class="boton">Back to Menu</button>
            </a>
        </div>
    </div>
</body>

</html>


