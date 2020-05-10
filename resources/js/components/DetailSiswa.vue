<template>
  <div>
    <div class="row">
      <div class="col-md-6">
        <br />
        <br />
        <h4>Biodata {{ biodata.nama }}</h4>
        <br />
        <!-- prevent form submit untuk reload halaman, kemudian memanggil function addData() -->
        <p>Nis: {{ biodata.nis }}</p>
        <p>Nama: {{ biodata.nama }}</p>
        <p>Nama: {{ biodata.ortu }}</p>
        <p>Kelas: {{ biodata.kelas }}</p>
        <p>Alamat: {{ biodata.alamat }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      biodata: {
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
          this.biodata.nama = response.data.nama;
          this.biodata.nis = response.data.nis;
          this.biodata.ortu = response.data.orangTua;
          this.biodata.kelas = response.data.kelas;
          this.biodata.alamat = response.data.alamat;
          console.log(response.data);
        });
    }
  }
};
</script>
