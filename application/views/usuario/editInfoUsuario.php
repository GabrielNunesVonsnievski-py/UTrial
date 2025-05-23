<?php $this->load->view('layout/navbar');?>

<div class="page-wrap" ng-app="appUtrial" ng-controller="UtrialController">

    <?php  $this->load->view('layout/sidebar'); ?>

    <div class="main-content">
        <div class="container-fluid">

            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <i class="<?php echo $icone_view ?> bg-dark"></i>
                            <h5><?php echo $titulo ?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-header d-block text-center bg-dark text-white">
                            <strong style="font-size: 20px;">EDITAR MINHAS INFORMAÇÕES</strong>
                        </div>
                            <div class="card-body">
                                <form action=" " method="POST">
                                    <div class="row g-3">

                                        <div class="col-md-1 mt-3"> Código:
                                            <input name="id" type="text" class="form-control text-center"  value="<?php echo isset($aluno) ? $aluno->id : '' ?>" disabled>
                                        </div>

                                        <div class="col-md-11 mt-3">Nome:
                                            <input name="nome" type="text" class="form-control text-center" value="<?php echo isset($aluno) ? $aluno->nome : '' ?>">
                                        </div>

                                        <div class="col-md-6 mt-3">CPF:
                                            <input name="CPF" type="text" class="form-control text-center" value="<?php echo isset($aluno) ? $aluno->cpf : '' ?>">
                                        </div>

                                        <div class="col-md-6 mt-3">E-mail:
                                            <input name="email" type="email" class="form-control text-center" value="<?php echo isset($aluno) ? $aluno->email : '' ?>">
                                        </div>

                                        <div class="col-md-6 mt-3">Telefone:
                                            <input name="telefone" type="text" class="form-control text-center" value="<?php echo isset($aluno) ? $aluno->telefone : '' ?>">
                                        </div>

                                        <div class="col-md-6 mt-3">Senha:
                                            <input name="senha" type="password" class="form-control text-center" value="<?php echo isset($aluno) ? $aluno->senha : '' ?>">
                                        </div>

                                        <div class="col-12 text-center mt-3">
                                            <button type="submit" class="btn btn-respirando btn-dark">
                                                <i class="fa-solid fa-id-card"></i> &nbsp;Salvar
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
  50% { transform: scale(1.05); opacity: 1.2; }
  100% { transform: scale(1); opacity: 0.8; }
}

.btn-respirando {
  animation: respirar 2s infinite ease-in-out;
}

.card-header{
    border-radius: 10px 10px;
    box-shadow: 2px 2px 20px;
}

.divID{
    margin-left: auto;
    margin-right: auto;
    max-width: fit-content;
}
</style>