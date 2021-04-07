<!DOCTYPE html>

<html>
	<body>
		<form method="POST" action="/carro">
			@csrf
			<div>
				<label for="marca">Marca: </label>
				<input type="text" id="marca" name="marca" value="{{$carro -> marca}}" />
			</div>
			<div>
				<label for="modelo">Modelo: </label>
				<input type="text" id="modelo" name="modelo" value="{{$carro -> modelo}}" />
			</div>
			<div>
				<label for="placa">Placa: </label>
				<input type="text" id="placa" name="placa" value="{{$carro -> placa}}" />
			</div>
			<div>
				<label for="cor">Cor: </label>
				<input type="text" id="cor" name="cor" value="{{$carro -> cor}}" />
			</div>
			<div>
				<label for="ano">Ano: </label>
				<input type="text" id="cor" name="ano" value="{{$carro -> ano}}" />
			</div>
			<div>
				<a href="/carro">Novo</a>
				<input type="hidden" id="id" name="id" value="{{$carro->id}}"/>
				<button type="submit">Salvar</button>
			</div>
			
			<table border="1">
			<thead>
				<tr>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Placa</th>
					<th>Cor</th>
					<th>Ano de fabricacao</th>
				</tr>
			</thead>
				<tbody>
					@foreach ($carros as $carro)
						<tr>
							<td>{{$carro->marca}}</td>
							<td>{{$carro->modelo}}</td>
							<td>{{$carro->placa}}</td>
							<td>{{$carro->cor}}</td>
							<td>{{$carro->ano}}</td>
							<td>
								<a href="/carro/{{$carro->id}}/edit">Edit</a>
							</td>
							<td>
								<form action="/delete/{{$carro->id}}"method="POST">
								@csrf
								<input type="hidden" name="method" value="DELETE" />
								<button type="submit" onclick="return confirm(Tem Certeza?)"> Del</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</form>
	</body>
</html>