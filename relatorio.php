<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <title>Robson Camilo</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <form id = "teste_pesquisar">
    <div id="main-wrapper">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">                        
                        <span class="logo-text">
                             <img src="imagem/zap2.png" alt="homepage" class="light-logo" style = "margin-top:15px"/>                            
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>                
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">                                               
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="tables.html" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Tabelas</span></a></li>                        
                    </ul>
                </nav>
               
            </div>
           
        </aside>
        
        <div class="page-wrapper">
            
            <div class="page-breadcrumb">
                <div class="row">                
                    <div class="col-12 d-flex no-block align-items-center">                    
                        <h4 class="page-title">Tabela</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">     
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    

                                <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="mostrarLinhas">
                                                <label>Mostrar <select name="zero_config_length" aria-controls="zero_config" class="form-control form-control-sm">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> linhas</label>

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="button1" name="button" value = "simnao">
                                                                <label class="custom-control-label" for="button1">Ativos e não ativos</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="button2" name="button" value = "sim">
                                                                <label class="custom-control-label" for="button2">Ativos</label>
                                                            </div>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" id="button3" name="button" value = "nao">
                                                                <label class="custom-control-label" for="button3">Não ativos</label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-sm-12 col-md-6">
                                                        <div id="zero_config_filter" class="dataTables_filter">
                                                            <label>Search:<input type="text" class="form-control form-control-sm" placeholder="" id = "search" aria-controls="zero_config">
                                                            <button type = "submit" class="btn btn-lg btn-primary btn-block" id = "botaoPesquisar" form = "teste_pesquisar" >Entrar</button>
                                                            </label>
                                                         </div>
                                                    </div>
                                                    </div>

                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <table id="zero_config" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="zero_config_info">
                                                            
                                                            <thead>
                                                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 219px;">Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 306px;">Position</th>
                                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 199px;">Office</th>
                                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 136px;">Age</th>
                                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 227px;">Start date</th>
                                                                <th class="sorting" tabindex="0" aria-controls="zero_config" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 186px;">Salary</th></tr>
                                                            </thead>

                                                                <tbody>                                                                
                                                                <tr role="row" class="odd">
                                                                    <td class="sorting_1">Tiger Nixon</td>
                                                                    <td>System Architect</td>
                                                                    <td>Edinburgh</td>
                                                                    <td>61</td>
                                                                    <td>2011/04/25</td>
                                                                    <td>$320,800</td>
                                                                </tr>
                                                                
                                                                </tbody>   

                                                        </table>
                                                    </div>
                                                </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                <div class="dataTables_info" id="zero_config_info" role="status" aria-live="polite">Página 1 de 1 para 1 entre</div>
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="zero_config_paginate">
                                                    <ul class="pagination">
                                                        <li class="paginate_button page-item previous disabled">
                                                            <input type="hidden" id="pagAnterior" value = "">
                                                            <a aria-controls="zero_config" data-dt-idx="0" tabindex="0" class="page-link"><<</a>
                                                        </li>
                                                        <li class="paginate_button page-item active">
                                                            <input type="hidden" id = "pagAtual" value = "1">
                                                            <a aria-controls="zero_config" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                                        </li>
                                                        <li class="paginate_button page-item next disabled">
                                                            <input type="hidden" id="pagProxima" value = "">
                                                            <a aria-controls="zero_config" data-dt-idx="2" tabindex="0" class="page-link">>></a>
                                                        </li>
                                                            <input type="hidden" id="loginCadastro" value = "3">
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                  </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>                
            </div>

            <footer class="footer text-center">
                Robson Camilo
            </footer>
            
        </div>
        
    </div>
    
    
    </form>
</body>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="login.js"></script>

</html>