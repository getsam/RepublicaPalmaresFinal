@extends('layouthome')

@section('link')
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
@endsection

@section('conteudo')
    @if(!empty(Session::has('mensagem')))
        <script> swal({ 
                    title : " Cadastrada!!! " ,
                    text: '{{Session::get('mensagem')}}',
                    icon: "success",
                    button: "Okay",
                }); 
        </script>
    @endif
    <div class="row border-bottom">
        <!-- envelope do Conteúdo das views     -->
            <div class="wrapper wrapper-content animated fadeInRight">
                
                <!-- ESPAÇO CONTEUDO DA PAGINA -->
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5>Lista de Alunos</h5>
                                </div>
                                <div class="ibox-content">
            
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover lista_Alunos" >
                                            <thead>
                                                <tr>
                                                    <th>CPF</th>
                                                    <th>Aluno</th>
                                                    <th>Modalidade</th>
                                                    <th>Curso</th>
                                                    <th>Data da Matrícula</th>
                                                    <th>Nome Responsável</th>
                                                    <th>Editar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($aluno_cursos as $aluno_curso)
                                                    <tr class="">
                                                    <td>{{ $aluno_curso->cpf }}</td>
                                                    <td>{{ $aluno_curso->nome }}</td>
                                                        <td>{{ $aluno_curso->modalidade }}</td>
                                                        <td>{{ $aluno_curso->nome_curso }}</td>
                                                        <td>10/03/2019</td>
                                                    <td>{{ $aluno_curso->nome_responsavel }}</td>
                                                        <td class="text-center ">
                                                            <a href="cursoEditar.html">
                                                                <button class="btn-primary btn btn-xs">
                                                                    <i class="fa fa-lg fa-pencil"></i>
                                                                </button>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>    
@endsection

@section('scripts')
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('.lista_Alunos').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Lista de cadastro'},
                    {extend: 'pdf', title: 'Lista de cadastro'},
                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '14px');
                            $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                        }
                    }
                ],
                searching: true,
                ordering: true,
                info: false,
                pageLength: 20,
                lengthChange: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
                },
                columnDefs: [{
                    targets: [2, 7],
                    render: function (data, type, row) {
                        return type === 'display' && data.length > 25 ?
                            data.substr(0, 25) + '…' :
                            data;
                    },
                }],
            });
        });
        
    </script>
@endsection