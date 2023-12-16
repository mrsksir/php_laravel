<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"/>
    <title>Students</title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="">Students</a>
      </div>
    </nav>

    <!-- form controls -->
     <div class="container ">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card p-3 m-3">
                    <form action="" method="post" enctype="multipart/form-data">
                        <!-- name -->
                        <div class="group-control">
                           <label>Name:</label>
                           <input type="text" name="name" class="form-control">
                        </div>

                        <!-- address -->
                        <div class="group-control">
                            <label>Address:</label>
                            <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>

                        <!-- image -->
                        <div class="group-control">
                            <label>Image:</label> 
                            <input type="file" name="image" id="" class="form-control">
                        </div>

                        <!-- save button -->
                        <div class="group-control mt-2">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- button -->
    <div class="container-fluid mt-3 text-end">        
      <div class="col-sm-9"> <a href="" class="btn btn-primary">Add Student</a> </div>
    </div>

    <!-- table -->
    <div class="container-fluid mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-6 text-start table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">Sno</th>
                          <th scope="col">Student Name</th>
                          <th scope="col">Address</th>
                          <th scope="col">Image</th>
                          <th scope="col">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Deemo</td>
                        <td>Nepal</td>
                        <td>
                            <img src="" alt="" class="rounded-circle" width="30px" height="30px">
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger">Delete</a> |
                            <a href="" class="btn btn-sm btn-primary">Edit</a> |
                            <a href="" class="btn btn-sm btn-primary">View</a>
                        </td>
                      </tr>
                  </tbody>
                </table>
            </div>
        </div>
    </div>

  </body>
</html>
