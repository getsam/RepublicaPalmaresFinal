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
                            <div class="" id="inserirModalidade" >

                                <div class="hr-line-dashed"></div>
        
                                <div class="row">
                                    <div class="col-sm-12 m-b-md">
                                        <h3 class="text-center m-t-lg">Editar Modalidade</h3>
                                    </div>
                                    <form method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label class="label-control" for="Id_modalidade_criar">ID da Modalidade</label>
                                                <input type="text" value="{{ $id }}" class="form-control m-b"name="Id_modalidade_criar" id="Id_modalidade_criar" value="" disabled/>
                                                                                                    
                                            </div>
                                        </div>
        
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <label class="label-control"for="modalidade_criar">Nome Modalidade</label>
                                                <input type="text" value="{{ $item->modalidade }}" class="form-control m-b"name="modalidade_criar" id="modalidade_criar" required/>
                                                                                                    
                                            </div>
                                        </div>
        
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="label-control" for="modalidade_descricao">Descrição da Modalidade</label>
                                                <textarea name="modalidade_descricao" class="form-control m-b" id="modalidade_descricao" placeholder="Descreva a modalidade" cols="30" rows="10" required>{{ $item->descricao }}</textarea>                                                  
                                            </div>
                                        </div>
        
                                        <div class="col-sm-12">
                                            
                                            <div class="text-center m-b-md m-t-sm">
                                                <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>
        
                                                <button class="btn  btn-primary text-uppercase" type="submit" value="Adicionar">Salvar</button>
                                            </div>
                                        </div>
        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- FIM - envelope do Conteúdo das views     -->
 @endsection
          

@section('scripts')
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>    
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('.lista_cadastros').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
                },
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
                ]
            });
        });
        
    </script>    
@endsection