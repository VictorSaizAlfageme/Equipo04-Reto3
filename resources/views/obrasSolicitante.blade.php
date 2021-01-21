@extends('perfil')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Tabla obras -->
                <table class="table table-condensed"  id="myTable">
                    <thead>
                    <tr>
                        <th>Nº OBRA</th>
                        <th>TIPO DE OBRA</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FINAL</th>
                        <th>PROGRESO</th>
                    </tr>
                    </thead>
                    <tbody class="panel">
                        <tr class="accordion-button" type="button" data-toggle="collapse" data-target="#demo1" data-parent="#myTable" aria-expanded="true" aria-controls="collapseOne">
                            <td>1</td>
                            <td>05 May 2013</td>
                            <td>Credit Account</td>
                            <td>$150.00</td>
                            <td>$150.00</td>
                        </tr>
                        <tr id="demo1" class="collapse">
                            <td colspan="6" class="hiddenRow"><div>Demo1</div> </td>
                        </tr>
                        <tr data-toggle="collapse" data-target="#demo2" data-parent="#myTable">
                            <td>2</td>
                            <td>05 May 2013</td>
                            <td>Credit Account</td>
                            <td>$11.00</td>
                            <td>$161.00</td>
                        </tr>
                        <tr id="demo2" class="collapse">
                            <td colspan="6" class="hiddenRow"><div>Demo2</div></td>
                        </tr>
                        <tr data-toggle="collapse" data-target="#demo3" data-parent="#myTable">
                            <td>3</td>
                            <td>05 May 2013</td>
                            <td>Credit Account</td>
                            <td>$500.00</td>
                            <td>$661.00</td>
                        </tr>
                        <tr id="demo3" class="collapse">
                            <td colspan="6" class="hiddenRow"><div>Demo3</div></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
