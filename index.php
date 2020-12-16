<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <title>Photography services</title>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top ">
            <a class="navbar-brand" href="index.html">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#feedbacks" class="nav-link">Customer feedbacks</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="landing-page">
            <img class="hero-image" src= "2.jpg"> 
            <div class="welcome">
                <h2 class="h2-responsive">Welcome to AT photo</h2>
                <button>Explore</button>
            </div>
        </div>
        </header>
        <main>
        <div id="about" class="text-center w-responsive mx-auto">
            <h2 class="h2-responsive font-weight-bold my-3">Who are we?</h2>
            <p class="text-left mb-5"> Founded in 2020, AT photo offers a wide range of photography services that can satisfy your needs to record any memorable experiences in your life. </p>
        </div>
        <div id="feedbacks" class="text-center w-responsive mx-5">
            <h2 class="h2-responsive font-weight-bold my-3">Feedbacks from our customers</h2>
            <blockquote class="blockquote text-center">
                <p class="mx-5">AT's employee did a really great job as the photographer for my wedding. I really appreciate how professional and active they are! </p>
                <footer class="blockquote-footer mb-5">James, NJ</footer>
            </blockquote>
            <blockquote class="blockquote text-center">
                <p class="mx-5">At first I was worried that our family trip to New York would turn out to be worse than our expectation. But AT photo gave us a chance to enjoy this city while having the best quality photos of our family.</p>
                <foot class="blockquote-footer mb-5">John, TX</foot>
            </blockquote>
        </div>
        <div id="services" class="text-center mx-5">
            <h2 class="h2-responsive font-weight-bold my-3">Services</h2>
            <?php
            // Create connection
            $conn = new mysqli("localhost", "at738", "123456", "services");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // Get data from database
            $userName = $conn->query("SELECT * FROM `services`");
            
            // Display data
            echo "<table class='center'>
            <tr>
                <th>Basic</th>
                <th>Premium</th>
                <th>Wedding</th>
                <th>Tour/Trip</th>
            </tr>";
            if ($userName->num_rows > 0) {
                // output data of each row
                while($row = $userName->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['Basic'] . "</td>";
                    echo "<td>" . $row['Premium'] . "</td>";
                    echo "<td>" . $row['Wedding'] . "</td>";
                    echo "<td>" . $row['Tour/Trip'] . "</td>";
                    echo "</tr>";
                }
            echo "</table>";
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
        </div>
        <div id="contact" class="text-center my-5">
            <h2 class="h2-responsive font-weight-bold my-3">Contact</h2>
            <h5>Leave us a message</h5>
            <form>
                <label for="fname">First Name</label><br>
                <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>
                <label for="lname">Last Name</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
                <label for="subject">Subject</label><br>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea><br>
                <input type="submit" value="Submit">
            </form>
        </div>
        </main>
        <footer class="text-center">
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-google"></a>
        </footer>
    </body>
</html>

 