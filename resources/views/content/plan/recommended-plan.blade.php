@extends('layouts.app')

@section('title')

@endsection

@section('content')
<div class="container container--full grey">
	<div class="plan-destinasi-board">
	    <div class="container">
	      <div class="plan-destinasi-boardbox-container">
	        <div class="plan-destinasi-board-box">
	          <div class="label">
	            kota
	          </div>
	          <div class="value">
	            bandung
	          </div>
	        </div>
	        <div class="plan-destinasi-board-box">
	          <div class="label">
	            tanggal
	          </div>
	          <div class="value">
	            21 April - 23 April
	          </div>
	        </div>
	        <div class="plan-destinasi-board-box">
	          <div class="label">
	            peserta
	          </div>
	          <div class="value">
	            2 Orang
	          </div>
	        </div>
	      </div>
	      <div class="plan-destinasi-board-action">
	        ubah
	      </div>
	    </div>
	</div>
	<div class="container container-body rp">
		<div class="rp__filter">
			<div class="row">
				<div class="rp__title col-md-6">
					<h3>Rekomendasi</h3>
				</div>
				<div class="rp__filter-wrapper col-md-6">
					<div class="rp__filter-wrap">
						<div class="form-group rp__filter-content">
					      <div class="input-group select with-label">
					        <label for="">Kategori</label>
					        <select class="" name="">
					          <option value="iyak" selected>Semua</option>
							  <option value="gak">Bukan Semua</option>
					        </select>
					      </div>
					    </div>
					    <div class="form-group rp__filter-content">
					      <div class="input-group select with-label">
					        <label for="">Harga</label>
					        <select class="" name="">
					          <option value="50" selected>< Rp.500.000</option>
							  <option value="100">Rp1.000.000 - Rp5.000.000</option>
					        </select>
					      </div>
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="rp__wrapper">
			<div class="rp__wrap row">
				<div class="rp__content col-md-6">
					<div class="card card--full">
						<div class="swiper-container card__slider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						    </div>

						    <!-- If we need pagination -->
	    					<div class="swiper-pagination home-pagination card-pagination"></div>
						</div>
						<div class="card__location row">
							<div class="card__map col-md-4">
								<div id="map" class="pd-maps-box maps"></div>
							</div>
							<div class="card__infowrap col-md-8">
								<h5>Petualangan di raja ampat</h5>
								<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
								<div class="card__info">
									<span class="fa fa-map-marker"></span>
									<p>Sulawesi Selatan</p>
								</div>
							</div>
						</div>
						<div class="card__pricewrap relative">
							<h2>Rp200.000 <span>/Orang</span></h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="rp__content col-md-6">
					<div class="card card--full">
						<div class="swiper-container card__slider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						    </div>

						    <!-- If we need pagination -->
	    					<div class="swiper-pagination home-pagination card-pagination"></div>
						</div>
						<div class="card__location row">
							<div class="card__map col-md-4">
								<div id="map" class="pd-maps-box maps"></div>
							</div>
							<div class="card__infowrap col-md-8">
								<h5>Petualangan di raja ampat</h5>
								<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
								<div class="card__info">
									<span class="fa fa-map-marker"></span>
									<p>Sulawesi Selatan</p>
								</div>
							</div>
						</div>
						<div class="card__pricewrap relative">
							<h2>Rp200.000 <span>/Orang</span></h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="rp__content col-md-6">
					<div class="card card--full">
						<div class="swiper-container card__slider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						    </div>

						    <!-- If we need pagination -->
	    					<div class="swiper-pagination home-pagination card-pagination"></div>
						</div>
						<div class="card__location row">
							<div class="card__map col-md-4">
								<div id="map" class="pd-maps-box maps"></div>
							</div>
							<div class="card__infowrap col-md-8">
								<h5>Petualangan di raja ampat</h5>
								<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
								<div class="card__info">
									<span class="fa fa-map-marker"></span>
									<p>Sulawesi Selatan</p>
								</div>
							</div>
						</div>
						<div class="card__pricewrap relative">
							<h2>Rp200.000 <span>/Orang</span></h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="rp__content col-md-6">
					<div class="card card--full">
						<div class="swiper-container card__slider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						    </div>

						    <!-- If we need pagination -->
	    					<div class="swiper-pagination home-pagination card-pagination"></div>
						</div>
						<div class="card__location row">
							<div class="card__map col-md-4">
								<div id="map" class="pd-maps-box maps"></div>
							</div>
							<div class="card__infowrap col-md-8">
								<h5>Petualangan di raja ampat</h5>
								<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
								<div class="card__info">
									<span class="fa fa-map-marker"></span>
									<p>Sulawesi Selatan</p>
								</div>
							</div>
						</div>
						<div class="card__pricewrap relative">
							<h2>Rp200.000 <span>/Orang</span></h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="rp__content col-md-6">
					<div class="card card--full">
						<div class="swiper-container card__slider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						    </div>

						    <!-- If we need pagination -->
	    					<div class="swiper-pagination home-pagination card-pagination"></div>
						</div>
						<div class="card__location row">
							<div class="card__map col-md-4">
								<div id="map" class="pd-maps-box maps"></div>
							</div>
							<div class="card__infowrap col-md-8">
								<h5>Petualangan di raja ampat</h5>
								<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
								<div class="card__info">
									<span class="fa fa-map-marker"></span>
									<p>Sulawesi Selatan</p>
								</div>
							</div>
						</div>
						<div class="card__pricewrap relative">
							<h2>Rp200.000 <span>/Orang</span></h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="rp__content col-md-6">
					<div class="card card--full">
						<div class="swiper-container card__slider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						    </div>

						    <!-- If we need pagination -->
	    					<div class="swiper-pagination home-pagination card-pagination"></div>
						</div>
						<div class="card__location row">
							<div class="card__map col-md-4">
								<div id="map" class="pd-maps-box maps"></div>
							</div>
							<div class="card__infowrap col-md-8">
								<h5>Petualangan di raja ampat</h5>
								<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
								<div class="card__info">
									<span class="fa fa-map-marker"></span>
									<p>Sulawesi Selatan</p>
								</div>
							</div>
						</div>
						<div class="card__pricewrap relative">
							<h2>Rp200.000 <span>/Orang</span></h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="rp__content col-md-6">
					<div class="card card--full">
						<div class="swiper-container card__slider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						    </div>

						    <!-- If we need pagination -->
	    					<div class="swiper-pagination home-pagination card-pagination"></div>
						</div>
						<div class="card__location row">
							<div class="card__map col-md-4">
								<div id="map" class="pd-maps-box maps"></div>
							</div>
							<div class="card__infowrap col-md-8">
								<h5>Petualangan di raja ampat</h5>
								<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
								<div class="card__info">
									<span class="fa fa-map-marker"></span>
									<p>Sulawesi Selatan</p>
								</div>
							</div>
						</div>
						<div class="card__pricewrap relative">
							<h2>Rp200.000 <span>/Orang</span></h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="rp__content col-md-6">
					<div class="card card--full">
						<div class="swiper-container card__slider">
							<!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						        <div class="swiper-slide">
									<img src="{{ asset('images/image-card.jpeg') }}" alt="">
						        </div>
						    </div>

						    <!-- If we need pagination -->
	    					<div class="swiper-pagination home-pagination card-pagination"></div>
						</div>
						<div class="card__location row">
							<div class="card__map col-md-4">
								<div id="map" class="pd-maps-box maps"></div>
							</div>
							<div class="card__infowrap col-md-8">
								<h5>Petualangan di raja ampat</h5>
								<p class="card__desc">Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod.</p>
								<div class="card__info">
									<span class="fa fa-map-marker"></span>
									<p>Sulawesi Selatan</p>
								</div>
							</div>
						</div>
						<div class="card__pricewrap relative">
							<h2>Rp200.000 <span>/Orang</span></h2>
							<img class="svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>
				</div>
				<div class="rp__content rp__btn col-md-12">
					<button class="btn">LIHAT LEBIH BANYAK</button>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="{{ asset('js/plugins/swiper.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/view/recomended_plan.js') }}" charset="utf-8"></script>
@endsection