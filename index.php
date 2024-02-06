<?php require_once "Assets/Includes/head.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>Realtime Chat App</header>
                
                <form action="#" method="post" id="form" enctype="multipart/form-data">
                    <div class="error-text">This is an error message ! </div>
                
                    <div class="name-details">
                        <div class="field input">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" placeholder="First Name" minlength="3" maxlength="150" autocomplete="on" required >
                        </div>

                        <div class="field input">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" placeholder="Last Name" minlength="3" maxlength="150" autocomplete="on" required>
                        </div>
                    </div>

                    <div class="field input">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email Address" minlength="3" maxlength="150" autocomplete="on" required>
                    </div>

                    <div class="field input">
                        <label for="pswrdField">Password</label>
                        <input type="password" name="password" id="pswrdField" placeholder="Enter new password" minlength="3" maxlength="150" autocomplete="off" required>
                        <i class="fa fa-eye" id="toggleBtn"></i>
                    </div>

                    <div class="field image">
                        <label for="image">Select image</label>
                        <input type="file" name="image" id="image" required>
                    </div>

                    <div class="field button">
                        <input type="submit" name="submitBtn" id="submit" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Already signed up ? <a href="login.php">Login now</a></div>
            </section>
        </div>
    </body>

    <script src="Js/pass-show-hide.js" defer></script>
    <script src="Js/signup.js" defer></script>
    
</html>