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
            display: flex;
            justify-content: center;
            height:1100px;
        }

        #out1 {
            width: 80%;
            display: flex;
            flex-direction: column;
            background-color: #fff;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .row1 {
            width: 96%;
            height: 60px;
            background-color: rgba(245, 202, 194, 0.8);
            color: white;
            font-family: 'Ribeye Marrow', serif;
            font-size: 20px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            justify-content: start;
        }

        .row2 {
            width: 100%;
            display: flex;
            flex-direction: row;
            padding: 20px;
            justify-content: space-around;
            align-items: flex-start;
        }

        .col2 {
            width: 48%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .modified-box {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 4px;
        }

        button {
            border: none;
            height: 40px;
            width: 150px;
            background-color: rgba(245, 202, 194, 0.8);
            margin: 20px 0;
            border-radius: 20px;
            color: whitesmoke;
            font-size: 19px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        marquee {
            background-color: #ED7966;
            height: 50px;
            color: white;
            font-family: 'Single Day', cursive;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .row3 {
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        img {
            max-width: 100%;
            height: auto;
        }
     ul{
 display:flex;
 flex-direction:row;
 justify-content:space-between;
 
padding:20px;
}
.list{
margin-left:35px;
width:500px;
}
 
    </style>
</head>

<body>
    <div id="out">
        <div id="out1">
            <div class="row1">
                <h3>Event Planner</h3>
                  <div><img src="noteimage.png" width="70" height="70"></div>
                   <div class="list"> 
                 <ul>
		<li><a href="home.php">Home</a> </li>
		<li><a href="event.php"> Learn-more</a> </li>		
				
		<li><a href="contact.php"> Contact</a> </li>
				
				</ul>
			   </div>

           </div>

            <div class="row2">
                <div class="col2">
                    <form method="POST" action="insert.php">

                        <label for="event">Eventname</label>
                        <input class="modified-box" type="text" id="event" name="event"><br>
                        <label for="type">Event type</label>
                        <input class="modified-box" type="text" id="type" name="type"><br>
                        <label for="no_of_person">No of person </label>
                        <input class="modified-box" type="text" id="no_of_person" name="no_of_person"><br>
                        <label for="amount">Event amount</label>
                        <input class="modified-box" type="text" id="amount" name="amount"><br>

                        <label for="eventpackages">Eventpackages</label>
                        <input class="modified-box" type="text" name="eventpackages"><br>

                        <label for="eventplace">Event place</label>
                        <input class="modified-box" type="text" name="eventplace"><br>

                        <label for="eventpackages">Event hall</label>
                        <input class="modified-box" type="text" name="eventhall"><br>

                        <label for="fooditem">Food type</label>
                        <input class="modified-box" type="text" name="fooditem"><br>

                        <label for="eventcatering">Choose catering type</label>
                        <input class="modified-box" type="text" name="eventcatering"><br>

                        <label for="date">Select event date</label>
                        <input class="modified-box" type="text" id="Date" name="date">
			
                    
                </div>

                <div class="col2">
                    <div id="newabove">

                        <label for="starttime">Select starttime event:</label>
                        <input class="modified-box" type="text" id="starttime" name="starttime">
                        <label for="endtime">Select endtime event:</label>
                        <input class="modified-box" type="text" id="endtime" name="endtime"><br>
                        <label for="volunteer">Need volunteer</label>
                        <input class="modified-box" type="text" name="volunteer"><br>
                        <label for="vno">Enter no of volunteer</label>
                        <input class="modified-box" type="text" name="vno"><br>
			<button type="submit">Submit</button><br>
                         
                         <button onclick="window.print()">Print eventplan</button>

			</form>

                       

                    </div>
                    <div id="new">
                        <img src="robotimage.png">
                    </div>

                </div>

            </div>
            <div class="row3">
                <marquee>This page is designed and developed by Nishadevi & Selvi<img src="girlimage.png" width="40"
                        height="40"> </marquee>
            </div>
        </div>

    </div>

</body>

</html>
