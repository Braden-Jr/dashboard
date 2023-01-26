@extends('form2')

@section('contents')
@php
use App\Models\allProjects;
use App\Models\Employee;
use App\Models\Campaign;
@endphp

<div class="main-content">

        
    <main>
        <h1 class="dash-title" style="color: #171742">Projects</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Projects</button>
            </li>


            
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <div class="activity-card">
            
                <table class="table table-striped" style="margin-top:20px;">
                  <thead style="background-color: #171742;">
                    <tr>
                      <th style="text-align: center">Name of Campaign</th>
                      <th style="text-align: center">Team Leader</th>
                      <th style="text-align: center">Total Number of Positions</th>

                      <th style="text-align: center">Status</th>
                      
                      @if(Auth::check())
                      @if( session('type') == "admin" )
                      <th style="text-align: center">Action</th>

                    @endif
                    
                    </tr>

                  </thead>
         <tbody>
                          
          @foreach ($data as $datas )
                          <tr>
                              <td class="DATA"> <form action="campaignall">
                                <input type="text" name="id" value="{{ $datas->id }}" hidden>
                                <input type="submit" value="{{$datas->project_name}}">
                            </form></td>  
                              <td class="DATA">{{ $datas->team_leader}}</td>
                       
                   
                              @php
                              $products = Campaign::where('project_id', $datas->id)->count();
                          @endphp 
                          <td class="DATA">{{ $products}}</td>
                          <td class="DATA">{{ $datas->project_status}}</td>
                              @if( session('type') == "admin" )
                              <td>

                                <a href="#editclient{{ $datas->id }}" class="btn btn-success" data-bs-toggle="modal"><i class="fa fa-edit">
                             </i> Edit</a>
                             <a href="#deleteClient{{ $datas->id }}" class="btn btn-danger" data-bs-toggle="modal"><i class="fa-solid fa-trash"></i>
                                Delete</a>
                                @include('modal')
                               
                             </td>
                             @endif
                          </tr>
          @endforeach
          @endif
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
                <div class="card-body p-5 shadow-5 text-center" id="addcampaign">
              
                  <form method="POST" action="/userdashboard">
                  @csrf
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-outline mb-4">
                      <input type="text" name='campaign'id="form3Example1" class="form-control" />
                      <label class="form-label" for="form3Example1">Name of Campaign</label>
                    </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-outline mb-4">
                      <input type="text" name='leader' id="form3Example2" class="form-control" />
                      <label class="form-label" for="form3Example2">Team Leader</label>
                    </div>
                    </div>
                  </div>
            
                 
                  <div class="form-outline mb-4">
                    <input type="text" name='positions' id="form3Example3" class="form-control" />
                    <label class="form-label" for="form3Example3">Total Number of Positions</label>
                  </div>
            
                  <div class="form-outline mb-4">
                    <input type="text" name='personnel' id="form3Example4" class="form-control" />
                    <label class="form-label" for="form3Example3">Number of Personnel</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" name='status' id="form3Example4" class="form-control" />
                      <label class="form-label" for="form3Example3">Status</label>
                      </div>

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