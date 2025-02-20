    <!-- navbar -->
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Shoez.</a>
            <div class="toggle">
                <i class='bx bx-moon bx-sm'></i>
                <input type="checkbox" id="switch">
                <label for="switch" class="switch" onclick="ubahMode()"></label>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- login -->
    <section class="login-page">
        <div class="container-content py-1">
            <div class="row login p-5">
                <div class="col-12 col-lg-6">
                    <img src="<?php echo base_url('assets/img/Computer_login.png')?>" alt="computer_login" class="img-fluid">
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="title-login mb-4">Sign In</h1>
                    <form>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-3 d-flex gap-2">
                            <input type="password" class="form-control" id="password" placeholder="Your Password">
                            <button class="btn-eyes d-flex justify-content-center align-items-center">
                                <i class='bx bx-show eyes'></i>
                            </button>
                        </div>
                        <div class="mb-3 forpass">
                            <span><a href="">Forgot Password</a></span>
                        </div>
                        <div class="sign-in-apps d-flex">
                            <button type="submit" class="btn-sign-in">Sign In</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="copyright text-center mb-1">
                <span class="text-dark">&copy;2023 Shoez. | All Reserved</span>   
            </div>
        </div>
    </section>
    <!-- login -->