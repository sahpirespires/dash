codigos 


select f.*, u.nome, u.email
	from fornecedores f
		join usuario u on u.id = f.idUsuario;