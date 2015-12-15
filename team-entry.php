<?php include ("header.php"); ?>

<div class="container">
  <div class="section">

    <div class="row">

      <form class="col s12">

        <div class="row team-name">
          <div class="input-field col s12">
            <input id="team_name" name="team_name" type="text" class="validate">
            <label for="team_name">Team Name</label>
          </div>
        </div>

        <div class="row team-member">
          <h5>Team Member 1</h5>
          <div class="input-field col s12 m4 ">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="phonenum" type="tel">
            <label for="phonenum">Contact tel</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="dob" type="date" class="datepicker">
            <label for="dob">Date of birth</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="bfa" type="text">
            <label for="bfa">British Fencing Number</label>
          </div>

          <div class="input-field col s12 m6">
            <select class="browser-default ">
              <option value="" disabled selected>Choose entry type</option>
              <option value="1">Standard</option>
              <option value="2">School Pupil</option>
              <option value="3">Student</option>
              <option value="4">Veteran</option>
            </select>
          </div>
        </div>

        <hr/>

        <div class="row team-member">
          <h5>Team Member 2</h5>
          <div class="input-field col s12 m4 ">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="phonenum" type="tel">
            <label for="phonenum">Contact tel</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="dob" type="date" class="datepicker">
            <label for="dob">Date of birth</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="bfa" type="text">
            <label for="bfa">British Fencing Number</label>
          </div>

          <div class="input-field col s12 m6">
            <select class="browser-default ">
              <option value="" disabled selected>Choose entry type</option>
              <option value="1">Standard</option>
              <option value="2">School Pupil</option>
              <option value="3">Student</option>
              <option value="4">Veteran</option>
            </select>
          </div>
        </div>

        <hr/>

        <div class="row team-member">
          <h5>Team Member 3</h5>
          <div class="input-field col s12 m4">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="phonenum" type="tel">
            <label for="phonenum">Contact tel</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="dob" type="date" class="datepicker">
            <label for="dob">Date of birth</label>
          </div>

          <div class="input-field col s12 m6">
            <input id="bfa" type="text">
            <label for="bfa">British Fencing Number</label>
          </div>

          <div class="input-field col s12 m6">
            <select class="browser-default ">
              <option value="" disabled selected>Choose entry type</option>
              <option value="1">Standard</option>
              <option value="2">School Pupil</option>
              <option value="3">Student</option>
              <option value="4">Veteran</option>
            </select>
          </div>
        </div>

        <div class="row">
          <div class=" tshirts col s12">
            <div class="card">
              <div class="card-content tshirt-card">
                <div class="card-title">TShirts</div>
                <form class="tshirt-form">
                  <div class="input-field col s12 m4">
                    <select class="browser-default ">
                      <option value="" disabled selected>Choose tshirt size</option>
                      <option value="1">Male S</option>
                      <option value="2">Male M</option>
                      <option value="3">Male L</option>
                      <option value="4">Male XL</option>
                      <option value="1">Female S</option>
                      <option value="2">Female M</option>
                      <option value="3">Female L</option>
                      <option value="4">Female XL</option>
                    </select>
                  </div>
                  <div class="input-field col s12 m4">
                    <select class="browser-default ">
                      <option value="" disabled selected>Choose tshirt size</option>
                      <option value="1">Male S</option>
                      <option value="2">Male M</option>
                      <option value="3">Male L</option>
                      <option value="4">Male XL</option>
                      <option value="1">Female S</option>
                      <option value="2">Female M</option>
                      <option value="3">Female L</option>
                      <option value="4">Female XL</option>
                    </select>
                  </div>
                  <div class="input-field col s12 m4">
                    <select class="browser-default ">
                      <option value="" disabled selected>Choose tshirt size</option>
                      <option value="1">Male S</option>
                      <option value="2">Male M</option>
                      <option value="3">Male L</option>
                      <option value="4">Male XL</option>
                      <option value="1">Female S</option>
                      <option value="2">Female M</option>
                      <option value="3">Female L</option>
                      <option value="4">Female XL</option>
                    </select>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row submit-entry">
          <a class="waves-effect waves-light btn"><i class="material-icons left">done</i>Submit Entry</a>
        </div>

      </form>


    </div>

  </div>

  <div class="divider"></div>

</div>

<?php include ("footer.php"); ?>
