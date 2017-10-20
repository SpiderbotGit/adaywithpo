<!DOCTYPE html>
<html>
<head>
  <title>A day with Pixel Onion</title>

  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
  <header>
    <div>
      
      <a href="http://www.pixelonion.com/"><img src="assets/images/pixel-onion-logo.png"></a>
      
    </div>
  </header>
  <section>
    <div id="content">

      <!-- textarea for input of baby names + button to add and sort -->
      <textarea class="form-control" rows="3" id="data" style="width: 200px;"></textarea>
      <textarea class="form-control" rows="3" id="returnData" style="width: 200px;"></textarea>
      <button class="btn btn-success" onClick="sort();">Sort</button>



      <!-- table to display all the records of baby names, gender, id -->
      <table class="table table-hover" id="baby_table">
        <thead>
          <td class="col-lg-6">Name</td>
          <td class="col-lg-3">Gender</td>
          <td class="col-lg-3">ID</td>  
        </thead>
        <tbody>
          <tr>
            <td>content</td>
            <td>content</td>
            <td>content</td>
          </tr>
        </tbody>
      </table>

    </div>
  </section>

  <footer>
    <div class="blue_banner">
      <img src="assets/images/banner-baby.jpg"/>
      <p>
        Searching for the perfect name for your baby?
      </p>
    </div>
  </footer>
</body>
</html>