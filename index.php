<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
	<title>Contactos</title>
</head>
<body>
	<section class="container">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-dark bg-dark">
					<a class="navbar-brand">Lista de contactos</a>
					<div class="form-inline">
					    <input id="txtSearch" class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
					    <button id="btnSearch" class="btn btn-outline-success my-2 my-sm-0" type="button">Buscar</button>
					</div>
				</nav>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col col-md-12">
				<div class="card">
					<div class="card-body">
						<ul id="searchResult"></ul>
					</div>

				</div>
				<div>
					<table id="tblContact" class="table table-sm">
						<thead>
							<tr>
								<th scope="col" class="table-success">#</th>
								<th scope="col" class="table-success">Nombre</th>
								<th scope="col" class="table-success">Apellido</th>
								<th scope="col" class="table-success">Teléfono</th>
								<th scope="col" class="table-success">Email</th>
								<th scope="col" class="table-success">Action</th>
							</tr>
						</thead>
						<tbody id="rowsContact">
							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>24242424</td>
								<td>@mdo</td>

							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="row mt-3 d-flex flex-column">
			<h4>Agregar un contacto</h4>
			<form class="form-group" id="addForm">
				<input type="hidden" id="id" />
				<input type="text" name="nombre" id="nombre" placeholder="Ingrese un nombre" class="form-control mt-3">
				<input type="text" name="apellido" id="apellido" placeholder="Ingrese un Apellido" class="form-control mt-3">
				<input type="text" name="email" id="email" placeholder="Ingrese un Email" class="form-control mt-3">
				<input type="text" name="telefono" id="telefono" placeholder="Ingrese un Telefono" class="form-control mt-3">

				<button type="submit" class="btn btn-success mt-3" id="btnAddContact">Agregar usuario</button>

			</form>
		</div>
	</section>
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/functions.js"></script>
</body>
</html>