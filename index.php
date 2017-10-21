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
      <div id="inputArea" class="formfield">
        <textarea rows="5" id="data" class="textArea"></textarea>
        <button class="submitBtn" onClick="sort();">Sort the list of names</button>
      </div>
      
      
      <!-- table to display all the records of baby names, gender, id -->
      <table class="table table-hover" id="baby_table">
        <thead>
          <tr>
            <th class="col-sm-6">Name</th>
            <th class="col-sm-3">Gender</th>
            <th class="col-sm-3">ID</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>content</td>
            <td>content</td>
            <td>content</td>
          </tr>
          <tr>
            <td>content</td>
            <td>content</td>
            <td>content</td>
          </tr>
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