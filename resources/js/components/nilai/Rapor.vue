<template>
  <div>
    <br />
    <br />

    <div class="row">
      <div class="col-md-10">
        <h3>
          <b>Rapor {{ siswa.nama }}</b>
        </h3>
      </div>
      <div class="col-md-2">
        <!-- push router ke form membuat data -->
        <br />
        <!-- <router-link class="btn btn-primary w-100" :to="'/editnilai/'+siswa.nis">Edit</router-link> -->
      </div>
    </div>

    <br />
    <h5>
      <b>Kelas 7</b>
    </h5>
    <br />
    <div class="container">
      <div class="card">
        <b>Semester 1</b>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Angka</th>
              <th scope="col">Predikat</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="nilai in semester1" :key="nilai.id">
              <td>{{ nilai.kode_matpel }}</td>
              <td>{{ (nilai.h1 + nilai.h2 +nilai.h3 + nilai.h4 + nilai.h5 + nilai.h6 + nilai.h6 + nilai.h7 + nilai.h8 + nilai.hpa + nilai.hpas + nilai.hph +nilai.hpts)/12 }}</td>
              <td>{{ nilai.predikat }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card right">
        <b>Semester 2</b>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Angka</th>
              <th scope="col">Predikat</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="nilai in semester2" :key="nilai.id">
              <td>{{ nilai.kode_matpel }}</td>
              <td>{{ (nilai.h1 + nilai.h2 +nilai.h3 + nilai.h4 + nilai.h5 + nilai.h6 + nilai.h6 + nilai.h7 + nilai.h8 + nilai.hpa + nilai.hpas + nilai.hph +nilai.hpts)/12 }}</td>
              <td>{{ nilai.predikat }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <br />
    <h5>
      <b>Kelas 8</b>
    </h5>
    <br />
    <div class="container">
      <div class="card">
        <b>Semester 1</b>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Angka</th>
              <th scope="col">Predikat</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="nilai in semester1" :key="nilai.id">
              <td>{{ nilai.kode_matpel }}</td>
              <td>{{ (nilai.h1 + nilai.h2 +nilai.h3 + nilai.h4 + nilai.h5 + nilai.h6 + nilai.h6 + nilai.h7 + nilai.h8 + nilai.hpa + nilai.hpas + nilai.hph +nilai.hpts)/12 }}</td>
              <td>{{ nilai.predikat }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card right">
        <b>Semester 2</b>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Angka</th>
              <th scope="col">Predikat</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="nilai in semester2" :key="nilai.id">
              <td>{{ nilai.kode_matpel }}</td>
              <td>{{ (nilai.h1 + nilai.h2 +nilai.h3 + nilai.h4 + nilai.h5 + nilai.h6 + nilai.h6 + nilai.h7 + nilai.h8 + nilai.hpa + nilai.hpas + nilai.hph +nilai.hpts)/12 }}</td>
              <td>{{ nilai.predikat }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <br />
    <h5>
      <b>Kelas 9</b>
    </h5>
    <br />
    <div class="container">
      <div class="card">
        <b>Semester 1</b>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Angka</th>
              <th scope="col">Predikat</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="nilai in semester1" :key="nilai.id">
              <td>{{ nilai.kode_matpel }}</td>
              <td>{{ (nilai.h1 + nilai.h2 +nilai.h3 + nilai.h4 + nilai.h5 + nilai.h6 + nilai.h6 + nilai.h7 + nilai.h8 + nilai.hpa + nilai.hpas + nilai.hph +nilai.hpts)/12 }}</td>
              <td>{{ nilai.predikat }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="card right">
        <b>Semester 2</b>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Mata Pelajaran</th>
              <th scope="col">Angka</th>
              <th scope="col">Predikat</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="nilai in semester2" :key="nilai.id">
              <td>{{ nilai.kode_matpel }}</td>
              <td>{{ (nilai.h1 + nilai.h2 +nilai.h3 + nilai.h4 + nilai.h5 + nilai.h6 + nilai.h6 + nilai.h7 + nilai.h8 + nilai.hpa + nilai.hpas + nilai.hph +nilai.hpts)/12 }}</td>
              <td>{{ nilai.predikat }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "NilaiSatuSiswa",
  data() {
    return {
      siswa: [],
      semester1: [],
      semester2: []
    };
  },
  created() {
    this.loadData();
  },
  methods: {
    loadData() {
      console.log(this.$route.params.id);
      axios
        .get("http://localhost:8000/api/nilai/" + this.$route.params.id)
        .then(response => {
          (this.siswa = response.data.siswa),
            (this.semester1 = response.data.semester1),
            (this.semester2 = response.data.semester2),
            console.log(response.data);
        })
        .then(res => {
          if (this.semester1 && this.semester2 == "") {
            axios
              .post(
                `http://localhost:8000/api/siswa/${this.$route.params.id}/matpel`
              )
              .then(response => {
                (this.semester1 = response.data.semester1),
                  (this.semester2 = response.data.semester2);
                console.log("Semester 1 adalah: " + this.semester1);
              });
          }
        });

      console.log("end " + this.semester1);
    }
  }
};
</script>

<style scoped>
.container {
  display: flex;
}

.card {
  flex: 1;
  border: none;
}

.right {
  margin-left: 40px;
}
</style>