<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.header')
    <title>Insert Student</title>
</head>

<body style=" background-color: antiquewhite ">
    <div class="container" style="font-family: 'Gamja Flower', cursive; font-size: 20px ">
        <div class="row " style="height: 100vh;">
            <div class="col-3"></div>
            <div class="col-6 my-auto align-self-center ">
                <div class="card " style="border:5px solid rgb(223, 175, 193)">
                
                    <div class="card-header">Student Information</div>
                    <div class="card-body">
                        <form action="{{ url('/insertstudent') }}" enctype="multipart/form-data" method="POST" >
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    placeholder="Aditap">
                                <label for="floatingInput">Firstname</label>
                                @error('firstname')
                                    <div class="span" style="color: red"> {{ $message }} </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="firstname" name="lastname"
                                    placeholder="Sapapuk">
                                <label for="floatingInput">Lastname</label>
                                @error('lastname')
                                    <div class="span" style="color: red"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email"
                                    placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                                @error('email')
                                    <div class="span" style="color: red"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div>
                                <label for="floatingInput">Choose Image : </label>
                                <input type="file" class="form-control" id="floatingInput" name="image">
                                @error('image')
                                    <div class="span" style="color: red"> {{ $message }} </div>
                                @enderror
                            </div>
                            <div class=" d-flex justify-content-center">
                                <input class="btn btn-primary mt-3" type="submit"value="Create Student">
                                <label><a href="{{ url('/manage') }}" class="btn btn-danger mt-3 ms-1"> Back</a></label>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>
