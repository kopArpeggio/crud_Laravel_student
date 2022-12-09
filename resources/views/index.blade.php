<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')
</head>

<body style="font-family: 'Gamja Flower', cursive; font-size: 18px;background-color: rgb(226, 209, 218)">
    <div class="container" style="">
        <div class="row shadow"
            style="height: 100vh; padding:40px;   width:100% ; margin: 50px; border-radius: 8%; background-color: antiquewhite">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center" style="padding: 80px 0px 0px 0px">
                    <div style="color: rgb(187, 44, 75); font-size: 60px">
                        Manage Student <i class="fa-regular fa-heart"></i>
                    </div>
                </div>
            </div>
            <div class="col-8  my-auto">
                <div class="card shadow" style="border-radius: 20px; border:none; opacity: 0.7;">
                    <div class="card-header title">
                        Student List <i class="fa-solid fa-palette"></i>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr>
                                    <th>id</th>
                                    <th>Image</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach ($student as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td><img src="{{ asset($row->image) }}" style=" height: 5vh;"></td>
                                        <td>{{ $row['firstname'] }}</td>
                                        <td>{{ $row['lastname'] }}</td>
                                        <td>{{ $row['email'] }}</td>
                                        <td><label><a href="{{ url('/edit/' . $row->id) }}"
                                                    class="btn btn-primary shadow">Edit</a></label></td>
                                        <td><label><a href="{{ url('/delete/' . $row->id) }}"
                                                    class="btn btn-danger shadow">Del.</a></label></td>
                                    </tr>
                                @endforeach

                            </table>
                            {{ $student->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4  my-auto">
                <div class="card shadow title">
                    <div class="card-header">Create Student</div>
                    <div class="card-body d-flex justify-content-center">
                        <label for=""><a href="{{ url('/addstudent') }}" class="btn btn-primary shadow">Create
                                Student</a></label>
                                ========= {{$json['activity']}}
                    </div>
                    <div>
                        <p>
                         

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
