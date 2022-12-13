<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')

</head>

<body style="font-family: 'Gamja Flower', cursive; font-size: 18px ; background-color: antiquewhite">
    <div class="container ">
        <div class="row" style="height: 100vh">
            <div class="col d-flex justify-content-center align-items-center">
                <div class="card shadow " style="width: 50%;border:5px solid rgb(223, 175, 193)">
                    <div class="card-header ">Edit Student</div>
                    <div class="card-body">
                        <form action="{{ url('update/' . $students->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $students->firstname }}" name="firstname">
                                <label for="floatingInput">Firstname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $students->lastname }}" name="lastname">
                                <label for="floatingInput">Lastname</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput"
                                    value="{{ $students->email }}" name="email">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label">Old Image : </label>
                                    <div class="col-sm-10 d-flex justify-content-center">
                                        <img src="{{ asset($students->image) }}"
                                            style="width:40%; border-style: solid; border-color: pink; border-radius: 12px; border-width: 4px">
                                    </div>
                                </div>
                            </div>

                            <label for="floatingInput">New Profile Image : </label>
                            <div class="mb-3">
                                <input type="file" class="form-control" id="floatingInput" name="image">
                            </div>
                            <input type="hidden" name="old_image" value="{{$students->image}}">
                            <div class="d-flex justify-content-center mt-4">
                                <input type="submit" value="Update" class="btn btn-primary me-3">
                                <label><a href="{{ url('/manage') }}" class="btn btn-danger">Back</a></label>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
