<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <p style="text-align:center;">
                                    <img src="https://alfan.ananda-aditya.my.id/SIGudangObat/public/img/logoDinkes.jpg" alt="" class="center" width="240" height="60">
                                </p>
                                <div class="text-center">
                                    <br></br>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= url_to('login') ?>" method="post" class="user"><?= csrf_field() ?>

                                <?php if ($config->validFields === ['email']): ?>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="exampleInputEmail" name="login" placeholder="<?=lang('Auth.email')?>">
                                            <div class="invalid-feedback">
								<?= session('errors.login') ?>
							        </div>
                                    </div>

                                    <?php else: ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                            <div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?=lang('Auth.password')?>">
                                    </div>


                                    <?php if ($config->allowRemembering): ?>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <?php endif; ?>


                                    <a href="pages/dashboard" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </a>
                                    <hr>

                                    <?php if ($config->allowRegistration) : ?>
					<p><a href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></p>
<?php endif; ?>

                       
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?= $this->endSection(); ?>