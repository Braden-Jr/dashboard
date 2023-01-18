<div class="modal fade" id="editEmployee{{ $datas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 DATA" id="exampleModalLabel" >Update Employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <form method="post" action="/ITG-UNION BANK DELIVERY">
                @csrf
                <div class="mb-md-5 mt-md-4 pb-5"   >
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                          value="{{ $datas->name }}" 
                          name="name" />
                        <label class="form-label DATA" for="typeEmailX"> Name </label>
                    </div>
    
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                          value="{{ $datas->employee_no }}" 
                          name="leader" />
                        <label class="form-label  DATA" for="typeEmailX">Employee No.</label>
                    </div>
                 
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                          value="{{ $datas->hire_date }}" 
                          name="positions" />
                        <label class="form-label DATA" for="typeEmailX">Hire Date</label>
                    </div>
    
                    <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                        value="{{ $datas->contact_number}}" 
                        name="personnel" />
                      <label class="form-label DATA" for="typeEmailX">Contact Number</label>
                      <input type="text" name="uid" value="" >
                  </div>
    
                  <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                      value="{{ $datas->birthdate }}" 
                      name="status" />
                    <label class="form-label DATA" for="typeEmailX">Birthdate</label>
                </div>

                <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                      value="{{ $datas->project_name }}" 
                      name="status" />
                    <label class="form-label DATA" for="typeEmailX">Project Name</label>
                </div>

                <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                      value="{{ $datas->designation }}" 
                      name="status" />
                    <label class="form-label DATA" for="typeEmailX">Designation</label>
                </div>
                    
                <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                      value="{{ $datas->tenure}}" 
                      name="status" />
                    <label class="form-label DATA" for="typeEmailX">Tenure</label>
                </div>

                <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                      value="{{ $datas->total_it_exp }}" 
                      name="status" />
                    <label class="form-label DATA" for="typeEmailX">Total IT Exp</label>
                </div>
                
                <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                      value="{{ $datas->status}}" 
                      name="status" />
                    <label class="form-label DATA" for="typeEmailX">Status</label>
                </div>
                    <button class="btn btn-outline-dark" type="submit"><i class="fa fa-edit"></i> Save</button>
         
               
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
        </div>
      </div>
    </div>
    </div>
   
    <div class="modal fade" id="deleteEmployee{{ $datas->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 DATA" id="exampleModalLabel">Delete Employee</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <form method="post" action="/ITG-UNION BANK DELIVERY">
                @csrf
                <div class="mb-md-5 mt-md-4 pb-5">
                  <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                      value="{{ $datas->name }}" 
                      name="name" disabled/>
                    <label class="form-label DATA" for="typeEmailX"> Name of Employee</label>
                    <input type="text" name="did" value="{{ $datas->id }}" hidden>
                </div>
                    <button class="btn btn-outline-dark " type="submit"><i class="fa-solid fa-trash"></i> Delete</button>
                </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
        </div>
      </div>
    </div>
    </div>