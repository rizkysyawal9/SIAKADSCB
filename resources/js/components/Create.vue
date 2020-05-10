<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br />
        <br />
        <h4>Tambah Siswa Baru</h4>
        <br />
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <form @submit.prevent="addData()">
          <div class="form-group">
            <label>Nis</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="NIS"
              v-model="form.nis"
              required
            />
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Nama"
              v-model="form.nama"
              required
            />
          </div>
          <div class="form-group">
            <label>Orang Tua</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Orang Tua"
              v-model="form.ortu"
              required
            />
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Kelas"
              v-model="form.kelas"
              required
            />
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Alamat"
              v-model="form.alamat"
              required
            />
          </div>
          <button class="btn btn-primary">Submit</button>
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
  methods: {
    addData() {
      // post data ke api menggunakan axios
      axios
        .post("http://localhost:8000/api/tambah_siswa", {
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
