<table class="table table-flush" id="datatable-buttons">
                <thead class="thead-light">
                  <tr>

                                            <th>Unique ID</th>
                                                 <th>Name</th>
                                                <th>Email</th>
                                                <th>Location</th>
                                                 
                                                <th>Role Name</th>
                                                 
                                                <th>joined Date</th>
                                                @if(Auth::user()->role_id == 1 )
                                                    <th class="text-nowrap">Action</th>
                                                @endif
                  </tr>
                </thead>
               
                <tbody>

                @foreach($users as $user)
                  <tr>

                  <td>{!! $user->referenceId !!} </a></td>
											       
											       
                                                <td> <a href="{!! route('users.show', [$user->id]) !!}">{!! $user->full_name !!} </a></td>
                                                
                                                
                                                <td><a href="mailto:{!! $user->email !!}">{!! $user->email !!}</a></td>
                                                
                                                
                                                <td>{!! $user->location !!}</td>
                                                
                                                
                                                <td><span class="label label-success"> {!! $user->role['name'] !!}</span></td>
												
                                                <td>{!!$user->created_at!!}</td>

                                                @if(Auth::user()->role_id == 1 ) 

                                                <td class="text-nowrap">
                                                <a href="{!! route('users.edit', [$user->id]) !!}" class="mr-25" data-toggle="tooltip" data-original-title="Edit"> <button class="btn btn-info btn-xs"> Edit </button></a>
                                                    {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}<br>

                                                        {!! Form::button('Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                                            
                                                            </td>
                                                    {!! Form::close() !!}
                                               @endif
											 
                                                  
                                                    {!! Form::close() !!}
                   
                  </tr>
                
                @endforeach


                </tbody>
              </table>


