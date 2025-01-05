

<h1>This is about page </h1>


<p>
    @foreach ($name as $item)
      <ul>
    <li>{{$item}}</li>    
    </ul>  
    @endforeach
</p>