app.controller('ImovelController', function($scope,$http,API_URL){

	//Seleciona a lista de imóveis
	$http.get(API_URL+"imoveis")
		.success(function(response){
			$scope.imoveis = response;
		});

	//Exibe o formulário em um modal
	$scope.toggle = function(modalstate, id){
		console.log('Function toggle, modalstate:'+modalstate+'id:'+id);
		$scope.modalstate = modalstate;

		switch(modalstate){
			case 'Add':
				$scope.form_title = "Adicionar novo imóvel";
				break;
			case 'edit':
				$scope.form_title = "Atualizar imóvel";
				$scope.id = id;
				$http.get(API_URL + 'imoveis/' + id)
					.success(function(response){
						console.log(response);
						$scope.imovel = response;
					});
				break;
			default:
				break;
		}
		console.log(id);
		$('#myModal').modal('show');
	}

	//Salva novo imóvel / Edita imóvel existente
	$scope.save = function(modalstate,id){
		var url = API_URL + "imoveis";

		//acrescente na URL o id do imóvel se o formulário estiver em modo de edição
		if(modalstate==='edit'){
			url += "/" + id;
		}

		$http({
			method:'POST',
			url:url,
			data: $param($scope.imovel),
			headers:{'Content-Type':'application/x-www-form-urlencoded'}
		}).success(function(response){
			console.log(response);
			location.reload();
		}).error(function(response){
			console.log(response);
			alert('Erro. Verifique os logs no console');
		});
	}

	//Exclui imóvel
	$scope.confirmDelete = function(id){
		var isConfirmDelete = confirm('Deseja realmente escluir este imóvel?');
		if(isConfirmDelete){
			$http({
				method:'DELETE',
				url:API_URL + 'imoveis/' + id
			}).success(function(data){
				console.log(data);
				location.reload();
			}).error(function(data){
				console.log(data);
				alert('Erro ao excluir.');
			});
		}else{
			return false;
		}
	}
});