<table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>

                  <th>#</th>
				  <th>Name</th>
				   <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
               
                <tbody>

                @foreach($roles as $role)
                  <tr>

                  <td>{!! $role->id !!}</td>

                  <td> <a href="{!! route('roles.show', [$role->id]) !!}">{!! $role->name !!} </a></td>
					
                 
                    

                                                    <td>{!! $role->created_at !!}</td>

                                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                                                        <td class="text-nowrap"><a href="{!! route('roles.edit', [$role->id]) !!}" class="btn btn-success"  data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> Edit</a>
                                                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                            
                                                            </td>
                                                    {!! Form::close() !!}
                   
                  </tr>
                
                @endforeach


                </tbody>
              </table>