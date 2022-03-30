<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 Image Upload</title>
   
</head>
<body>
    
<h4> Image Upload</h4>

<div class="card-body">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('image-store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><strong>Image : </strong></label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group text-center">
            <input type="submit" class="btn btn-success" name="submit" value="Save">
        </div>
    </form>                     

            
       
    </div>
</body>
</html>