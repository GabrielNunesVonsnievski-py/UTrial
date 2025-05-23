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
                    <div class="card-header d-block text-center bg-dark text-white">
                        <strong style="font-size: 20px;">Cursos disponíveis !</strong>
                    </div>
                    <div class="cardfather">
                        <div class="card-body">

                            <div class="row">
                                <?php foreach ($cursos as $curso) { ?>
                                    <div class="col-xl-4 col-md-6 mb-4">
                                        <div class="card curso-card text-center">
                                            <div class="card-body">
                                                <div class="icon-wrapper mb-3">
                                                    <i class="<?php echo $curso->icone; ?> f-50"></i>
                                                </div>
                                                <h5 class="curso-nome"><?php echo $curso->nome; ?></h5>
                                                <p class="curso-preco">R$ <?php echo $curso->valor; ?></p>
                                                <p class="curso-duracao"><?php echo $curso->duracao; ?> Horas</p>
                                                <span class="badge badge-dark">UTrial</span>
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
        <footer class="footer">
        <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block"><?php echo date('Y') ?> Utrial v2.0. Todos os direitos reservados.</span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado <i class="fas fa-code text-dark"></i> by <a href="javascript:void" class="text-dark">Gabriel Nunes Vonsnievski</a></span>
        </div>
    </footer>

</div>


<style>
.cardfather {
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    background: #f9f9f9;
    padding: 20px;
}

.curso-card {
    border: none;
    border-radius: 15px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
    padding: 20px;
}

.curso-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.icon-wrapper {
    background: #f1f1f1;
    border-radius: 50%;
    width: 80px;
    height: 80px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
}

.curso-nome {
    font-weight: 600;
    font-size: 1.2rem;
    margin-top: 15px;
}

.curso-preco {
    color: #28a745;
    font-size: 1.1rem;
    font-weight: bold;
}

.curso-duracao {
    font-size: 0.95rem;
    color: #666;
    margin-bottom: 10px;
}

.badge-dark {
    background: #343a40;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    letter-spacing: 0.5px;
}

</style>
