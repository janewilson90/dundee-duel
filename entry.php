<?php include ("header.php"); ?>

<div class="container">
  <div class="section">

    <div class="row">

      <form class="col s12">

        <div class="row">

          <div class="input-field col s12">
            <input type="radio" name="entry-type" class="with-gap" value="individual" id="individual"/>
            <label for="individual">Individual</label>
            <input type="radio" name="entry-type" class="with-gap" value="team" id="team"/> 
            <label for="team">Team</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col s12 m6">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">First Name</label>
          </div>
          <div class="input-field col s12 m6">
            <input id="last_name" type="text" class="validate">
            <label for="last_name">Last Name</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12 m4 ">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="dob" type="date" class="datepicker">
            <label for="dob">Date of birth</label>
          </div>

          <div class="input-field col s12 m4">
            <input id="phonenum" type="tel">
            <label for="phonenum">Contact tel</label>
          </div>
        </div>

        <div class="row">

          <div class="input-field col s12 m6">
            <select class="browser-default ">
              <option value="" disabled selected>Choose entry type</option>
              <option value="1">Standard</option>
              <option value="2">School Pupil</option>
              <option value="3">Student</option>
              <option value="4">Veteran</option>
            </select>
          </div>
          
          <div class="input-field col s12 m6">
            <input id="bfa" type="text">
            <label for="bfa">British Fencing Number</label>
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
