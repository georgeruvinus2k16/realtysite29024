@extends('layout.layout1')

@section('content')       
<section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">{{$pagetitle}}</h2>
        <form id="form" method="post" action="#">
          <fieldset>
            <label><strong>Your Name:</strong>
              <input type="text" value="">
            </label>
            <label><strong>Your E-mail:</strong>
              <input type="text" value="">
            </label>
            <label><strong>Your Message:</strong>
              <textarea></textarea>
            </label>
            <div class="btns"><a href="#" class="button">Clear</a><a href="#" class="button">Send</a></div>
          </fieldset>
        </form>
      </div>
      <div class="grid_4">
        <div class="left-1">
          <div style="height:30px;"></div>	
          @include('shared.contactpane')
          <div style="height:30px;"></div>	  	
          @include('shared.lower_left_box') 
          
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
@endsection