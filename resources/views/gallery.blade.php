@extends('layout.layout1')

@section('content')       
<section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">{{$pagetitle}}</h2>
        <p class="p5">Maecenas quis lacus eu tortor blandit venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean.</p>
        <div class="wrap block-2">
        	   <a href="#"><img src="images/page2-img2.jpg" alt="" class="img-border"></a>
        	   <a href="#"><img src="images/page2-img1.jpg" alt="" class="img-border"></a>
        	   <a href="#"><img src="images/page2-img4.jpg" alt="" class="img-border"></a> 
        	   <a href="#" class="last"><img src="images/page2-img3.jpg" alt="" class="img-border"></a> 
        </div>
        <div class="wrap block-2" style="margin-top:10px;">
        	   <a href="#"><img src="images/page2-img4.jpg" alt="" class="img-border"></a>
        	   <a href="#"><img src="images/page2-img3.jpg" alt="" class="img-border"></a> 
        	   <a href="#"><img src="images/page2-img1.jpg" alt="" class="img-border"></a> 
        	   <a href="#" class="last"><img src="images/page2-img2.jpg" alt="" class="img-border"></a> 
        </div>
        <div class="wrap block-2" style="margin-top:10px;">
        	   <a href="#"><img src="images/page2-img3.jpg" alt="" class="img-border"></a>
        	   <a href="#"><img src="images/page2-img4.jpg" alt="" class="img-border"></a> 
        	   <a href="#"><img src="images/page2-img2.jpg" alt="" class="img-border"></a> 
        	   <a href="#" class="last"><img src="images/page2-img1.jpg" alt="" class="img-border"></a> 
        </div>		
        </div>
      <div class="grid_4">
        <div class="left-1">
        		@include('shared.find_estate_form')
                @include('shared.lower_left_box') 
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
@endsection