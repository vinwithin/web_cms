<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
        {{-- @foreach ($posts as $item)  
          <tr>
            <th scope="row"></th>
            <td colspan="2">{{ $item->description }}</td>
            <td><img src="{{ asset('storage/'.$item->photos) }}" alt="" style="width: 150px"></td>
          </tr>
          @endforeach --}}
        </tbody>
      </table>
</body>
</html>