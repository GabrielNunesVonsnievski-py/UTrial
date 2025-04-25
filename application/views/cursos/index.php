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
                            <table>
                                <strong  style="font-size: 20px;">Nossos cursos!</strong> 
                            </table>
                        </div>
                        <div class="card-body">

                            <!-- PRECIFICACAO DOS CURSOS -->
             
                            <div class="row">
                            
                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-orange">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-brands fa-html5 f-50"></i>                                
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">HTML</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php  ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Livre</span>
                                                <h6 class="mb-0 badge badge-pill badge-navy text-dark"><?php ?></h6>
                                            </div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Ocupadas</span>
                                            <h6 class="mb-0 badge badge-pill badge-navy text-dark"><?php  ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small">UTrial</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-primary">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-brands fa-css3-alt f-50"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">CSS</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Pagas &nbsp;</span>
                                                <h6 class="mb-0 badge badge-pill badge-blue text-white"><?php ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Abertas</span>
                                            <h6 class="mb-0 badge badge-pill badge-blue text-white"><?php  ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small">UTrial</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-yellow">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-brands fa-js f-50"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">JavaScript</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php  ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Pagas</span>
                                                <h6 class="mb-0 badge badge-pill badge-yellow text-dark"><?php  ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Abertas</span>
                                            <h6 class="mb-0 badge badge-pill badge-yellow text-dark"><?php ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small text-white">UTrial</h6>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-purple">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-brands fa-php f-50"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">PHP</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php  ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Ativos</span>
                                                <h6 class="mb-0 badge badge-pill badge-success text-white"><?php ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Inativos</span>
                                            <h6 class="mb-0 badge badge-pill badge-success text-white"><?php  ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small text-white">UTrial</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-purple">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-brands fa-react f-50"></i>  
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">React</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php  ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Ativos</span>
                                                <h6 class="mb-0 badge badge-pill badge-success text-white"><?php ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Inativos</span>
                                            <h6 class="mb-0 badge badge-pill badge-success text-white"><?php  ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small text-white">UTrial</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-red">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-brands fa-java f-50"></i> 
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Java</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php  ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Ativos</span>
                                                <h6 class="mb-0 badge badge-pill badge-success text-white"><?php ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Inativos</span>
                                            <h6 class="mb-0 badge badge-pill badge-success text-white"><?php  ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small text-white">UTrial</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-blue">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-brands fa-python f-50"></i> 
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Python</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php  ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Ativos</span>
                                                <h6 class="mb-0 badge badge-pill badge-success text-white"><?php ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Inativos</span>
                                            <h6 class="mb-0 badge badge-pill badge-success text-white"><?php  ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small text-white">UTrial</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-success">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-solid fa-brain f-50"></i>
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Inteligência Artificial</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php  ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Ativos</span>
                                                <h6 class="mb-0 badge badge-pill badge-success text-white"><?php ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Inativos</span>
                                            <h6 class="mb-0 badge badge-pill badge-success text-white"><?php  ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small text-white">UTrial</h6>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xl-4 col-md-6">
                                <div class="card proj-t-card">
                                    <div class="card-body text-dark">
                                        <div class="row align-items-center mb-30">
                                            <div class="col-auto">
                                                <i class="fa-solid fa-user-secret f-50"></i> 
                                            </div>
                                            <div class="col pl-0">
                                                <h6 class="mb-5">Cyber Segurança</h6>
                                                <h6 class="mb-5 font-weight-bold"><?php  ?></h6>
                                            </div>
                                        </div>
                                        <div class="row align-items-center text-center">
                                            <div class="col">
                                                <span>Ativos</span>
                                                <h6 class="mb-0 badge badge-pill badge-success text-white"><?php ?></h6></div>
                                            <div class="col"><i class="fas fa-exchange-alt  f-18"></i></div>
                                            <div class="col">
                                            <span>Inativos</span>
                                            <h6 class="mb-0 badge badge-pill badge-success text-white"><?php  ?></h6></div>
                                        </div>
                                        <h6 class="pt-badge bg-dark small text-white">UTrial</h6>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- PRECIFICACAO DOS CURSOS -->
                        
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



</style>