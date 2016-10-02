@extends('layout.layout1')

@section('content')       
<section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">{{$pagetitle}}</h2>
        <div class="wrap"> 
        	
        	<img src="images/page3-img1.jpg" alt="" class="img-border img-indent">
            <div class="extra-wrap">
	            <h3>Valentine Homes</h3>
	            <p>Pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur. ac tempor purus vulputate lobortis.</p>
	        </div>
        </div>
        <p class="p5">Venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu.</p>
        <a href="#" class="button">Read more</a>
        
        
        <div class="wrap"> 
        	<img src="images/page3-img2.jpg" alt="" class="img-border img-indent">
            <div class="extra-wrap">
	            <h3>Valde Rama Residences</h3>
	            <p>Pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur. ac tempor purus vulputate lobortis.</p>
	        </div>
        </div>
        <p class="p5">Venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu.</p>
        <a href="#" class="button">Read more</a>
        	
        <div class="wrap"> 
        	<img src="images/page3-img1.jpg" alt="" class="img-border img-indent">
            <div class="extra-wrap">
	            <h3>Walton Heights Village</h3>
	            <p>Pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur. ac tempor purus vulputate lobortis.</p>
	        </div>
        </div>
        <p class="p5">Venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu.</p>
        <a href="#" class="button">Read more</a>
        	
        <div class="wrap"> 
        	<img src="images/page3-img2.jpg" alt="" class="img-border img-indent">
            <div class="extra-wrap">
	            <h3>Marciano Homes</h3>
	            <p>Pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur. ac tempor purus vulputate lobortis.</p>
	        </div>
        </div>
        <p class="p5">Venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu.</p>
        <a href="#" class="button">Read more</a>			
        
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