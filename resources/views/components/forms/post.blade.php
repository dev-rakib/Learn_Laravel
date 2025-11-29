<form action="{{$action}}" method="post" enctype="multipart/form-data">

            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="" placeholder="enter Your Name" value="{{$namevalue}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="desc">Description:</label>
            <input type="text" name="description" placeholder="Write Your Descripiton" value="{{$descvalue}}">
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="image">Image:</label>
            <input type="file" name="image" placeholder="Add Image">
            @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input type="submit" value="POST">
        </form>