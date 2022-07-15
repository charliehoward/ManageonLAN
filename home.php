<!DOCTYPE html>
<html>
<head>
	<title>Manage on LAN</title>
	<link rel="shortcut icon" type="image/jpg" href="images/wol.ico"/>
	<meta charset="utf-8">
	<link href="css/index.css" rel="stylesheet" type="text/css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
	<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />
	<link rel="stylesheet" type="text/css" href="css/index.css" media="screen" />
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12" role="main">
        <h1 class="mb-4 mt-4"><span class="fas fa-power-off"></span><a href="home.php"> Manage on LAN</a></h1>
		<div
                <?php
                if ($_SERVER['QUERY_STRING'] == 'successshutdown=true') {
                        echo ' class="success"> Successfully sent shutdown request!';
                } elseif ($_SERVER['QUERY_STRING'] == 'successwol=true') {
                        echo ' class="success"> Successfully sent wakeup request!';
                } else {
                        echo ">";
                }
                ?>
        </div>
		<br>
		<div class="grid-container-top">
			<div class="grid-item-top">Device</div>
  			<div class="grid-item-top">IP Address</div>
  			<div class="grid-item-top">MAC Address</div>
			<div class="grid-item-top">Status</div>
  			<div class="grid-item-top"></div>
			<div class="grid-item-top"></div>
		</div>
		<div class="grid-container-1">
  			<div class="grid-item-1">Device 1</div>
			<div class="grid-item-1">10.0.0.2</div>
  			<div class="grid-item-1">XX:XX:XX:XX:XX:XX</div>
			<div class="grid-item-1">
                <?php
                function pingAddress1($ip1) {
                    $pingresult1 = exec("ping -c 1 $ip1", $outcome1, $status1);
                    if (0 == $status1) {
                        $status1 = "images/online.png";
                    } else {
                        $status1 = "images/offline.png";
                    }
                    echo "<img class='status' src=\"$status1\" />";
                }
                pingAddress1("10.0.0.2");
                ?>
            </div>
  			<div class="grid-item-1">
				<form action="porygonWOL.php" method="post">
					<input type="submit" value="Wake Up" name="porygonWOL">
				</form>
			</div>
			<div class="grid-item-1">
				<form action="porygonShutdown.php" method="post">
					<input type="submit" value="Shutdown" name="porygonShutdown">
				</form>
			</div>
  		</div> 
		<div class="grid-container-2">
			<div class="grid-item-2">Device 2</div>
			<div class="grid-item-2">10.0.0.3</div>
  			<div class="grid-item-2">XX:XX:XX:XX:XX:XX</div>
			<div class="grid-item-2">
                <?php
                function pingAddress2($ip2) {
                    $pingresult2 = exec("ping -c 1 $ip2", $outcome2, $status2);
                    if (0 == $status2) {
                        $status2 = "images/online.png";
                    } else {
                        $status2 = "images/offline.png";
                    }
                    echo "<img class='status' src=\"$status2\" />";
                }
                pingAddress2("10.0.0.3");
                ?>
            </div>
			<div class="grid-item-2">
				<form action="spyroWOL.php" method="post">
					<input type="submit" value="Wake Up" name="spyroWOL">
				</form>
			</div>
			<div class="grid-item-2">
<!--				<form action="spyroShutdown.php" method="post">
					<input type="submit" value="Shutdown" name="spyroShutdown">
				</form> -->
			</div>
		</div>
		<div class="grid-container-3">
			<div class="grid-item-3">Device 3</div>
			<div class="grid-item-3">10.0.0.4</div>
  			<div class="grid-item-3">XX:XX:XX:XX:XX:XX</div>
			<div class="grid-item-3">
                <?php
                function pingAddress3($ip3) {
                    $pingresult3 = exec("ping -c 1 $ip3", $outcome3, $status3);
                    if (0 == $status3) {
                        $status3 = "images/online.png";
                    } else {
                        $status3 = "images/offline.png";
                    }
                    echo "<img class='status' src=\"$status3\" />";
                }
                pingAddress3("10.0.0.4");
                ?>
            </div>
			<div class="grid-item-3">
				<form action="unicornWOL.php" method="post">
					<input type="submit" value="Wake Up" name="unicornWOL">
				</form>
			</div>
			<div class="grid-item-3">
<!--				<form action="unicornShutdown.php" method="post">
					<input type="submit" value="Shutdown" name="unicornShutdown">
				</form> -->
			</div>
		</div> 
        <hr>
		<p>
          <i class="fab fa-github"></i> Project Page: 
	      <a href="https://github.com/charliehoward/ManageonLAN">https://github.com/charliehoward/ManageonLAN</a>
        </p>
		<p class="m-0">
          <small>Built with <span class="fa fa-heart text-danger" aria-hidden="true"></span> by Charlie Howard <span
              class="fab fa-github"></span> <a href="https://github.com/charliehoward">https://github.com/charliehoward</a></small>
        </p>
		<p>
          <small>
			  <i class="fab fa-php"></i> 
		      <a href="info.php">PHP Info</a>
	      </small>
        </p>
      </div>
    </div>
  </div>
</body>
</html>