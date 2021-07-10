
@extends('master')


<meta http-equiv="content-type" content="text/html; charset=utf-8" />
{{--Buscador de paraules--}}
{{--@include('admin.template.partials.nav')--}}
<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
<link type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">





@section('content')

{{--<label class="panel hljs-title wizard_head" style="background:#D9D9D9; margin: 5ch">--}}
    {{--<h2><small>  Paraules Ebrenques</small></h2></label>--}}
<h3>Paraules Ebrenques</h3>
<div class="container-fluid" style="background: white; padding-top: 40px; padding-bottom: 40px">
    <article class="row">
        <div class="container">
            <div class="table" style="margin: auto;">
                <div class="table-body">
                    <table class="table" id="myTable" cellspacing="0" >
                        <thead>

                        <tr style="background: #D9D9D9">
                            <th style="text-align: center">Id de referencia</th>
                            <th style="text-align: center">Expressió/Verb/Nom/Adjectiu</th>
                            <th style="text-align: center">Traducció</th>
                            <th style="text-align: center">Tipus</th>
                            <th style="text-align: center">OP</th>

                        </tr>
                        </thead>

                        <tbody style="background: white">
                        @foreach($dictionaries as $dictionary)

                        <tr>
                            <td>{{$dictionary->id}}</td>
                            <td>{{$dictionary->words_ebrenques}}</td>
                            <td>
                                <ol>
                                    <?php
                                    for($k = 0; $k<count($alumno->translations);$k++){?>
                                    <li c><?php echo $dictionary->translations[$k]['translate'];
                                        echo '<br/>';
                                        }
                                        ?>
                                    </li>
                                </ol>
                            </td>
                            <td>{{$dictionary->types}}</td>

                            <td style="padding-left: 100px;">
                                <div class="btn-toolbar" role="toolbar" aria-label="" style="align-content: center;">
                                    <div class="btn-group" role="group" aria-label="3000">
                                        <form method="get" action="{{url('/admin/api/insertarTraduccio')}}">
                                            <input type="hidden" name="id" value="{{$dictionary->id}}">

                                            <button type="submit"
                                                    class="btn btn-primary"
                                                    data-toggle="tooltip"
                                                    title="Insertar traducció!"
                                                    style="text-align: center">
                                                <i class="fa fa-btn fa-tag">
                                                </i>
                                            </button>

                                        </form></div>
                                    <div class="btn-group" role="group" aria-label="">
                                        <form method="get"
                                              action="{{url('/admin/api/editar')}}">
                                            <input type="hidden"
                                                   name="id" value="{{$dictionary->id}}">

                                            <button type="submit" class="btn btn-success"
                                                    data-toggle="tooltip"
                                                    title="Editar!"
                                                    style="text-align: center">

                                                <i class="fa fa-btn fa-edit">
                                                </i>
                                            </button>

                                        </form>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="">
                                        <form method="get"
                                              action="{{url('/admin/api/beforeDelete')}}">
                                            <input type="hidden"
                                                   name="id" value="{{$dictionary->id}}">

                                            <button type="submit"
                                                    class="btn btn-danger"
                                                    data-toggle="tooltip"
                                                    title="Eliminar!"
                                                    style="text-align: center">

                                                <i class="fa fa-btn fa-remove">
                                                </i>
                                            </button>

                                        </form>
                                    </div>
                                    <div class="btn-group" role="group" aria-label="">
                                        <form action="{{url('admin/api/viewTranslate')}}"
                                              method="get">
                                            <input type="hidden"
                                                   name="id" value="{{$dictionary->id}}">

                                            <button type="submit"
                                                    class="btn btn-warning"
                                                    data-toggle="tooltip"
                                                    title="Visualitzar traduccions!"
                                                    style="text-align: center">
                                                <i class="fa fa-btn fa-trello">
                                                </i>
                                            </button>

                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </article>
</div>

<script src="{{asset('src/js/jquery.dataTables.min.js')}}"></script>

{{--<script>--}}
    {{--$(document).ready(function() {--}}


        {{--console.log("AAA");--}}

        {{--//                $('#myTable').DataTable();--}}
            {{--} );--}}

    {{--$(function () {--}}

        {{--console.log("BBB");--}}
        {{--$('#myTable').DataTable();--}}

        {{--})--}}

    {{--</script>--}}

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script type="text/javascript" charset="utf-8">
    jQuery(document).ready(function() {
        jQuery('#myTable').dataTable({"oLanguage": {
                    "sEmptyTable": "Tabellen innehåller ingen data",
                    "sInfo": "Veient _START_ a _END_ del total de _TOTAL_ files",
                    "sInfoEmpty": "Veient 0 a 0 del total de 0 files",
                    "sInfoFiltered": "(filtrerade från totalt _MAX_ rader)",
                    "sInfoPostFix": "",
                    "sInfoThousands": ",",
                    "sLengthMenu": "Veient _MENU_ files",
                    "sLoadingRecords": "Carregant...",
                    "sProcessing": "transformació...",
                    "sSearch": "Recerca:",
                    "sZeroRecords": "No hi ha resultats que coincideixen",
                    "oPaginate": {
                        "sFirst": "Primer",
                        "sLast": "Passar",
                        "sNext": "Següent",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending": ": habilitat per ordenar la columna en ordre ascendent",
                        "sSortDescending": ": habilitat per ordenar la columna en ordre descendent"
                    }
                },
                "iDisplayLength": 10,
                "aLengthMenu": [ 10,25,50, 100 ]
            }

        );
    });
</script>

@endsection

