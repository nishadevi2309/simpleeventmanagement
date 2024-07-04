 
<!DOCTYPE html>
<html>

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">
    
   


    <style>
        body {
            margin: 0;
            font-family: 'Finlandica', sans-serif;
        }

        #out {
            height: 1029px;
            width: 1440px;
            /* border: solid black; */
            display: flex;
            justify-content: center;
        }

        #out1 {
            height: 1029px;
            width: 1294px;
            /* border: solid #ffd700; /* Border color yellow */
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            background-color: #fff;
            /* White background */
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .row1 {
            /* border: solid #800080; /* Border color purple */
            width: 1284px;
            height: 60px;
            background-color: rgba(245, 202, 194, 0.8);
            /* Transparent pink background */
            color: white;
            font-family: 'Ribeye Marrow', serif;
            font-size: 20px;
            display: flex;
            flex-direction:row;
            padding: 0px 0px 0px 10px;
            justify-content: start;
        }

        .row2 {
            /* border: solid grey; */
            width: 1294px;
            height: 915px;
            display: flex;
            flex-direction: row;
        }

        .col2 {
            /* border: solid silver; */
            width: 679px;
            height: 915px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .box {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
             
        }

        label {
            color: #D16587;
            font-weight: bold;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin-right: 5px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
            background-color: #fff;
        }

        input[type="date"],
        input[type="time"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            /* border: 1px solid #ccc; */
            border-radius: 4px;
            background-color: #fff;
        }

        marquee {
            background-color: #ED7966;
            height:43px;
            color:white;
            font-family: 'Single Day', cursive;
            font-size:20px
        }

        .row4 {
            height: 40px;
        }

        #new {
            height: 60%;
            
        }

        #newabove {
            height: 40%;
            }

        #bu {
            border:none;
            height: 40px;
            width: 150px;
             background-color: rgba(245, 202, 194, 0.8);
            margin: 1px 40px 1px 70px;
            border-radius: 20px;
            color: whitesmoke;
            font-size: 19px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
</head>

<body>
    <div id="out">
        <div id="out1">
            <div class="row1">
                <h3>Event Planner</h3>
		<div><img src="noteimage.png"  width="70" height="70"></div>
            </div>

            <div class="row2">
                <div class="col2">
                    <form method="POST" action="">

                        <label for="event">eventname</label>
                        <input class="box" type="text" id="event" name="event"><br><br>
                        <label for="type">event type</label>
                        <input class="box" type="text" id="type" name="type"><br><br>
                        <label for="no_of_person">no of person </label>
                        <input class="box" type="text" id="no_of_person" name="no_of_person"><br><br>
                        <label for="amount">event amount</label>
                        <input class="box" type="text" id="amount" name="amount"><br><br>

                        <label for="eventpackages">eventpackages</label>

                        <select class="box" name="eventpackages">
                            <option value="dreamydelight">dreamydelight</option>
                            <option value="platinum prestige package">platinum prestige package</option>
                            <option value="budget bliss bundle">budget bliss bundle</option>
                            <option value="signature simplicity">signature simplicity</option>
                            <option value="VIP velvet vision">VIP velvet vision</option>
                            <option value="blissfull bash bonaza">blissfull bash bonaza</option>
                        </select><br><br>

                        <label for="eventplace">event place</label>
                        <input class="box" type="text" name="eventplace"><br><br>

                        <label for="eventpackages">event hall</label>

                        <select class="box" name="eventhall">
                            <option value="hall1">hall1</option>
                            <option value="hall2">hall2</option>
                            <option value="hall3">hall3</option>
                            <option value="hall4">hall4</option>
                            <option value="hall5">hall5</option>
                            <option value="hall6">hall6</option>
                        </select><br><br>

                        <label for="fooditem">food type</label>

                        <input type="checkbox" name="fooditem1" value="veg">
                        <label for="fooditem1">veg</label>
                        <input type="checkbox" name="fooditem2" value="non-veg">
                        <label for="fooditem2">non-veg</label>
                        <input type="checkbox" name="fooditem3" value="both">
                        <label for="fooditem2">both</label><br> <br>

                        <label for="event catering">choose catering type</label>

                        <select class="box" name="eventcatering">
                            <option value="Stationary Platters">Stationary Platters</option>
                            <option value="Hors D'oeuvres">Hors D'oeuvres</option>
                            <option value="Small Plates and Stations">Small Plates and Stations</option>
                            <option value="Three-Course Plated Dinner">Three-Course Plated Dinner</option>
                            <option value="buffet">buffet Dinner</option>
                            <option value="outdoor bbq">outdoor bbq</option>
                        </select><br><br>

                        <label for="date">select event date</label>
                        <input class="box" type="date" id="Date" name="date"><br><br>

                    
                </div>

                <div class="col2">

                    <div id="newabove">

                        <label for="starttime">Select starttime event:</label>
                        <input class="box" type="time" id="starttime" name="starttime">
                        <label for="endtime">Select endtime event:</label>
                        <input class="box" type="time" id="endtime" name="endtime"><br><br>
                        <label for="volunter">need volunteer</label>
                        <input type="radio" name="volunter1" value="yes">
                        <label for="volunter1">YES</label>
                        <input type="radio" name="volunter2" value="no">
                        <label for="volunter2">NO</label><br><br>
                        <label for="vno">enter no of volunter</label>

                        <input class="box" type="number" name="vno"><br><br>

                        <input id="bu" type="submit" name="submit" value="Submit">
               </form>
                    </div>
                    <div id="new">
                        
			<img src="robotimage.png">
                    </div>

                </div>

            </div>
             <div class="row3">
                      <marquee>This page is designed and developed by Nishadevi & Selvi<img src="girlimage.png" width="40" height="40"> </marquee>
               </div>
        </div>

    </div>
<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "event_planner_db";

   
        $conn = new mysqli($servername, $username, $password, $dbname);
         if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        if (isset($_POST['submit']))  {
 

        $eventname = $_POST['eventname'];
        $eventtype = $_POST['eventtype'];
        $no_of_person = $_POST['no_of_person'];
        $eventamount = $_POST['eventamount'];
        $eventpackages = $_POST['eventpackages'];
        $eventplace = $_POST['eventplace'];
        $eventhall = $_POST['eventhall'];
        $foodtype = implode(", ", $_POST['foodtype']);
        $eventcatering = $_POST['eventcatering'];
        $eventdate = $_POST['eventdate'];
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
        $volunteer = $_POST['volunteer'];
        $no_of_volunteers = $_POST['no_of_volunteers'];
        

        $sql = "INSERT INTO events (eventname, eventtype, no_of_person, eventamount, eventpackages, eventplace, eventhall, foodtype, eventcatering, eventdate, starttime, endtime, volunteer, no_of_volunteers)
                VALUES ('$eventname', '$eventtype', '$no_of_person', '$eventamount', '$eventpackages', '$eventplace', '$eventhall', '$foodtype', '$eventcatering', '$eventdate', '$starttime', '$endtime', '$volunteer', '$no_of_volunteers')";
        
       if ($conn->query($sql) === TRUE) {
            echo "<script>alert('New record created successfully');</script>";
            // Perform actions after successful form submission
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close(); 
           
            
    }
    ?>

</body>

</html>
