<div class="modal fade" id="ModalEditarAlunos" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Doses - {{usuario.nome}}</h4>
            </div>
            <div class="modal-body">
                <div>
                    <div class="col-sm-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Dose</th>
                                    <th class="text-center">Vacina</th>
                                    <th class="text-center">Data</th>
                                    <th class="text-center">Comprovante</th>
                                    <th class="text-center">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-show="usuario.vacinas.length<=0"><td colspan="4" class="text-center">Nenhum registro encontrado.</td></tr>
                                <tr ng-repeat="l in  usuario.vacinas">
                                    <td class="text-center">{{l.numero}}&ordf;</td>
                                    <td class="text-center">{{l.tipo_vacina_desc}}</td>
                                    <td class="text-center">{{l.dt_dose_br}}</td>
                                    <td class="text-center">
                                        <a ng-hide="!l.anexo" href="{{l.anexo}}" class="btn btn-primary btn-sm" target="_blank">
                                            <span class="fa fa-external-link"></span>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-danger btn-sm" ng-click="confirmarExcluirDose(l.i_func_, l.numero)">
                                            <i class="glyphicon glyphicon-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>