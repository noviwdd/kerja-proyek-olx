@extends('master')

@section('card')
<div class="container mt-5">
	<div class="card-deck">
	  <div class="card">
	    <img src="{{asset('img/iphone.jpeg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">IPhone XS</h5>
	      <p class="card-text">Handphone bekas.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">3 hours ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	  <div class="card">
	    <img src="{{asset('img/iphone.jpeg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">IPhone XS</h5>
	      <p class="card-text">Handphone bekas.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">35 minutes ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	  <div class="card">
	    <img src="{{asset('img/iphone.jpeg')}}" class="card-img-top" alt="...">
	    <div class="card-body">
	      <h5 class="card-title">IPhone XS</h5>
	      <p class="card-text">Handphone bekas.</p>
	      <span class="badge badge-warning">Rp. 1.500.000</span>
	      <p class="card-text"><small class="text-muted">2 hours ago</small></p>
	      <span class="badge badge-primary" type="submit">Beli</span>
	    </div>
	  </div>
	</div>
</div>
@endsection