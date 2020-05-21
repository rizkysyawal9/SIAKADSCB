<template>
  <div>
    <br />
    <br />

    <div class="row">
      <div class="col-md-10">
        <h2>Edit Nilai {{ siswa.nama }}</h2>
        <h5>Kelas: {{ siswa.kelas }}</h5>
      </div>
      <div class="col-md-2">
        <!-- push router ke form membuat data -->
        <br />
        <router-link class="btn btn-primary w-100" to="/create">Save</router-link>
      </div>
    </div>

    <br />
    <h4>Semester 1</h4>
    <form @submit.prevent="updateData()">
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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="nilai in semester1" :key="nilai.id">
            <td>{{ nilai.kode_matpel }}</td>
            <template v-if="$route.params.semester == 1 & $route.params.kode == nilai.kode_matpel & $route.params.kelas == nilai.kelas" >
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h1" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h2" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h3" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h4" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h5" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h6" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h7" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h8" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.hph" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.hpts" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.hpas" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.hpa" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.predikat" />
              </td>
              <td>
                <!-- <router-link
                  class="btn btn-primary w-100"
                  :to="'/editnilai/'+siswa.nis+'/1/'+nilai.kode_matpel"
                >Save</router-link>-->
                <button class="btn btn-primary">Save</button>
              </td>
            </template>
            <template v-else>
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
            </template>
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
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="nilai in semester2" :key="nilai.id">
            <td>{{ nilai.kode_matpel }}</td>
            <template v-if="$route.params.semester == 2 & $route.params.kode == nilai.kode_matpel &$route.params.kelas == nilai.kelas">
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h1" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h2" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h3" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h4" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h5" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h6" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h7" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.h8" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.hph" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.hpts" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.hpas" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.hpa" />
              </td>
              <td>
                <input type="textfield" class="form-control" v-model="nilai.predikat" />
              </td>
              <td>
                <!-- <router-link
                  class="btn btn-primary w-100"
                  :to="'/editnilai/'+siswa.nis+'/1/'+nilai.kode_matpel"
                >Save</router-link>-->
                <button class="btn btn-primary">Save</button>
              </td>
            </template>
            <template v-else>
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
            </template>
          </tr>
        </tbody>
      </table>
    </form>
  </div>
</template>

<script>
export default {
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
        .get("http://localhost:8000/api/nilai/" + this.$route.params.nis)
        .then(response => {
          (this.siswa = response.data.siswa),
            (this.semester1 = response.data.semester1),
            (this.semester2 = response.data.semester2),
            console.log(response.data);
        });
    },
    getData(item) {
      if (item.kode_matpel == this.$route.params.kode) {
        return item;
      }
    },
    updateData() {
      let semester = 0;
      if (this.$route.params.semester == 1) {
        let kode = this.semester1.filter(item=>{
          if(item.kode_matpel == this.$route.params.kode)
          return item;
        });
        console.log(kode[0]);
        let semester1 = kode[0];
        axios
          .put(
            // "http://localhost:8000/api/nilai/" +
            //   this.$route.params.nis +
            //   "/" + this.$route.params.kelas + "/" +
            //   semester +
            //   "/" +
            //   this.$route.params.kode,
            `http://localhost:8000/api/nilai/${this.$route.params.nis}/${this.$route.params.kelas}/1/${this.$route.params.kode}`,
            {
              h1: semester1.h1,
              h2: semester1.h2,
              h3: semester1.h3,
              h4: semester1.h4,
              h5: semester1.h5,
              h6: semester1.h6,
              h7: semester1.h7,
              h8: semester1.h8,
              hph: semester1.hph,
              hpts: semester1.hpts,
              hpas: semester1.hpas,
              hpa: semester1.hpa,
              predikat: semester1.predikat
            }
          )
          .then(response => {
            Swal.fire(
  'Berhasil!',
  'Nilai berhasil di ubah',
  'success'
)
            this.$router.push("/nilaisiswa/" + this.siswa.nis);
          });
      } else if (this.$route.params.semester == 2) {
        // let kode = this.semester2[kode_matpel==this.$route.params.kode_matpel]
        // console.log(kode)
        // let semester2 = this.semester2[0];
        let kode = this.semester2.filter(item=>{
          if(item.kode_matpel == this.$route.params.kode)
          return item});
        console.log(kode[0]);
        let semester2 = kode[0];
        axios
          .put(
            `http://localhost:8000/api/nilai/${this.$route.params.nis}/${this.$route.params.kelas}/2/${this.$route.params.kode}`,
            {
              h1: semester2.h1,
              h2: semester2.h2,
              h3: semester2.h3,
              h4: semester2.h4,
              h5: semester2.h5,
              h6: semester2.h6,
              h7: semester2.h7,
              h8: semester2.h8,
              hph: semester2.hph,
              hpts: semester2.hpts,
              hpas: semester2.hpas,
              hpa: semester2.hpa,
              predikat: semester2.predikat
            }
          )
          .then(response => {
            // for (const i = 0; i <= this.semester1.lenght; i++) {}
            this.$router.push("/nilaisiswa/" + this.siswa.nis);
          });
      }
    }
  }
};
</script>
