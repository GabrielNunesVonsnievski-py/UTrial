$scope.deletarUsuario = function(id) {
    if(confirm("Tem certeza que deseja excluir este aluno?")) {
        $http.delete('/api/usuarios/' + id).then(function(response) {
            alert("Aluno excluído com sucesso!!");
            //Atualiza a lista se for necessário
            $scope.buscarUsuarios();
        })
        .catch(function(error) {
            alert("Erro ao excluir aluno!");
            console.error(error);
        });
    }

};