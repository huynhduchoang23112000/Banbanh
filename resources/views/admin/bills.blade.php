@extends('layouts.admin.master')
@section('content')
 <div class="content-wrapper">
<section class="content-header">
      <h1>
        Bills
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Bills</li>
      </ol>
    </section>
<!-- Main content -->
    <section class="content">
    	<div class="row">
    		<table class="table table reponsive table-bordered table-stripped">
    			<thead>
    				<tr>
    					<th>#</th>
    					<th>id</th>
    					<th>id_customer</th>
    					<th>date_order</th>
    					<th>total</th>
    					<th>payment</th>
    					<th>note</th>
    					<th>created_at</th>
    					<th>updated_at</th>
    				</tr>
    			</thead>
    			<tbody>
    				@foreach($bills as $k =>$item)
				<tr>
					<td>{{($k + 1)}}</td>
					<td>{{($item ->id)}}</td>
					<td>{{($item ->id_customer)}}</td>
					<td>{{($item ->date_order)}}</td>
					<td>{{($item ->total)}}</td>
					<td>{{($item ->payment)}}</td>
					<td>{{($item ->note)}}</td>
					<td>{{($item ->created_at)}}</td>
					<td>{{($item ->updated_at)}}</td>
				</tr>
				@endforeach
    					
    			</tbody>


    					
    </section>
</div>
@endsection