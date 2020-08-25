@extends('layouts.app')

@section('content')

<div class="container-fluid app-body">
<div class="row">

        
		<div class="col-md-12">
        <br>
			<table id="example" class="table table-hover table-bordered "> 
				<thead> 
					<tr><th>Group Name</th> <th>Group Type</th> <th>Acount Name</th> <th>Post Text</th> <th>Time</th> </tr> 
				</thead>
                <tbody>
                @foreach($data as $datas)
                 <tr>
                  <td>{{$datas->name}}</td>
                  <td>{{$datas->type}}</td>
                  <td><img src="{{$datas->avatar}}" style="height:40px;width:40px;"> </td>
               
                  <td>{{$str = substr($datas->post_text, 0, 20) . '...'}}</td>
                  <td>{{date('d-M-Y h:i a', strtotime($datas->sent_at)) }}</td>
                 </tr>
                 @endforeach
                </tbody>
                
            </table>
        </div>
      {{-- {{$data->links()}} --}}
</div>
</div>

@endsection