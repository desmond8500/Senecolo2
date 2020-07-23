<template>
    <div class="row">
        <div class="col-md-3 mb-4" v-for="article in articles.data" :key="article.id">
            <div class="card">
                <img class="card-img-top" src="" alt="">
                <!-- <img class="card-img-top" src="{{ article.images }}" alt=""> -->
                <div class="card-body">
                    <h4 class="card-title">{{article.article}}</h4>
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
                local: 'http://localhost:8000',
                image: 'senecolo3/img/models/Artboard-3.png'
            }
        },
        created(){
            axios.get(this.local + '/ecolo4/article_list_api')
            // axios.get(this.server + '/ecommerce_articles')
                .then(response => this.articles = response.data)
                .catch(error => console.log(error)
                );
        },
    }
</script>
