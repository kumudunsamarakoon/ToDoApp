<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class ="container">
        <div class ="text-center">
            <h1>Daily To Do List</h1>
            <div class="row">
                <div class ="col-md-12">
                    <form method="post" action ="/saveTask">
                    {{csrf_field()}}

                    <!--<input type="text" class="form-control" name="tasak" placeholder="Enter your task here">
                    <input type="submit" class ="btn btn-primary" value="SAVE">
                    <input type="button" class ="btn btn-warning" value="CLEAR"> -->
                        <div class="row">
                            <div class ="col-md-10"> 
                                <input type="text" class="form-control" name="tasak" placeholder="Enter your task here">
                            </div>
                            <div class ="col-sm-1">
                                <input type="submit" class ="btn btn-primary" value="SAVE">
                            </div>
                            <div class ="col-sm-1">    
                                <input type="button" class ="btn btn-warning" value="CLEAR">
                            </div>
                        </div> 
                    </form>
                    </br></br>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>
                        <tr>
                            <td>1</td>
                            <td>Interview</td>
                            <td>Not yet</td>
                        </tr>
                    </table>
                </div>
            
            </div>

        </div>
    </div>
</body>
</html>