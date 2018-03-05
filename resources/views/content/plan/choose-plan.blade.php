@extends('layouts.app')

@section('title')

@endsection
@php $data =[] @endphp
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
	            {{ $data['destination'] }}
	          </div>
	        </div>
	        <div class="plan-destinasi-board-box">
	          <div class="label">
	            tanggal
	          </div>
	          <div class="value">
	            {{ $data['dep_date'] }} - {{ $data['ret_date'] }}
	          </div>
	        </div>
	        <div class="plan-destinasi-board-box">
	          <div class="label">
	            peserta
	          </div>
	          <div class="value">
	            {{ $data['person'] }} @lang('trns.person')
	          </div>
	        </div>
	      </div>
	      <div class="plan-destinasi-board-action">
	        ubah
	      </div>
	    </div>
	</div>
	<div class="cp">
		<div class="cp__banner" style="background-image: url('/images/plan-bg.jpeg');">
			<div class="cp__banner-text container">
				<h1>{{ $data['destination'] }}, {{ $data['destination-province']}}</h1>
				<h3><span>132</span> Destinasi</h3>
			</div>
		</div>
		<div class="container">
			<div class="cp__container">
				<div class="cp__wrapper row">

					<div class="cp__content col-md-6" onclick="location.href='/trip/recommendation';">
						<div class="cp__content-wrap">
							<img class="cp__icon" src="{{ asset('images/art-recommendation.png') }}" alt="">
							<h3>@lang('trns.recommendation')</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quisquam officia cumque. Dicta consectetur animi, amet recusandae tempore corporis labore ipsa. Non minima illum nostrum quam molestiae reiciendis, porro animi!</p>
							<img class="cp__svg svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>

					

					<div class="cp__content col-md-6" onclick="location.href='/trip/custom';">
						<div class="cp__content-wrap">
							<img class="cp__icon" src="{{ asset('images/art-custom.png') }}" alt="">
							<h3>Buat Sendiri</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur reiciendis, iusto voluptate quo provident! Totam similique, adipisci animi neque quidem ea illum corrupti vero sint cum quisquam excepturi voluptates quod.</p>
							<img class="cp__svg svg-image" src="{{ asset('images/icon/home-arrow-b.svg') }}" alt="">
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection