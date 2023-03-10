@extends('form')

@section('contents')
<style>
  .dash-title{
 text-align: center;
 color: #171742;

 }
</style>

<div class="main-content">     
    <main>
        <h1 class="dash-title">Accounts</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">User Accounts</button>
            </li>
         
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Add Account</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <div class="activity-card">
            
                <table class="table table-striped" style="margin-top:20px;">
                    <thead style="background-color: #90ccbc;">
                      <tr>
                        <th style="text-align: center">Name</th>
                        <th style="text-align: center">Employee Number</th>
                        <th style="text-align: center">Status</th>
                        <th style="text-align: center">Type</th>
                        <th style="text-align: center"></th>
                        <th style="text-align: center">Action</th>
                      </tr>
                    </thead>
           <tbody>
            @foreach ($data as $datas )
                
            <tr>
                <td class="DATA"><a href="{{$datas->name}}"> {{$datas->name}} </a> </td>  
                <td class="DATA">{{ $datas->employee_number}}</td>
                <td class="DATA">{{ $datas->status}}</td>
                <td class="DATA">{{ $datas->type}}</td>
                <td class="DATA">{{ $datas->action}}</td>
                                
                                <td>
                                   <a href="#editAccount{{ $datas->id }}" class="btn btn-success" data-bs-toggle="modal"><i class="fa fa-edit">
                                </i> Edit</a>
                                <a href="#deleteAccount{{ $datas->id }}" class="btn btn-danger" data-bs-toggle="modal"><i class="fa-solid fa-trash"></i>
                                   Delete</a>
                                @include('adminmodal')
                                  
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                       
                  </table>
                  <div class="row" style="padding-left:20px;border-radius:20px;display:flex;justify-content:center;margin-top:50px;">{{ $data->links() }}</div>
            </div>
          </div>
            
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"><style>
              .cascading-right {
              margin-right: -50px;
              }
            
              @media (max-width: 991.98px) {
              .cascading-right {
                margin-right: 0;
              }
              }
            </style>
            
            <!-- Jumbotron -->
            <div class="card-container py-4">
              <div class="row g-0 align-items-center">
              <div class="col-lg-12 mb-10 mb-lg-0">
                <div class="card" style="
                  background: hsla(0, 0%, 100%, 0.55);
                  backdrop-filter: blur(30px);
                  ">
                <div class="card-body p-5 shadow-5 text-center">
              
                  <form method="POST" action="/usersignup">
                  @csrf
                  <!-- Name Input-->
                  <div class="row">
                    <div class="col-mb-6">
                    <div class="form-outline mb-6">
                      <input type="text" name='name'id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">Full Name</label>
                    </div>
                    </div>
                    <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name='employee_number' id="form3Example3" class="form-control" />
                      <label class="form-label" for="form3Example2">Employee Number</label>
                    </div>
                    </div>
                  </div>
            
                  <!-- Password -->
                  <div class="form-outline mb-4">
                    <input type="password" name='password' id="form3Example5" class="form-control" />
                    <input type="text" name='type' value="admin" hidden	>
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name='status' id="form3Example3" class="form-control" />
                      <label class="form-label" for="form3Example2">Status</label>
                    </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name='type' id="form3Example3" class="form-control" />
                      <label class="form-label" for="form3Example2">Type</label>
                    </div>
                    </div>
                  </div>
            
                  <!-- Submit button -->
                  <button type="submit" class="btn btn-primary btn-block mb-4">
                    Sign up
                  </button>
                  @if(session('status'))
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
            <!-- Jumbotron -->
            </section></div>
          </div>
        
    </main>
    
</div>


@endsection