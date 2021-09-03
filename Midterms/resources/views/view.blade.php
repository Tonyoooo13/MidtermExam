<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sheeesh! That's Midterm</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>
        <div class="container text-center con">
            <div class="row">
                <div class="col-md-4 m-auto">
                    <form action="calculation" method="POST">
                        @csrf
                        <div class="card">
                        <div class="card-body m-auto">
                            
                            <h4 class="header">Midterm Exam</h4>

                            <div class="form-group row">
                                <div class="col-md-9">
                                    <select name="formula" class="form-control">
                                        <option>Select Formula</option>
                                        <option value="perimeter">Perimeter of rectangle</option>
                                        <option value="volume">Volume of Cuboid</option>
                                        <option value="area">Area of a square</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="firstnumber" class="form-control" placeholder="First value" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="secondnumber" class="form-control" placeholder="Second value" required="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-9">
                                    <input type="number" name="thirdnumber" class="form-control" placeholder="Third value" required="">
                                </div>
                            </div>

                        </div>
                        <input type="submit" name="btn" class="btn btn-warning btn-lg font-weight-bold" value="Enter">
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 m-auto">
                @if(session('message'))
                <div class="alert alert-warning">
                    <h1 class="text-center"> {{session ('message')}}</h1>
                </div>
                @endif 
            </div>
        </div>
    </body>
</html>
