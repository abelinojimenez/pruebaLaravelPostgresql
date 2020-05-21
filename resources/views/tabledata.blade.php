<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">empleados registradas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-  " id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>

                    @if($accion!="mismoSalario")
                        <th>primer nombre</th>
                        <th>segundo nombre</th>
                        <th>primer apellido</th>
                        <th>segundo apellido</th>
                        @if($accion!="salariomenor")
                        <th>salario</th>
                        @endif
                        <th>cargo</th>
                        @if($accion!="salariomenor")
                        <th>fecha de nacimiento</th>
                        @endif
                      @else
                        <th>salario</th>
                        <th>total</th>
                      @endif
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    @if($accion!="mismoSalario")
                        <th>primer nombre</th>
                        <th>segundo nombre</th>
                        <th>primer apellido</th>
                        <th>segundo apellido</th>
                        <th>salario</th>
                        <th>cargo</th>
                        <th>fecha de nacimiento</th>
                      @else
                        <th>salario</th>
                        <th>total</th>
                      @endif
                    </tr>
                  </tfoot>
                  <tbody>
                  @if($accion!="mismoSalario")
                  
                    @foreach($empleados as $row)
                      <tr>
                          <td>{{$row->primernombre}}</td>
                          <td>{{$row->segundonombre}}</td>
                          <td>{{$row->primerapellido}}</td>
                          <td>{{$row->segundoapellido}}</td>
                          @if($accion!="salariomenor")
                          <td>{{$row->salario}}</td>
                          @endif
                            <td>{{$row->cargo}}</td>
                          @if($accion!="salariomenor")
                            <td>{{$row->fecha_nacimiento}}</td>
                          @endif
                      </tr>
                    @endforeach
                   @else
                      @foreach($empleados as $row)
                          <tr>
                          @foreach($row as $col)
                              <td>{{$col}}</td>
                          @endforeach
                              
                          </tr>
                        @endforeach
                   @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>