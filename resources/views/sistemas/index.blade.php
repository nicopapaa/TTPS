@extends('layouts.app')
@section('content')
<h4>Sistemas</h4>
<table class="table table-bordered" style="background-color:#FFFFFF; padding:20px;">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Camas totales</th>
            <th scope="col">Camas usadas</th>
            <th scope="col">Ocupado</th>
            <th scope="col">&nbsp;</th>
        </tr>
        @foreach($sistema as $sistemas)
        <tr>
        <td>{{ $sistemas->id }}</td>
        <td>{{ $sistemas->nombre }}</td>
        <td>
        <?php
            $id = $sistemas->id;
            $camas = $sistemas->camas_totales;
            if ($id == 2){
                echo "Infinito";
            }
            else{
                echo $camas;
            }
            ?>
            </td>
            <td>{{ $sistemas->camas_usadas }}</td>
            <td> %
            <?php
            if ($id <> 2){
                $v1 = $sistemas->camas_totales;
                $v2 = $sistemas->camas_usadas;

                if($v2 == 0){
                echo $v2;
                }
                else{
                    echo ($v2 * 100 / $v1);
                }
            }
            else{
                echo "-";
            }

            ?></td>
            <td>
                <a class="btn btn-primary" href="{{ url('/sistemas/show/'.$sistemas->id )}}" style="background-color:#F0B8B8; border-color:#F0B8B8;">
                        Ver datos
                </a>
            </td>
        </tr>
        @endforeach
  </table>
@endsection
