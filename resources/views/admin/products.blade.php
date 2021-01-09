@extends('layouts.admin.master')
@section('content')
 <div class="content-wrapper">
<section class="content-header">
      <h1>
        Products
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Products</li>
      </ol>
    </section>
<!-- Main content -->
    <section class="content">
    	<div class="row">
    		<table class="table table reponsive table-bordered table-stripped">
    			<thead>
    				<tr>
    					<th>#</th>
    					<th>Type</th>
    					<th>Name</th>
    					<th>Decripton</th>
    					<th>Unit price</th>
    					<th>Promotion price</th>
    					<th>Image</th>
    					<th>Unit</th>
    					<th>New</th>
    					<th>Create date</th>
    					<th>Update date</th>
    				</tr>
    			</thead>
    			<tbody>
    				@foreach($products as $k =>$item)
				<tr>
					<td>{{($k + 1)}}</td>
					<td>{{($item ->name)}}</td>
					<td>{{($item ->id_type)}}</td>
					<td>{{($item ->description)}}</td>
					<td>{{($item ->unit_price)}}</td>
					<td>{{($item ->promotion_price)}}</td>
					<td>{{($item ->image)}}</td>
					<td>{{($item ->unit)}}</td>
					<td>{{($item ->new)}}</td>
					<td>{{($item ->Created_date)}}</td>
					<td>{{($item ->Updated_date)}}</td>
				</tr>
				@endforeach
    					
    			</tbody>


    					
    </section>
</div>
@endsection