<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.es.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {

        $('.datepicker').datepicker({
            format: 'dd-mm-yyyy'

        });

        $('#table').DataTable();

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });


        // guarda en localstorage el nombre del menu para luego volver a abrirlo
        var menu = localStorage.getItem('menu');

        $('.sidebar li a').each(function(){
            if($(this).text() == menu){
                if($(this).parent().parent().hasClass('nav-treeview')){
                    $(this).parent().parent().toggle();
                    $(this).parent().parent().parent().addClass('menu-open');

                    $(this).addClass('active');
                }else
                    $(this).addClass('active');

            }
        });


        $('.menu').on('click',function()
        {
            localStorage.setItem('menu',$(this).text());
        });

    });
</script>