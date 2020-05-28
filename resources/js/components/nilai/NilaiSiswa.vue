<template>
  <div>
    <!-- disini saya menggunakan bootstrap untuk design tabel nya. secara default bootstrap sudah di include di file welcome.blade.php jadi saya tidak perlu lagi untuk import file nya -->
    <div class="row">
      <div class="col-md-12">
        <br />
        <br />
        <div class="row">
          <div class="col-md-10">
            <h4>
              <b>Nilai Siswa</b>
            </h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-outline-secondary">
                <input type="radio" name="options" id="option1" checked @click="filterkelas(7)" /> Kelas 7
              </label>
              <label class="btn btn-outline-secondary">
                <input type="radio" name="options" id="option2" @click="filterkelas(8)" /> Kelas 8
              </label>
              <label class="btn btn-outline-secondary">
                <input type="radio" name="options" id="option3" @click="filterkelas(9)" /> Kelas 9
              </label>
            </div>
          </div>
          <div class="col-md-2">
            <!-- push router ke form membuat data -->
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
                <router-link class="btn btn-primary" :to="'/nilaisiswa/'+siswa.nis">Nilai</router-link>
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
    filterkelas(kelas) {
      console.log(kelas);
      axios
        .get("http://localhost:8000/api/siswa")
        .then(result => {
          console.log(this.siswas);
          this.siswas = result.data;
          this.siswas = this.siswas.filter(siswa => siswa.kelas === kelas);
          console.log(this.siswas);
        })
        .catch(err => {
          alert(err);
        });
    },
    loadData() {
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