<?php include ("header.php"); ?>

<div class="container">
  <div class="section">

    <div class="row">

      <form class="col s12">

        <div class="row">

          <div class="input-field col s12">
            <input type="radio" name="entry-type" class="with-gap" value="team" id="team"/> 
            <label for="team">Team</label>
            <input type="radio" name="entry-type" class="with-gap" value="individual" id="individual"/>
            <label for="individual">Individual</label>
          </div>

        </div>

        <div class="row team-name">
          <div class="input-field col s12">
            <input id="team_name" name="team_name" type="text" class="validate">
            <label for="team_name">Team Name</label>
          </div>
        </div>

        <div class="row team-member">
          <div class="input-field col s12 m3 ">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="dob" type="date" class="datepicker">
            <label for="dob">Date of birth</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="bfa" type="text">
            <label for="bfa">British Fencing Number</label>
          </div>

          <div class="input-field col s12 m3">
            <select class="browser-default ">
              <option value="" disabled selected>Choose entry type</option>
              <option value="1">Standard</option>
              <option value="2">School Pupil</option>
              <option value="3">Student</option>
              <option value="4">Veteran</option>
            </select>
          </div>
        </div>

        <div class="row team-member">
          <div class="input-field col s12 m3 ">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="dob" type="date" class="datepicker">
            <label for="dob">Date of birth</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="bfa" type="text">
            <label for="bfa">British Fencing Number</label>
          </div>

          <div class="input-field col s12 m3">
            <select class="browser-default ">
              <option value="" disabled selected>Choose entry type</option>
              <option value="1">Standard</option>
              <option value="2">School Pupil</option>
              <option value="3">Student</option>
              <option value="4">Veteran</option>
            </select>
          </div>
        </div>

        <div class="row team-member">
          <div class="input-field col s12 m3 ">
            <input id="email" type="email" class="validate">
            <label for="email">Email</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="dob" type="date" class="datepicker">
            <label for="dob">Date of birth</label>
          </div>

          <div class="input-field col s12 m3">
            <input id="bfa" type="text">
            <label for="bfa">British Fencing Number</label>
          </div>

          <div class="input-field col s12 m3">
            <select class="browser-default ">
              <option value="" disabled selected>Choose entry type</option>
              <option value="1">Standard</option>
              <option value="2">School Pupil</option>
              <option value="3">Student</option>
              <option value="4">Veteran</option>
            </select>
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
