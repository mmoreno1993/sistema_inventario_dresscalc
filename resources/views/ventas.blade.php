<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">
<div class="panel panel-primary" style="background: white;">
	<div class="panel-heading"><h3>&nbsp;</h3></div>
	<div class="panel-body">
		<div id="exTab1" class="container">	
			<div class="col-sm-11">
				<div class="form-group">
					<table id="tblInventario" class="table table-striped table-bordered" style="width:100%">
				        <thead>
				            <tr>
				                <th>Código</th>
				                <th>Tipo</th>
				                <th>Prenda</th>
				                <th>Precio</th>
				                <th>Cliente</th>
				                <th>Fecha</th>
				            </tr>
				        </thead>
				        <tbody>
							@foreach ($ventas as $value)
								<tr>
					                <td>{{ $value->id }}</td>
					                <td>{{ $value->tipo }}</td>
					                <td>{{ $value->prenda }}</td>
					                <td>{{ $value->value }}</td>
					                <td>{{ $value->cliente }}</td>
					                <td>{{ $value->created_at }}</td>
					            </tr>
							@endforeach
				        </tbody>
				        <!--
				        <tfoot>
				            <tr>
				                <th>Código</th>
				                <th>Prendas</th>
				                <th>Stock</th>
				            </tr>
				        </tfoot>
				    	-->
				    </table>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script>
	$(document).ready(function() {
	    $('#tblInventario').dataTable({
dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
	    	pageLenght: 10,
	    	filter: true,
	        searching: true,
	        oLanguage: {
	        	sEmptyTable: "No hay información para mostrar",
			   	sSearch: "Buscar: ",
			   	sLengthMenu: "Mostrar _MENU_ registros",
			   	sInfo: "Obtenidos _TOTAL_ registros para mostrar (_START_ hasta _END_)",
				oPaginate: {
					sFirst: "<<", // This is the link to the first page
					sPrevious: "<", // This is the link to the previous page
					sNext: ">", // This is the link to the next page
					sLast: ">>" // This is the link to the last page
				}
			},
	    });
	});
</script>