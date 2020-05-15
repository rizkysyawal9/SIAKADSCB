<template>
  <div class="row">
    <div class="col-md-12">
      <br />
      <br />
      <div class="row">
        <div class="col-md-10">
          <h4>Daftar Mata Pelajaran</h4>
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
            <th scope="col">Kode Mata Pelajaran</th>
            <th scope="col">Nama Mata Pelajaran</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- menampilkan data ke table -->
          <tr v-for="matpel in matpels" :key="matpel.id">
            <td style="width:40%">{{matpel.kode_matpel}}</td>
            <td style="width:40%">{{matpel.matpel}}</td>
            <td style="width:20%">
              <router-link class="btn btn-warning" :to="'/edit/'+matpel.nis">Edit</router-link>
              <button class="btn btn-danger" v-on:click="deleteData(matpel.nis)">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      matpels: []
    };
  },
  created() {
    this.getMatapel();
  },
  methods: {
    getMatapel() {
      axios
        .get("http://localhost:8000/api/matpel")
        .then(result => {
          this.matpels = result.data;
        })
        .catch(err => {
          alert(err);
        });
    }
  }
};
</script>

<style lang="less" scoped>
</style>