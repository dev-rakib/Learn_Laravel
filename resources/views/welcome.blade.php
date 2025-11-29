<x-app-layout css="{{asset('css/welcome.css')}}" js="{{asset('js/welcome.js')}}">
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
</x-app-layout>