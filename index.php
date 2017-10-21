<!DOCTYPE html>
<html>
<head>
  <title>A day with Pixel Onion</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/css/style.css">

  <!-- bootstrap CSS/jquery/javascript -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <header>
    <div>
      
      <div id="navbar">
        <a href="http://www.pixelonion.com/"><img src="assets/images/pixel-onion-logo.png"></a>
      </div>

      <div><img src="assets/images/full-banner.png" width="100%" style="visibility: hidden;"/></div>
      
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