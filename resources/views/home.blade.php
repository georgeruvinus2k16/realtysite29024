@extends('layout.layout1')

@section('content')
<section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">{{$pagetitle}}</h2>
        <div class="wrap">
          <div class="img-indent">
            <div><img src="images/page4-img1.jpg" alt="" class="img-border"></div>
            <div class="top-3"><img src="images/page4-img2.jpg" alt="" class="img-border"></div>
          </div>
          <div class="extra-wrap">
            <p class="color-1 p2">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt </p>
            <p>Ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
            <a href="#" class="button top-4">Read more</a> </div>
        </div>
        	
        <h2 class="top-5 p3">Recently Closed Transactions</h2>
        <p>Aenean quis metus lacus, a commodo libero nam lacinia blandit dui vitae malesuada donec pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur:</p>
        <div class="lists-2">
          <ul class="list-1">
            <li><a href="#">Maecenas mattis venena adfasd ergdfgd fgdf vdfvd</a></li>
            <li><a href="#">Nam accumsan miac</a></li>
            <li><a href="#">Rhoncus luctus erat nisl</a></li>
            <li><a href="#">Ultrices neque vel</a></li>
            <li><a href="#">Morbi ut augue ut risus</a></li>
          </ul>
        </div>
        <a href="#" class="button">Read more</a> </div>
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