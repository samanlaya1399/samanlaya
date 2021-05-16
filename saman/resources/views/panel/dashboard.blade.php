@include('panel.section.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('panel.section.nav')

   @include('panel.section.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
      @include('panel.section.header')
        <!-- /.content-header -->

        <!-- Main content -->
    @include('panel.section.reporter')

    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>copyright &copy; 2019 <a href="http://mobtakerapp.ir/">مبتکر اپ</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('panel.section.script')
</body>
</html>
