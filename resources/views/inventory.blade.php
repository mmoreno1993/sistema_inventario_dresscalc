@extends('master.layout')
@section('title')
DressCalc
@endsection
@section('inventory')
active
@endsection
@section('content')
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
				                <th>Prendas</th>
				                <th>Stock</th>
				            </tr>
				        </thead>
				        <tbody>
				            <tr>
				                <td>0001</td>
				                <td>Polo</td>
				                <td>400</td>
				            </tr>
				            <tr>
				                <td>0002</td>
				                <td>Chompa</td>
				                <td>53</td>
				            </tr>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
	    $('#tblInventario').dataTable({
	    	pageLenght: 10,
	    	filter: true,
	        searching: true,
	        oLanguage: {
	        	sEmptyTable: "No hay información para mostrar",
			   	sSearch: "Buscar: ",
			   	sLengthMenu: "Mostrar _MENU_ registros",
			   	sInfo: "Obtenidos _TOTAL_ registros para mostrar (_START_ hasta _END_)",
				oPaginate: {
					sFirst: "||<<||", // This is the link to the first page
					sPrevious: "||<||", // This is the link to the previous page
					sNext: "||>||", // This is the link to the next page
					sLast: "||>>||" // This is the link to the last page
				}
			}
	    });
	});
</script>
@endsection