<!-- Add New Curriculum Modal -->
<div class="modal fade" id="addnewcurriculum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Subject Details</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form action="{{ action('App\Http\Controllers\Admin\CurriculumController@addCurriculum')}}" class="form-horizontal" method="POST">
      @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <label class="col-xs-5 control-label" for="subjectname">Description</label>  
                <input id="subjectname" class="form-control" name="subjectname" placeholder="Subject Name and Description" required="">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Register New Student -->
<div class="modal fade" id="registerStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form action="{{ action('App\Http\Controllers\Admin\CurriculumController@addCurriculum')}}" class="form-horizontal" method="POST">
      @csrf
        <div class="col-md-12">
            <div class="form-group" style="width:100%;border-bottom:2px solid #05300e">
            <h5><b>Student's Personal Details </b></h5>
            </div>
            <br>
            <label class="control-label" for="name">Name</label>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="firstname" style="text-transform: capitalize;" name="firstname" placeholder="First Name" required>
                    <label style="font-size:10px">(First name)</label>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="middlename" style="text-transform: capitalize;" name="middlename" placeholder="Middle Name" required>
                    <label style="font-size:10px">(Middle name)</label>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="lastname" style="text-transform: capitalize;" name="lastname" placeholder="Last Name" required>
                    <label style="font-size:10px">(Last name)</label>
                </div> 
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label class="control-label" for="lrn">LRN Number</label>  
                    <input id="lrn" name="lrn" type="number" placeholder="Enter LRN " maxlength="12" class="form-control input-xs" required="">
                </div>
                <div class="form-group col-md-3">
                    <label class="col-xs-4 control-label" for="gender">Gender</label>
                    <div class="col-xs-4">
                        <select id="gender" name="gender" class="form-select input-xs">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                <label for="">Date of Birth</label>
                <input type="date" name="dateofbirth" class="form-control" required/>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label class="col-sx-4 control-label" for="contact">Contact Number</label>
                    <input id="contact" class="form-control" name="contact" placeholder="Contact Number"  type="number" required="">
                </div>
                <div class="form-group col-md-8">
                    <label class="col-xs-5 control-label" for="email_address">Email Address</label>  
                    <input id="email_address" name="email_address" type="text" placeholder="Email Address" class="form-control input-xs" required="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label class="col-sx-4 control-label" for="bp">Birth Place</label>
                    <input id="address" class="form-control" style="text-transform: capitalize;" name="bp" placeholder="Birth Place"  type="text" required="">
                </div>
                <div class="form-group col-md-6">
                    <label class="col-xs-5 control-label" for="home_address">Home Address</label>  
                    <input id="home_address" name="home_address" type="text" style="text-transform: capitalize;" placeholder="Enter Student Address" class="form-control input-xs" required="">
                </div>
            </div>
            <label class="control-label" for="parentname">Parent/Guardian</label>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" id="parentname" name="parentname" style="text-transform: capitalize;" placeholder="Full Name" required>
                    <label style="font-size:10px">(Parent's Full Name)</label>
                </div>
                <div class="form-group col-md-7">
                    <input type="text" class="form-control" id="prentadd" name="parentadd"  style="text-transform: capitalize;" placeholder="Parent's Address" required>
                    <label style="font-size:10px">(Parent's Home Address)</label>
                </div>
            </div>
            <div class="form-group" style="width:100%;border-bottom:2px solid #05300e">
            <h5><b>Adviser Details </b></h5>
            </div>
            <label class="control-label" for="advisername">Adviser Name</label>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="adviserfirstname" style="text-transform: capitalize;" name="adviserfirstname" placeholder="First Name" required>
                    <label style="font-size:10px">(First name)</label>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="adviserlastname" style="text-transform: capitalize;" name="adviserlastname" placeholder="Last Name" required>
                    <label style="font-size:10px">(Last name)</label>
                </div> 
            </div>
            <div class="form-group" style="width:100%;border-bottom:2px solid #05300e">
            <h5><b>System Details </b></h5>
            </div>
            <div class="form-row">
            <div class="form-group col-md-4">
            <div class="data font-weight-bold">Username</div>
                <input id="username" name="username" type="text" placeholder="Username" maxlength="12" class="form-control input-xs" required>
            </div>
                <div class="form-group col-md-4">
                <div class="data font-weight-bold">Password</div>
                    <input id="password" name="password" type="text" placeholder="Password" maxlength="12" class="form-control input-xs" required>
                </div>
            </div>

        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Register New Faculty/Staff -->
<div class="modal fade" id="registerFaculty" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static" data-keyboard="false" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Faculty/Staff Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
      <form action="{{ action('App\Http\Controllers\Admin\CurriculumController@addCurriculum')}}" class="form-horizontal" method="POST">
      @csrf
        <div class="col-md-12">
              <div class="form-group" style="width:100%;border-bottom:2px solid #05300e">
              <h5><b>Personal Details </b></h5>
              </div>
              <br>
              <label class="control-label" for="name">University Number</label>
              <div class="form-row">
                  <div class="form-group col-md-5"> 
                      <div class="col-xs-6">
                      <input id="uninumber" name="uninumber" type="text" placeholder="Enter U Number " maxlength="12" class="form-control input-xs" required="">
                  </div>
              </div>
              </div>
              <label class="control-label" for="name">Name</label>
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="firstname" style="text-transform: capitalize;" name="firstname" placeholder="First Name" required>
                      <label style="font-size:10px">(First name)</label>
                  </div>
                  <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="middlename" style="text-transform: capitalize;" name="middlename" placeholder="Middle Name" required>
                      <label style="font-size:10px">(Middle name)</label>
                  </div>
                  <div class="form-group col-md-4">
                      <input type="text" class="form-control" id="lastname" style="text-transform: capitalize;" name="lastname" placeholder="Last Name" required>
                      <label style="font-size:10px">(Last name)</label>
                  </div> 
              </div>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <label class="col-sx-4 control-label" for="contact">Contact Number</label>
                      <input id="contact" class="form-control" name="contact" placeholder="Contact Number"  type="number" required="">
                  </div>
                  <div class="form-group col-md-6">
                      <label class="col-xs-5 control-label" for="home_address">Home Address</label>  
                      <input id="home_address" name="home_address" type="text" style="text-transform: capitalize;" placeholder="Enter Student Address" class="form-control input-xs" required="">
                  </div>
              </div>
              <div class="form-group" style="width:100%;border-bottom:2px solid #05300e">
              <h5><b>System Details </b></h5>
              </div>
              <br>
              <div class="form-row">
              <div class="form-group col-md-6">
              <div class="data font-weight-bold">Username</div>
                  <input id="username" name="username" type="text" placeholder="Username" maxlength="12" class="form-control input-xs" required>
              </div>
                  <div class="form-group col-md-6">
                  <div class="data font-weight-bold">Password</div>
                      <input id="password" name="password" type="text" placeholder="Password" maxlength="12" class="form-control input-xs" required>
                  </div>
              </div>

          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
      </form>
    </div>
  </div>
</div>