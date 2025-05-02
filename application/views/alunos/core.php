<?php $this->load->view('layout/navbar');?>

<div class="page-wrap">

    <?php  $this->load->view('layout/sidebar'); ?>

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
                    <div class="card shadow-sm">
                        <div class="card-header d-block text-center">
                            <strong>CADASTRAR ALUNOS</strong>
                        </div>
                        <div class="card-body">
                        <form class="form-control">
                            <span>Nome: </span>
                            <input type="text" placeholder="Cleber BamBam">
                            <span>CPF: </span>
                            <input type="text" placeholder="0000.0000-00">
                            <span>E-mail: </span>
                            <input type="text" placeholder="cleber@gmail.com">
                            <span>E-mail: </span>
                            <input type="text" placeholder="cleber@gmail.com">
                            <span>E-mail: </span>
                            <input type="text" placeholder="cleber@gmail.com">
                        </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer">
        <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block"> <?php echo date('Y') ?> Utrial v2.0. Todos os direitos reservados.</span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado <i class="fas fa-code text-dark"></i> by <a href="javascript:void" class="text-dark">Gabriel Nunes Vonsnievski</a></span>
        </div>
    </footer>
</div>
