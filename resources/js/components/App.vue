<template>
  <div>
    <div>
      <!-- Navbar -->

      <!-- Sidebar -->
      <div class="wrapper">
        <div class="sidebar">
          <li>
            <img src="/LOGO.png" alt="img" />
          </li>
          <ul>
            <li class="siswa">
              <router-link to="/dashboard">
                <font-awesome-icon icon="users" />
                {{''}}Siswa
              </router-link>
            </li>
            <li>
              <router-link to="/matpel">
                <font-awesome-icon icon="book-open" />
                {{' '}}Mata Pelajaran
              </router-link>
            </li>
            <li>
              <router-link to="/nilaisiswa">
                <font-awesome-icon icon="clipboard" />
                {{' '}}Nilai Siswa
              </router-link>
            </li>
            <li>
              <router-link to="/guru">
                <font-awesome-icon icon="chalkboard-teacher" />
                {{' '}}Data Guru
              </router-link>
            </li>
          </ul>
          <div class="social_media">
            <a href="#" class="sosmed" @click="twitter()">
              <font-awesome-icon :icon="['fab', 'twitter']" />
            </a>
            <a href="#" class="sosmed" @click="facebook()">
              <font-awesome-icon :icon="['fab', 'facebook']" />
            </a>
            <a href="#" class="sosmed" @click="instagram()">
              <font-awesome-icon :icon="['fab', 'instagram']" />
            </a>
          </div>
        </div>
        <div class="main_content"></div>
      </div>
    </div>
    <div class="margin">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    twitter() {
      window.open("https://twitter.com/edu_baznas", "_blank");
    },
    facebook() {
      window.open("https://www.facebook.com/pendidikanbaznas", "_blank");
    },
    instagram() {
      window.open("https://www.instagram.com/pendidikanbaznas", "_blank");
    }
  }
};
</script>

<style scoped>
a {
  text-decoration: none;
}

img {
  margin-left: 15px;
  margin-bottom: 15px;
  max-width: 150px;
}

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
  color: white;
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
.wrapper .sidebar .social_media .sosmed {
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
  color: white;
  border-bottom: 1px solid #e0e4e8;
}
.wrapper .main_content .info {
  margin: 20px;
  color: white;
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

li {
  text-decoration: none;
}
ul {
  text-decoration: none;
}
</style>