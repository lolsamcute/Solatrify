<table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>

                  <th>Product Name</th>
                                                <th>Images</th>
                                                <th>Amount</th>
                                                <th class="text-nowrap">Action</th>
                  </tr>
                </thead>
               
                <tbody>

                @foreach($qrcodes as $qrcode)
                  <tr>
                  <td><b> {!! $qrcode->name !!} </b></td>
                                                <td><img src="/uploads/Products/{!! $qrcode->image !!}" height="80" width="80"></td>
                                                <td>₦{!! $qrcode->amount !!}</td>

                                               

                                                    {!! Form::open(['route' => ['qrcodes.destroy', $qrcode->id], 'method' => 'delete']) !!}
                                                    
                                                    <td class="text-nowrap"><a href="{!! route('qrcodes.show', [$qrcode->id]) !!}" class="mr-25" data-toggle="tooltip"> <i class="glyphicon glyphicon-eye-open"></i></a>
                                                    <a href="{!! route('qrcodes.edit', [$qrcode->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i>Edit</a>
                                                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                    </td>
                                                    {!! Form::close() !!}
                   
                  </tr>
                
                @endforeach


                </tbody>
              </table>


    
    