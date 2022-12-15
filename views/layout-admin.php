<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hospital San Jose</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/b355a0cb3a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Custom styles for this template-->
    <link href="/build/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="/build/css/admin.css" rel="stylesheet">

    <!-- CALENDARIO DE AYUDA-->
    <link rel="stylesheet" href="/build/css/calendar.css">
     <!-- TABLA DINAMICA -->
  <script src="/build/js/vendor/jquery-3.6.0.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css"
              href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Barra de Izquierda -->
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="/build/images/Logo_hospital_San_José_del_Callao.svg.png" width="50px" alt="">
                </div>

                <div class="sidebar-brand-text mx-3">HOSPITAL SAN JOSÉ</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="/admin/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Resumen</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interfaces
            </div>

            <!-- Nav Item - Pacientes -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/pacientes">
                    <i class="fas fa-user-injured"></i>
                    <span>Pacientes</span>
                </a>
            </li>

            <!-- Nav Item - Doctores -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/medicos">
                    <i class="fas fa-user-md"></i>
                    <span>Médicos</span>
                </a>
            </li>

            <!-- Nav Item - Citas -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/citas">
                    <i class="fas fa-calendar-check"></i>
                    <span>Citas</span>
                </a>
            </li>

            <!-- Nav Item - Especialidades -->
            <li class="nav-item">
                <a class="nav-link" href="/admin/especialidades">
                    <i class="fas fa-calendar-check"></i>
                    <span>Especialidades</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <a href="/logout" class=" border-10" id="sidebarToggle"></a>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Fin Barra de Izquierda -->

        <?php echo $contenido; ?>

    </div>
    <!-- End of Content Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Cerrar Sesion(Modal)-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="/logout">Cerrar Sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom scripts for all pages-->
    <script src="/build/js/sb-admin-2.min.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- CALEDARIO DE AYUDA -->
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/es.js"></script>
    <script  type="text/javascript" src="/build/js/calendar.js"></script>
    <script type="text/javascript">
        let calendar = new Calendar('calendar');
        calendar.getElement().addEventListener('change', e => {
            console.log(calendar.value().format('LLL'));
        });

        let calendar2 = new Calendar('calendar2');
        calendar2.getElement().addEventListener('change', e => {
            console.log(calendar2.value().format('LLL'));
        });
    </script>

    <!-- TABLA DINÁMICA-->
    <script type="text/javascript" charset="utf8" 
        src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
</body>
<!-- TABLA DINÁMICA-->
<script type="text/javascript">
            $(document).ready(function () {
            $('#dataTable1').DataTable(
                    {
                        "aLengthMenu": [[3, 5, 10, 25, 50, 75, -1], 
                                       [3, 5, 10, 25, 50, 75, "Todo"]],
                        "iDisplayLength": 3,
                        language: {
                            "sProcessing": "Procesando...",
                            searh: "Buscar",
                            "sInfo": "Mostrando resultados _START_-_END_ de  _TOTAL_",
                            "sInfoEmpty": "Mostrando resultados del 0 al 0 de un total de 0 registros",
                            "sInfoFiltered": "(filtrado de un total de MAX registros)",
                            "sSearch": "Buscar:",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                 "sNext": "Siguiente",
                                "sPrevious": "Anterior"
                            },
                        }
                    }
            );
        });
    </script>
</html>