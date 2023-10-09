<template>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Categories
                    <button @click="isAdd = true" class="btn btn-primary float-right">Add a new category</button>
                </div>
                <div class="card-body">
                  <template v-if="isAdd">
                    <form method="post" @submit.prevent="add()">
                      <div class="mb-3">
                       <label for="name" class="form-label">Name</label>
                            <input type="text" v-model="name" class="form-control" 
                                   :class="{'is-invalid': errors.name}" id="name">
                            
                            <span v-if="errors && errors.name" class="invalid-feedback" role="alert">
                                <strong> {{ errors.name[0] }}</strong>
                            </span>
                      </div>
                      <td><button type="submit" class="btn btn-primary">Submit</button></td>
                      <td><button @click="isAdd = false" class="btn btn-danger ml-4">Back</button></td>
                    </form>
                  </template>
                  <template v-else-if="isEdit">
                    <form method="post" @submit.prevent="update(category)">
                      <div class="mb-3">
                       <label for="name" class="form-label">Name</label>
                            <input type="text" v-model="category.name" class="form-control" 
                                   :class="{'is-invalid': errors.name}" id="name">
                            
                            <span v-if="errors && errors.name" class="invalid-feedback" role="alert">
                                <strong> {{ errors.name[0] }}</strong>
                            </span>
                      </div>
                      <td><button type="submit" class="btn btn-primary">Submit</button></td>
                    </form>
                  </template>
                  <template v-else>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="category in categories" :key="category.id">
                                <th scope="row">{{ category.id }}</th>
                                <td>{{ category.name }}</td>
                                <td><button @click="edit(category.id)" class="btn btn-warning">Edit</button></td>
                                <td><button @click="remove(category.id)" class="btn btn-danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                  </template>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
import axios from 'axios'
export default {
  data () {
    return {
      isAdd: false,
      isEdit: false,
      name: '',
      category: '',
      categories: '',
      errors: ''
    }
  },
  methods: {
    getCategories () {
      axios.get('/api/get-categories')
      .then(res => {
        this.categories = res.data
        
      })
    },
    add () {
        
        this.isAdd = true
        let data = {
          name: this.name
        }
        axios.post('/api/admin/categories/add-category', data)
        .then(res => {
          this.isAdd = false
          this.getCategories()
          
        }).catch(err => {
          if (err.response.status == 422) {
              this.errors = err.response.data.errors
          }
        })
    },
    edit (id) {
      this.isEdit = true
      this.category = this.categories.find(item => {
          return item.id == id
      })
    },
    update (category) {
      console.log("Update ", category.name)
      let data = {
        name: category.name
      }
      axios.post('/api/admin/categories/update-category/' + category.id, data)
        .then(res => {
          this.isEdit = false
          this.getCategories()
        }).catch(err => {
          if (err.response.status == 422) {
              this.errors = err.response.data.errors
          }
        })
    },
    remove (id) {
      if(confirm("Do you really want to delete?")){
          axios.delete('/api/admin/categories/delete-category/' + id)
          .then(res => {
              this.getCategories()
          })
          .catch(err => {
            console.log(err)
          })
        }
    }
  },
  mounted () {
    
    this.getCategories()
  }
}
</script>

<style>

</style>
