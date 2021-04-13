<template>
 <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow topheader">

                    <div class="top-header-heading">
                        <a href="#">topshephered</a>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
</template>


<script>
export default {
  props: ["user"],
  data: () => ({
    drawer: null,
    allNotifications: [],
    unreadNotifications: [],
  }),
  props: ["user"],
  watch:{
      allNotifications(val){
          this.unreadNotifications =  this.allNotifications.filter(notification => {
            return notification.read_at == null;
        });
      }
  },

  methods: {
    logout() {
      axios.post("/logout").then(response => window.location.reload());
    },
    markAsRead() {
      axios.get("/mark-all-read/" + this.user.id).then(response=>{
          this.unreadNotifications = [];
      });
    }
  },
 
  created() {
    this.allNotifications = this.user.notifications;

    this.unreadNotifications =  this.allNotifications.filter(notification => {
        return notification.read_at == null;
      });

    // Echo.private("App.User." + this.user.id).notification(notification => {
    //   this.allNotifications.unshift(notification.notification);
    // });
  }
};
</script>
