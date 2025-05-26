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
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-header d-block text-center bg-dark text-white">
                            <strong style="font-size: 20px;">ADICIONAR AULA</strong>
                        </div>
                            <div class="card-body">
                                <form action=" " method="POST">
                                    <div class="row g-3">

                                    <div class="card-body">
                                        <form action=" " method="POST">
                                            <div class="row g-3">

                                                <div class="col-md-6 mt-3">Curso ID:
                                                    <input name="cursoID" type="text" class="form-control text-center">
                                                </div>

                                                <div class="col-md-6 mt-3">Título:
                                                    <input name="titulo" type="text" class="form-control text-center">
                                                </div>

                                                <div class="col-md-6 mt-3">Descrição:
                                                    <input name="descricao" type="text" class="form-control text-center">
                                                </div>

                                                <div class="col-md-6 mt-3">URL:
                                                    <input name="videoURL" type="text" class="form-control text-center">
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                        <div class="col-12 text-center mt-3">
                                            <button type="submit" class="btn btn-respirando btn-dark">
                                                Adicionar&nbsp; <i class="fa-solid fa-check"></i>
                                            </button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer text-white bg-dark">
        <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block"> <?php echo date('Y') ?> Utrial v2.0. Todos os direitos reservados.</span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado <i class="fas fa-code text-white"></i> by <a href="javascript:void" class="text-white">Gabriel Nunes Vonsnievski</a></span>
        </div>
    </footer>
</div>

<style>

.btn-respirando {
  animation: respirar 2s infinite ease-in-out;
}

.card-header{
    border-radius: 10px 10px;
    box-shadow: 2px 2px 20px;
}

</style>