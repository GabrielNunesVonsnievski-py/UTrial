<?php $this->load->view('layout/navbar'); ?>

<div class="page-wrap">

    <?php $this->load->view('layout/sidebar'); ?>

    <div class="main-content">
        <div class="container-fluid">

            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="<?php echo $icone_view ?> bg-dark"></i>
                            <div class="d-inline">
                                <h5><?php echo $titulo ?></h5>
                                <span><?php echo $sub_titulo; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="cardfather">
                        <div class="card-header d-block text-center bg-dark text-white">
                            <strong style="font-size: 20px;">Nossos cursos!</strong>
                        </div>
                        <div class="card-body">

                            <div class="row">

                                <?php foreach ($cursos as $curso) { ?>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="card proj-t-card">
                                            <div class="card-body text-blue">
                                                <div class="row align-items-center mb-10">
                                                    <div class="col-auto">
                                                        <i style="" class="<?php echo $curso->icone;?>"></i>
                                                    </div>
                                                    <div class="col pl-0">
                                                        <h6 class="mb-5"><?php echo $curso->nome; ?></h6>
                                                        <h6 class="mb-5 font-weight-bold"><?php echo $curso->valor; ?></h6>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center text-center">
                                                    <p><?php echo $curso->duracao; ?>Horas</p>
                                                </div>
                                                <h6 class="pt-badge bg-dark small text-white">UTrial</h6>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<footer class="footer">
    <div class="w-100 clearfix">
        <span class="text-center text-sm-left d-md-inline-block"><?php echo date('Y') ?> Utrial v2.0. Todos os direitos reservados.</span>
        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado <i class="fas fa-code text-dark"></i> by <a href="javascript:void" class="text-dark">Gabriel Nunes Vonsnievski</a></span>
    </div>
</footer>

<style>
.cardfather {
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4);
}

@keyframes respirar {
    0% { transform: scale(1); }
    50% { transform: scale(1.015); }
    100% { transform: scale(1); }
}

.card {
    animation: respirar 2s infinite ease-in-out;
    border: 10px solid white;
}
</style>
