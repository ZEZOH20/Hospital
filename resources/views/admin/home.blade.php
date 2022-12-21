   
   <x-admin.Head title='Corona Admin'/> <!-- component -->

    <body>
        <div class="container-scroller">

            <!-- partial:partials/_sidebar.html -->
            <x-admin.Sidebar/> <!--component-->
            <!-- partial -->

            <div class="container-fluid page-body-wrapper">
                <!-- partial:partials/_navbar.html -->

            <x-admin.Navbar/> <!--component-->

            <div class="main-panel">

                    <x-admin.Body/> <!--component-->
                    <x-admin.Footer/> <!--component-->

            </div>
                <!-- main-panel ends -->

            </div>
            <!-- page-body-wrapper ends -->
        </div>
    
    </body>

</html>
