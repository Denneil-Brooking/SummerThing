<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style\style.css">
  <title>Contact</title>
</head>

<body>
<img src="https://via.placeholder.com/300x50" class="rounded photo1" alt="Photo">
<nav class="navbar navbar-light bg-light navcon justify-content-center">
    <form class="form-inline">
        <div class="row">
            <div class="col- bt1 ccl">
                <a class="btn btn-sm btn-outline-secondary bt bt1 " href="index.php">About Me</a>
            </div>
            <div class="col- bt1 ccl">
                <a class="btn btn-sm btn-outline-secondary bt bt2" href="courses.php">Courses</a>
            </div>
            <div class="col-">
                <a href="index.php"><img class="logo" src="images\logo2.png" alt="Logo"></a>
            </div>
            <div class="col-  ccl">
                <a class="btn btn-sm btn-outline-secondary bt bt1 active" href="contact.php">Contact</a>
            </div>
            <div class="col- bt2 ccl">
                <a class="btn btn-sm btn-outline-secondary bt bt2" href="projects.php">Learning</a>
            </div>
        </div>
    </form>
</nav>
  <br>
  <div class="container">
    <br>

    <form>
      <div class="form-group">
        <label for="formGroupExampleInput2">
          <h4>Name:</h4>
        </label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">
          <h4>Email address:</h4>
        </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">
          <h4>Subject:</h4>
        </label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">
          <h4>Message:</h4>
        </label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-primary bt">Submit</button>
    </form>
    <br>
  </div>
  <br>
  <div class="footer">
    <div class="row">
      <div class="col">Copyright © 2018 Denneil Brooking(#10011845)<br>COMP6210: Web Services and Design
        Methodologies </div>
      <div class="col bs"><a href="sitemap.php">Sitemap</a><br><a href="disclaimer.php">Disclaimer</a></div>
      <img src="https://via.placeholder.com/300x50" class="rounded photo" alt="Photo">
    </div>
  </div>


</body>

</html>