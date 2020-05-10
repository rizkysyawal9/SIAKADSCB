<template>
  <div>
    <!-- disini saya menggunakan bootstrap untuk design tabel nya. secara default bootstrap sudah di include di file welcome.blade.php jadi saya tidak perlu lagi untuk import file nya -->
    <div class="row">
      <div class="col-md-12">
        <br />
        <br />
        <div class="row">
          <div class="col-md-10">
            <h4>Daftar Siswa</h4>
          </div>
          <div class="col-md-2">
            <!-- push router ke form membuat data -->
            <router-link class="btn btn-primary w-100" to="/create">+ Tambah</router-link>
          </div>
        </div>
        <br />
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama</th>
              <th scope="col">Nis</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- menampilkan data ke table -->
            <tr v-for="siswa in siswas" :key="siswa.id">
              <td style="width:40%">{{siswa.nama}}</td>
              <td style="width:40%">{{siswa.nis}}</td>
              <td style="width:20%">
                <router-link class="btn btn-primary" :to="'/detail/'+siswa.nis">Details</router-link>
                <router-link class="btn btn-warning" :to="'/edit/'+siswa.nis">Edit</router-link>
                <!-- <button class="btn btn-danger" v-on:click="deleteData(siswa.id)">Delete</button> -->
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<!-- script js -->
<script>
// import Dashboard from "./Dashboard";
export default {
  name: "Read",
  // components: Dashboard,
  data() {
    return {
      // variable array yang akan menampung hasil fetch dari api
      siswas: []
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      // fetch data dari api menggunakan axios
      //   axios.get("http://localhost:8000/api/person").then(response => {
      //     // mengirim data hasil fetch ke varibale array persons
      //     this.persons = response.data;
      //   });
      axios.get("http://localhost:8000/api/siswa").then(response => {
        this.siswas = response.data;
      });
    },
    deleteData(id) {
      // delete data;
      axios
        .delete("http://localhost:8000/api/deletesiswa/" + id)
        .then(response => {
          this.loadData();
        });
    }
  }
};
</script>