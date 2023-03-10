
@extends('form1')
@section('contents')


    <div class="bg order-1 order-md-2">
        <!--<img class="cover" src="{{ asset('img/absicover.jpg') }}" >
    </div> -->

  <div class="half">
    
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5" >
                <span><img src="{{asset('/ABSILOGO.png')}}" alt="Image" id="headerlogo" style="width: 200px"/></span> 
              <h3 id="logintext">IT-COE Dashboard</h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <form method="post" action="/login">
                @csrf
                <div class="form-group first">
                    <input type="text" id="typeEmailX"
                    name='employee_number'class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX" id="logintext">Employee Number</label>
                </div>
                <div class="form-group last mb-3">
                <input type="password" id="typePasswordX" name='password'
                    class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX" id="logintext">Password</label>
                </div>
                </label>

                 

                <button class="btn btn-block loginbtn" type="submit">Login</button>
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
