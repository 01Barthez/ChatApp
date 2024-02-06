<?php require_once "Assets/Includes/head.php"; ?>

    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Realtime Chat App</header>
                
                <form action="#" method="post">
                    <div class="error-text">This is an error message ! </div>
                
                    <div class="field input">
                        <label for="#">Email Address</label>
                        <input type="text" name="" id="" placeholder="Enter your email Address">
                    </div>

                    <div class="field input">
                        <label for="pswrdField">Password</label>
                        <input type="password" name="" id="pswrdField" placeholder="Enter your password">
                        <i class="fa fa-eye" id="toggleBtn"></i>
                    </div>

                    <div class="field button">
                        <input type="submit" name="" id="" value="Continue to Chat">
                    </div>
                </form>
                <div class="link">Not yet signed up ? <a href="index.php">Signup now</a></div>
            </section>
        </div>
    </body>

    <script src="Js/pass-show-hide.js" defer></script>

</html>