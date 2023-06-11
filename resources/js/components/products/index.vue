<script setup>
    import { onMounted, ref } from "vue";

    let products = ref([])
    
    onMounted(async () => {
        getProducts()
    })

    const getProducts = async () => {
        let response = await axios.get("/api/product")
        products.value = response.data.products
    }

    const ourImage = (img) => {
        return "/upload/"+img
    }
</script>
<template>
    
      
      <div class="products__list table  my-3">
                
          <div class="customers__titlebar dflex justify-content-between align-items-center">
              <div class="customers__titlebar--item">
                  <h1 class="my-1">Products</h1>
              </div>
              <div class="customers__titlebar--item">
                  <router-link to="/product/new" class="btn btn-secondary my-1" >
                      Add Product
                  </router-link>
              </div>
          </div>
  
          <template v-if="products.length > 0">
          <div class="table--heading mt-2 products__list__heading " style="padding-top: 20px;background:#FFF">
              <!-- <p class="table--heading--col1">&#32;</p> -->
              <p class="table--heading--col1">image</p>
              <p class="table--heading--col2">
                  Product
              </p>
              <p class="table--heading--col4">Type</p>
              <p class="table--heading--col3">
                  Inventory
              </p>
              <!-- <p class="table--heading--col5">&#32;</p> -->
              <p class="table--heading--col5">actions</p>
          </div>
  
          <!-- product 1 -->
            <div class="table--items products__list__item" v-for="item in products" :key="item.id">
                <div class="products__list__item--imgWrapper">
                    <img class="products__list__item--img" :src="ourImage(item.photo)"  style="height: 40px;" v-if="item.photo">
                </div>
                <a href="# " class="table--items--col2">
                    {{ item.name }}
                </a>
                <p class="table--items--col2">
                    {{ item.type }}
                </p>
                <p class="table--items--col3">
                    {{ item.quantity }}
                </p>     
                <div>     
                    <button class="btn-icon btn-icon-success" >
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button class="btn-icon btn-icon-danger" >
                        <i class="far fa-trash-alt"></i>
                    </button>
                </div>
            </div>
          </template>
          <template v-else>
            <h1>Produto não localizado</h1>
          </template>
      </div>
</template>