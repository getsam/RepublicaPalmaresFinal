@extends('layouthome')

@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
@endsection

@section('conteudo')
    <div class="row border-bottom">
        <!-- envelope do Conteúdo das views     -->
            <div class="wrapper wrapper-content animated fadeInRight">
                
                <!-- ESPAÇO CONTEUDO DA PAGINA -->
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="ibox-content">
                                @if(!empty(Session::has('mensagem')))
                                    <script> swal({ title : " Cadastrada!!! " ,
                                                    text: '{{Session::get('mensagem')}}',
                                                    icon: "success",
                                                    button: "Okay",
                                        }); 
                                    </script>
                                @endif

                                <div class="row">
                                    
                                    <div class="col-sm-12 m-b-lg">
                                            <h2 class="text-uppercase text-center">
                                                Cadastrar cargo/departamento
                                            </h2>
                                        </div>
                                    <form action="/home/departamentocargo" id="cadastrar_cargo">
                                       @csrf 
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="departamento_colaborador" class="label-control">Departamento</label>
                                                <div class="input-group">
                                                    <select data-placeholder="Selecione a Departamento..." id="departamento_colaborador" name="departamento_colaborador" class="chosen-select form-control"  tabindex="1">
                                                        <option value="">Selecione..</option>
                                                        @foreach ($departamento as $departamento)
                                                    <option value="{{ $departamento->nome }}">{{ $departamento->nome }}</option>
                                                        @endforeach
                                                    </select>  
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" data-target="toltip" title="Adicionar Departamento">
                                                            <i class="fa fa-plus"></i>
                                                        </button> 
                                                    </span> 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label class="label-control"for="nome_cargo">Nome cargo</label>
                                                <input type="text" class="form-control m-b"name="nome_cargo" id="nome_cargo" required/>
                                                                                                    
                                            </div>
                                        </div>
        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="label-control" for="descricao_cargo">Descrição do cargo</label>
                                                <textarea name="descricao_cargo" class="form-control m-b" id="descricao_cargo" placeholder="Descreva o cargo" cols="30" rows="5" required></textarea>                                                  
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="label-control" for="observacao_cargo">Observação do cargo</label>
                                                <textarea name="observacao_cargo" class="form-control m-b" id="observacao_cargo" placeholder="Descreva o cargo" cols="30" rows="5" required></textarea>                                                  
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="text-center m-b-md m-t-sm">
                                                <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                            <button class="btn  btn-primary text-uppercase"  type="submit" value="Adicionar">Salvar
                                                
                                                </button>
                                            </div>
                                        </div>

                                    </form>
                                    
                                </div>
                            </div> <!--Fim de inserir novo registro-->
                        </div>
                    </div>
                </div>
                
            </div>
        </div> <!-- FIM - envelope do Conteúdo das views     --> 
        
        
        <div class="modal inmodal in" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                                <span class="sr-only">Close</span>
                            </button>
                            <p class="modal-title">Incluir departamento</p>
                        </div>
                        <form method="post" action="departamento" >
                            @csrf
                            <div class="modal-body">
                            
                                <div class="form-group">
                                    <label class="label-control"for="nome_dpto">Nome Departamento</label>
                                    <input type="text" class="form-control m-b"name="nome_dpto" id="nome_dpto" required/>                     
                                </div>
        
                                <div class="form-group">
                                    <label class="label-control" for="descricao">Descrição do Departamento</label>
                                    <textarea name="descricao" class="form-control m-b" id="descricao" placeholder="Descreva o departamento" cols="30" rows="3" ></textarea> 
                                </div>
                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
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
            $('.lista_Colab').DataTable({
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
                    targets: [2, 6],
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