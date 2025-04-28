angular.module('appUtrial', ['angularUtils.directives.dirPagination']).controller('alunosController', function($scope) {
    $scope.getListaAlunos = window.listaAlunos || [];
});
