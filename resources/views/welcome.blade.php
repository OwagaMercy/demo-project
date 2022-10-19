<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/select/1.4.0/css/select.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
<link rel="stylesheet" href="../../extensions/Editor/css/editor.dataTables.min.css">

<body>
<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
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
                        <td>
                            <!-- <div class="d-flex flex-row mb-3"> -->
                <!-- <div ><button type="button" class="btn">
                  <i class="material-icons text-warning">edit</i>
                </button></div>
                <div ><button type="button" class="btn">
                  <i class="material-icons text-danger">delete</i>
                </button></div> -->
                <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons">&#xE03B;</i></a>
                <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
             <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
              <!-- </div> -->
            </td>
                        <td>
                   
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
    </div>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/select/1.4.0/js/dataTables.select.min.js"> </script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="../../extensions/Editor/js/dataTables.editor.min.js"></script>
<script>
    
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
</html>