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

            <?php if($message = $this->session->flashdata('success')): ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert bg-success alert-success text-white alert-dismissible fade show" role="alert">
                                    <strong><?php echo $message ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="ik ik-x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

            <?php endif; ?>

            <?php if($message = $this->session->flashdata('info')): ?>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert bg-info alert-info text-white alert-dismissible fade show" role="alert">
                                    <strong><?php echo $message ?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="ik ik-x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

            <?php endif; ?>

            <div class="#" style="text-center">
                <a href="<?php echo base_url('/cursos'); ?>">
                    <button class="btn btn-dark btn-respirando">Cursos disponíveis</button>
                </a>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm">
                        <div class="card-header d-block text-center">
                            <strong style="font-size: 20px;">SOBRE NÓS</strong>
                        </div>
                        <div class="card-body">
                            <p style="text-align: justify; font-size: 16px;">
                                Na <strong>Utrial</strong>, acreditamos que a tecnologia é a chave para construir um mundo mais inovador, conectado e acessível. Por isso, oferecemos cursos de alta qualidade voltados às áreas mais promissoras do mercado digital, como programação, desenvolvimento web, design de interfaces, inteligência artificial, segurança da informação e muito mais.
                            </p>
                            <p style="text-align: justify; font-size: 16px;">
                                Nosso compromisso é capacitar pessoas para os desafios do futuro, combinando teoria e prática em uma metodologia moderna, dinâmica e acessível. Com uma equipe de especialistas apaixonados por educação e tecnologia, buscamos proporcionar uma experiência de aprendizado envolvente, atualizada e com foco na empregabilidade.
                            </p>
                            <p style="text-align: justify; font-size: 16px; ">
                                Seja você um iniciante em busca do primeiro contato com o mundo tech ou um profissional que deseja se atualizar, aqui é o lugar certo para evoluir. Aprenda no seu ritmo, com conteúdos de qualidade, e prepare-se para transformar sua carreira com o poder do conhecimento.
                            </p>
                        </div>
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


<style>

.btn{
    height: 30px;
    width: 150px;
    box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.47);
}

@keyframes respirar {
  0% { transform: scale(1); opacity: 0.5; }
  50% { transform: scale(1.05); opacity: 7; }
  100% { transform: scale(1); opacity: 0.5; }
}

.btn-respirando {
  animation: respirar 2s infinite ease-in-out;
}

</style>