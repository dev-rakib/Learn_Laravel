<x-app-layout css="{{asset('css/welcome.css')}}" js="{{asset('js/welcome.js')}}">
    
    <header>
        <div>
            <h2>Home</h2>
        </div>
        <ul>
            <li><a href="/post">Create post</a></li>
        </ul>
    </header>
    <main>
        <x-tables.post-table>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td><img src="images/{{$post->image}}" style="width:80px;" alt="Not Set"></td>
                    <td><a href="{{route('edit', $post->id)}}">Edit</a> <a href="{{ route('delete', $post->id) }}" class="delete">Delete</a></td>
                </tr>
            @endforeach
        </x-tables.post-table>
        <div class="pagination">
            {{$posts->links()}}
        </div>
    </main>
</x-app-layout>