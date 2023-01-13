
<div class="modal fade" id="editclient tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 DATA" id="exampleModalLabel" >Update Campaign</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <form method="post" action="/updateclient">
                @csrf
                <div class="mb-md-5 mt-md-4 pb-5"   >
    
                 
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                          value="" 
                          name="name" />
                        <label class="form-label DATA" for="typeEmailX"> Name of Campaign</label>
                    </div>
    
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                          value="" 
                          name="leader" />
                        <label class="form-label  DATA" for="typeEmailX">Team Leader</label>
                    </div>
                 
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                          value="" 
                          name="positions" />
                        <label class="form-label DATA" for="typeEmailX">Total number of positions</label>
                    </div>
    
                    <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                        value="" 
                        name="personnel" />
                      <label class="form-label DATA" for="typeEmailX">Number of Personnel</label>
                      <input type="text" name="uid" value="" hidden>
                  </div>
    
                  <div class="form-outline form-white mb-4" >
                    <input type="text"
                     class="form-control form-control-sm" 
                     style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                      value="" 
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
    
    
    
    
    
    
    
    
    
    <div class="modal fade" id="deleteClient" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 DATA" id="exampleModalLabel">Delete Campaign</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <form method="post" action="/projects">
                @csrf
                <div class="mb-md-5 mt-md-4 pb-5"   >
    
                 
                    <div class="form-outline form-white mb-4" >
                        <input type="text"
                         class="form-control form-control-sm" 
                         style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                          value="" 
                          name="name" disabled/>
                        <label class="form-label DATA" for="typeEmailX"> Name of Campaign</label>
                        <input type="text" name="did" value="" hidden>
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