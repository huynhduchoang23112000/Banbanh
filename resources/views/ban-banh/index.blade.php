@extends('layouts.front-end.master')
@section('content')
	<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Sản Phẩm Mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy {{count($new_products)}} Sản Phẩm Mới Nhất</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								<!-- in 4 sản phẩm mới nhất -->
						@foreach($new_products as $key => $value)
						<div class="col-sm-3">
							<div class="single-item">
								<div class="single-item-header">
									<a href="/chi-tiet/{{$value->id}}"><img src="image/product/{{$value->image}}" alt=""></a>
								</div>
								<div class="single-item-body">
									<p class="single-item-title">{{$value->name}}</p>
									<p class="single-item-price">
										<span>{{number_format($value->unit_price)}} VND</span>
									</p>
								</div>
								<div class="single-item-caption">
									<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
									<a class="beta-btn primary" href="/chi-tiet/{{$value->id}}">Details <i class="fa fa-chevron-right"></i></a>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>	
						@endforeach
						<div class="row">{{$new_products->links()}}</div>			
							</div>
					

						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản Phẩm Khuyến Mãi</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm Thấy {{count($new_products)}} Sản Phẩm Khuyến Mãi</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<!-- in 8 san pham khuyen mai -->
								@foreach($sanpham_km as $key => $value)
								<div class="col-sm-3">
									<div class="single-item">
										<div class="single-item-header">
											<a href="/chi-tiet/{{$value->id}}"><img src="image/product/{{$value->image}}" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$value->name}}</p>
											<p class="single-item-price">
												<span class="flash-del">{{number_format($value->unit_price)}}VND
												</span>
													<span class="flash-sale">{{number_format($value->promotion_price)}} VND
												</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="/dat-hang"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="/chi-tiet/{{$value->id}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
									@endforeach	
							</div>
							<div class="row">{{$sanpham_km->links()}}</div>
				
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
		@endsection