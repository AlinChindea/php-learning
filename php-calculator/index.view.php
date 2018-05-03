<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Basic PHP calculator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Londrina+Shadow|Roboto" rel="stylesheet">
  <style media="screen">
  .jumbotron {
    font-family: 'Londrina Shadow', cursive;
    font-size: 75px;
    text-align: center;
    color: #fff;
    background: #808080;
  }

  p {
    font-family: 'Roboto', sans-serif;
  }

  </style>
</head>
<body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Math smart with PHP</h1>
      <p class="lead">Hi, I'm your friendly calculator built with PHP. Let's learn some math.</p>
    </div>
  </div>

  <div class="container">
    <form method="post">
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Enter first number</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" name="n1" placeholder="Enter or select first number">
        </div>
      </div>
      <div class="form-group row">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Enter second number</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" name="n2" placeholder="Enter or select second number">
        </div>
      </div>
      <div class="form-group row input-group">
        <label for="colFormLabel" class="col-sm-2 col-form-label">Select operation</label>
        <div class="col-sm-4">
          <select class="custom-select" name="op">
            <option selected>Choose...</option>
            <option value="+">Add</option>
            <option value="-">Subtract</option>
            <option value="*">Multiply</option>
            <option value="/">Divide</option>
          </select>
        </div>
        <div class="input-group-append">
          <input class="btn btn-outline-primary" type="submit" name="submit" value="Calculate">
        </div>
      </div>
      <div class="form-group row">
        <label for="result" class="col-sm-2 col-form-label">Result</label>
        <div class="col-sm-6">
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?php echo $result; ?></textarea>
        </div>
      </div>
      </form>
    </div>
  </body>
  </html>
