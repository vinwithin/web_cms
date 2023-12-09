<div>
   
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($post as $item)  
          <tr>
            <th scope="row"><a href="galery/{{ $item->slug }}">{{ $item->title }}</a></th>
            <td colspan="2">{{ $item->description }}</td>
            <td><img src="{{ asset('storage/'.$item->photos) }}" alt="" style="width: 150px"></td>
          </tr>
          @endforeach
        </tbody>
      </table>
    
   
</div>
