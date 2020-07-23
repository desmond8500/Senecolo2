<template>
    <div class="row">
        <div class="col-md-3" v-for="article in articles.data" :key="article.id">
            <div class="card">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
         data(){
            return {
                articles: {},
                server: 'http://senecolomarket.yonkou.info/api'
            }
        },
        created(){
            axios.get(server + '/ecommerce_articles')
                .then(response => this.articles = response.data)
                .catch(error => console.log(error)
                );
        },
    }
</script>
