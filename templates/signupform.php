<body class="text-center">
    <main class="form-signin">
        <form method="post" action="signup.php">
            <img class="mb-4" src="https://upload.wikimedia.org/wikipedia/commons/1/17/Yin_yang.svg" alt="" width="72"
                height="57">
            <h1 class="h3 mb-3 fw-normal">Sign up to Get Started</h1>
            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInputUsername"
                    placeholder="name@example.com">
                <label for="floatingInputUsername" style="color: black;">User name</label>
            </div>
            <div class="form-floating">
                <input name="phone" type="text" class="form-control" id="floatingInputPhone"
                    placeholder="name@example.com">
                <label for="floatingInputPhone" style="color: black;">Phone number</label>
            </div>
            <div class="form-floating">
                <input name="emailaddress" type="email" class="form-control" id="floatingInput"
                    placeholder="name@example.com">
                <label for="floatingInput" style="color: black;">Email address</label>
            </div>
            <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword"
                    placeholder="Password">
                <label for="floatingPassword" style="color: black;">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary hvr-shadow-radial type=" submit">Sign up</button>
            <p class="mt-5 mb-3 text-muted">&copy; Keerthivasan</p>
        </form>
    </main>