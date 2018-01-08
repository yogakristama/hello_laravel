@extends('layout2')

@section('content')
<div id="container" class="container"></div>

 <script src=/js/jquery-3.2.1.min.js></script>
 <script>
    $.get('/api/products', function(data){

        var container = document.getElementById('container');
        
        for(var i=0;i<data.length;i++){
            let item = document.createElement("DIV");
            item.innerHTML=data[i].name;
            container.appendChild(item);
        }
    })
</script> 
@endsection