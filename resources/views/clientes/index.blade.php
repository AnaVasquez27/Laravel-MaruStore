@extends('layouts.argon')

@section('content')
<div class="row">
  <div class="col-xl-12">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Clientes</h3>
          </div>
          <div class="col text-right">
            <a href="{{ route('clientes.create') }}" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i> Nuevo</a>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center table-flush" id="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombres</th>
              <th scope="col">Apellidoss</th>
              <th scope="col">Telefono</th>
              <th scope="col">Email</th>
              <th scope="col">Dirección</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody></tbody>
          <tfoot>
            <tr>
              <td>

              </td>
              <td>
                
              </td>
              <td>
                
              </td>
              <td>

              </td>
              <td>

              </td>
              <td>
                  
              </td>
              <td>
                  
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection