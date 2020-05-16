<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br />
        <br />
        <h4>Tambah Mata Pelajaran</h4>
        <br />
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <form @submit.prevent="addMatpel()">
          <div class="form-group">
            <label>Kode Mata Pelajaran</label>
            <input type="textfield" class="form-control" v-model="form.kode_matpel" required />
          </div>
          <div class="form-group">
            <label>Nama Mata Pelajaran</label>
            <input type="textfield" class="form-control" v-model="form.matpel" required />
          </div>
          <button class="btn btn-primary">Tambah</button>
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
        kode_matpel: "",
        matpel: ""
      }
    };
  },
  created() {},
  methods: {
    addMatpel() {
      // post data ke api menggunakan axios
      console.log(this.form);
      axios
        .post("http://localhost:8000/api/matpel/tambah", {
          kode_matpel: this.form.kode_matpel,
          matpel: this.form.matpel
        })
        .then(response => {
          // push router ke read data
          this.$router.push("/matpel");
        });
    }
  }
};
</script>
