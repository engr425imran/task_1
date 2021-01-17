<template>
  <div class="container">
      <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-9">
              <h2>Orders</h2>
              <br>
              <form action="orders.create" method="get">
                  <input type="submit" value="Create" class="btn btn-primary">
              </form>
              <br>
              <h2> {{ delete_order }}</h2>
              <br>
              <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Order Name</th>
                    <th scope="col">Order By</th>
                    <th scope="col">Price</th>
                    <th scope="col">Address</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody >
                     
                         <tr v-for="order in orders" v-bind:key="order.id">
                             <td> {{ order.id }}</td>
                             <td> {{order.order_name}} </td>
                             <td> {{ order.user_name }}</td>
                             <td>  {{ order.price }}</td>
                             <td> {{ order.address }} </td>
                             <td> <input type="button" value="Delete" class="btn btn-danger" v-on:click=delete_order_ftn(order.id)></td>
                             <td> <input type="button" value="Edit" v-on:click=edit(order.id)></td>

                        </tr>
                     
                </tbody>
            </table>
          </div>

      </div>
      <div class="container">
           <div class="row">
            <div class="col-md-4">
                <create></create>
            </div>
            <div class="col-md-4 mt-5">
                <edit :single_order="edit_order"></edit>
            </div>

      </div>

      </div>
     

      
      <br>
        <div>
            <br>
        </div>
  </div>
  
 
</template>

<script>
import create from './create.vue'
import edit from './edit.vue'

    export default {
        data () {
            return {
                orders:{},
                delete_order : "",
                edit_order : {}
                
            }
        },
        components : {
            create,
            edit

        },
        methods : {
            getdata () {
                 axios.get(`api/orders.index` )
                .then(res=>  {
                
                this.orders = res.data
                
                // console.log(this.orders)
            })

            },
            delete_order_ftn(pay) {
                axios.delete(`api/orders.destroy/` + pay )
                .then(res =>  {
                    this.delete_order = res.data
                    // location.reload();
                    
                })

            },
            edit (pay) {
                axios.get(`api/orders/` + pay + `/edit`) 
                    .then(res => {
                        this.edit_order = res.data
                        // this.delete_order= res.data
                        // location.reload();

                    })

                

                


            }
        },
        created() {
            this.getdata()
            
           
        }
        
    }
</script>
