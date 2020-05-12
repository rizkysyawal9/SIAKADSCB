<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br />
        <br />
        <h4>Update Siswa</h4>
        <br />
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <form @submit.prevent="updateData()">
          <div class="form-group">
            <label>Nis</label>
            <input type="textfield" class="form-control" v-model="form.nis" required />
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="textfield" class="form-control" v-model="form.nama" required />
          </div>
          <div class="form-group">
            <label>Orang Tua</label>
            <input type="textfield" class="form-control" v-model="form.ortu" required />
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <input type="textfield" class="form-control" v-model="form.kelas" required />
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="textfield" class="form-control" v-model="form.alamat" required />
          </div>
          <button class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        // firstName: "",
        // lastName: ""
        nis: "",
        nama: "",
        ortu: "",
        kelas: "",
        alamat: ""
      }
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      console.log(this.$route.params.id);
      axios
        .get("http://localhost:8000/api/siswa/" + this.$route.params.id)
        .then(response => {
          this.form.nama = response.data.nama;
          this.form.nis = response.data.nis;
          this.form.ortu = response.data.orangTua;
          this.form.kelas = response.data.kelas;
          this.form.alamat = response.data.alamat;
          console.log(response.data);
        });
    },
    updateData() {
      // post data ke api menggunakan axios
      console.log(this.form);
      axios
        .put("http://localhost:8000/api/editsiswa/" + this.$route.params.id, {
          nama: this.form.nama,
          nis: this.form.nis,
          orangTua: this.form.ortu,
          kelas: this.form.kelas,
          alamat: this.form.alamat
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/");
        });
    }
  }
};
</script>
