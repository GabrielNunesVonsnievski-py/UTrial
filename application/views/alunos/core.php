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

            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-header d-block text-center">
                            <strong style="font-size: 20px;">EDITAR ALUNO</strong>

                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="row g-3">

                                        <div class="col-md-12">
                                            <input name="nome" type="text" class="form-control" placeholder="Nome completo" required>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <input name="CPF" type="text" class="form-control" placeholder="CPF" required>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <input name="telefone" type="text" class="form-control" placeholder="Telefone">
                                        </div>

                                        <div class="col-md-6 mt-3">
                                            <input name="senha" type="password" class="form-control" placeholder="Senha">
                                        </div>

                                        <div class="col-md-12 mt-3">
                                            <select name="mensalidade" class="form-control" required>
                                                <option value="" disabled selected>Selecione uma opção de mensalidade</option>
                                                <option value="anual">Anual</option>
                                                <option value="mensal">Mensal</option>
                                            </select>
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
    </div>

    <footer class="footer">
        <div class="w-100 clearfix">
            <span class="text-center text-sm-left d-md-inline-block"> <?php echo date('Y') ?> Utrial v2.0. Todos os direitos reservados.</span>
            <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Customizado <i class="fas fa-code text-dark"></i> by <a href="javascript:void" class="text-dark">Gabriel Nunes Vonsnievski</a></span>
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

</style>