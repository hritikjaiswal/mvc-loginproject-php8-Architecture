<!-- <div class="container  menu">
    </div> -->
<?php if (isset($_SESSION['user_name'])) {
    header('location: /mvc_loginproject/index.php?function=user');
} ?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-light text-black" style="border-radius: 1rem;">
                    <div class="card-body p-5">
                        <!-- text-center -->

                        <div class="mb-md-50 mt-md-4 pb-15">

                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <form method="POST" action="/mvc_loginproject/index.php?controller=login&function=login">
                                <?php
                                if (isset($_SESSION['status'])) {

                                ?>

                                    <div class="alert alert-danger">
                                        <strong>hey! </strong><?php echo $_SESSION['status']; ?>
                                    </div>
                                <?php
                                    unset($_SESSION['status']);
                                }
                                ?>

                                <p class="text-black-50 mb-5">Please enter your login and password!</p>

                                <div class="form-outline form-white mb-4">
                                    <input type="email" name="email" class="form-control form-control-lg" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                </div>

                                <div class="form-outline form-white mb-4">
                                    <input type="password" name="password" class="form-control form-control-lg" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                </div>

                                <!-- <p class="small mb-5 pb-lg-2"><a class="text-black-50" href="#!">Forgot password?</a></p> -->
                                <div class="card-body p-2  text-center">
                                    <button class="btn btn-outline-dark btn-lg px-5" type="submit" name="submit">Login</button>
                                </div>

                            </form>
                        </div>
                        </form>
                        <div>
                            <p class="mb-0">Don't have an account? <a href="/mvc_loginproject/index.php?function=register" class="text-black-50 fw-bold">register </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>