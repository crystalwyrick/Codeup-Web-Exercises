<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!doctype html>
<html>
    <head>
	   <title>My First HTML Form</title>
    </head>
    <body>
        <h2>User Login</h2>
	   <form method="GET" action="/my_first_form.php">
        <p>
            <label for="username">Username</label>
            <input id="username" name="username" type="text" placeholder="Username">
        </p>
        <p>
            <label for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password">
        </p>
        <p>
            <button type="submit">Login Here</button> 
        </p>
        </form>


        <br><br><br>

        <h2>Compose an Email</h2>
        <form method="POST" action="/my_first_form.php">
        <p>
            <label for="to">To</label>
            <input id="to" name="to" type="text">
        </p>    

        <p>
            <label for="from">From</label>
            <input id="from" name="from" type="text">
        </p>

        <p>
            <label for="subject">Subject</label>
            <input id="subject" name="subject" type="text">
        </p>

        <p>
            <textarea id="email_body" name="email_body" rows="5" cols="40">Comments</textarea>
        </p>

        <p>
            <button type="send">Send</button>
        </p>    

        <p>
            <input type="checkbox" id="save_to_outbox" name="save_to_outbox" value="yes" checked>
            <label for="save_to_outbox">Save a copy to your Outbox?</label>
        </p>
        </form>

        <h2>Multiple Choice Test</h2>
        <form>
            <p>What is your favorite season of the year?
            </p>
            <label>
                <input type="radio" name="q1" value="winter">
                Winter
            </label>
                <input type="radio" name="q1" value="spring">
                Spring
            <label>
                <input type="radio" name="q1" value="summer">
                Summer 
            </label>
            <label>
                <input type="radio" name="q1" value="fall">
                Fall
            </label>
                <p>Which month were you born in?
                <label> 
                    <input type=>
                </label>    

                </p>
        </form>

        <br><br><br>



        <h2>Select Testing</h2>
        <form>
            <label for="like_ice_cream">Do you like ice cream?</label>
            <select id="like_ice_cream" name="like_ice_cream">
                <option selected value="1">Yes</option>
                <option value="0">No</option> 
            </select>
            <button type="submit">Submit</button> 

        </form>

        </form>

        <h2>Multiple Choice Test</h2>
        <form>
            <label for="os">What is your favorite season of the year?</label>
            <select id="os" name="os[]" multiple>
                <option value="winter">Winter</option>
                <option value="spring">Spring</option>
                <option value="summer">Summer</option>
                <option value="fall">Fall</option>
            </select>
            <button type="submit">Submit</button> 






            
        </form> 

    </body>
</html>