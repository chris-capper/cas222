<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../styles/reset.css">
        <link rel="stylesheet" href="../styles/helper.css">
        <link rel="stylesheet" href="../styles/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../scripts/newscript.js"></script>
        <title>Ace in the Hole Template</title>
    </head>
    <body>
        <?php include '../includes/nav.inc.html.php'; ?>
        <?php include '../includes/header.inc.html.php'; ?>
        <main>
            <img src="../images/cropped-images/ace10-cropped.jpg" alt="finish line"></img>
            <h2>Event Registration</h2>
            <p style="font-style: italic; text-align: center">Please note! WATER TEMPERATURE is expected to 
            be between 62 & 66 degrees. The temperature will be taken on Friday and the morning of the race. 
            Wetsuits are recommended.</p><br />

        <div class="event-container">
            <img src="../images/ace11.jpg" alt="runners"></img>
            <div class="centered-text">
                <h4>LONG COURSE - price: $240</h4>
                    <p>LONG COURSE SWIM - 1.2mi - Participants will make two counter-clockwise loops. 
                        Large buoys will mark the turn points. Kayakers will be positioned on the water 
                        to support the swimmers. Medical support will be present on the beach.<br />

                        LONG COURSE BIKE - 58 Miles: A scenic point-to-point course that travels over gently rolling 
                        hills prior to three hard climbs. The bike course will be marked with large directional 
                        signage and there will be course marshals at key intersections to help direct you.<br />

                        LONG COURSE RUN - 13.1mi - A mostly flat loop course on widely paved bike paths that traverse through 
                        and around this beautiful and scenic destination resort (two hills total with a minimal 
                        elevation gain).</p><br />
            </div>
        </div>
        <div class="event-container">
            <img src="../images/ace4.jpg" alt="people running in water"></img>
            <div class="centered-text">
                <h4>OLYMPIC - price: $110</h4>
                    <p>OLYMPIC SWIM - 1,500 meters - Participants will make two counter-clockwise loops. Large buoys will 
                        mark the turn points. Kayakers will be positioned on the water to support the swimmers. 
                        Medical support will be present on the beach.<br />

                        OLYMPIC BIKE - 28mi - A scenic point-to-point course that travels over gently rolling hills. The 
                        bike course will be marked with large directional signage and course marshals will be 
                        present at key intersections.<br />
                        
                        OLYMPIC RUN - 10K - A mostly flat loop course on widely paved bike paths that traverse through 
                        and around this beautiful and scenic destination resort (one hill total with a minimal 
                        elevation gain).</p><br />
            </div>
        </div>
        <div class="event-container">
            <img src="../images/ace13.jpg" alt="10k run"></img>
            <div class="centered-text">
                <h4>10K - price: $50</h4>
                    <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft 
                        wide, perfectly paved and wind around through the forest. Each course has only two small 
                        hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the 
                        roaring cheers of the crowd.</p><br />
            </div>
        </div>
        <div class="event-container">
            <img src="../images/ace18.jpg" alt="half marathon uphill"></img>
            <div class="centered-text">
            <h4>HALF MARATHON - price: $75</h4>
                <p>13.1mi - Half-Marathon event starts and finishes in the Athletes Village 
                    to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line 
                    festivities, including the Sports & Fitness Expo and live entertainment. Post-race refreshments 
                    will be provided and the Awards Ceremony for the Half-Marathon will begin once the results 
                    have been certified</p><br />
            </div>
        </div>
        <div class="event-container">
        <img src="../images/ace14.jpg" alt="people sprinting"></img>
            <div class="centered-text">
            <h4>SPRINT - price: $90</h4>
                <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic 
                    distance and a 5km run.</p><br />
            </div>
        </div>
        <div class="event-container">
        <img src="../images/ace1.jpg" alt="people running in water"></img>
            <div class="centered-text">
            <h4>TRY-A-TRI - price: $65</h4>
                <p>This novice race is designed for the first time triathlete, those new to the sport, our 
                    Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead 
                    of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's 
                    a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile 
                    sprint course).</p><br />
            </div>
        </div>  

            <h4>SPLASH N' DASH - price: $25 or free with adult registration for another event!</h4>
                <p>Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash. It is 
                    free if an adult registers for an event otherwise it is $25.</p><br />
         
            <h3 style="text-align: center; padding-left: 0px;">Cost Includes:</h3>
            <ul>
                <li>Food & Beer</li> 
                <li>Access to the weekend's live entertainment & Fitness Expo</li>
                <li>Commemorative Finisher medal</li>
                <li>Accurate Chip Timing for competitive races</li>
                <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                <li>Post-event party & entertainment</li>
            </ul>

            <p style="text-align: center; font-style: italic">NOTE: Tech shirts guaranteed to pre-registered participants only.</p>

            <div class="events-box">
                <h2>Register Today!</h2>
                <form method="post" action=" ">
                    <label for="myname">Full Name:</label>
                    <input type="text" name="myname" id="myname" required><br>
                    <label for="myage">Age:</label>
                    <input type="text" name="myage" id="myage" required><br>
                    <label for="myrole">Role:</label>
                        <select size="1" name="myrole" id="myrole" required>
                            <option>Please choose one.</option>
                            <option value="Athlete">Athlete</option>
                            <option value="Volunteer">Volunteer</option>
                        </select><br>
                    <label for="myemail">E-mail Address:</label>
                    <input type="email" name="myemail" id="myemail" required><br>
                    <label for="myecontactname">Emergency Contact Name:</label>
                    <input type="text" name="myecontactname" id="myecontactname" required><br>
                    <label for="myecontactphone">Emergency Contact Phone Number:</label>
                    <input type="tel" name="myecontactphone" id="myecontactphone" required><br>
                    <label for="mygender">Gender:</label>
                        <select size="1" name="mygender" id="mygender" required>
                            <option>Please choose one.</option>
                            <option value="Female">Female</option>
                            <option value="Male">Male</option>
                            <option value="Non-binary">Non-binary</option>
                            <option value="Other">Other</option>
                        </select><br>
                    <label for="myeventsat">Register for Saturday Event:</label>
                        <select size="1" name="myeventsat" id="myeventsat">
                            <option>none</option>
                            <option value="7:00 AM - Long Course Triathlon for $250">
                                $250 Long Course Triathlon - 7:00 AM
                            </option>
                            <option value="7:00 AM - Olympic Triathlon for $110">
                                $110 Olympic Triathlon - 7:00 AM
                            </option>
                            <option value="7:15 AM - Half Marathon for $75">
                                $75 Half Marathon - 7:15 AM
                            </option>
                            <option value="7:15 AM - 10K for $50">
                                $50 10K - 7:15 AM
                            </option>
                        </select><br>
                    <label for="myeventsun">Register for Sunday Event:</label>
                        <select size="1" name="myeventsun" id="myeventsun">
                            <option>none</option>
                            <option value="8:00 AM - Sprint Triathlon for $90">
                                $90 Sprint Triathlon - 8:00 AM
                            </option>
                            <option value="8:20 AM - Try-A-Tri for $65">$65 Try-A-Tri - 8:20 AM</option>
                            <option value="12:00 PM - Spash n' Dash for $25">$25 Splash n' Dash - 12:00 PM</option>
                        </select><br>
                    <label for="myaccomodations">Any special accomodations needed?</label>
                    <textarea name="myaccomodations" id="myaccomodations" rows="5" cols="40" required></textarea><br>
                    <input id="mysubmit" type="submit" value="Submit"><br>
                </form>
            </div>
        </main>
        <a class="weatherwidget-io" href="https://forecast7.com/en/45d51n122d69/97201/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="dark" >PORTLAND WEATHER</a>
            <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
            </script>
        <?php include '../includes/footer.inc.html.php' ?>
    </body>
</html>