<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>The vaccine to make an appointment</h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link " href="file:///F:/USM/%E5%AD%A6%E4%B9%A0/y3s1/CAT304/assignment/assignment2/%E5%AE%9E%E9%AA%8C/%E4%BD%9C%E4%B8%9A%E6%96%87%E4%BB%B6/%E6%96%B0%E5%BB%BA%E6%96%87%E4%BB%B6%E5%A4%B9/%E7%96%AB%E8%8B%97%E9%A2%84%E7%BA%A6%E5%92%8C%E6%88%90%E5%8A%9F%E4%BF%A1%E6%81%AF.html">Information on successful vaccine reservation</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link active "href="#">Add vaccine Appointment</a>
      </li>




    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>Vaccine information</h2>
      <hr class="d-sm-none">
    </div>

	   <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
								yes

                                </button>
                            </div>
                        </div>
       </form>

	   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Vaccine library</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>The name of the abbreviations</th>
                                            <th>The full name</th>
                                            <th>place</th>
                                            <th>appointment time</th>
											<th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>BCG</td>
                                            <td>Bacille Calmette-Guerin vaccine</td>
                                            <td>Kuala Lumpur</td>
                                            <td>2022/04/25</td>
											<td>
											<button type="button">reservation</button>
											</td>

                                        </tr>
                                        <tr>
                                            <td>HepA</td>
                                            <td>Hepatitis A vaccine </td>
                                            <td>penang</td>
                                            <td>2022/02/25</td>
											<td>
											<button type="button">reservation</button>
											</td>

                                        </tr>
                                        <tr>
                                            <td>HepB </td>
                                            <td>Hepatitis B vaccine </td>
                                            <td>penang</td>

                                            <td>2022/02/12</td>
											<td>
											<button type="button">reservation</button>
											</td>

                                        </tr>
                                        <tr>
                                            <td>Influenza </td>
                                            <td>Influenza vaccine </td>
                                            <td>Kuala Lumpur</td>

                                            <td>2022/03/29</td>
											<td>
											<button type="button">reservation</button>
											</td>

                                        </tr>
                                        <tr>
                                            <td>OPV</td>
                                            <td>Oral polio vaccine </td>
                                            <td>penang</td>

                                            <td>2022/05/28</td>
											<td>
											<button type="button">reservation</button>
											</td>

                                        </tr>
										<tr>
                                            <td>MMR</td>
                                            <td>Measles, mumps and rubella vaccine  </td>
                                            <td>Kuala Lumpur</td>

                                            <td>2022/03/28</td>
											<td>
											<button type="button">reservation</button>
											</td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>