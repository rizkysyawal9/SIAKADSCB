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
          <div class="form-group" :class="{'is-invalid': form.errors.has('nama')}">
            <label>Nama</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Nama"
              v-model="form.nama"
              required
            />
            <div class="form-group" :class="{'is-invalid': form.errors.has('nis')}">
              <label>Nis</label>
              <input
                type="textfield"
                class="form-control"
                placeholder="NIS"
                v-model="form.nis"
                required
              />
            </div>
          </div>
          <label>Kelas</label>
          <div class="form-group" :class="{'is-invalid': form.errors.has('kelas')}">
            <select name="kelas" v-model="form.kelas" class="form-control">
              <option value>Silahkan pilih kelas</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select>
          </div>
          <label>Jenis kelamin</label>
          <div class="form-group" :class="{'is-invalid': form.errors.has('jenis_kelamin')}">
            <select name="jenis_kelamin" v-model="form.jenis_kelamin" class="form-control">
              <option value>Silahkan pilih jenis kelamin</option>
              <option value="laki-laki">laki-laki</option>
              <option value="perempuan">perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label>Tempat lahir</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Tempat Lahir"
              v-model="form.tempat_lahir"
            />
          </div>
          <div class="form-group">
            <label>Tanggal lahir</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Tanggal Lahir"
              v-model="form.tanggal_lahir"
            />
          </div>
          <label>Golongan darah</label>
          <div class="form-group">
            <select name="golongan_darah" v-model="form.golongan_darah" class="form-control">
              <option value>Silahkan pilih Golongan Darah</option>
              <option value="AB">AB</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <option value="O">O</option>
            </select>
          </div>
          <div class="form-group" :class="{'is-invalid': form.errors.has('tinggi_badan')}">
            <label>Tinggi badan</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="dalam cm"
              v-model="form.tinggi_badan"
            />
          </div>
          <div class="form-group" :class="{'is-invalid': form.errors.has('berat_badan')}">
            <label>Berat Badan</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="dalam kg"
              v-model="form.berat_badan"
            />
          </div>
          <div class="form-group">
            <label>Nama Ayah</label>
            <input
              type="textfield"
              class="form-control"
              placeholder="Nama Ayah"
              v-model="form.nama_ayah"
            />
          </div>
          <div class="form-group">
            <label>Nama Ibu</label>
            <input type="textfield" class="Nama Ibu" placeholder="dalam kg" v-model="form.nama_ibu" />
          </div>

          <button class="btn btn-primary">Submit</button>
          <has-error :form="form" field="nama"></has-error>
          <has-error :form="form" field="nis"></has-error>
          <has-error :form="form" field="kelas"></has-error>
          <has-error :form="form" field="jenis_kelamin"></has-error>
          <has-error :form="form" field="berat_badan"></has-error>
          <has-error :form="form" field="tinggi_badan"></has-error>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: new Form({
        // firstName: "",
        // lastName: ""
        nis: "",
        nama: "",
        kelas: "",
        jenis_kelamin: "",
        tanggal_lahir: "",
        tempat_lahir: "",
        golongan_darah: "",
        alamat: "",
        tinggi_badan: "",
        berat_badan: "",
        nama_ayah: "",
        nama_ibu: ""
      })
    };
  },
  methods: {
    addData() {
      console.log(this.form);
      // post data ke api menggunakan axios
      this.form
        .post("http://localhost:8000/api/tambah_siswa", {})
        .then(response => {
          Swal.fire("Berhasil!", "Siswa Berhasil Ditambahkan", "success");
          // push router ke read data
          this.$router.push("/dashboard");
        });
    }
  }
};
</script>
