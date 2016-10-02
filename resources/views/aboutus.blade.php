@extends('layout.layout1')

@section('content')       
<section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">{{$pagetitle}}</h2>
        <p class="p2">Real Estate is one of free website templates created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
        <p class="line-1">Download the basic package of this Real Estate Template (without PSD source) that is available for anyone without registration. If you need PSD source files, please go to the template download page at TemplateMonster to leave the e-mail address that you want the free template ZIP package to be delivered to.</p>
        <h2 class="p4">Our Clients Feedbacks</h2>
        <div class="wrap block-1">
          <div> <img src="images/page1-img1.jpg" alt="" class="img-border">
            <h3>Sellers</h3>
            <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
            <a href="#" class="button">More</a> </div>
          <div> <img src="images/page1-img2.jpg" alt="" class="img-border">
            <h3>Buyers</h3>
            <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
            <a href="#" class="button">More</a> </div>
          <div class="last"> <img src="images/page1-img3.jpg" alt="" class="img-border">
            <h3>Investors</h3>
            <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
            <a href="#" class="button">More</a> </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="left-1">
          @include('shared.find_estate_form')
          @include('shared.our_offices')
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
@endsection