<template>
  <div>
    <br />
    <br />

    <div class="row">
      <div class="col-md-10">
        <h2>Nilai {{ siswa.nama }}</h2>
        <h5>Kelas: {{ siswa.kelas }}</h5>
      </div>
      <div class="col-md-2">
        <!-- push router ke form membuat data -->
        <br />
        <!-- <router-link class="btn btn-primary w-100" :to="'/editnilai/'+siswa.nis">Edit</router-link> -->
      </div>
    </div>

    <br />
    <h4>Semester 1</h4>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">H1</th>
          <th scope="col">H2</th>
          <th scope="col">H3</th>
          <th scope="col">H4</th>
          <th scope="col">H5</th>
          <th scope="col">H6</th>
          <th scope="col">H7</th>
          <th scope="col">H8</th>
          <th scope="col">HPH</th>
          <th scope="col">HPTS</th>
          <th scope="col">HPAS</th>
          <th scope="col">HPA</th>
          <th scope="col">Predikat</th>
          <th scopr="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="nilai in semester1" :key="nilai.id">
          <td>{{ nilai.kode_matpel }}</td>
          <td>{{ nilai.h1 }}</td>
          <td>{{ nilai.h2 }}</td>
          <td>{{ nilai.h3 }}</td>
          <td>{{ nilai.h4 }}</td>
          <td>{{ nilai.h5 }}</td>
          <td>{{ nilai.h6 }}</td>
          <td>{{ nilai.h7 }}</td>
          <td>{{ nilai.h8 }}</td>
          <td>{{ nilai.hph }}</td>
          <td>{{ nilai.hpts }}</td>
          <td>{{ nilai.hpas }}</td>
          <td>{{ nilai.hpa }}</td>
          <td>{{ nilai.predikat }}</td>

          <router-link
            class="btn btn-primary w-100"
            :to="`/editnilai/${siswa.nis}/${siswa.kelas}/1/${nilai.kode_matpel}`">
          Edit</router-link>
        </tr>
      </tbody>
    </table>
    <br />
    <br />
    <h4>Semester 2</h4>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Mata Pelajaran</th>
          <th scope="col">H1</th>
          <th scope="col">H2</th>
          <th scope="col">H3</th>
          <th scope="col">H4</th>
          <th scope="col">H5</th>
          <th scope="col">H6</th>
          <th scope="col">H7</th>
          <th scope="col">H8</th>
          <th scope="col">HPH</th>
          <th scope="col">HPTS</th>
          <th scope="col">HPAS</th>
          <th scope="col">HPA</th>
          <th scope="col">Predikat</th>
          <th scopr="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="nilai in semester2" :key="nilai.id">
          <td>{{ nilai.kode_matpel }}</td>
          <td>{{ nilai.h1 }}</td>
          <td>{{ nilai.h2 }}</td>
          <td>{{ nilai.h3 }}</td>
          <td>{{ nilai.h4 }}</td>
          <td>{{ nilai.h5 }}</td>
          <td>{{ nilai.h6 }}</td>
          <td>{{ nilai.h7 }}</td>
          <td>{{ nilai.h8 }}</td>
          <td>{{ nilai.hph }}</td>
          <td>{{ nilai.hpts }}</td>
          <td>{{ nilai.hpas }}</td>
          <td>{{ nilai.hpa }}</td>
          <td>{{ nilai.predikat }}</td>
          <router-link
            class="btn btn-primary w-100"
            :to="`/editnilai/${siswa.nis}/${siswa.kelas}/2/${nilai.kode_matpel}`"
          >Edit</router-link>
        </tr>
      </tbody>
    </table>
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
        }).then(res =>{
          if(this.semester1 && this.semester2 ==""){
      axios.post(`http://localhost:8000/api/siswa/${this.$route.params.id}/matpel`)
      .then(
        response => {
          this.semester1 = response.data.semester1,
          this.semester2 = response.data.semester2
          console.log('Semester 1 adalah: ' + this.semester1)
        }
      )
    }
        }
        );
      
    console.log('end ' + this.semester1);
    }
  }
};
</script>
