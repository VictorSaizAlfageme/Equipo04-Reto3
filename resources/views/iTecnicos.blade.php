@extends('layout')
@section('content')
    <h3 id="titulo-3">OBRAS ASIGNADAS</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Tabla obras -->
                <table class="table">
                    <thead>
                    <tr class="tr">
                        <th class="text-center">Nº</th>
                        <th>COD. OBRA</th>
                        <th>TIPO DE OBRA</th>
                        <th>ESTADO</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="table-body">
                    <tr class="cell-1 tr" data-toggle="collapse" data-target="#demo">
                        <td class="text-center">1</td>
                        <td><b>09485</b></td>
                        <td>Reparación</td>
                        <td><span class="badge badge-dark">Valorando</span></td>
                        <td>20/01/2021</td>
                        <td>Sin definir</td>
                        <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr id="demo" class="collapse cell-1 row-child tr">
                        <td colspan="2"><b>C/ Francia N12 3C</b></td>
                        <td colspan="1"><button type="button" class="btn btn-warning">Más información</button></td>
                        <td colspan="2"><button type="button" class="btn btn-secondary">Añadir comentarios</button></td>
                        <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                    </tr>
                    <tr class="cell-1 tr" data-toggle="collapse" data-target="#demo-2">
                        <td class="text-center">1</td>
                        <td><b>14435</b></td>
                        <td>Reparación</td>
                        <td><span class="badge badge-secondary">Aceptado</span></td>
                        <td>20/01/2021</td>
                        <td>Sin definir</td>
                        <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr id="demo-2" class="collapse cell-1 row-child tr">
                        <td colspan="2"><b>C/ Donosti N8 Bajo</b></td>
                        <td colspan="1"><button type="button" class="btn btn-warning">Más información</button></td>
                        <td colspan="2"><button type="button" class="btn btn-secondary">Añadir comentarios</button></td>
                        <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                    </tr>
                    <tr class="cell-1 tr" data-toggle="collapse" data-target="#demo-3">
                        <td class="text-center">1</td>
                        <td><b>4533</b>2</td>
                        <td>Reparación</td>
                        <td><span class="badge badge-info">Denegado</span></td>
                        <td>20/01/2021</td>
                        <td>Sin definir</td>
                        <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr id="demo-3" class="collapse cell-1 row-child tr">
                        <td colspan="2"><b>C/ Zapateria N34</b></td>
                        <td colspan="1"><button type="button" class="btn btn-warning">Más información</button></td>
                        <td colspan="2"><button type="button" class="btn btn-secondary">Añadir comentarios</button></td>
                        <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                    </tr>
                    <tr class="cell-1 tr" data-toggle="collapse" data-target="#demo-4">
                        <td class="text-center">1</td>
                        <td><b>87957</b></td>
                        <td>Reparación</td>
                        <td><span class="badge badge-light">En proceso</span></td>
                        <td>20/01/2021</td>
                        <td>Sin definir</td>
                        <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr id="demo-4" class="collapse cell-1 row-child tr">
                        <td colspan="2">C/ Nieves Cano N23</td>
                        <td colspan="1"><button type="button" class="btn btn-warning">Más información</button></td>
                        <td colspan="2"><button type="button" class="btn btn-secondary">Añadir comentarios</button></td>
                        <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                    </tr>
                    <tr class="cell-1 tr" data-toggle="collapse" data-target="#demo-5">
                        <td class="text-center">1</td>
                        <td><b>34543</b></td>
                        <td>Reparación</td>
                        <td><span class="badge badge-success">Finalizado</span></td>
                        <td>20/01/2021</td>
                        <td>Sin definir</td>
                        <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                    </tr>
                    <tr id="demo-5" class="collapse cell-1 row-child tr">
                        <td colspan="2"><b>C/ Ibaiondo N1 1B</b></td>
                        <td colspan="1"><button type="button" class="btn btn-warning">Más información</button></td>
                        <td colspan="2"><button type="button" class="btn btn-secondary">Añadir comentarios</button></td>
                        <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
