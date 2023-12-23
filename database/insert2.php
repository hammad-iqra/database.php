<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <form action="insert.php" method="post">
                            <div class="mb-3">
                                <label for="student_id" class="form-label">Student ID</label>
                                <input type="number" class="form-control" id="student_id" name="student_id" required>
                            </div>
                            <div class="mb-3">
                                <label for="First_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="First_name" name="First_name"
                                    placeholder="First Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="Last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="Last_name" name="Last_name"
                                    placeholder="Last Name" required>
                            </div>
                            <div class="mb-3">
                                <label for="City" class="form-label">City</label>
                                <input type="text" class="form-control" id="City" name="City" placeholder="City"
                                    required>
                            </div>
                            <button type="submit" class="btn btn-primary" id="save" name="save" value="save">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


        </body>
</html>