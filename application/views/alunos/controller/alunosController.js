var app = angular.module('utrialApp', ['angularUtils.directives.dirPagination']);

app.controller('alunosController', function($scope) {
    $scope.getListaAlunos = window.getListaAlunos || [];
});
