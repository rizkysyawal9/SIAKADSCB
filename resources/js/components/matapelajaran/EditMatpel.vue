<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br />
        <br />
        <h4>Update Mata Pelajaran</h4>
        <br />
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <form @submit.prevent="updateMatpel()">
          <div class="form-group">
            <label>Kode Mata Pelajaran</label>
            <input type="textfield" class="form-control" v-model="form.kode_matpel" required />
          </div>
          <div class="form-group">
            <label>Nama Mata Pelajaran</label>
            <input type="textfield" class="form-control" v-model="form.matpel" required />
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
        kode_matpel: "",
        matpel: ""
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
        .get("http://localhost:8000/api/matpel/" + this.$route.params.id)
        .then(response => {
          this.form.kode_matpel = response.data.kode_matpel;
          this.form.matpel = response.data.matpel;
          console.log(response.data);
        });
    },
    updateMatpel() {
      // post data ke api menggunakan axios
      console.log(this.form);
      axios
        .put("http://localhost:8000/api/matpel/" + this.$route.params.id, {
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
