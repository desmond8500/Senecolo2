<template>
    <div class="row">
        <div class="col-md-12">
            <h4>Nouvelles offres</h4>
        </div>
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
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                articles: {},
                server: 'http://senecolomarket.yonkou.info/api',
                local: 'http://localhost:8000/api',
            }
        },
        created(){
            axios.get(local + '/ecommerce_articles')
                .then(response => this.articles = response.data)
                .catch(error => console.log(error)
                );
        },
    }
</script>
