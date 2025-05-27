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

            <div class="text-right">
                <button class="butNew2">
                    <a href="<?php echo base_url('/aulas') ?>"><i class="fa-solid fa-backward"></i></a>
                </button>
            </div>
            <br>

            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-header d-block text-center bg-dark text-white">
                            <strong style="font-size: 20px;">EDITAR AULA</strong>
                        </div>
                            <div class="card-body">
                                <form action=" " method="POST">
                                    <div class="row g-3">

                                    <div class="card-body">
                                        <form action=" " method="POST">
                                            <div class="row g-3">

                                                <div class="col-md-1 mt-3">ID:
                                                    <input name="id" type="text" class="form-control text-center"  value="<?php echo isset($aulas) ? $aulas->id : '' ?>" disabled>
                                                </div>

                                                <div class="col-md-11 mt-3">Curso ID:
                                                    <input name="cursoID" type="text" class="form-control text-center" value="<?php echo isset($aulas) ? $aulas->curso_id : '' ?>" disabled>
                                                </div>

                                                <div class="col-md-6 mt-3">Título:
                                                    <input name="titulo" type="text" class="form-control text-center" value="<?php echo isset($aulas) ? $aulas->titulo : '' ?>">
                                                </div>

                                                <div class="col-md-6 mt-3">Descrição:
                                                    <input name="descricao" type="text" class="form-control text-center" value="<?php echo isset($aulas) ? $aulas->descricao : '' ?>">
                                                </div>

                                                <div class="col-md-6 mt-3">URL:
                                                    <input name="videoURL" type="text" class="form-control text-center" value="<?php echo isset($aulas) ? $aulas->video_url : '' ?>">
                                                </div>

                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                        <button type="submit" class="btn botao">
                                            Salvar&nbsp; <i class="fa-solid fa-check"></i>
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

@keyframes respirar {
  0% { transform: scale(1); opacity: 0.8; }
  50% { transform: scale(1.05); opacity: 1.5; }
  100% { transform: scale(1); opacity: 0.8; }
}

.btn-respirando {
  animation: respirar 2s infinite ease-in-out;
}

.card-header{
    border-radius: 10px 10px;
    box-shadow: 2px 2px 20px;
}

.botao {
    width: auto;
    padding: 5px 8px;
    font-weight: 500 !important;
    font-size: 14px;
    background: linear-gradient(90deg, #FF416C, #FF4B2B);
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: transform 0.2s ease;
}

.botao:hover {
  transform: scale(1.05);
}

.butNew2 {
    padding: 5px 8px;
    border: none;
    border-radius: 2px;
    color: #000!important;
    font-weight: 500 !important;
    font-size: 14px;
    margin: 0px 0px 0px 0;
    transition: 0.5s;
    letter-spacing: 0px;
    text-decoration: none!important;
    display: inline-block;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgb(255, 255, 255);
    background: #e2e2e2;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe',GradientType=0 );
}
 .butNew2:hover {
    color: #fff;
    text-decoration: none!important;
    background: #e2e2e2;
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#F2F2F2', endColorstr='#fefefe',GradientType=0 );
    transform: scale(1.3);
}

</style>