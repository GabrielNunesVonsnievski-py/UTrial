<?php $this->load->view('layout/navbar');?>

<div class="page-wrap">

    <?php  $this->load->view('layout/sidebar'); ?>

    <div class="main-content" ng-app="appUtrial" ng-controller="UtrialController">
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
                            <?php echo form_open('Aulas/adicionar'); ?>

                            <div class="row">
                                <div class="col-md-6 mt-3">
                                    <label for="curso_id">Nome do curso:</label>
                                    <?php echo form_dropdown('curso_id', $listaCursoNomeID, '', ['class' => 'form-control', 'id' => 'curso_id']); ?>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="titulo">Título:</label>
                                    <?php echo form_input([
                                        'name' => 'titulo',
                                        'id' => 'titulo',
                                        'placeholder' => 'Nome da linguagem ou do curso',
                                        'class' => 'form-control',
                                        'value' => $this->input->post('titulo'),
                                    ]); ?>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="descricao">Descrição:</label>
                                    <?php echo form_input([
                                        'name' => 'descricao',
                                        'id' => 'descricao',
                                        'placeholder' => 'Aula X - breve resumo da aula',
                                        'class' => 'form-control',
                                        'value' => $this->input->post('descricao'),
                                    ]); ?>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="video_url">URL do vídeo:</label>
                                    <?php echo form_input([
                                        'name' => 'video_url',
                                        'id' => 'video_url',
                                        'placeholder' => 'URL do vídeo',
                                        'class' => 'form-control',
                                        'value' => $this->input->post('video_url'),
                                    ]); ?>
                                </div>
                            </div>

                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn botao">
                                    Adicionar&nbsp; <i class="fa-solid fa-check"></i>
                                </button>
                            </div>

                            <?php echo form_close(); ?>
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

<script>

</script>

<style>

.card-header{
    border-radius: 10px 10px;
    box-shadow: 2px 2px 20px;
}

.form-control{
    display: flex;
}

.botao {
    width: 120px;
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
</style>