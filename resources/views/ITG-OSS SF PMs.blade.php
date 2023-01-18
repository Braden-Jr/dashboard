@extends('form')

@section('contents')



<h2>@extends('form')

@section('contents')

<style>
    h1{
        text-align: center;
    }
</style>

<h1>ITG-OSS SF PMs</h1>

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
            <th>Action</th>
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
            <td class="DATA">{{ $datas->project_name_july }}</td>
            <td class="DATA">{{ $datas->tenure }}</td>
            <td class="DATA">{{ $datas->status}}</td>
           

            <td>
                <a href="#editclient" class="btn btn-success" data-bs-toggle="modal"><i class="fa fa-edit">
             </i> Edit</a>
             <a href="#deleteClient" class="btn btn-danger" data-bs-toggle="modal"><i class="fa-solid fa-trash"></i>
                Delete</a>
                @include('modal')
               
            </td>
        </tr>
        @endforeach 
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
  
      <form method="POST" action="/projects">
      @csrf
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row">
        <div class="col-md-12">
      <div class="form-outline mb-4">
        <input type="text" name='personnel' id="form3Example4" class="form-control" />
        <label class="form-label" for="form3Example3">Name</label>
        </div>

        <div class="row">
            <div class="col-md-12">
            <div class="form-outline mb-4">
              <input type="text" name='campaign'id="form3Example1" class="form-control" />
              <label class="form-label" for="form3Example1">Employee No.</label>
            </div>
            </div>
            <div class="col-md-12">
            <div class="form-outline mb-4">
              <input type="text" name='leader' id="form3Example2" class="form-control" />
              <label class="form-label" for="form3Example2">Hire Date</label>
            </div>
            </div>
          </div>
          <div class="form-outline mb-4">
            <input type="text" name='contact number' id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Contact Number</label>
          </div>
          <div class="form-outline mb-4">
            <input type="text" name='birthday' id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Birthdate</label>
          </div>
   
    
          <div class="form-outline mb-4">
            <input type="text" name='positions' id="form3Example3" class="form-control" />
            <label class="form-label" for="form3Example3">Project Name</label>
          </div>
    
          <div class="form-outline mb-4">
            <input type="text" name='personnel' id="form3Example4" class="form-control" />
            <label class="form-label" for="form3Example3">Designation</label>
            </div>
            <div class="row">
                <div class="col-md-12">
                <div class="form-outline mb-4">
                  <input type="text" name='campaign'id="form3Example1" class="form-control" />
                  <label class="form-label" for="form3Example1">Tenure</label>
                </div>
                </div>
                <div class="col-md-12">
                <div class="form-outline mb-4">
                  <input type="text" name='leader' id="form3Example2" class="form-control" />
                  <label class="form-label" for="form3Example2">Total IT Exp</label>
                </div>
                </div>
              </div>
        
              <div class="form-outline mb-4">
                <input type="text" name='positions' id="form3Example3" class="form-control" />
                <label class="form-label" for="form3Example3">Status</label>
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


