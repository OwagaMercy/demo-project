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
                @foreach($projects as $project)
                <tbody>
                        <td>{{$project->id}}</td>
                        <td>{{$project->reference}}</td>
                        <td>{{$project->name}}</td>
                        <td>{{$project->grant_amount}}</td>
                        <td>{{$project->office->name}}</td>
                        <td>{{$project->date_gcf}}</td>
                        <td>{{'albania'}}</td>
                        <td>{{$project->readiness}}</td>
                        <td>{{$project->readinessType->name}}</td>
                        <td>{{$project->status->name}}</td>
                        <td>{{$project->start_date}}</td>
                        <td>{{$project->end_date}}</td>
                        <td>{{$project->duration}}</td>
                        
                        
                        <td><div class="d-flex flex-row mb-3">
                <div ><button type="button" class="btn">
                  <i class="material-icons text-warning">edit</i>
                </button></div>
                <div ><button type="button" class="btn">
                  <i class="material-icons text-danger">delete</i>
                </button></div>
              </div></td>
                     
                </tbody>
                @endforeach
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
    
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
      var data = '<?= $projects ?>';

      console.log(data);


    $(document).ready(function () {
    $('#example').DataTable();

});
</script>
</html>