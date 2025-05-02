var app = angular.module('utrialApp');
app.controller('Alunos_Controller', ['$scope', '$http', function($scope, $http) {
    $scope.openModalEditarAlunos = function(aluno){
        $scope.usuario = aluno;
        $('#ModalEditarAlunos').modal('show');
    }


    $scope.confirmarExcluirAluno = function(id){
        if(confirm('Tem certeza que deseja excluir?')){
            $scope.deletarAluno(id);
        }
    }

    $scope.deletarAluno = function(id) {
        $http.post('deletarAluno' , {id : id }).then(res => {
            alert('Usuario excluido com sucesso');
            location.reload();
        })
    }

}]);
