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


            <div>
                <table class="tabTutor table-striped table-hover">
                    <div class="card-header bg-dark d-block text-center text-white">
                        <strong style="font-size: 20px;">LISTA DE ALUNOS</strong>
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-left">Nome</th>
                                <th class="text-center">CPF</th>
                                <th class="text-center">E-mail</th>
                                <th class="text-center">Telefone</th>
                                <th class="text-center">ID Mensalidade</th>
                                <th class="text-center">Editar</th>
                                <th class="text-center">Excluir</th>
                            </tr>
                        </thead>
                        <tbody >
                        <?php if (!empty($getListaAlunos)):?>
                            <?php foreach ($getListaAlunos as $aluno): ?>
                                <tr>
                                    <td class="text-center"><?php echo $aluno['id']; ?></td>
                                    <td class="text-left"><?php echo strtoupper($aluno['nome']); ?></td>
                                    <td class="text-center"><?php echo $aluno['cpf']; ?></td>
                                    <td class="text-center"><?php echo $aluno['email']; ?></td>
                                    <td class="text-center"><?php echo $aluno['telefone']; ?></td>
                                    <td class="text-center"><?php echo $aluno['mensalidade_id']; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('alunos/core'); ?>">
                                            <button class="butNew2" title="Editar Aluno" ng-click="<?php echo base_url('alunos/core'); ?>">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="butNew2" title="Excluir Aluno" ng-click="confirmarExcluirAluno">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="7" class="text-center">Nenhum aluno cadastrado.</td></tr>
                        <?php endif; ?>
                        </tbody>
                    </div>
                </table>
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

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-utils-pagination/0.11.1/dirPagination.js"></script>
<script src="<?php echo base_url('application/views/alunos/controller/alunosController.js'); ?>"></script>

<style>

.card-header{
    border-radius: 10px 10px;
    box-shadow: 2px 2px 20px;
}

.tabTutor {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid #dedede;
    text-align: center;
    padding: 14px 20px;
    vertical-align: middle;
    background-color: #f5f5f5;
}
.tabTutor td {
    border: 1px solid #dedede;
    text-align: center;
    padding: 15px 15px;
    vertical-align: middle;
    transition: 1.0s;
}
.tabTutor .name {
    font-size: 15px;
    font-weight: 500;
    text-align: left;
}
.tabTutor>tbody>tr:hover>td, .tabTutor>tbody>tr:hover>th {
    background-color: #e8e8e8;
}
.labelCampo-1 {
    padding: 20px;
    font-size: 15px;
    color: #fff;
    background-color: #333F84;
    border: none;
    border-radius: 2px!important;
    transition: 0.5s;
}
.labelCampo-1:hover {
    border: 0px solid #b9b9b9;
    background-color: #646FAD;
}

/* .butNew {
    padding: 8px 25px;
    border: none;
    border-radius: 2px;
    color: #fff!important;
    font-weight: 500 !important;
    font-size: 17px;
    margin: 0px 0px 10px 0;
    transition: 0.5s;
    letter-spacing: 0px;
    background-color: #2e8e4b;
    text-decoration: none!important;
    display: inline-block;
}
.butNew:hover {
    color: #fff;
    text-decoration: none!important;
    background-color: #69B759;
} */

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
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.1);
    background: #e2e2e2;
    background: -moz-linear-gradient(top, #e2e2e2 0%, #dbdbdb 50%, #d1d1d1 51%, #fefefe 100%);
    background: -webkit-linear-gradient(top, #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);
    background: linear-gradient(to bottom, #e2e2e2 0%,#dbdbdb 50%,#d1d1d1 51%,#fefefe 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#fefefe',GradientType=0 );
}
.butNew2:hover {
    color: #fff;
    text-decoration: none!important;
    background: #e2e2e2;
    background: -moz-linear-gradient(top, #F2F2F2 0%, #E9E9E9 10%, #d1d1d1 51%, #fefefe 100%);
    background: -webkit-linear-gradient(top, #F2F2F2 0%,#E9E9E9 10%,#d1d1d1 51%,#fefefe 100%);
    background: linear-gradient(to bottom, #F2F2F2 0%,#E9E9E9 10%,#d1d1d1 51%,#fefefe 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#F2F2F2', endColorstr='#fefefe',GradientType=0 );
    transform: scale(1.3);
}

@keyframes respirar {
  0% { transform: scale(1); opacity: 0.6; }
  50% { transform: scale(1.05); opacity: 1.2; }
  100% { transform: scale(1); opacity: 0.6; }
}

.btn-respirando {
  animation: respirar 2s infinite ease-in-out;
}

</style>