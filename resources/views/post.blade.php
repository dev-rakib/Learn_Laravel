<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/universal.css')}}">
    <link rel="stylesheet" href="{{asset('css/post.css')}}">
    
    <title>CRUD</title>
</head>
<body>
    <div class="orb"></div>
    <div class="spark"></div>
    <header>
        <div>
            <h2>Post</h2>
        </div>
        <ul>
            <li><a href="/">Back To Home</a></li>
        </ul>
    </header>
    <main>
        <form action="{{route('store')}}" method="post" enctype="multipart/form-data">

            @csrf
            <label for="name">Name:</label>
            <input type="text" name="name" id="" placeholder="enter Your Name" value="{{old('name')}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label for="desc">Description:</label>
            <input type="text" name="description" placeholder="Write Your Descripiton" value="{{old('description')}}">
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
    </main>
    <footer>
        <div class="footer-container">
            <p class="footer-paragraph">&copy; 2025 Rakib Chowdhury. All rights reserved.</p>
            <div class="social-links">
                <a href="https://www.facebook.com/rakib" target="_blank">Facebook</a>
                <a href="https://www.linkedin.com/in/rakib" target="_blank">LinkedIn</a>
                <a href="https://github.com/rakib" target="_blank">GitHub</a>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/universal.js')}}"></script>
</body>
</html>