<template>
  <div class="container bg-grey">
      <h3>Crete New Order</h3>
      <h2> {{ signal_on }}</h2>
      <hr>
      <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-3">
               <label for="">Order Name</label>
               <input type="text" style="width:240px;" v-model="order">
               <p> {{order }}</p>
               

                <label for="">Order By :</label>
                <input type="text" style="width:240px;" v-model="customer">
                <p> {{customer }}</p>
                <label for="">Price</label>
                <input type="text" style="width:240px;" v-model="price">
                <label for=""> Address </label>
                <input type="text" style="width:240px;" v-model="address">
                <p>&nbsp;</p>
                <input type="button" v-on:click="submit_data" class="btn btn-primary mt-5" value="Register">
                
          </div>

      </div>


  </div>
</template>

<script>
export default {
    data () {
        return  {
            signal_on : "",           
            order : "",
            customer : "",
            price : "",
            address : "",
            user_id : 1
                          
           
        }
    },
    methods : {
        submit_data :function () {
            axios.post (`/api/orders.store`, {
            address: this.address,
            order_name: this.order,
            price: this.order,
            user_name: this.customer,
            user_id: this.user_id
            
            }
             )
             .then(res => {

                 this.signal_on = res.data
                //  location.reload();
                 
             })
             .catch (err=> console.log(err));
        }
    }

}
</script>

<style>

</style>