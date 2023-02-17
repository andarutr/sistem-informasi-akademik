<body class="bg-gradient-primary">
    <div class="container"><br><br><br>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Administrator!</h1>
                                        <?= $this->session->flashdata('pesan') ?>
                                    </div>
                                    <form class="user" action="<?= base_url('administrator/auth/proses_login') ?>" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="username" placeholder="Username Anda!">
                                            <?= form_error('username','<p class="text-danger ml-3">','</p>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" placeholder="Password Anda!">
                                            <?= form_error('password','<p class="text-danger ml-3">','</p>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>