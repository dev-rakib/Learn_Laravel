<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/universal.css') }}">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    
    <title>CRUD</title>
</head>
<body>

    <div class="orb"></div>
    <div class="spark"></div>
    <header>
        <div>
            <h2>Home</h2>
        </div>
        <ul>
            <li><a href="/post">Create post</a></li>
        </ul>
    </header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Descripiton</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td><img src="images/{{$post->image}}" style="width:80px;" alt="Not Set"></td>
                    <td><a href="{{route('edit', $post->id)}}">Edit</a> <a href="{{ route('delete', $post->id) }}" class="delete">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">
            {{$posts->links()}}
        </div>
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
    <script src="{{asset('js/welcome.js')}}"></script>
</body>
</html>