@extends('form2')
@section('contents')
@section('contents')

<style>
    h1{
        text-align: center;
    }
</style>

<h1>ITG - EITSC SD</h1>

<ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-left: 70px">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Projects</button>
    </li>
 
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Add Employee</button>
    </li>
  </ul> 
  <div class="tab-content" id="myTabContent" style="padding-left: 70px">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> <div class="activity-card">
    
        <table class="table table-striped" style="margin-top:20px;">
            <thead style="background-color: #171742;">
        <tr>
            <th>Name</th>
            <th>Employee No.</th>
            <th>Hire Date</th>
            <th>Contact Number</th>
            <th>Birthdate</th>
            <th>Project Name</th>
            <th>Designation</th>
            <th>Tenure</th>
            <th>Total IT Exp</th>
            <th>Status</th>


            @if(Auth::check())
            @if( session('type') == "admin" )
            <th>Action</th>
            @endif
            
        </tr>
        </thead>
        <tbody>

        @foreach ($data as $datas)

        <tr>
            <td class="DATA">{{ $datas->name }}</td>
            <td class="DATA">{{ $datas->employee_number }}</td>
            <td class="DATA">{{ $datas->hire_date }}</td>
            <td class="DATA">{{ $datas->contact_number }}</td>
            <td class="DATA">{{ $datas->birthdate}}</td>
            <td class="DATA">{{ $datas->project_name }}</td>
            <td class="DATA">{{ $datas->designation }}</td>
            <td class="DATA">{{ $datas->tenure }}</td>
            <td class="DATA">{{ $datas->total_it_exp }}</td>
            <td class="DATA">{{ $datas->status}}</td>
           
            @if( session('type') == "admin" )

            <td>
                <a href="#editEmployee{{ $datas->id }}" class="btn btn-success" data-bs-toggle="modal"><i class="fa fa-edit">
             </i> Edit</a>
             <a href="#deleteEmployee{{ $datas->id }}" class="btn btn-danger" data-bs-toggle="modal"><i class="fa-solid fa-trash"></i>
                Delete</a>
                @include('employee_modal')
               
            </td>

            @endif
           
        </tr>
        @endforeach
        @endif 
        <tbody>
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
  
      <form method="POST" action="/ITG%20-%20ALPHAMAX">
      @csrf
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row">
        <div class="col-md-12">
      <div class="form-outline mb-4">
        <input type="text" name='name' id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">Name</label>
        </div>

        <div class="row">
            <div class="col-md-12">
            <div class="form-outline mb-4">
              <input type="text" name='employeenumber'id="form3Example2" class="form-control" />
              <label class="form-label" for="form3Example2">Employee No.</label>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-outline mb-4">
              <input type="text" name='hiredate' id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Hire Date</label>
            </div>
            </div>
          </div>
          <div class="form-outline mb-4">
            <input type="text" name='contactnumber' id="form3Example4" class="form-control" />
            <label class="form-label" for="form3Example4">Contact Number</label>
          </div>
          <div class="form-outline mb-4">
            <input type="text" name='birthdate' id="form3Example5" class="form-control" />
            <label class="form-label" for="form3Example5">Birthdate</label>
          </div>
   
          <div class="form-outline mb-4">
            <input type="text" name='project' id="form3Example6" class="form-control" />
            <label class="form-label" for="form3Example6">Project Name</label>
          </div>
    
          <div class="form-outline mb-4">
            <input type="text" name='designation' id="form3Example7" class="form-control" />
            <label class="form-label" for="form3Example7">Designation</label>
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="form-outline mb-4">
                  <input type="text" name='tenure'id="form3Example8" class="form-control" />
                  <label class="form-label" for="form3Example8">Tenure</label>
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-outline mb-4">
                  <input type="text" name='totalit' id="form3Example9" class="form-control" />
                  <label class="form-label" for="form3Example9">Total IT Exp</label>
                </div>
                </div>
              </div>
        
              <div class="form-outline mb-4">
                <input type="text" name='status' id="form3Example10" class="form-control" />
                <label class="form-label" for="form3Example10">Status</label>
              </div>
             
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Add Employee
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
</div>



