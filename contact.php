<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ribeye+Marrow&display=swap" rel="stylesheet">    
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Single+Day&display=swap" rel="stylesheet">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Finlandica&display=swap" rel="stylesheet">
    <title>Contact Us - Event Management</title>
    <style>
        body {
            font-family:  'Finlandica', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fde5e5;
            color: #333;
        }

        header {
            background-color: rgba(245, 202, 194, 0.8);;
            color: white;
            padding: 1em;
            text-align: center;
             font-family: 'Ribeye Marrow', serif;
            font-size: 20px;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #ff8c8c;
            padding: 0.5em;
            
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 0.5em 1em;
            margin: 0 10px;
            font-family: 'Ribeye Marrow', serif;
        }

        section {
            padding: 2em;
            text-align: justify;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 600px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .contact-form label {
            margin-bottom: 8px;
            font-weight: bold;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ffbaba;
            border-radius: 4px;
            width: 100%;
            box-sizing: border-box;
        }

        .contact-form button {
            padding: 12px;
            background-color: #ff6b6b;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .contact-info {
            text-align: center;
        }

        marquee {
            background-color: #ED7966;
            height:43px;
            color:white;
            font-family: 'Single Day', cursive;
            font-size:20px
        }
        button{
         font-family: 'Single Day', cursive;
	 font-size:30px
}
    </style>
</head>



<body>
    <header>
        <h1>Contact Us - Event Management</h1>
    </header>

    <nav>
        <a href="home.php">Home</a>
        <a href="event.php">About</a>
        <a href="formpage.php">Event</a>
    </nav>

    <section>
        <h2>Contact Form</h2>
        <form class="contact-form" action="contact_process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required aria-label="Name Input">

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required aria-label="Message Input"></textarea>

            <button type="submit">Submit</button>
        </form>

        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>Email: eventplanner123@gmail.com</p>
            <p>Phone: 9454657677</p>
            <p>Address: chinnammmal ladies hostel 2 ,CIT,Coimbatore</p>
        </div>
    </section>

    <div class="row3">
        <marquee>This page is designed and developed by Nishadevi & Selvi<img src="girlimage.png" width="40" height="40"></marquee>
    </div>

</body>

</html>

