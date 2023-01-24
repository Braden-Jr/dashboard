
<div class="modal fade" id="changePass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 DATA" id="exampleModalLabel" >Change Password</h1>
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
                        <label class="form-label DATA" for="typeEmailX"> Old Password</label>
                    </div>
                    <div class="form-outline form-white mb-4" >
                      <input type="text"
                       class="form-control form-control-sm" 
                       style="background-color:white;color:black;border:2px solid #171742;font-size: 20px; "
                        value="" 
                        name="name" />
                      <label class="form-label DATA" for="typeEmailX"> New Password</label>
                  </div>
                    <button class="btn btn-outline-dark" type="submit"><i class="fa fa-edit"></i> Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
    </div>