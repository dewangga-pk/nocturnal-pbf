<template>
    <section class="section best-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2 class="title">Best selling products</h2>
                        <a href="/shop" class="btn btn-outline">
                            <i class="fas fa-eye"></i>
                            show more
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-slider slider-arrow">
                        <template v-for="item in items">
                            <div class="product-card card-gape">
                                <div class="product-img"><img :src="item.image" alt="product-1">
                                    <ul class="product-widget">
                                        <li><button><a :href="'/shop/product/'+item.id"><i class="fas fa-eye"></i></a></button></li>
                                    </ul>
                                </div>
                                <div class="product-content">
                                    <div class="product-name">
                                        <h6><a :href="'/shop/product/'+item.id">{{item.item_name}}</a></h6>
                                    </div>
                                    <div class="product-price">
                                        <h6>
                                            Rp. {{item.price}}
                                        </h6>
                                    </div>
                                    <div class="product-btn" style="cursor: pointer"><i class="fas fa-shopping-basket"></i><span>Add to Cart</span></div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        name: "QuickViewProductComponent",
        props:['items']
    }
</script>

<style scoped>

</style>
