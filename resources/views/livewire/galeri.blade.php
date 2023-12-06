<div>
   
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>image</th>
                <!-- Add more headers based on your data columns -->
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title}}</td>
                    <td>{{ $item->description}}</td>
                    {{-- <img src="{{ asset('storage/' . $item->image) }}" alt="Image"> --}}
                    <!-- Add more cells based on your data columns -->
                </tr>
                @endforeach
        </tbody>
    </table>
    
   
</div>
