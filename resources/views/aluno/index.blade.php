<html>
<body>
	TESTE
</body>
		<form method="POST" action="/aluno">
			<div>
				<label>Nome:</label>
				<input type="text" name="nome" value="{{$aluno->nome}}"/>
			</div>
			<div>
				<label>Email:</label>
				<input type="email" name="email" value="{{$aluno->email}}"/>
			</div>
			<div>
				<label>Genero:</label>
				<select name="genero">
					<option value=""></option>
					<option value="M" {{$aluno ->genero == "M" ? "selected"
					: ""}}>
					MASCULINO
					</option>
					<option value="F" {{$aluno ->genero == "F" ? "selected"
					: ""}}>
					FEMININO
					</option>
					<option value="N" {{$aluno ->genero == "N" ? "selected"
					: ""}}>
					NÃO DECLARADO
					</option>
				</select>
			</div>
			<div>
				<label>Observações</label>
				<textarea name="obs" height="2">{{$aluno->obs}}</textarea>
			</div>
				@csrf
			<div>
				<input type="hidden" name="id" value="{{$aluno->id}}">
				<button type="submt">Salvar</button>
			</div>
		</form>
		
		<table border="1">
			<thead>
				<tr>
				
					<th>Nome</th>
					<th>E-mail</th>
					<th>Editar</th>
					<th>Excluir</th>
				
				</tr>
			</thead>
			<tbody>
				@foreach ($alunos as $aluno)
					<tr>
					
						<td>{{$aluno->nome}}</td>
						<td>{{$aluno->email}}</td>
						<td>
						
							<a href="/aluno/editar/{{
								$aluno->id
							}}">
								Editar
							</a>
						</td>
						<td>
							<a href="/aluno/excluir/{{$aluno->id}}">
							Excluir
							</a>
						</td>
					
					</tr>
				@endforeach
			</tbody>
		</table>
</html>