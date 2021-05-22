<template>
    <div class="col-sm-3 sidenav">
     <div class="dash-logo">
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="https://topshepherd.com/wp-content/uploads/2018/08/logo.png">
                </div>
            </a>
     </div>
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion custom-header" id="accordionSidebar">

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <router-link class="nav-link" to="/admin">Dashboard</router-link>
                
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Users
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <router-link class="nav-link" to="/admin/viewall">View All</router-link>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <router-link class="nav-link" to="/admin/addnewusers">Add New</router-link>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                My Pets
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <router-link class="nav-link" to="/admin/allpets">View All</router-link>
               
            </li>
            <li class="nav-item">
                <router-link class="nav-link" to="/admin/addnewpet">Add Pet</router-link>
               
            </li>

             <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                My Leads
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <router-link class="nav-link" to="/admin/leads">View All</router-link>
               
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>

    </div>
</template>


<script>
export default {
    name: 'Sidebar',
}

</script>


