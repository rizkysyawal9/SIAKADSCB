<template>
  <div class="row">
    <div class="col-md-12">
      <br />
      <br />
      <div class="row">
        <div class="col-md-10">
          <h4>
            <b>Daftar Mata Pelajaran</b>
          </h4>
          <div class="btn-group btn-group-toggle" data-toggle="buttons">
            <label class="btn btn-outline-secondary active">
              <input type="radio" name="options" id="option1" checked @click="filterkelas(7)" /> Kelas 7
            </label>
            <label class="btn btn-outline-secondary">
              <input type="radio" name="options" id="option2" @click="filterkelas(8)" /> Kelas 8
            </label>
            <label class="btn btn-outline-secondary">
              <input type="radio" name="options" id="option3" @click="filterkelas(9)" /> Kelas 9
            </label>
          </div>
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
            <th scope="col">Kode Mata Pelajaran</th>
            <th scope="col">Nama Mata Pelajaran</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- <div v-on:success="showData">
            
          </div>-->
          <!-- menampilkan data ke table -->
          <tr v-for="matpel in matpels" :key="matpel.id">
            <td style="width:40%">{{matpel.kode_matpel}}</td>
            <td style="width:40%">{{matpel.matpel}}</td>
            <td style="width:20%">
              <a href="#">
                <font-awesome-icon icon="edit" @click="editModal(matpel)" class="edit" />
              </a>
              /
              <a href="#">
                <font-awesome-icon icon="trash" @click="deleteMatpel(matpel.id)" class="delete" />
              </a>
              <!-- <button class="btn btn-warning" @click="editModal(matpel)">Edit</button> -->

              <!-- <router-link class="btn btn-warning" :to="'/edit/matpel/'+matpel.id">Edit</router-link> -->
              <!-- <button class="btn btn-danger" v-on:click="deleteMatpel(matpel.id)">Delete</button> -->
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
            <h5
              class="modal-title"
              id="exampleModalLabel"
              v-show="!editmode"
            >Tambah Mata Pelajaran Baru</h5>
            <h5
              class="modal-title"
              id="exampleModalLabel"
              v-show="editmode"
            >Memperbarui Mata Pelajaran Baru</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form @submit.prevent="editmode ? updateMatpel() : addMatpel()">
              <div class="form-group">
                <label>Kode Mata Pelajaran</label>
                <input
                  v-show="!editmode"
                  type="textfield"
                  v-model="form.kode_matpel"
                  class="form-control"
                  :class="{'is-invalid': form.errors.has('kode_matpel')}"
                />
                <input
                  v-show="editmode"
                  type="textfield"
                  v-model="form.kode_matpel"
                  class="form-control"
                  :class="{'is-invalid': form.errors.has('kode_matpel')}"
                  readonly
                />
                <has-error :form="form" field="kode_matpel"></has-error>
              </div>
              <div class="form-group">
                <label>Nama Mata Pelajaran</label>
                <input type="textfield" class="form-control" v-model="form.matpel" required />
              </div>
              <label>Kelas</label>
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
        kode_matpel: "",
        matpel: "",
        kelas: ""
      })
    };
  },
  created() {
    this.getMatapel();
  },

  methods: {
    filterkelas(kelas) {
      console.log(this.matpels);
      axios
        .get("http://localhost:8000/api/matpel")
        .then(result => {
          this.matpels = result.data;
          this.matpels = this.matpels.filter(matpel => matpel.kelas === kelas);
        })
        .catch(err => {
          alert(err);
        });
      console.log(this.matpels);
    },
    updateMatpel(id) {
      console.log("Pressed");
      this.form
        .put("http://localhost:8000/api/matpel/" + this.form.id)
        .then(res => {
          console.log(res.data);
          toast.fire({
            icon: "success",
            title: "Mata Pelajaran Berhasil Diubah"
          });
          $("#createModal").modal("hide");
          this.getMatapel();
        })
        .catch(err => {
          console.log(err);
        });
    },
    editModal(matpel) {
      this.editmode = true;
      this.form.reset();
      $("#createModal").modal("show");
      this.form.fill(matpel);
    },
    createModal() {
      this.editmode = false;
      this.form.reset();
      $("#createModal").modal("show");
    },
    addMatpel() {
      // post data ke api menggunakan axios
      console.log(this.form);
      this.form
        .post("http://localhost:8000/api/matpel/tambah")
        .then(response => {
          this.matpels = [...this.matpels, response.data];
          toast.fire({
            icon: "success",
            title: "Mata Pelajaran Berhasil Ditambahkan"
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
    deleteMatpel(id) {
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
            .delete("http://localhost:8000/api/matpel/" + id)
            .then(response => {
              this.matpels = this.matpels.filter(matpel => matpel.id !== id);
              Swal.fire(
                "Deleted!",
                "Mata pelajaran berhasil di delete",
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