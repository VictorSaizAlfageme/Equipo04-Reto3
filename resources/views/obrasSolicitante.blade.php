@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Tabla obras -->
                <table class="table">
                    <thead>
                        <tr>
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
                        <tr class="tr cell-1" data-toggle="collapse" data-target="#demo">
                            <td class="text-center">1</td>
                            <td>09485</td>
                            <td>Reparación</td>
                            <td><span class="badge badge-dark">Valorando</span></td>
                            <td>20/01/2021</td>
                            <td>Sin definir</td>
                            <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                        </tr>
                        <tr id="demo" class="collapse tr cell-1 row-child">
                            <td colspan="2"><b>Último comentario:</b></td>
                            <td colspan="3">Estamos valorando tu solicitud</td>
                            <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                        </tr>
                        <tr class="tr cell-1" data-toggle="collapse" data-target="#demo-2">
                            <td class="text-center">1</td>
                            <td>09485</td>
                            <td>Reparación</td>
                            <td><span class="badge badge-secondary">Aceptado</span></td>
                            <td>20/01/2021</td>
                            <td>Sin definir</td>
                            <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                        </tr>
                        <tr id="demo-2" class="collapse tr cell-1 row-child">
                            <td colspan="2"><b>Último comentario:</b></td>
                            <td colspan="3">Hemos aceptado tu solicitud. Pronto tendrás noticias</td>
                            <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                        </tr>
                        <tr class="tr cell-1" data-toggle="collapse" data-target="#demo-3">
                            <td class="text-center">1</td>
                            <td>09485</td>
                            <td>Reparación</td>
                            <td><span class="badge badge-info">Denegado</span></td>
                            <td>20/01/2021</td>
                            <td>Sin definir</td>
                            <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                        </tr>
                        <tr id="demo-3" class="collapse tr cell-1 row-child">
                            <td colspan="2"><b>Último comentario:</b></td>
                            <td colspan="3">Tu solicitud ha sido denegada. Para más información contacta con nosotros</td>
                            <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                        </tr>
                        <tr class="tr cell-1" data-toggle="collapse" data-target="#demo-4">
                            <td class="text-center">1</td>
                            <td>09485</td>
                            <td>Reparación</td>
                            <td><span class="badge badge-light">En proceso</span></td>
                            <td>20/01/2021</td>
                            <td>Sin definir</td>
                            <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                        </tr>
                        <tr id="demo-4" class="collapse tr cell-1 row-child">
                            <td colspan="2"><b>Último comentario:</b></td>
                            <td colspan="3">¡¡Estamos con la obra!!</td>
                            <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                        </tr>
                        <tr class="tr cell-1" data-toggle="collapse" data-target="#demo-5">
                            <td class="text-center">1</td>
                            <td>09485</td>
                            <td>Reparación</td>
                            <td><span class="badge badge-success">Finalizado</span></td>
                            <td>20/01/2021</td>
                            <td>Sin definir</td>
                            <td class="table-elipse" data-toggle="collapse" data-target="#demo"><i class="fas fa-angle-down"></i></td>
                        </tr>
                        <tr id="demo-5" class="collapse tr cell-1 row-child">
                            <td colspan="2"><b>Último comentario:</b></td>
                            <td colspan="3">Hemos finalizado tu obra. ¡¡Disfrutala!!</td>
                            <td colspan="2"><button type="button" class="btn btn-primary">Contactar</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

