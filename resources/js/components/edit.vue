<template>
    <div class="container mt-5">
        <h3> {{ news }}</h3>
        <div class="row">
            <div class="col-md-3">
            </div>
            
            <div class="col-md-2 p-4">
                <label for="">Old Price</label>
                <input type="text"  v-model="single_order.price" >
                 <label for="">Address</label>
                <input type="text" v-model="single_order.address"   >
                 <label for="">Customer</label>
                <br>
                <input type="text" v-model="single_order.user_name"  >
                 <label for="">Order</label>
                <br>
                <input type="text" v-model="single_order.order_name" >
                <input type="button" class="btn btn-danger" v-on:click=editorder(single_order)  value="Update" id="">
                 
                

            </div>
    </div>

    </div>
  
</template>

<script>

export default {
    props:{
        single_order: {
            type:Object
        }
    },
    data () {
        return {
            news : ""
            
           
        }
    },
    methods : {
        editorder (pay) {
            axios.put(`api/orders/` + pay.id , { 
               address  : pay.address,
               price : pay.price,
               order_name : pay.order_name,
               user_name : pay.user_name,
               user_id :pay.user_id
            }
                
             )
             .then( res => {
                 this.news = res.data
             }) 

        }
    }
}
</script>

<style>

</style>