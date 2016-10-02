@extends('layout.layout1')

@section('content')       
<section id="content">
    <div class="container_12" id="login_signup_container">
      <div class="grid_4">
        <?php if(Session::has('logout_msg')){
                echo '<p class="alert alert-info">'.Session::get('logout_msg').'</p>';
              }
		?>   
			
        <h3 class="top-1 p3">Login to your Account</h3>
        <form id="form" method="POST" action="{{url('auth/login')}}">
          {!! csrf_field() !!}
          <fieldset>
            <label><strong>Username:</strong>
              <input type="text" name="s_uname">
            </label>
            <label><strong>Password:</strong>
              <input type="password" name="s_pass">
            </label>
            
            <div class="btns"><button type="submit">Login</button></div>
          </fieldset>
        </form>
      </div>
      <div class="ordiv">OR</div>						
      <div class="grid_4" id="new_signup_div">
        <h3 class="top-1 p3">New Sign Up</h3>
        <form id="form" method="POST" action="{{url('register')}}">
        	{!! csrf_field() !!}
          <fieldset>
            <label><strong>Firstname:</strong>
              <input type="text" name="s_fname">
            </label>
            <label><strong>Lastname:</strong>
              <input type="text" name="s_lname">
            </label>  
            <label><strong>Username:</strong>
              <input type="text" name="s_uname">
            </label>  
            <label><strong>Email:</strong>
              <input type="text" name="s_email">
            </label>
            <label><strong>Password:</strong>
              <input type="password" name="s_pass">
            </label>	
            
            <div class="btns"><button type="submit">Sign Up</button></div>
          </fieldset>
        </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
@endsection