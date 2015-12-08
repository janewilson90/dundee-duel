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
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
              <input id="dob" type="date" class="datepicker">
              <label for="dob">Date of birth</label>
            </div>

            <div class="input-field col s6">
              <select>
                <option value="" disabled selected>Choose entry type</option>
                <option value="1">Standard</option>
                <option value="2">School Pupil</option>
                <option value="3">Student</option>
                <option value="4">Veteran</option>
              </select>
              <label>Materialize Select</label>
            </div>

          </div>

        </form>


      </div>

    </div>

    <div class="divider"></div>

  </div>

<?php include ("footer.php"); ?>
