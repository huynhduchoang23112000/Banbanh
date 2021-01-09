@extends('layouts.front-end.master')
@section('content')
<div id="content" class="space-top-none">
	<div class="main-content">
		<div class="space60">&nbsp;</div>
		<div class="row">
			<div class="col-sm-3">
				<ul class="aside-menu">
					@foreach($type as $item)
						<li><a href="/loai-san-pham/{{$item->id}}">{{$item->name}}</a></li>				
					@endforeach			
				</ul>
			</div>
			<div class="col-sm-9">
				<div class="beta-products-list">
					<h4>New Products</h4>
					<div class="beta-products-details">
						<p class="pull-left">438 styles found</p>
						<div class="clearfix"></div>
					</div>

					<div class="row">
						@foreach($products as $item)
						<div class="col-sm-4">
							<div class="single-item">
								<div class="single-item-header">
									<a href="product.html"><img src="{{asset('image/product/' . $item->image)}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$item->name}}</p>
									<p class="single-item-price">
										<span>${{$item->unit_price}}</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
						@endforeach						
					</div>
				</div> <!-- .beta-products-list -->

				<div class="space50">&nbsp;</div>
			</div>
		</div> <!-- end section with sidebar and main content -->


	</div> <!-- .main-content -->
</div> <!-- #content -->
@endsection