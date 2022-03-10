<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <table class="table table-hover">
            <thead>
                <th>Tên</th>
                <th>Chiều Cao</th>
                <th>Cân Nặng</th>
                <th>Tuổi</th>
                <th>Giới Tính</th>
                <th>Lớp</th>
                <th>ID</th>
                <th>Ảnh đại diện</th>
            </thead>
            <tbody>
             @foreach ($users as $users) 
             @if ($users['id'] ==1)           
             <tr>
                <th>{{$users['name']}}</th>
                <th>{{$users['height']}}</th>
                <th>{{$users['weight']}}</th>
                <th>{{$users['age']}}</th>
                <th>{{$users['gender']}}</th>
                <th>{{$users['class']}}</th>
                <th>{{$users['id']}}</th>
                <th><img width="80px" src="{{$users['avatar']}}" alt=""></th>
            </tr>
            @endif                   
            @endforeach          
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>