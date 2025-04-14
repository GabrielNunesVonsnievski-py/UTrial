<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="quick-search">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ml-auto mr-auto">
                            <div class="input-wrap">
                                <input type="text" id="quick-search" class="form-control" placeholder="Procurar..." />
                                <i class="ik ik-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="container">
                    <div class="apps-wrap">
                        <div class="app-item">
                            <a href="<?php echo base_url('/') ?>"><i class="fa-solid fa-home"></i><span>Home</span></a>
                        </div>
                        <div class="app-item">
                            <a href="<?php echo base_url(''); ?>"><i class="fa-solid fa-book-bookmark"></i><span>Cursos</span></a>
                        </div>
                        <div class="app-item">
                            <a href="<?php echo base_url(''); ?>"><i class="fas fa-users"></i><span>Alunos</span></a>
                        </div>
                        <div class="app-item">
                            <a href="<?php echo base_url(''); ?>"><i class="fa-solid fa-book-open"></i><span>Aulas</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="<?php echo base_url('public/src/js/vendor/modernizr-2.8.3.min.js'); ?>"></script>


<script src="<?php echo base_url('public/plugins/popper.js/dist/umd/popper.min.js'); ?> "></script>
<script src="<?php echo base_url('public/plugins/bootstrap/dist/js/bootstrap.min.js'); ?> "></script>
<script src="<?php echo base_url('public/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js'); ?> "></script>
<script src="<?php echo base_url('public/plugins/screenfull/dist/screenfull.js'); ?> "></script>

<?php if (isset($scripts)): ?>

    <?php foreach ($scripts as $script): ?>

        <script src="<?php echo base_url('public/' . $script); ?> "></script>

    <?php endforeach; ?>

<?php endif; ?>

</body>

</html>