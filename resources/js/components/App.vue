<template>
  <div>
    <div>
      <!-- Navbar -->

      <!-- Sidebar -->
      <div class="wrapper">
        <div class="sidebar">
          <ul>
            <li class="siswa">
              <router-link to="/dashboard">
                             <font-awesome-icon icon="users" />
&nbsp Siswa</router-link>
            </li>
            <li>
              <router-link to="/matpel">
                                           <font-awesome-icon icon="book-open" />

    &nbsp Mata Pelajaran

              </router-link>
            </li>
            <li>
              <router-link to="/nilaisiswa">
                  <font-awesome-icon icon="clipboard" />
                 &nbsp  Nilai Siswa
              </router-link>
            </li>
            <li>
            <font-awesome-icon icon="chalkboard-teacher" />
            &nbsp Data Guru</li>
            <li>
                          <font-awesome-icon icon="school" />

              &nbsp Profil Wali Kelas
            </li>
          </ul>
          <div class="social_media">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="main_content">
          <!-- Using Templating Engine Blade Laravel for Main Content -->
        </div>
      </div>
    </div>
    <div class="margin">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
.siswa {
  text-decoration: none;
  color: white;
}
.margin {
  margin-left: 300px;
  margin-right: 200px;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: "Josefin Sans", sans-serif;
}
body {
  background-color: #f3f5f9;
}
.wrapper {
  display: flex;
  position: relative;
}
.wrapper .sidebar {
  top: 0;
  width: 200px;
  height: 100%;
  background: #16744a;
  padding: 30px 0px;
  position: fixed;
  color: white;
}
.wrapper .sidebar h3 {
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}
.wrapper .sidebar ul li {
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  border-top: 1px solid rgba(255, 255, 255, 0.05);
}
.wrapper .sidebar ul li a {
  color: #bdb8d7;
  display: block;
}
.wrapper .sidebar ul li a .fas {
  width: 25px;
}
.wrapper .sidebar ul li:hover {
  background-color: #594f8d;
}
.wrapper .sidebar ul li:hover a {
  color: #fff;
}
.wrapper .sidebar .social_media {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}
.wrapper .sidebar .social_media a {
  display: block;
  width: 40px;
  background: #594f8d;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}
.wrapper .main_content {
  width: 100%;
  margin-left: 200px;
}
.wrapper .main_content .header {
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}
.wrapper .main_content .info {
  margin: 20px;
  color: #717171;
  line-height: 25px;
}
.wrapper .main_content .info div {
  margin-bottom: 20px;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

li{
  text-decoration: none;
}
ul{
  text-decoration: none;
}
</style>