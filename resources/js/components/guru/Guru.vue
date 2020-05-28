<template>
  <div class="row">
    <div class="col-md-12">
      <br />
      <br />
      <div class="row">
        <div class="col-md-10">
          <h4>
            <b>Data Guru</b>
          </h4>
        </div>
        <div class="col-md-2">
          <!-- push router ke form membuat data -->
          <div class="btn btn-primary w-100" @click="createModal">+ Tambah</div>
        </div>
      </div>
      <br />
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Mengajar</th>
            <th scope="col">Kelas</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- <div v-on:success="showData">
            
          </div>-->
          <!-- menampilkan data ke table -->
          <tr v-for="guru in gurus" :key="guru.id">
            <td style="width:20%">{{guru.name}}</td>
            <td style="width:20%">{{guru.email}}</td>
            <td style="width:20%">{{guru.mengajar}}</td>
            <td style="width:20%">{{guru.kelas}}</td>
            <td style="width:20%">
              <a href="#">
                <font-awesome-icon icon="edit" @click="editModal(guru)" class="edit" />
              </a>
              /
              <a href="#">
                <font-awesome-icon icon="trash" @click="deleteGuru(guru)" class="delete" />
              </a>
              <!-- <button class="btn btn-warning" @click="editModal(guru)">Edit</button> -->

              <!-- <router-link class="btn btn-warning" :to="'/edit/matpel/'+matpel.id">Edit</router-link> -->
              <!-- <button class="btn btn-danger" v-on:click="deleteGuru(guru.id)">Delete</button> -->
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- MODAL FOR CREATE -->
    <div
      class="modal fade"
      id="createModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" v-show="!editmode">Tambah Guru Baru</h5>
            <h5 class="modal-title" id="exampleModalLabel" v-show="editmode">Memperbarui Guru</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form @submit.prevent="editmode ? updateGuru() : addGuru()">
              <div class="form-group">
                <label>Nama Guru</label>
                <input
                  type="textfield"
                  name="name"
                  v-model="form.name"
                  class="form-control"
                  :class="{'is-invalid': form.errors.has('name')}"
                />

                <has-error :form="form" field="nama"></has-error>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input
                  v-show="!editmode"
                  type="textfield"
                  v-model="form.email"
                  name="email"
                  required
                  class="form-control"
                  :class="{'is-invalid': form.errors.has('email')}"
                />
                <input
                  v-show="editmode"
                  type="textfield"
                  v-model="form.email"
                  class="form-control"
                  :class="{'is-invalid': form.errors.has('email')}"
                  readonly
                />
                <has-error :form="form" field="email"></has-error>
              </div>
              <div class="form-group" v-show="!editmode">
                <label>Password</label>
                <input
                  name="password"
                  type="password"
                  v-model="form.password"
                  class="form-control"
                  :class="{'is-invalid': form.errors.has('password')}"
                />
                <has-error :form="form" field="password"></has-error>
              </div>
              <label>Mengajar</label>
              <div class="form-group">
                <select name="matpel" v-model="form.mengajar" class="form-control">
                  <option
                    v-for="matpel in matpels"
                    :value="matpel.kode_matpel"
                    :key="matpel.id"
                  >{{matpel.kode_matpel}}</option>
                </select>
              </div>
              <label>Mengajar di kelas</label>
              <div class="form-group">
                <select name="kelas" v-model="form.kelas" class="form-control">
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button
                  v-show="!editmode"
                  type="submit"
                  class="btn btn-primary"
                  dismiss="modal"
                >Create</button>
                <button
                  v-show="editmode"
                  type="submit"
                  class="btn btn-success"
                  dismiss="modal"
                >Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      editmode: false,
      matpels: [],
      form: new Form({
        id: "",
        name: "",
        email: "",
        password: "",
        mengajar: "",
        kelas: ""
      }),
      gurus: []
    };
  },
  created() {
    this.getGuru();
    this.getMatapel();
  },

  methods: {
    getGuru() {
      axios
        .get("http://localhost:8000/api/guru")
        .then(res => {
          console.log(res.data);
          this.gurus = res.data;
        })
        .catch(err => {
          console.log(err);
        });
    },
    updateGuru(id) {
      console.log("Pressed");
      console.log(this.form.id);
      this.form
        .put("http://localhost:8000/api/guru/" + this.form.id)
        .then(res => {
          console.log(res.data);
          toast.fire({
            icon: "success",
            title: "Guru Berhasil Diubah"
          });
          $("#createModal").modal("hide");
          this.getGuru();
        })
        .catch(err => {
          console.log(err);
        });
    },
    editModal(guru) {
      this.editmode = true;
      this.form.reset();
      $("#createModal").modal("show");
      this.form.fill(guru);
    },
    createModal() {
      this.editmode = false;
      this.form.reset();
      $("#createModal").modal("show");
    },
    addGuru() {
      // post data ke api menggunakan axios
      console.log(this.form);
      this.form
        .post("http://localhost:8000/api/guru")
        .then(response => {
          // this.matpels = [...this.matpels, response.data];
          this.gurus = [...this.gurus, response.data];
          toast.fire({
            icon: "success",
            title: "Guru Berhasil Ditambahkan"
          });
          $("#createModal").modal("hide");
        })
        .catch(err => {
          console.log(err);
        });
    },
    getMatapel() {
      axios
        .get("http://localhost:8000/api/matpel")
        .then(result => {
          this.matpels = result.data;
        })
        .catch(err => {
          alert(err);
        });
    },
    deleteGuru(id) {
      Swal.fire({
        title: "Apakah anda yakin?",
        text: "Anda tidak dapat mengubah ini",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Iya, hapuskan ini!"
      }).then(result => {
        if (result.value) {
          axios
            .delete("http://localhost:8000/api/guru/" + id)
            .then(response => {
              this.gurus = this.gurus.filter(guru => guru.id !== id);
              Swal.fire(
                "Deleted!",
                "Data Guru berhasil di delete",
                "success"
              ).catch(() => {
                Swal.fire("Failed!", "Something went Wrong", "warning");
              });
            });
        }
      });
    }
  }
};
</script>

<style scoped>
.kelas > td {
  padding-right: 1.5em;
}

a {
  text-decoration: none;
  margin-right: 5px;
  margin-left: 5px;
}

.delete {
  color: red;
}
</style>