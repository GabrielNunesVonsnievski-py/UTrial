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
                            <div class="d-inline">
                                <h5><?php echo $titulo ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="#" style="text-center">
                <a href="<?php echo base_url('/aulas/AdicionarAulas'); ?>">
                    <button class="btn btn-dark btnADCurso">Adicionar Aulas</button>
                </a>
            </div>
            <br>
            <div>
                <div class="card-header bg-dark d-block text-center text-white">
                    <strong style="font-size: 20px;">LISTA DE AULAS</strong>
                </div>

                <table class="tabTutor table-striped table-hover" id="tabelaAulas">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">ID Curso</th>
                            <th class="text-center">Título</th>
                            <th class="text-center">Descrição</th>
                            <th class="text-center">URL</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Excluir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($getListaAulas)):?>
                            <?php foreach ($getListaAulas as $aulas): ?>
                                <tr>
                                    <td class="text-center"><?php echo $aulas['id']; ?></td>
                                    <td class="text-left"><?php echo strtoupper($aulas['curso_id']); ?></td>
                                    <td class="text-center"><?php echo $aulas['titulo']; ?></td>
                                    <td class="text-center"><?php echo $aulas['descricao']; ?></td>
                                    <td class="text-center"><?php echo $aulas['video_url']; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('aulas/core/' . $aulas['id']); ?>">
                                            <button class="butNew2" title="Editar Aula">
                                                <i class="fa-solid fa-pencil"></i>
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="butNew2" title="Excluir Aula" ng-click="deletarAula(<?php echo $aulas['id']; ?>)">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr><td colspan="8" class="text-center">Nenhuma aula cadastrada.</td></tr>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="nav" id="nav"></div> <!-- onde os botões de paginação aparecem -->

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

    //paginação
$(document).ready(function(){
    $('#tabelaAulas').after('<div id="nav"></div>');
    var rowsShown = 5;
    var rowsTotal = $('#tabelaAulas tbody tr').length;
    var numPages = Math.ceil(rowsTotal / rowsShown);

    for (var i = 0; i < numPages; i++) {
        var pageNum = i + 1;
        $('#nav').append('<a href="#" rel="'+i+'">'+pageNum+'</a> ');
    }

    $('#tabelaAulas tbody tr').hide();
    $('#tabelaAulas tbody tr').slice(0, rowsShown).show();
    $('#nav a:first').addClass('active');

    $('#nav a').bind('click', function(e){
        e.preventDefault();
        $('#nav a').removeClass('active');
        $(this).addClass('active');
        var currPage = $(this).attr('rel');
        var startItem = currPage * rowsShown;
        var endItem = startItem + rowsShown;
        $('#tabelaAulas tbody tr').css('opacity','0.0').hide()
            .slice(startItem, endItem).css('display','table-row').animate({opacity:1}, 300);
    });
});
    //paginação

angular.module("appUtrial", []).controller('UtrialController', function ($scope, $http) {

    $scope.deletarAula = function(id) {
        if (confirm("Tem certeza que deseja excluir esta aula?")) {
            $http.delete('Aulas/deletar/' + id)
                .then(function(response) {
                    alert("Aula excluída com sucesso!");
                    window.location.reload();
                })
                .catch(function(error) {
                    alert("Erro ao excluir aula!");
                    console.error(error);
                });
        }
    };

});

</script>

<style>

#nav {
    display: flex;
    justify-content: right;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 10px;
}

#nav a {
    background-color:rgb(255, 255, 255);
    color: black;
    border: 1px solid #ccc;
    padding: 3px 5px;
    border-radius: 3px;
    text-decoration: none;
    font-size: 10px;
    transition: background-color 0.3s, transform 0.2s;
}

#nav a:hover {
    background-color: #495057;
    transform: scale(1.1);
    color: white;
}

#nav a.active {
    background-color:rgb(255, 255, 255);
    border-color:rgb(0, 0, 0);
    color: black;
    font-weight: bold;
    transform: scale(1.1);
}

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

/* .butNew2 {
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
.butNew2:hover {
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

.btnADCurso{
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.btnADCurso:hover {
    transform: translateY(-5px);
    background-color:rgb(77, 77, 77)
}

</style>