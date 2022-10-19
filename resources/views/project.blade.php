<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
<body>


    <div class="container">
        
       @foreach ($projects as $proj)
       echo(proj)
        <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                    <th>ID</th>
                        <th>Project Reference Number</th>
                        <th>Project Name</th>
                        <th>Grant Amount</th>
                        <th>Office Implementation</th>
                        <th>Date GCF</th>
                        <th>Country</th>
                        <th>Readiness</th>
                        <th>Readiness Type</th>
                        <th>Status</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Duration</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        <td>1</td>
                        <td>ALB-RS-001</td>
                        <td>Readiness support to Albania</td>
                        <td>300,00 usd</td>
                        <td>Europe Office</td>
                        <td>11/15/2016</td>
                        <td>Albania, Romania</td>
                        <td>Readiness</td>
                        <td>Capacity Building</td>
                        <td>Completed</td>
                        <td>8/30/2016</td>
                        <td>8/30/2017</td>
                        <td>12</td>
                        
                        <td><div class="d-flex flex-row mb-3">
                <div ><button type="button" class="btn">
                  <i class="material-icons text-warning">edit</i>
                </button></div>
                <div ><button type="button" class="btn">
                  <i class="material-icons text-danger">delete</i>
                </button></div>
              </div></td>
                     
                </tbody>
                <tfoot>
                    <tr>
                    <th>ID</th>
                        <th>Project Reference Number</th>
                        <th>Project Name</th>
                        <th>Grant Amount</th>
                        <th>Office Implementation</th>
                        <th>Date GCF</th>
                        <th>Country</th>
                        <th>Readiness</th>
                        <th>Readiness Type</th>
                        <th>Status</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Duration</th>
                        <th>Actions</th>
                    </tr>
                </tfoot>
        </table>
        @endforeach
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
</html>