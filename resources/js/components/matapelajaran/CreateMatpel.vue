<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br />
        <br />
        <h4>Tambah Mata Pelajaran</h4>
        <br />
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <form @submit.prevent="checkForm()" v-on:success="$emit('success', successmessage)">
          <div v-if="errors.length" class="alert alert-danger" role="alert">
            <p v-for="error in errors" :key="error.id">{{error}}</p>
          </div>
          <div class="form-group">
            <label>Kode Mata Pelajaran</label>
            <input type="textfield" class="form-control" v-model="form.kode_matpel" required />
          </div>
          <div class="form-group">
            <label>Nama Mata Pelajaran</label>
            <input type="textfield" class="form-control" v-model="form.matpel" required />
          </div>
          <button class="btn btn-primary">Tambah</button>
          <!-- <b-button>Button</b-button> -->
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import "bootstrap/dist/css/bootstrap.css";
import "bootstrap-vue/dist/bootstrap-vue.css";
export default {
  data() {
    return {
      errors: [],
      successmessage: "Berhasil ditambah",
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
    checkForm() {
      console.log("pressed");
      this.errors = [];
      if (this.form.kode_matpel == "") {
        [...errors, "Name required"];
      }
      if (this.form.matpel == "") {
        [...errors, "Age required"];
      }
      if (this.form.kode_matpel && this.form.matpel) {
        this.addMatpel();
      }
    },

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
